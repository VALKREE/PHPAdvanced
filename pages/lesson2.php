<?PHP
	abstract class Good{
		public $title;
		public $description;
		public $sourcePrice;
		public $discount;

		public function __construct($title, $description, $sourcePrice, $discount)
		{
			$this->title = $title;
			$this->description = $description;
			$this->sourcePrice = (float)($sourcePrice);
			$this->discount = (float)($discount);
		}

		public function renderGood(){ ?>
			<div class="main-catalog">
				<h3 class="main-goodTitle">Наименование: <?= $this->title ?></h3>
				<p class="main-goodDescription">Информация: <?= $this->description ?></p>
				<p class="main-goodCount">Количество: <?= $this->count ?></p>
				<p class="main-goodPrice">Стоимость: <?= ((($this->sourcePrice * 1.20) * $this->count) * $this->discount) ?></p>
				<p>Доход: <?= $this->sourcePrice*1.20 - $this->sourcePrice ?></p>
			</div>
		<?PHP }
	}

	class digitalGood extends Good{
		public $count;

		public function __construct($title, $description, $sourcePrice, $discount, $count)
		{
			$this->count = (int)($count);
			parent:: __construct($title, $description, $sourcePrice, $discount);
		}
	}

	class pieceGood extends Good{
		public $count;

		public function __construct($title, $description, $sourcePrice, $discount, $count)
		{
			$this->count = (int)($count);
			parent:: __construct($title, $description, $sourcePrice, $discount);
		}
	}

	class weightGood extends Good{
		public $count;

		public function __construct($title, $description, $sourcePrice, $discount, $count)
		{
			$this->count = (float)($count);
			parent:: __construct($title, $description, $sourcePrice, $discount);
		}

	}

	$digitalGood = new digitalGood('Товар 1', 'info', 1000, 0.5, 1);
	$pieceGood = new pieceGood('Товар 2', 'info', 1000, 1, 1);
	$weightGood = new weightGood('Товар 3', 'info', 1000, 1, 0.75);
?>

<div class="main-goods">
	<?= 
		$digitalGood->renderGood(); 
		$pieceGood->renderGood();
		$weightGood->renderGood();
	?>
</div>