<?PHP
	include "./db_config.php";	
	$limit = $_GET['limit'];
	if($limit == ""){
		$limit = $_GET['limit']+10;
	}
	$sql = "SELECT * FROM catalog LIMIT $limit";
	$res = mysqli_query($connect,$sql);
?>
<div class="main-catalog">
	<?PHP while($data = mysqli_fetch_assoc($res)){ ?>
		<div class="main-good" id="catalog_<?= $data['catalog_id'] ?>">
			<h3><?= $data['title'] ?></h3>
			<p><?= $data['description'] ?></p>
			<p><?= $data['price'] ?></p>
		</div>
	<?PHP } ?>
</div>
<?PHP if($limit <= 100){ ?>
	<a class="main-catalogMore" href="http://phpadv/index.php?page=lesson4&limit=<?= $limit += 25 ?>">Показать ещё</a>
<?PHP } ?>