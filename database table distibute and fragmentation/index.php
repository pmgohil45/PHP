<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Distribute and Fragmentation</title>
</head>
<body>

<h3>Distribute Database:</h3>
<form method="post" enctype="multipart/form-data" style="margin-left: 3rem;">
    <table>
        <tr>
            <td><label for="txt_file">Choose a Text file:</label></td>
            <td><input type="file" name="txt_file" id="txt_file" accept=".txt"></td>
        </tr>
        <tr>
            <td><label for="total_tables">Enter the number of tables:</label></td>
            <td><input type="number" name="total_tables" id="total_tables" min="1" value="4"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn_dd" value="Proceed"></td>
            <td><input type="submit" name="btn_dd_del" value="Clear All Tables"></td>
        </tr>
    </table>
</form>

<h3>Horizontal Fragmentation:</h3>
<form method="post" enctype="multipart/form-data" style="margin-left: 3rem;">
    <table>
        <tr>
            <td><label for="txt_file">Choose a Text file:</label></td>
            <td><input type="file" name="txt_file" id="txt_file" accept=".txt"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn_hf_ins" value="Insert Record"></td>
            <td><input type="submit" name="btn_hf_horizontal" value="Perform Horizontal Fragmentation"></td>
            <td><input type="submit" name="btn_f_del" value="Delete Record"></td>
        </tr>
    </table>
</form>

<h3>Vertical Fragmentation:</h3>
<form method="post" enctype="multipart/form-data" style="margin-left: 3rem;">
    <table>
        <tr>
            <td><label for="txt_file">Choose a Text file:</label></td>
            <td><input type="file" name="txt_file" id="txt_file" accept=".txt"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn_vf_ins" value="Insert Record"></td>
            <td><input type="submit" name="btn_vf_vertical" value="Perform Vertical Fragmentation"></td>
            <td><input type="submit" name="btn_f_del" value="Delete Record"></td>
        </tr>
    </table>
</form>

<h3>Hybrid Fragmentation:</h3>
<form method="post" enctype="multipart/form-data" style="margin-left: 3rem;">
    <table>
        <tr>
            <td><label for="txt_file">Choose a Text file:</label></td>
            <td><input type="file" name="txt_file" id="txt_file" accept=".txt"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn_HF_ins" value="Insert Record"></td>
            <td><input type="submit" name="btn_HF_hybrid" value="Perform Hybrid Fragmentation"></td>
            <td><input type="submit" name="btn_f_del" value="Delete Record"></td>
        </tr>
    </table>
</form>

<?php
// Database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'presentation';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display data from a table
function displayTableData($conn, $tableName) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    echo "<h2>Table: $tableName</h2>";
    echo "<table border='1'>";
    echo "<tr>";

    // Display table headers
    while ($field = $result->fetch_field()) {
        echo "<th>{$field->name}</th>";
    }

    echo "</tr>";

    // Display table data
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['btn_dd']) && isset($_FILES["txt_file"])){
        /************************** Distribute Database Proceed **************************/
        $txtFile = $_FILES["txt_file"]["tmp_name"];

        $lines = file($txtFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $totalTables = isset($_POST['total_tables']) ? intval($_POST['total_tables']) : 4;
        $rowCount = count($lines);
        $rowsPerTable = ceil($rowCount / $totalTables);

        for ($tableNumber = 1; $tableNumber <= $totalTables; $tableNumber++) {
            
            for ($rowNumber = 1; $rowNumber <= $rowsPerTable; $rowNumber++) {
                $lineIndex = ($tableNumber - 1) * $rowsPerTable + $rowNumber - 1;

                if ($lineIndex < $rowCount) {
                    $rowData = explode("\t", $lines[$lineIndex]); // Assuming tab-separated values

                    // Insert data into your database
                    $sql = "INSERT INTO `t$tableNumber`(`email`) VALUES ('{$rowData[0]}')";
                    $result = $conn->query($sql);

                }
            }
            // Display data from the inserted table
            displayTableData($conn, "t$tableNumber");
        }
    }elseif(isset($_POST['btn_hf_ins']) && isset($_FILES["txt_file"])) {
        /************************** Horizontal Fragmentation Insert Record **************************/
        $file = $_FILES["txt_file"];

        // Check if the file is uploaded successfully
        if ($file["error"] == UPLOAD_ERR_OK) {
            // Read data from the uploaded text file
            $filePath = $file["tmp_name"];
            $fileContent = file($filePath, FILE_IGNORE_NEW_LINES);

            foreach ($fileContent as $line) {
                $rowData = explode(",", $line);

                // Extracting data
                $name = trim($rowData[0]);
                $age = trim($rowData[1]);
                $gender = trim($rowData[2]);
                $subject1 = trim($rowData[3]);
                $subject2 = trim($rowData[4]);
                $subject3 = trim($rowData[5]);

                // Insert data into the database
                $sql = "INSERT INTO `horizontal_fragmentation` (`name`, `age`, `gender`, `subject1`, `subject2`, `subject3`) VALUES ('$name', '$age', '$gender', '$subject1', '$subject2', '$subject3')";
                $result = $conn->query($sql);

                if (!$result) {
                    echo "Error inserting record: " . $conn->error . "<br>";
                }
            }
        } else {
            echo "File upload failed with error code: " . $file["error"];
        }


    }elseif(isset($_POST['btn_hf_horizontal'])){
        /************************** Perform Horizontal Fragmentation **************************/
        // Function to create tables for males and females
        $sqlMale = "CREATE TABLE IF NOT EXISTS `horizontal_fragmentation_male` (
                        `student_id` INT PRIMARY KEY,
                        `name` VARCHAR(255),
                        `age` INT,
                        `gender` VARCHAR(10),
                        `subject1` VARCHAR(10),
                        `subject2` VARCHAR(10),
                        `subject3` VARCHAR(10)
                    )";

        $sqlFemale = "CREATE TABLE IF NOT EXISTS `horizontal_fragmentation_female` (
                        `student_id` INT PRIMARY KEY,
                        `name` VARCHAR(255),
                        `age` INT,
                        `gender` VARCHAR(10),
                        `subject1` VARCHAR(10),
                        `subject2` VARCHAR(10),
                        `subject3` VARCHAR(10)
                    )";

        $conn->query($sqlMale);
        $conn->query($sqlFemale);

        // Move data from the original table to the male and female tables
        $sqlMoveDataMale = "INSERT INTO `horizontal_fragmentation_male` (`student_id`, `name`, `age`, `gender`, `subject1`, `subject2`, `subject3`)
                            SELECT `id`, `name`, `age`, `gender`, `subject1`, `subject2`, `subject3` FROM `horizontal_fragmentation` WHERE `gender` = 'Male'";

        $conn->query($sqlMoveDataMale);

        $sqlMoveDataFemale = "INSERT INTO `horizontal_fragmentation_female` (`student_id`, `name`, `age`, `gender`, `subject1`, `subject2`, `subject3`)
                            SELECT `id`, `name`, `age`, `gender`, `subject1`, `subject2`, `subject3` FROM `horizontal_fragmentation` WHERE `gender` = 'Female'";

        $conn->query($sqlMoveDataFemale);

        // Display data from each table
        displayTableData($conn, 'horizontal_fragmentation_male');
        displayTableData($conn, 'horizontal_fragmentation_female');

    }elseif(isset($_POST['btn_vf_ins']) && isset($_FILES["txt_file"])) {
        /************************** Vertical Fragmentation Insert Record **************************/
        $file = $_FILES["txt_file"];

        // Check if the file is uploaded successfully
        if ($file["error"] == UPLOAD_ERR_OK) {
            // Read data from the uploaded text file
            $filePath = $file["tmp_name"];
            $fileContent = file($filePath, FILE_IGNORE_NEW_LINES);

            // Assuming the data format is name, age, gender
            foreach ($fileContent as $line) {
                $rowData = explode(",", $line);

                // Extracting data
                $name = trim($rowData[0]);
                $age = trim($rowData[1]);
                $gender = trim($rowData[2]);
                $subject1 = trim($rowData[3]);
                $subject2 = trim($rowData[4]);
                $subject3 = trim($rowData[5]);

                // Insert data into the database
                $sql = "INSERT INTO `vertical_fragmentation` (`name`, `age`, `gender`, `subject1`, `subject2`, `subject3`) VALUES ('$name', '$age', '$gender', '$subject1', '$subject2', '$subject3')";
                $result = $conn->query($sql);

                if (!$result) {
                    echo "Error inserting record: " . $conn->error . "<br>";
                }
            }
        } else {
            echo "File upload failed with error code: " . $file["error"];
        }


    }elseif(isset($_POST['btn_vf_vertical'])){
        /************************** Perform Vertical Fragmentation **************************/
        // Create table vertical_fragmentation_marks
        $sqlMarks = "CREATE TABLE IF NOT EXISTS `vertical_fragmentation_students` (
                        `student_id` INT PRIMARY KEY,
                        `name` VARCHAR(255),
                        `age` INT,
                        `gender` VARCHAR(10)
                    )";
        $conn->query($sqlMarks);

        // Create table vertical_fragmentation_student
        $sqlStudent = "CREATE TABLE IF NOT EXISTS `vertical_fragmentation_marks` (
                        `student_id` INT PRIMARY KEY,
                        `subject1` INT,
                        `subject2` INT,
                        `subject3` INT
                    )";
        $conn->query($sqlStudent);

        // Move data from the original table to the new tables
        $sqlMoveDataMarks = "INSERT INTO `vertical_fragmentation_students` (`student_id`, `name`, `age`, `gender`)
                            SELECT `id`, `name`, `age`, `gender` FROM `vertical_fragmentation`";

        $conn->query($sqlMoveDataMarks);

        $sqlMoveDataStudent = "INSERT INTO `vertical_fragmentation_marks` (`student_id`, `subject1`, `subject2`, `subject3`)
                            SELECT `id`, `subject1`, `subject2`, `subject3` FROM `vertical_fragmentation`";

        $conn->query($sqlMoveDataStudent);

        // Display data from each table
        displayTableData($conn, 'vertical_fragmentation_students');
        displayTableData($conn, 'vertical_fragmentation_marks');

    }elseif(isset($_POST['btn_HF_ins']) && isset($_FILES["txt_file"])){
        /************************** Hybrid Fragmentation Insert Record **************************/
        $file = $_FILES["txt_file"];

        // Check if the file is uploaded successfully
        if ($file["error"] == UPLOAD_ERR_OK) {
            // Read data from the uploaded text file
            $filePath = $file["tmp_name"];
            $fileContent = file($filePath, FILE_IGNORE_NEW_LINES);

            // Assuming the data format is name, age, gender
            foreach ($fileContent as $line) {
                $rowData = explode(",", $line);

                // Extracting data
                $name = trim($rowData[0]);
                $age = trim($rowData[1]);
                $gender = trim($rowData[2]);
                $subject1 = trim($rowData[3]);
                $subject2 = trim($rowData[4]);
                $subject3 = trim($rowData[5]);

                // Insert data into the database
                $sql = "INSERT INTO `hybrid_fragmentation` (`name`, `age`, `gender`, `subject1`, `subject2`, `subject3`) VALUES ('$name', '$age', '$gender', '$subject1', '$subject2', '$subject3')";
                $result = $conn->query($sql);

                if (!$result) {
                    echo "Error inserting record: " . $conn->error . "<br>";
                }
            }
        } else {
            echo "File upload failed with error code: " . $file["error"];
        }        

    }elseif(isset($_POST['btn_HF_hybrid'])){
        /************************** Perform Hybrid Fragmentation **************************/
        // Create table hybrid_fragmentation_students
        $sqlStudents = "CREATE TABLE IF NOT EXISTS `hybrid_fragmentation_students` (
            `id` INT PRIMARY KEY,
            `name` VARCHAR(255),
            `age` INT,
            `gender` VARCHAR(10),
            `subject1` INT,
            `subject2` INT,
            `subject3` INT
        )";
        $conn->query($sqlStudents);

        // Create table hybrid_fragmentation_info
        $sqlInfo = "CREATE TABLE IF NOT EXISTS `hybrid_fragmentation_info` (
                `id` INT PRIMARY KEY,
                `name` VARCHAR(255),
                `age` INT,
                `gender` VARCHAR(10)
            )";
        $conn->query($sqlInfo);

        // Create table hybrid_fragmentation_marks
        $sqlMarks = "CREATE TABLE IF NOT EXISTS `hybrid_fragmentation_marks` (
                `id` INT PRIMARY KEY,
                `subject1` INT,
                `subject2` INT,
                `subject3` INT
            )";
        $conn->query($sqlMarks);

        // Determine the total number of records in the hybrid_fragmentation table
        $sqlCount = "SELECT COUNT(*) as total FROM hybrid_fragmentation";
        $resultCount = $conn->query($sqlCount);
        $rowCount = $resultCount->fetch_assoc()['total'];

        // Calculate the number of records for each part
        $firstPartSize = ceil($rowCount / 2);
        $secondPartSize = $rowCount - $firstPartSize;

        // Move data to hybrid_fragmentation_students
        $sqlMoveDataStudents = "INSERT INTO `hybrid_fragmentation_students` 
                                SELECT * FROM `hybrid_fragmentation` LIMIT $firstPartSize";
        $conn->query($sqlMoveDataStudents);

        // Move the remaining data to hybrid_fragmentation_info and hybrid_fragmentation_marks
        $sqlMoveDataInfo = "INSERT INTO `hybrid_fragmentation_info` 
                            SELECT `id`, `name`, `age`, `gender` 
                            FROM `hybrid_fragmentation` LIMIT $firstPartSize, $secondPartSize";
        $conn->query($sqlMoveDataInfo);

        $sqlMoveDataMarks = "INSERT INTO `hybrid_fragmentation_marks` 
                            SELECT `id`, `subject1`, `subject2`, `subject3` 
                            FROM `hybrid_fragmentation` LIMIT $firstPartSize, $secondPartSize";
        $conn->query($sqlMoveDataMarks);

        
        // Display data from each table
        displayTableData($conn, 'hybrid_fragmentation_students');
        displayTableData($conn, 'hybrid_fragmentation_info');
        displayTableData($conn, 'hybrid_fragmentation_marks');

    }elseif(isset($_POST['btn_f_del'])){
        /************************** Delete Horizontal Tables Data or Tables **************************/
        $sql = "DELETE FROM horizontal_fragmentation";
        $conn->query($sql);

        $sqlMale = "DROP TABLE IF EXISTS `horizontal_fragmentation_male`";
        $sqlFemale = "DROP TABLE IF EXISTS `horizontal_fragmentation_female`";
        $conn->query($sqlMale);
        $conn->query($sqlFemale);

        /************************** Delete Vertical Tables Data or Tables **************************/
        $sql = "DELETE FROM vertical_fragmentation";
        $conn->query($sql);

        $sqlStudents = "DROP TABLE IF EXISTS `vertical_fragmentation_students`";
        $sqlMarks = "DROP TABLE IF EXISTS `vertical_fragmentation_marks`";
        $conn->query($sqlStudents);
        $conn->query($sqlMarks);

        /************************** Delete Hybrid Tables Data or Tables **************************/
        $sql = "DELETE FROM hybrid_fragmentation";
        $conn->query($sql);

        $sqlInfo = "DROP TABLE IF EXISTS `hybrid_fragmentation_info`";
        $sqlMarks = "DROP TABLE IF EXISTS `hybrid_fragmentation_marks`";
        $sqlStudents = "DROP TABLE IF EXISTS `hybrid_fragmentation_students`";
        $conn->query($sqlInfo);
        $conn->query($sqlMarks);
        $conn->query($sqlStudents);
        
    }elseif(isset($_POST['btn_dd_del'])){
        /************************** Delete Distributed Database Tables Data **************************/
        // Get a list of all tables in the database
        $result = $conn->query("SHOW TABLES");
        $tables = [];
        while ($row = $result->fetch_row()) {
            $tables[] = $row[0];
        }

        // Delete the record from each table
        foreach ($tables as $table) {
            $sql = "DELETE FROM $table";
            $conn->query($sql);
        }
    }

}
$conn->close(); // Close the database connection
?>

</body>
</html>