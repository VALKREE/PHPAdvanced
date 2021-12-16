<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="goods" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
		<?PHP
			class Good {
				private $title;
				private $description;
				private $price;

				function __construct($title, $description, $price){
					$this->title = $title;
					$this->description = $description;
					$this->price = $price;
				}
				function goodFunc(){ ?>
					<div class="good" style="width: 300px;border: 1px solid #000; display: flex; flex-direction: column; justify-content: center; align-items: center;">
						<h3>Наименование: <?= $this->title ?></h3>
						<p>Описание: <?= $this->description ?></p>
						<p>Цена: <?= $this->price ?> &#8381;</p>
					</div>
				<?PHP }
			}

			class GoodCustom extends Good{
				private $color;

				function __construct($title, $description, $price, $color){
					$this->title = $title;
					$this->description = $description;
					$this->price = $price;
					$this->color = $color;
				}
				function goodFunc(){ ?>
					<div class="good" style="width: 300px;border: 1px solid #000; display: flex; flex-direction: column; justify-content: center; align-items: center;">
						<h3>Наименование: <?= $this->title ?></h3>
						<p>Описание: <?= $this->description ?></p>
						<p>Цена: <?= $this->price ?> &#8381;</p>
						<p>Цвет: <?= $this->color ?></p>
					</div>
				<?PHP }
			}

			$good1 = new Good("Title 1", "Info", 1000);
			$good2 = new Good("Title 2", "Info", 2000);
			$good3 = new Good("Title 3", "Info", 3000);
			$good4 = new GoodCustom("Title 4", "Info", 4000, "Red");
			$goods = [$good1, $good2, $good3, $good4];
			foreach ($goods as $good) {
				$good->goodFunc();
			}
		?>
	</div>
	<hr>
	<?PHP 
		/*
		
		class A {
		    public function foo() {
		        static $x = 0;
		        echo ++$x."<br>";
		    }
		}
		$a1 = new A();
		$a2 = new A();
		*/
			/*
				Так как обе переменных берут данные из класса А, то переменная Х берется так же из класса,
				когда функция вызывается впервые, то х=0 + 1, далее переменна а2 берет этот же Х=(0+1) и прибавляет 1, и так далее.
		 	*/
		/*
		$a1->foo(); // 0+1
		$a2->foo(); // 1+1
		$a1->foo(); // 2+1
		$a2->foo(); // 3+1
		*/
		// 1234
		//
		/* 
		class A {
		    public function foo() {
		        static $x = 0;
		        echo ++$x."<br>";
		    }
		}
		// класс B насладует функцию класса A, но не наследует переменную Х, она у класса B своя.
		class B extends A {
		}
		$a1 = new A();
		$b1 = new B();
		$a1->foo(); // a = 0+1
		$b1->foo(); // b = 0+1
		$a1->foo(); // a = 1+1
		$b1->foo(); // b = 1+1
		*/
		// 1122
	?>
</body>
</html>