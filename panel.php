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
            $content = $_POST['content'];

            $sqlAp = 'INSERT INTO `post` (`kaz`, `ru`, `text`, `date`, `date1`, `src`, `old`, `content`) VALUE("'.$kaz.'", "'.$ru.'", "'.$text.'", "'.$date.'", "'.$date1.'", "'.$destiation_dirg.'", "'.$old.'", "'.$content.'");';
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
  <style>
    pre {
      font-family: sans-serif;
    }
  </style>
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>


  <form method="post" action="panel.php" style="margin: 2em;" enctype="multipart/form-data">

    <br>
    <hr>
      <br>
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
        <textarea name="content" id="" cols="100" rows="20">
<pre>
«Жануарлар әлемінде» атты шығармашылық қашықтық байқауына (сурет,
өлең, шығарма, аппликация, қолдан жасалған бұйым) жұмыстары
қабылданады. Қолөнер жұмыстарын әр түрлі техникада және материалдардан 
жасауға болады.

Қатысушылар категориясы: 3-17 жасқа дейін

Өткізу мерзімі:  10.11.2019 ж. бастап 10.01.2020 ж. Дейін

Қатысушылардың жұмыстарын қабылдау: күнделікті

Байқау нәтижесі: конкурстық жұмыс пен түбіртек көшірмесің жібергеннен
бастап есептегенде 5 кун аралығында шығады.

Қатысу ережесі:
Байқауға қатысу үшін қатысушы өз жұмысын, жарнапұл түбіртегінің көшірмесін 
және қатысушы өтінімін толтырып info@danishpan.kz поштасына жіберу қажет. 
Түбіртек көшірмесі тек фотоға түскен түрінде қабылданады. Әр конкурстық 
жұмысқа бөлек  жарнапұл төленуі тиіс. Түбіртекті фотоға түсірмес бұрын, әр 
түбіртектің бос жеріне қатысушының аты-жөнің міндетті түрде қаламмен жазу 
керек. Сонымен қатар төлемді бірден барлық қатысушылар үшін жасауға 
болады, сонда барлық қатысушылар үшін бір ғана комиссия құны алынады. 
Қатысушы өтінімін Microsoft Word форматында жіберу керек. Фотоға түсүрудің 
немесе сканерлеудің қажеті жоқ. Қатысушы өтінімін біздің электронды 
info@danishpan.kz почтасына жазып ала аласыз.

Байқау жұмыстарына қойылатын талаптар:
Жазба жұмыстар: Microsoft Word форматында қабылданады, қаріп көлемі 14. 
Шығарманың минималды көлемі 1 бет, өлең шумақтардың минималды саны -1.
Шығармашылық жұмыстар (қолөнер бұйымдары т.б) Jpeg, jpg форматында 
қабылданады. Қолөнер жұмыстарын фотоға түсіріп немесе сканерден өткізіп 
жіберуіңіз керек. Фото немесе скан-копияның сапасы жоғары және анық көрінуі 
тиіс. Жіберетің файлға қатысушының аты-жөні міндетті турде жазылуы тиіс. 
Фотоға тек жұмыстың өзін ғана түсіру керек. Бөгде заттар обьектіге түсіп 
қалмауы керек. Фотоның көлемі өте кішкентай болмау керек, себебі жұмысты 
анықтап көруге кедергі келтіреді.

Байқауға қатысу жарнасы - 500 теңге әр конкурстық жұмыс үшін (банк 
комиссиясын Қатысушы төлейді)

Төлем жолдары:
Qiwi кошелек шотын толтыру (кошелек номері: 8705 588 12 10)
Beeline мобильдік операторының теңгеріміне бірлік салу (номер: 8705 588 12 10)
Жарнаны АҚ «Қазахстан Халық Банкі» карт-шотына аудару: 
ЖСК: KZ936010002109169562
Жарнаны АҚ «Қазахстан Халық Банкі» картасына аудару: ЖСН: 911009451637, 
карта номері: 4277  0455  0326  7281
БИН/ЖСН: 911009451637
БСК: HSBKKZKX
Кбе: 19
ТМК: 859
Жарнаны «Kaspi Gold» картасына аудару:
ЖСН: 911009451637, карта номері: 5169  4931  3759  2310
Төлем мақсаты: байқауға қатысу үшін

Байқау қорытындысы бойынша жеңімпаздар Дипломдармен, қатысушылар қатысушы 
Сертификатымен марапатталады. Сонымен қатар барлық қатысушылардың жетекшілеріне 
Диплом табысталады. Жетекшіге диплом тегін беріледі. Дипломдар электронды түрде, 
қатысушылардың электрондық почтасына жіберіледі. Әр қатысушының жұмысы жеке 
дара бағаланады.
Жұмыс уақыты: 10:00 – 19:00. Демалыс күндері: сенбі, жексенбі
Байланыс телефоны: 8705 588 12 10
Эл. пошта: info@danishpan.kz      
Барлығыңызға сәттілік және шығармашылық жетістіктер тілейміз!!!

На дистанционный творческий конкурс «В мире животных» принимаются работы такие 
как (рисунок, стихотворение, сочинение, аппликация, поделка) Творческие работы 
может быть изготовлена из самых различных материалов.

Категория участников: 3-17 лет  
Сроки проведения Конкурса: с 10.11.2019 г. по 10.01.2020 г. 
Прием работ участников: ежедневно
Итоги конкурса: Итоги по конкурсной работе, подводятся в течение 5 дней, 
с момента получения работы и квитанции. Дипломы в электронном виде высылаются 
на электронную почту участников в день подведения итогов. Каждая работа оценивается 
индивидуально экспертным жюри.

Правила участия
Для участия в конкурсе участник должен отправить свою работу, заполненную заявку
участника и копию квитанции об оплате в одном письме на электронный адрес 
info@danishpan.kz Оргвзнос оплачивается за каждую конкурсную работу. Оплату 
оргвзноса можно произвести одним платежом за несколько участников, либо за 
каждого отдельно. Если оплачиваете отдельно за каждого участника, то перед тем 
как фотографировать чек, на нём обязательно нужно дописать ручкой на свободном 
месте фамилию и имя участника.
Копия квитанции не должна быть в виде напечатанного текста, она может быть 
только сфотографирована.
Заявку участника не нужно фотографировать, она должна быть просто таблицей с 
текстом в формате Microsoft Word. По поводу формы заявки участника пишите на 
почту info@danishpan.kz
Требования к работам
Образцы изобразительного творчества (поделки, рисунки и т.д.) принимаются на 
конкурс в следующих форматах: jpg,jpeg.
Текстовые файлы принимаются в формате Microsoft Word, размер шрифта 14, минимальный 
обьем сочинении 1 стр, минимальное количество куплетов в стихотворении -1.
Поделки, образцы изобразительного творчества нужно сфотографировать и отправить на 
конкурс фотографию, фото или скан-копии должны быть хорошего качества (не размытые, 
чёткие). На фотографиях не должно быть детей (н-р, ребёнок держит рисунок в руках), 
цифр и др. надписей! Наличие посторонних надписей, посторонних предметов на заднем 
фоне фотографии, не даёт возможности рассмотреть саму работу, поэтому оценка за 
работу может быть снижена. Фотографии работ не должен быть очень маленького 
размера, т.к. фотографию невозможно рассмотреть.

Способы оплаты
Оргвзнос за участия 500 тенге, за каждую конкурсную работу
(Участник оплачивает комиссию Банка)

Пополнение счета Qiwi кошелька (номер кошелька: 8705 588 12 10)

Пополнение баланса номера мобильного оператора Beeline (номер: 8705 588 12 10)

Перевод средств на карт-счет АО «Народный Банк Казахстана» 
ИИК: KZ936010002109169562
Перевод средств на карту АО «Народный Банк Казахстана» 
ИИН: 911009451637, номер карты: 4277  0455  0326  7281
БИН/ИИН: 911009451637
БИК: HSBKKZKX
Кбе: 19
КНП: 859
Перевод средств на карту «Kaspi Gold»
ИИН: 911009451637, номер карты: 5169  4931  3759  2310   
Назначение платежа: за участие в конкурсе
	
По итогам конкурса все участники получают Сертификат участника, 
победители Диплом победителя, руководители Диплом за подготовку участников. 
Диплом руководителю бесплатно!
Время работы: 10:00 – 19:00. Выходные дни: суббота, воскресенье
Телефон для справок: 8705 588 12 10
Эл. почта: info@danishpan.kz
Желаем всем удачи и творческих успехов!!!


</pre>
        </textarea>
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
    <br>
    <hr>

    

  </form>
</body>
</html>