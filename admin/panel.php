<?php
    error_reporting(0);
    session_start();
    if(empty($_SESSION['active'])) {
        header('Location: admin.php');
    }

    require_once '../app/pdo/connect.php';

    if($_POST['goPeople']) {

        if((!empty($_POST['name']) && (!empty($_POST['old'])) && (!empty($_FILES['file_people'])))) {
            $name = $_POST['name'];
            $old = $_POST['old'];
                // Проверяем, загрузил ли пользователь файл
                $fileName = $_FILES['file_people']['name'];
                $fileTmp = $_FILES['file_people']['tmp_name'];
            
                // Директория для размещения файла
                $destiation_dir = 'public/img/people/'.$fileName;
                // Перемещаем файл в желаемую директорию
                move_uploaded_file($fileTmp, $destiation_dir );
            $sqlApCat = 'INSERT INTO `people` (`name`, `old`, `src`) VALUE("'.$name.'", "'.$old.'", "'.$destiation_dir.'");';
            $resApCat = $pdo->query($sqlApCat);
        }

    }

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Danishpan Admin</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>


  <form method="post" action="" style="margin: 2em;" enctype="multipart/form-data">
    <h1 style="color: white;">Добавить участника</h1>
    <br>
    <p>
      <input type="text" name="name" id="login" placeholder="Имя">
    </p>
        <br>
    <p>
      <input type="text" name="old" id="password" placeholder="Возраст">
    </p>
    <br>
    <p>
      <input type="file" style="color: white;" name="file_people" id="password" placeholder="Изображение">
    </p>
    <br>
    <p>
      <input type="submit" name="goPeople" id="password" value="Добавить">
    </p>
    <hr>


  </form>
</body>
</html>