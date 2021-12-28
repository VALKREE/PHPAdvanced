<?PHP
	switch($_GET['page']){
		case 'lesson1':
			include "pages/lesson1.php";
			break;
		case 'lesson2':
			include "pages/lesson2.php";
			break;
		case 'lesson3':
			include "pages/lesson3.php";
			break;
		case 'lesson3_fullImage':
			include "pages/lesson3_fullImage.php";
			break;
		case 'lesson4':
			include "pages/lesson4.php";
			break;
		case 'lesson5':
			include "pages/lesson5.php";
			break;
		case 'lesson6':
			include "pages/lesson6.php";
			break;
		case 'lesson7':
			include "pages/lesson7.php";
			break;
		case 'lesson8':
			include "pages/lesson8.php";
			break;
		default:
			include "pages/main.php";
	}
?>