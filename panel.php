<?php
    //error_reporting(0);
    session_start();
    require_once 'app/pdo/connect.php';
    if(empty($_SESSION['active'])) {
        header('Location: admin.php');
    }

    require_once 'app/pdo/connect.php';

    if($_POST['goPeople']) {

            $fileName = $_FILES['go']['name'];
            $fileTmp = $_FILES['go']['tmp_name'];
         
             // Директория для размещения файла
             $destiation_dir = $fileName;
             // Перемещаем файл в желаемую директорию
             move_uploaded_file($fileTmp, $destiation_dir );

        if(!empty($_POST['name']) && (!empty($_POST['old']))) {
            $name = $_POST['name'];
            $old = $_POST['old'];


            $sqlApCat = 'INSERT INTO `people` (`name`, `old`, `src`) VALUE("'.$name.'", "'.$old.'", "'.$fileName.'");';
            $resApCat = $pdo->query($sqlApCat);
        }

    }
    if($_POST['goPost']) {

      $fileNameg = $_FILES['gog']['name'];
      $fileTmpg = $_FILES['gog']['tmp_name'];
   
       // Директория для размещения файла
       $destiation_dirg = $fileNameg;
       // Перемещаем файл в желаемую директорию
       move_uploaded_file($fileTmpg, $destiation_dirg );

        if((!empty($_POST['kaz']) && (!empty($_POST['ru'])) && (!empty($_POST['old'])) && (!empty($_POST['text'])) && (!empty($_POST['date'])) && (!empty($_POST['date1'])))) {
            $kaz = $_POST['kaz'];
            $ru = $_POST['ru'];
            $text = $_POST['text'];
            $date = $_POST['date'];
            $date1 = $_POST['date1'];
            $old = $_POST['old'];

            $_SESSION['kaz'] = $kaz;
            $_SESSION['ru'] = $ru;
            $_SESSION['date'] = $date;
            $_SESSION['date1'] = $date1;
            $_SESSION['old'] = $old;

            $sqlAp = 'INSERT INTO `post` (`kaz`, `ru`, `text`, `date`, `date1`, `src`, `old`) VALUE("'.$kaz.'", "'.$ru.'", "'.$text.'", "'.$date.'", "'.$date1.'", "'.$fileNameg.'", "'.$old.'");';
            $sqlAp2 = 'INSERT INTO `archive` (`kaz`, `ru`, `text`, `date`, `date1`, `src`, `old`) VALUE("'.$kaz.'", "'.$ru.'", "'.$text.'", "'.$date.'", "'.$date1.'", "'.$fileNameg.'", "'.$old.'");';

            $pdo->query($sqlAp);
            $pdo->query($sqlAp2);

        }

        $s = 'SELECT * FROM `post`';
        $r = $pdo->query($s);
        $r = $r->fetchAll(PDO::FETCH_ASSOC);
        foreach($r as $k => $v) {
          $vv = $v['id'];
        }


        $com = file_get_contents('postg.php');

    //путь и сам файл
    $file = $vv++.".php";
    //если файла нету... тогда
    if (!file_exists($file)) {
        $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту),мы создаем файл
        fwrite($fp, $com);
        fclose($fp);
      }

    }

    if($_POST['goWork']) {

      $fileName = $_FILES['gogg']['name'];
      $fileTmp = $_FILES['gogg']['tmp_name'];
   
       // Директория для размещения файла
       $destiation_dir = $fileName;
       // Перемещаем файл в желаемую директорию
       move_uploaded_file($fileTmp, $destiation_dir );

  if(!empty($_POST['nameW']) && (!empty($_POST['nameT'])) && (!empty($_POST['froms'])) && (!empty($_POST['cat']))) {
      $nameW = $_POST['nameW'];
      $nameT = $_POST['nameT'];
      $froms = $_POST['froms'];
      $cats = $_POST['cat'];


      $sqlApCatgg = 'INSERT INTO `work` (`froms`, `ticher`, `name`, `src`, `cat`) VALUE("'.$froms.'", "'.$nameW.'", "'.$nameT.'", "'.$fileName.'", "'.$cats.'");';
      $resApCatgg = $pdo->query($sqlApCatgg);
  }

  }

    if(!empty($_POST['arc'])) {
        $arc = $_POST['arc'];

        $sss = 'DELETE FROM `post` WHERE `kaz` = "'.$arc.'"';
        $rrr = $pdo->query($sss);

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
	<link rel="stylesheet" href="admin/css/style.css">
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>


  <form method="post" action="panel.php" style="margin: 2em;" enctype="multipart/form-data">
    <h1 style="color: white;">Добавить участника</h1>
    <br>
    <p>
      <input type="text" name="name" id="login" placeholder="Имя">
    </p>
        <br>
    <p>
      <input type="text" name="old" placeholder="Возраст">
    </p>
    <br>
    <p>
      <input type="file" style="color: white;" name="go">
    </p>
    <br>
    <p>
      <input type="submit" name="goPeople" value="Добавить">
    </p>
    <br>
    <hr>
    <br>
    <h1 style="color: white;">Добавить конкурс</h1>
    <br>
    <p>
      <input type="text" name="kaz" id="login" placeholder="Заголовок Каз">
    </p>
        <br>
    <p>
      <input type="text" name="ru" placeholder="Заголовок Ру">
    </p>
    <br>
    <p>
      <input type="text" name="text" placeholder="Описание">
    </p>
    <br>
    <p>
      <input type="text" name="old" placeholder="Возраст участия">
    </p>
    <br>
    <p style="color: white;">
      Начало: <input type="date" name="date" placeholder="Дата"> - до: <input type="date" name="date1" id="password" placeholder="Дата">
    </p>
    <br>
    <p>
      <input type="file" style="color: white;" name="gog" >
    </p>
    <br>
    <p>
      <input type="submit" name="goPost" value="Добавить">
    </p>
    <br>
    <hr>
    <br>
    <p style="color: white;">Добавить работу участника</p>
    <br>
        <input list="my" placeholder="Категория" name="cat">
        <datalist id="my">
          <?php
            $lls = 'SELECT `kaz`,`ru` FROM post';
            $llb = $pdo->query($lls);
            $llb = $llb->fetchAll(PDO::FETCH_ASSOC);

            foreach($llb as $k => $v) {
              echo '<option>';
                echo $v['kaz'];
              echo '</option>';
            }
          ?>
        </datalist>
        <br>
    <br>
    <p>
      <input type="text" name="froms" placeholder="Описание">
    </p>
    <br>
    <p>
      <input type="text" name="nameW" placeholder="Имя участника">
    </p>
    <br>
    <p>
      <input type="text" name="nameT" placeholder="Имя учителя">
    </p>
    <br>
    <p>
      <input type="file" style="color: white;" name="gogg" >
    </p>
    <br>
    <p>
      <input type="submit" name="goWork" value="Добавить">
    </p>
    <br>
    <hr>
    <br>
    <p style="color: white;">Добавить в архив</p>
    <br>
    <?php
      $ss = "SELECT `kaz` FROM `post`";
      $rr = $pdo->query($ss);
      $rr = $rr->fetchAll(PDO::FETCH_ASSOC);

      foreach($rr as $k => $v) {
          echo '<input type="submit" value="'.$v['kaz'].'" name="arc"><br><br>';
      }
    ?>

  </form>
</body>
</html>