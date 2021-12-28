<?PHP
	include "./db_config.php";
	$sql = "SELECT * FROM gallery";
	$res = mysqli_query($connect,$sql);
	while($data = mysqli_fetch_assoc($res)){ ?>
		<a href="index.php?page=lesson3_fullImage&imageid=<?= $data['image_id'] ?>" class="main-gallery_item" id="image_<?= $data['image_id'] ?>">
			<img class="main-gallery_image" src="../images/gallery/<?= $data['path'] ?>" alt="<?= $data['title'] ?>">
			<p class="main-gallery_description"><?= $data['description'] ?></p>
		</a>
	<?PHP }
?>