<?PHP
	include "./db_config.php";
	$sql = "
		SELECT * FROM gallery 
		WHERE image_id = '{$_GET['imageid']}'
	";
	$res = mysqli_query($connect,$sql);
?>
<div class="main-gallery">
	<?PHP
		while($data = mysqli_fetch_assoc($res)){ 
		?>
			<a href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
			<div class="main-gallery_item" id="image_<?= $data['image_id'] ?>">
				<img class="main-gallery_image" src="../images/gallery/<?= $data['path'] ?>" alt="<?= $data['title'] ?>">
				<p class="main-gallery_description"><?= $data['description'] ?></p>
			</div>
		<?PHP 
			}
	?>
</div>