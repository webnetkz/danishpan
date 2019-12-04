<?php
    //error_reporting(0);
    session_start();
    require_once 'app/pdo/connect.php';
    if(empty($_SESSION['active'])) {
        header('Location: admin.php');
    }

    require_once 'app/pdo/connect.php';

     // Добавление участника на главную страницу
    if( !empty($_POST['goPeople']) ) {

      $name = $_POST['name'];
      $old = $_POST['old'];

      $fileName = $_FILES['go']['name'];
      $fileTmp = $_FILES['go']['tmp_name'];
         
       // Директория для размещения файла
      $destiation_dir = 'public/img/people/'.$fileName;
      move_uploaded_file($fileTmp, $destiation_dir );

      $sqlApCat = 'INSERT INTO `people` (`src`, `old`, `name`) VALUE("'.$destiation_dir.'", "'.$old.'", "'.$name.'");';
      $resApCat = $pdo->query($sqlApCat);

    }

     // Добавление новой категории
    if($_POST['goPost']) {

      $fileNameg = $_FILES['gog']['name'];
      $fileTmpg = $_FILES['gog']['tmp_name'];
   
        // Директория для размещения файла
      $destiation_dirg = 'public/img/post/'.$fileNameg;
      move_uploaded_file($fileTmpg, $destiation_dirg );
            
            $kaz = $_POST['kaz'];
            $ru = $_POST['ru'];
            $text = $_POST['text'];
            $date = $_POST['date'];
            $date1 = $_POST['date1'];
            $old = $_POST['old'];

            $sqlAp = 'INSERT INTO `post` (`kaz`, `ru`, `text`, `date`, `date1`, `src`, `old`) VALUE("'.$kaz.'", "'.$ru.'", "'.$text.'", "'.$date.'", "'.$date1.'", "'.$destiation_dirg.'", "'.$old.'");';
            $sqlAp2 = 'INSERT INTO `archive` (`kaz`, `ru`, `text`, `date`, `date1`, `src`, `old`) VALUE("'.$kaz.'", "'.$ru.'", "'.$text.'", "'.$date.'", "'.$date1.'", "'.$destiation_dirg.'", "'.$old.'");';

            $pdo->query($sqlAp);
            $pdo->query($sqlAp2);

         // Получение id последнего поста
        $s = 'SELECT * FROM `post`';
        $r = $pdo->query($s);
        $r = $r->fetchAll(PDO::FETCH_ASSOC);
        foreach($r as $k => $v) {
          $vv = $v['id'];
        }

         // Файл шаблон для вставки в создаваемый файл
        $com = file_get_contents('postg.php');

       // Создание файла поста
      $file = 'post/'.$vv++.".php";

      if(!file_exists($file)) {
        $fp = fopen($file, "w"); // ("r" - считывать "w" - создавать "a" - добовлять к тексту)
        fwrite($fp, $com);

        fclose($fp);
      }

    }

    if($_POST['goWork']) {

      $fileName = $_FILES['gogg']['name'];
      $fileTmp = $_FILES['gogg']['tmp_name'];
   
       // Директория для размещения файла
       $destiation_dir88 = 'public/img/work/'.$fileName;
       // Перемещаем файл в желаемую директорию
       move_uploaded_file($fileTmp, $destiation_dir88 );

  if(!empty($_POST['nameW']) && (!empty($_POST['nameT'])) && (!empty($_POST['froms'])) && (!empty($_POST['cat']))) {
      $nameW = $_POST['nameW'];
      $nameT = $_POST['nameT'];
      $froms = $_POST['froms'];
      $cats = $_POST['cat'];


      $sqlApCatgg = 'INSERT INTO `work` (`froms`, `ticher`, `name`, `src`, `cat`) VALUE("'.$froms.'", "'.$nameW.'", "'.$nameT.'", "'.$destiation_dir88.'", "'.$cats.'");';
      $resApCatgg = $pdo->query($sqlApCatgg);
  }

  }
     // Перенос поста в архив
    if(!empty($_POST['arc'])) {
        $arc = $_POST['arc'];

        $sss = 'DELETE FROM `post` WHERE `kaz` = "'.$arc.'"';
        $rrr = $pdo->query($sss);

    }

      // Удаление поста и всего содержимого
    if(!empty($_POST['del'])) {
      $del = $_POST['del'];
      
      $allDelSql = 'SELECT * FROM `post` WHERE `kaz` = "'.$del.'"';
      $resDelAll = $pdo->query($allDelSql);
      $resDelAll = $resDelAll->fetchAll(PDO::FETCH_ASSOC);

      unlink('post/'.$resDelAll[0]['id'].'.php');
      unlink($resDelAll[0]['src']);

      $delSql = 'DELETE FROM `post` WHERE `kaz` = "'.$del.'"';
      $delSql2 = 'DELETE FROM `archive` WHERE `kaz` = "'.$del.'"';
      $pdo->query($delSql);
      $pdo->query($delSql2);
      
  }

        // Удаление работы
        if(!empty($_POST['delW'])) {
          $delW = $_POST['delW'];
          
          $allDelSql1 = 'SELECT * FROM `work` WHERE `froms` = "'.$delW.'"';
          $resDelAll1 = $pdo->query($allDelSql1);
          $resDelAll1 = $resDelAll1->fetchAll(PDO::FETCH_ASSOC);
    
          unlink($resDelAll1[0]['src']);
    
          $delSqlW = 'DELETE FROM `work` WHERE `froms` = "'.$delW.'"';

          $pdo->query($delSqlW);
          
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
	<link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>


  <form method="post" action="panel.php" style="margin: 2em;" enctype="multipart/form-data">
    <h1 style="color: white;">Добавить участника</h1>
    <br>
    <p>
      <input type="text" name="name" placeholder="Имя">
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
      Начало: <input type="text"  name="date"  placeholder="Дата начала"> - до: <input type="text" name="date1" placeholder="Дата завершения">
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
      <input type="text" name="nameW" placeholder="Имя руководителя">
    </p>
    <br>
    <p>
      <input type="text" name="nameT" placeholder="Имя участника">
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
    <p style="color: white;">Добавить в архив конкурс</p>
    <br>
    <?php
      $ss = "SELECT `kaz` FROM `post`";
      $rr = $pdo->query($ss);
      $rr = $rr->fetchAll(PDO::FETCH_ASSOC);

      foreach($rr as $k => $v) {
          echo '<input type="submit" value="'.$v['kaz'].'" name="arc"><br><br>';
      }
    ?>
      <hr>
    <br>
    <p style="color: white;">Удалить конкурс</p>
    <br>
    <?php
      $ss = "SELECT `kaz` FROM `post`";
      $rr = $pdo->query($ss);
      $rr = $rr->fetchAll(PDO::FETCH_ASSOC);

      foreach($rr as $k => $v) {
          echo '<input type="submit" value="'.$v['kaz'].'" name="del"><br><br>';
      }
    ?>
          <hr>
    <br>
    <p style="color: white;">Удалить работу</p>
    <br>
    <?php
      $ss = "SELECT * FROM `work`";
      $rr = $pdo->query($ss);
      $rr = $rr->fetchAll(PDO::FETCH_ASSOC);

      foreach($rr as $k => $v) {
          echo '<input type="submit" value="'.$v['froms'].'" name="delW"><br><br>';
      }
    ?>

    

  </form>
</body>
</html>