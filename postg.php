<?php
    session_start();

    require_once 'app/pdo/connect.php';

    $page = $_SERVER['REQUEST_URI'];
    $page = substr($page, 1, 1);


    $lol1 = 'SELECT * FROM `post` WHERE id = "'.$page.'"';
    $rlol1 = $pdo->query($lol1);
    $rlol1 = $rlol1->fetchAll(PDO::FETCH_ASSOC);

    foreach($rlol1 as $k => $v) {

        $kaz = $v['kaz'];
        $ru = $v['ru'];
        $date = $v['date'];
        $date1 = $v['date1'];
        $old = $v['old'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/mheader.css">
    <link rel="stylesheet" href="public/css/post.css">
    <link rel="stylesheet" href="public/css/headerPs.css">
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <style>@media only screen and (max-width: 500px) {
  
  .cartItem2 {
      width: 94%;
  }
  .allText {
      width: 94%;
  }
  
  .sign {
    display: none;
  }

  header {
    background-image: url('public/img/header.png');
    background-size: cover;
    height: 230px;
    padding-left: 2%;
    padding-right: 2%;
    color: rgb(255, 255, 255);
    text-align: center;
}
header > p {
    display: block;
    left: 0;
    top: 9em;
    color: rgb(255, 255, 255);
    font-weight: 600;
}
header > h3 {
    margin-bottom: 4px;
}
header > menu {
    display: none;
}
a.menuItem {
    display: none;
}

footer {
    box-sizing: border-box;
    flex: 0 0 auto;
    height: 260px;
    background-image: url('public/img/footer.png');
    background-size: 100%;
    background-repeat: repeat-y;
    width: 100%;
    padding-left: 2%;
    padding-right: 2%;
    padding-top: 30px;
    font-weight: 600;
}
footer > div {
    color: rgb(255, 255, 255);
}
footer > div > h1,p {
    padding: 2px;
}
.one {
    width: 100%;
}
.two {
    width: 100%;
}
.three {
    width: 100%;
}
.content {
  width: 96%;
  margin-left: 2%;
  margin-right: 2%;
}
.about {
  width: 90%;
  padding: 1em;
  padding-bottom: 2em;
}
.h1Cont {
  width: 100%;
  margin-left: 2%;
  margin-right: 2%;
}
p {
  width: 100%;
  margin-left: 2%;
  margin-right: 2%;
}
.nomin {
  padding: 1em;
  height: 100%;
}
.workItem {
  display: block;
  height: 100%;
  text-align: center;
}
div.slider {
  width: 100%;
  margin-left: 0;
}
.slider__wrapper {
  width: 100%;
  margin-left: 0;
}
nav {
  display: block;
}

.dws-menu *{
 margin: 0;
 padding: 0;
}
.dws-menu ul,
.dws-menu ol{
 list-style: none;
}
.dws-menu > ul{
 display: flex;
 justify-content: center;
}
.dws-menu > ul li{
 position: relative;
 border-right: 1px solid #c7c8ca;
}
.dws-menu > ul li:first-child{
 border-left: 1px solid #b2b3b5;
}
.dws-menu > ul li:last-child{
 border-right: 1px solid #babbbd;
}
.dws-menu > ul li > a i.fa{
 position: absolute;
 top: 15px;
 left: 12px;
 font-size: 18px;
}
.dws-menu > ul li a{
 display: block;
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c9c9c9+0,f6f6f6+2,c4c5c7+98,757577+100;Custom+3 */
 background: rgb(201,201,201); /* Old browsers */
 background: -moz-linear-gradient(top,  rgba(201,201,201,1) 0%, rgba(246,246,246,1) 2%, rgba(196,197,199,1) 98%, rgba(117,117,119,1) 100%); /* FF3.6-15 */
 background: -webkit-linear-gradient(top,  rgba(201,201,201,1) 0%,rgba(246,246,246,1) 2%,rgba(196,197,199,1) 98%,rgba(117,117,119,1) 100%); /* Chrome10-25,Safari5.1-6 */
 background: linear-gradient(to bottom,  rgba(201,201,201,1) 0%,rgba(246,246,246,1) 2%,rgba(196,197,199,1) 98%,rgba(117,117,119,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c9c9c9', endColorstr='#757577',GradientType=0 ); /* IE6-9 */

 padding: 15px 30px 15px 40px;
 font-size: 14px;
 color: #454547;
 text-decoration: none;
 text-transform:uppercase;
 transition: all 0.3s ease;
}
.dws-menu li a:hover{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e0e1e5+0,454547+2,454547+98,e0e1e5+100 */
 background: rgb(224,225,229); /* Old browsers */
 background: -moz-linear-gradient(top,  rgba(224,225,229,1) 0%, rgba(69,69,71,1) 2%, rgba(69,69,71,1) 98%, rgba(224,225,229,1) 100%); /* FF3.6-15 */
 background: -webkit-linear-gradient(top,  rgba(224,225,229,1) 0%,rgba(69,69,71,1) 2%,rgba(69,69,71,1) 98%,rgba(224,225,229,1) 100%); /* Chrome10-25,Safari5.1-6 */
 background: linear-gradient(to bottom,  rgba(224,225,229,1) 0%,rgba(69,69,71,1) 2%,rgba(69,69,71,1) 98%,rgba(224,225,229,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e0e1e5', endColorstr='#e0e1e5',GradientType=0 ); /* IE6-9 */

 color: #ffffff;
 box-shadow: 1px 5px 10px -5px black;
 transition: all 0.3s ease;
}

/*sub menu*/
.dws-menu li ul{
 position: absolute;
 min-width: 150px;
 display: none;
}
.dws-menu li > ul li{
 border: 1px solid #c7c8ca;
}
.dws-menu li > ul li a{
 padding: 10px;
 text-transform: none;
 background: #e4e4e5;
}
.dws-menu li > ul li ul{
 position: absolute;
 right: -150px;
 top: 0;
}
.dws-menu li:hover > ul{
 display: block;
}

/*==== MEDIA ====*/
.dws-menu [type="checkbox"],
.dws-menu label.toggleSubmenu{
 display: none;
}
.dws-menu label.toggleMenu{
 /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#c9c9c9+0,f6f6f6+2,c4c5c7+98,757577+100;Custom+3 */
 background: rgb(201,201,201); /* Old browsers */
 background: -moz-linear-gradient(top,  rgba(201,201,201,1) 0%, rgba(246,246,246,1) 2%, rgba(196,197,199,1) 98%, rgba(117,117,119,1) 100%); /* FF3.6-15 */
 background: -webkit-linear-gradient(top,  rgba(201,201,201,1) 0%,rgba(246,246,246,1) 2%,rgba(196,197,199,1) 98%,rgba(117,117,119,1) 100%); /* Chrome10-25,Safari5.1-6 */
 background: linear-gradient(to bottom,  rgba(201,201,201,1) 0%,rgba(246,246,246,1) 2%,rgba(196,197,199,1) 98%,rgba(117,117,119,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c9c9c9', endColorstr='#757577',GradientType=0 ); /* IE6-9 */

 display: none;
 padding: 15px 40px;
 text-transform: uppercase;
 font-size: 14px;
 cursor: pointer;
 position: relative;
}

.dws-menu label.toggleMenu .fa{
 position: absolute;
 top: 15px;
 left: 12px;
 font-size: 18px;
}
@media all and (max-width: 800px){
 .dws-menu{
  overflow: hidden;
 }
 .dws-menu ul{
  display: block;
  max-height: 0;
  transition: max-height 0.3s;
 }
 .dws-menu li>ul li ul{
  position: absolute;
  right: auto;
  top: auto;
 }
 .dws-menu label.toggleMenu{
  display: block;
 }
 input.toggleMenu:checked + label.toggleMenu{
  background: #000;
  color: #fff;
 }
 input.toggleMenu:checked ~ ul,
 input.toggleSubmenu:checked ~ ul{
  display: block;
  position: relative;
  max-height: 5000px;
  transition: max-height 2s ease-in;
 }
 .dws-menu label.toggleSubmenu{
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  display: block;
 }
 input.toggleSubmenu:checked ~ a{
  background: #454547;
  color: #fff;
 }
 .dws-menu label.toggleSubmenu .fa:before{
  content: "\f0d7";
  color: #454547;
 }
 .dws-menu label.toggleSubmenu .fa{
  position: absolute;
  top: 15px;
  right: 30px;
 }
 .dws-menu input.toggleSubmenu:checked ~ label.toggleSubmenu .fa::before{
  content: "\f0d8";
  color: #ffffff;
 }
}

}</style>
    <title><?php echo $kaz?></title>
</head>
<body>
<nav class="dws-menu">
        <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
        <label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
        <ul>
            <li><a href="index.php"><i class="fa fa-home"></i>
                    Негізгі бет /
                    Главная</a></li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m1">
                <a href="post.php"><i class="fa fa-shopping-cart"></i>
                    Байқаулар /
                    Конкурсы </a>
            </li>
            <li>
                <input type="checkbox" name="toggle" class="toggleSubmenu" id="sub_m2">
                <a href="archive.php"><i class="fa fa-cogs"></i>
                    Мұрағат / Архив
                    </a>
            </li>
            <li><a href="form.php"><i class="fa fa-th-list"></i>
                    Өтінім үлгісі / Форма заявки
                    </a></li>
            <li><a href="contact.php"><i class="fa fa-envelope-open"></i>
                    Байланыс /
                    Контакты</a></li>
        </ul>
    </nav>
    <div class="wrapper">

        <header>
            <h1>
                DANISHPAN.KZ
            </h1>
            <p>+7 (705) 588 12 10</p>
            <p>info@danishpan.kz</p>
            <h3>
                Республикалық қашықтық байқаулар орталығы 
            </h3>
            <h3>
                Республиканский центр дистанционных конкурсов
            </h3>
            <menu>
                <a href="index.php" class="menuItem">
                    Негізгі бет
                    <hr class="active">
                    Главная
                </a>
                <a href="post.php" class="menuItem active">
                    Байқаулар
                    <hr>
                    Конкурсы
                </a>
                <a href="archive.php" class="menuItem">
                    Мұрағат
                    <hr>
                    Архив
                </a>
                <a href="form.php" class="menuItem">
                    Өтінім үлгісі
                    <hr>
                    Форма заявки
                </a>
                <a href="contact.php" class="menuItem">
                    Байланыс
                    <hr>
                    Контакты
                </a>
            </menu>
        </header>
        

        <div class="content">
            <h4 class="coock">Байқаулар / Конкурсы <p class="coock2"> - <?php echo $kaz.' / '.$ru?></p></h4>
                <br><br><br><br>
            <h1 class="h1Cont"><?php echo $kaz.' / '.$ru?></h1>
            
            <a href="#ww">
            <div class="eye">
                <img src="public/img/eye.png">
                <p>
                    Қатысушылардың жұмыстарын көру 
                        <br>
                    Посмотреть работы участников
                </p>
            </div>
            </a>

            <div class="allText">
            <P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">«</SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><?php echo $kaz?></B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">»
атты шығармашылық қашықтық байқауына
</SPAN></FONT></FONT></FONT><SPAN STYLE="font-variant: small-caps"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="font-weight: normal">(</SPAN></SPAN></FONT></FONT></FONT></SPAN><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">сурет</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">,
</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">өлең</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">,
</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">шығарма</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">,</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">
</SPAN></B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">аппликация</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">,
</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">қолдан</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">жасалған</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">бұйым</SPAN></SPAN></FONT></FONT></FONT><SPAN STYLE="font-variant: small-caps"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="font-weight: normal">)</SPAN></SPAN></FONT></FONT></FONT></SPAN><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">
жұмыстары</SPAN></FONT></FONT></FONT><SPAN STYLE="font-variant: small-caps"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="font-weight: normal">
</SPAN></SPAN></FONT></FONT></FONT></SPAN><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt">қабылданады.</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">
Қолөнер жұмыстарын әр түрлі техникада
және материалдардан жасауға болады.</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Қатысушылар
категориясы:</B></SPAN></FONT><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
<?php echo $old?> жасқа дейін</SPAN></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><A NAME="_GoBack"></A>
<BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Өткізу
мерзімі:&nbsp;</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
<?php echo $date1?> ж. бастап <?php echo $date2?> ж. дейін</SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Қатысушылардың
жұмыстарын қабылдау</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">:</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>&nbsp;</B></SPAN></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>күнделікті</B></SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Байқау
нәтижес</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>і:</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
конкурстық жұмыс пен түбіртек көшірмесің
жібергеннен бастап есептегенде&nbsp;</SPAN></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>5
кун</B></SPAN></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">аралығында
шығады.</SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Қатысу
ережесі:</B></SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Байқауға
қатысу үшін </SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">қатысушы
өз жұмысын, жарнапұл түбіртегінің
көшірмесін және қатысушы өтінімін
толтырып </SPAN></FONT></FONT></FONT><FONT COLOR="#0000cc"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">info@danishpan.kz</SPAN></FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B>
</B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">поштасына
жіберу қажет. </SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Түбіртек
көшірмесі тек фотоға түскен түрінде
қабылданады. Әр конкурстық жұмысқа
бөлек  жарнапұл төленуі тиіс. Түбіртекті
фотоға түсірмес бұрын, әр түбіртектің
бос жеріне қатысушының </SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">аты-жөнің</SPAN></B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
міндетті түрде қаламмен жазу керек.
Сонымен қатар төлемді бірден
барлық&nbsp;қатысушылар&nbsp;үшін жасауға
болады, сонда барлық&nbsp;қатысушылар&nbsp;үшін
бір ғана комиссия құны алынады. </SPAN></SPAN></FONT></FONT></FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Қатысушы
өтінімін </SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Microsoft</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">
</SPAN></B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Word
форматында жіберу керек. Фотоға түсүрудің
немесе сканерлеудің қажеті жоқ. Қатысушы
өтінімін біздің электронды </SPAN></SPAN></FONT></FONT></FONT><A HREF="mailto:info@danishpan.kz"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">info@danishpan.kz</SPAN></SPAN></FONT></FONT></A><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
почтасына жазып ала аласыз.</SPAN></SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff"><BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B>Байқау
жұмыстарына қойылатын талаптар</B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">:</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Жазба
жұмыстар: Microsoft Word форматында қабылданады,
қаріп көлемі 14. Шығарманың минималды
көлемі 1 бет, өлең шумақтардың минималды
саны -1.</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Шығармашылық
жұмыстар (қолөнер бұйымдары т.б) Jpeg,
jpg&nbsp;форматында қабылданады. Қолөнер
жұмыстарын фотоға түсіріп немесе
сканерден өткізіп жіберуіңіз керек.
Фото немесе скан-копияның сапасы жоғары
және анық көрінуі тиіс. Жіберетің файлға
қатысушының аты-жөні міндетті турде
жазылуы тиіс. Фотоға тек жұмыстың өзін
ғана түсіру керек. Бөгде заттар обьектіге
түсіп қалмауы керек. Фотоның көлемі өте
кішкентай болмау керек, себебі жұмысты
анықтап көруге кедергі келтіреді.</SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff"><BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Байқауға
қатысу жарнасы - </SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">500
теңге әр конкурстық жұмыс үшін </SPAN></B></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">(банк
комиссиясын&nbsp;Қатысушы төлейді</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">)</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff"><BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">Төлем
жолдары:</SPAN></B></SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><B>Qiwi</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">кошелек
шотын толтыру (кошелек номері: 8705 588 12
10)</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Beeline</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
мобильдік операторының теңгеріміне
бірлік салу (номер: 8705 588 12 10)</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Жарнаны
АҚ&nbsp;«Қазахстан Халық Банкі» карт-шотына
аудару:&nbsp;</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">ЖСК:
KZ936010002109169562</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Жарнаны
АҚ «Қазахстан Халық Банкі» картасына
аудару: ЖСН:&nbsp;911009451637,&nbsp;карта номері:
4277  0455  0326  7281</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">БИН/ЖСН:
911009451637</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">БСК:
HSBKKZKX</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Кбе:
19</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">ТМК:
859</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Жарнаны
«Kaspi Gold» картасына аудару:</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">ЖСН:
911009451637, карта номері: 5169  4931  3759  2310</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Төлем
мақсаты: байқауға қатысу үшін</SPAN></SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; background: #ffffff"><BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Байқау
қорытындысы бойынша жеңімпаздар&nbsp;Дипломдармен,
қатысушылар қатысушы&nbsp;Сертификатымен&nbsp;марапатталады.
Сонымен қатар барлық қатысушылардың
жетекшілеріне&nbsp;Диплом&nbsp;табысталады.
Жетекшіге диплом тегін беріледі.
Дипломдар электронды түрде, қатысушылардың
электрондық почтасына жіберіледі. Әр
қатысушының жұмысы жеке дара бағаланады.</SPAN></SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Жұмыс
уақыты: 10:00 – 19:00. Демалыс күндері: сенбі,
жексенбі</SPAN></SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Байланыс
телефоны: 87</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="background: #ffffff">05
588 12 10</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Эл</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="background: #ffffff">.
</SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">п</SPAN></SPAN></FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="background: #ffffff">ошта:
</SPAN></FONT></FONT></FONT><A HREF="mailto:info@danishpan.kz"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en-US">info</SPAN></FONT></FONT><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt">@</FONT></FONT><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en-US">d</SPAN></FONT></FONT><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">anishpan.k</SPAN></FONT></FONT><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="en-US">z</SPAN></FONT></FONT></A><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ"><B>
     </B></SPAN></FONT></FONT></FONT></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN LANG="kk-KZ">Барлығыңызға
сәттілік және шығармашылық жетістіктер
тілейміз!!!</SPAN></FONT></FONT></FONT></FONT></FONT></P>
<P LANG="kk-KZ" ALIGN=CENTER STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P LANG="kk-KZ" STYLE="margin-right: -0.02in; margin-bottom: 0.14in"><BR><BR>
</P>
<P STYLE="margin-right: -0.02in; margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">На
дистанционный творческий конкурс </SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">«</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff"><?php echo $ru?></SPAN></B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">»</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
принимаются работы такие как </SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">(</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">рисунок,
стихотворение, сочинение, аппликация,
поделка</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">)
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">Творческие
работы</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">может</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
быть изготовлена из самых различных
материалов</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.</SPAN></FONT></FONT></P>
<P STYLE="margin-right: -0.02in; margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">Категория
участников</SPAN></B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">:</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">
<?php echo $old?></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
лет </SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">
</SPAN></FONT></FONT>
</P>
<P STYLE="margin-right: -0.02in; margin-bottom: 0.14in"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Сроки</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">&nbsp;</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>проведения</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">&nbsp;</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Конкурса</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">:
с </FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><?php echo $date?>
г. по <?php echo $date1?> г. </SPAN></FONT></FONT>
</P>
<P STYLE="margin-left: -0.1in; margin-right: -0.02in; margin-bottom: 0.14in">
<FONT COLOR="#000000">  <FONT FACE="Verdana, serif"><B>Прием
работ участников</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">:&nbsp;</FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><B>ежедневно</B></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Итоги
конкурса</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">:&nbsp;Итоги
по конкурсной работе, подводятся в
течение</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>&nbsp;</B></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>5</B></SPAN></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Verdana, serif"><B>
дней</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">,
с момента получения работы и квитанции.
Дипломы в электронном виде высылаются
на электронную почту участников в день
подведения итогов. Каждая работа
оценивается индивидуально экспертным
жюри.</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Правила
участия</B></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif">Для
участия в конкурсе участник&nbsp;должен
отправить свою работу, заполненную
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">заявку</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
участника и копию квитанции об оплате
в одном письме на электронный </FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">адрес
</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">info</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif">@</FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">d</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">anishpan.k</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">z</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
Оргвзнос оплачивается за каждую
конкурсную работу</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.
Оплату оргвзноса можно произвести одним
платежом за несколько участников, либо
за каждого отдельно. Если оплачиваете
отдельно за каждого участника, то перед
тем как фотографировать&nbsp;чек, на нём
обязательно нужно дописать ручкой на
свободном месте&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">фамилию
и имя участника</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">Копия
квитанции не должна быть в виде
напечатанного текста, она может быть
только сфотографирована.</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Заявку
участника</B></SPAN></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">
не нужно фотографировать, она должна
быть просто таблицей с текстом </SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">в
формате</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
Microsoft</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><SPAN STYLE="background: #ffffff">Word</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
По поводу формы заявки участника пишите
на почту </SPAN></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><SPAN STYLE="background: #ffffff">info</SPAN></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">@</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><SPAN STYLE="background: #ffffff">danishpan</SPAN></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.</SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><SPAN STYLE="background: #ffffff">kz</SPAN></SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Требования
к работам</B></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Образцы
изобразительного творчества (поделки,
рисунки и т.д.) принимаются на конкурс
в следующих форматах: jpg,jpeg.</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Текстовые
файлы принимаются в формате </SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">Microsoft</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">Word</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">,
размер шрифта 14, минимальный обьем
сочинении 1 стр, минимальное количество
куплетов в стихотворении -1.</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Поделки,
образцы изобразительного творчества
нужно сфотографировать и отправить на
конкурс фотографию, фото или скан-копии
должны быть хорошего качества (не
размытые, чёткие).&nbsp;На фотографиях не
должно быть детей (н-р, ребёнок держит
рисунок в руках), цифр и др. надписей!&nbsp;Наличие
посторонних надписей, посторонних
предметов на заднем фоне фотографии,
не даёт возможности рассмотреть саму
работ</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">у</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">,
поэтому оценка за работу может быть
снижена. Фотографии работ&nbsp;не должен
быть очень маленького размера, т.к.
фотографию невозможно рассмотреть.</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Способы
оплаты</B></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>Оргв</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>знос
за участия 500 тенге</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>,</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>&nbsp;</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B>за
каждую конкурсную работу</B></SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">(Участник&nbsp;оплачивает&nbsp;</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">комиссию&nbsp;Банка</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">)</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Пополнение
счета&nbsp;</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B>Qiwi</B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">&nbsp;кошелька
(номер&nbsp;кошелька: 8705 588 12 10)</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Пополнение
баланса номера мобильного оператора
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><B>Beeline</B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">(номер</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">:</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
8705 588</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">12</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">10)</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<BR>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Перевод
средств на карт-счет АО «Народный Банк
Казахстана» </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">ИИК:
KZ936010002109169562</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Перевод
средств на карту АО «Народный Банк
Казахстана» </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">ИИН:&nbsp;911009451637,
номер карты:&nbsp;4277</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
0455  0326  7281</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">БИН/ИИН:&nbsp;911009451637</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">БИК: HSBKKZKX</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Кбе: 19</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">КНП: 859</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">Перевод
средств на кар</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">ту
</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">«</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">Kaspi</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif">
</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="en-US">Gold</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">»</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif">ИИН:&nbsp;911009451637,
номер карты: 5169  4931  3759  2310</FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">
  </SPAN></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; background: #ffffff; line-height: 100%">
<FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">Назначение
платежа: за участие в конкурсе</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif">	</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">По&nbsp;итогам&nbsp;конкурса&nbsp;все
участники&nbsp;получают&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><B><SPAN STYLE="background: #ffffff">Сертификат</SPAN></B></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">участника</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">,
победители</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">&nbsp;Диплом</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">победителя</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">,
руководители&nbsp;</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><B><SPAN STYLE="background: #ffffff">Диплом&nbsp;</SPAN></B></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">за
подготовку участников. Диплом руководителю
бесплатно!</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Время
работы</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">:</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
10:00 – 19:00. Выходные дни</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">:
суббота</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">,
воскресенье</SPAN></SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Телефон
для справок</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">:
8705 588 12 10</SPAN></FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">Эл</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">.
</SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">п</SPAN></SPAN></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN STYLE="background: #ffffff">очта:
</SPAN></FONT></FONT><A HREF="mailto:info@danishpan.kz"><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><U>info</U></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><U>@</U></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><U>d</U></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ"><U>anishpan.k</U></SPAN></FONT></FONT><FONT COLOR="#0000ff"><FONT FACE="Verdana, serif"><SPAN LANG="en-US"><U>z</U></SPAN></FONT></FONT></A></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#000000"><FONT FACE="Verdana, serif"><SPAN LANG="kk-KZ">Желаем
всем удачи и творческих успехов!!!</SPAN></FONT></FONT></P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P LANG="kk-KZ" STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
            </div>
            <hr class="big">
            <h1 class="h1Cont2">Қатысушылардың жұмыстары:</h1>
            <h1 class="h1Cont2">Работы участников:</h1>


            <div class="cart2" id="ww">
                    
            <?php



$lol = 'SELECT * FROM `work` WHERE cat = "'.$kaz.'"';
$rlol = $pdo->query($lol);
$rlol = $rlol->fetchAll(PDO::FETCH_ASSOC);

foreach($rlol as $k => $v) {
    echo '<div class="cartItem2">';
        echo '<div class="c2">';
            echo '<img src="'.$v['src'].'" class="imgPost2">';
            echo '<p class="minip">"'.$v['froms'].'"</p>';
        echo '</div>';

        echo '<div class="f2">';
        echo '<p class="minipB">Қатысушы / Участник:</p>';
        echo '<p class="miniName">"'.$v['name'].'"</p>';
        echo '<p class="minipB">Жетекші / Руководитель:</p>';
        echo '<p class="miniName">"'.$v['ticher'].'"</p>';
    echo '</div>';

    echo '</div>';
}


?>

                
            
            </div>
        </div>

        <footer>
            <div class="one">
                <h1>DANISHPAN.KZ</h1>
                <p>COPYRIGHT © 2017- 2019</p>
            </div>
            <div class="two">
                <p>Республикалық қашықтық байқаулар орталығы</p>
                <p>Республиканский центр дистанционных конкурсов</p>
            </div>
            <div class="three">
                <p>Сайт жетекшісі/ Администратор проекта: Кайрова С.Т.</p>
                <p>Байланыс / Контакты:</p>
                <p>info@danishpan.kz</p>
                <p>+7 (705) 588 12 10</p>
                    <br>
                <p>Қазақстан, Нұр-Сұлтан</p>
            </div>
        </footer>

    </div>
</body>
</html>