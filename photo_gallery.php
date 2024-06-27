<?php
// Array of images
/*$imgArr = [
    "images/1.jpg",
    "images/2.jpg",
    "images/3.jpg",
    "images/4.jpg",
    "images/5.jpg",
    "images/6.jpg",
    "images/7.jpg",
    "images/8.jpg",
    "images/9.jpg",
    "images/10.jpg",
    "images/11.jpg",
	"images/12.jpg"	
];*/
$imgArr = file("images/img.txt");
var_dump($imgArr);
//print_r($imgArr);
$count = 0;
?>
<h1>Photot Gallery</h1>
<table>
<?php for ($i = 1; $i <= 3; $i++) { ?>
	<tr>
		<?php for ($j = 1; $j <= 4; $j++) { ?>
			<td>
				<a href="<?php echo $imgArr[$count]; ?>">
					<img src="<?php echo $imgArr[$count]; ?>" height="200px" width="100px" />
				</a>
			</td>
			<?php $count++; ?>
		<?php } ?>
	</tr>
<?php } ?>
</table>

<br><br><br><br>

<table>
<?php for($i=1;$i<=3;$i++){ ?>
	<tr><?php for($j=1;$j<=5;$j++){ ?>
		<td>
			<a href="images/1.jpg">
				<img src="images/2.jpg" height="200px" width="100px" />
			</a>
		<td>
	<?php } ?></tr>
<?php } ?>

</table>