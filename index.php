<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="public/css/mheader.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/slider.css">
    <link rel="stylesheet" href="public/css/headerPs.css">
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">

    <title>Danishpan</title>

    <style>


@media only screen and (max-width: 500px) {
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
    top: 2em;
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

}


    .slider {
      position: relative;
      overflow: hidden;
      width: 60%;
      margin-left: 20%;
      padding-top: 1em;
    }
    .slider__wrapper {
      display: flex;
      transition: transform 0.6s ease;
    }

    .slider__item {
      flex: 0 0 33.333333%;
      max-width: 33.333333%;
    }

    .slider__control {
      position: absolute;
      top: 30%;
      display: none;
      align-items: center;
      justify-content: center;
      width: 50px;
      color: #fff;
      text-align: center;
      opacity: 0.5;
      height: 50px;

    }

    .slider__control_show {
      display: flex;
    }

    .slider__control:hover,
    .slider__control:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: .9;
    }

    .slider__control_left {
      left: -11px;
      transform: rotate(180deg);
    }

    .slider__control_right {
      right: -11px;
    }

    .slider__control::before {
      content: '';
      display: inline-block;
      width: 30px;
      height: 50px;
      background: transparent no-repeat center center;
      background-size: 100% 100%;
    }

    .slider__control_left::before {
      background-image: url("public/img/slider/arrowBg.png");
    }

    .slider__control_right::before {
      background-image: url("public/img/slider/arrowBg.png");
    }

    .slider__item>div {
      line-height: 250px;
      width: 90%;
      margin-left: 5%;
      text-align: center;
    }
    p.name {
        position: relative;
        top: -26%;
        text-align: center;
        font-weight: 700;
        color: rgb(84,158,254);
    }
    p.old {
        position: relative;
        top: -26%;
        font-size: 0.8em;
        text-align: center;
        font-weight: 700;
        color: rgb(161,161,161);
    }
    .sign {
      color: rgb(255, 255, 255);
      position: fixed;
      top: 1%;
      left: 93%;
      padding: 7px;
      border: 2px solid rgb(255, 255, 255);
      border-radius: 30px;
      text-decoration: none;
      z-index: 888888;
    }
    </style>
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

            <h3>
                Республикалық қашықтық байқаулар орталығы 
            </h3>
            <h3>
                Республиканский центр дистанционных конкурсов
            </h3>
            <p>+7 (705) 588 12 10</p>
            <p>info@danishpan.kz</p>
            <menu>
                <a href="index.php" class="menuItem active">
                    Негізгі бет
                    <hr class="active">
                    Главная
                </a>
                <a href="post.php" class="menuItem">
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
        
        <div id="slider-wrap">
            <div id="active-slide">
                <div id="slider">
                    <div class="slide">
                        <img src="public/img/slider/slide1.png">
                    </div>
                    <div class="slide">
                        <img src="public/img/slider/slide2.png">
                    </div>
                    <div class="slide">
                        <img src="public/img/slider/slide3.png">
                    </div>
                    <div class="slide">
                        <img src="public/img/slider/slide4.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="about">
                <h1 class="h1Cont">Біз жайлы / О нас</h1>
                <p>Danishpan.kz – бұл балаларға арналған қашықтықтан өтетін республикалық
                шығармашылық байқаулар орталығы. Біздің мақсатымыз - балалардың
                шығармашылық қабілеттерін ашуға қолдау көрсету және шығармашылық
                идеяларын жүзеге асыруға мүмкіндік беру. Шығармашылықпен айналысу
                барысында баланың эстетикалық талғамы, байқампаздығы, қиялы, ой-өрісі
                дамиды. Сондықтан баланың шығармашылық талантын дұрыс анықтау, оның
                болашақ дамуына үлкен әсер ететіні сөзсіз.</p>
                <br><br>
                <p>Danishpan.kz – это республиканский творческий центр дистанционных
              конкурсов для детей. Наша цель раскрыть творческий потенциал личности и
              дать возможность поделиться своими талантами и навыками. Занятия
              творчеством побуждают детей к самовыражению, развивают
              интеллектуально-творческие способности. Развивая творческие способности
              детей, мы формируем успешную личность.</p>
            </div>
        </div>

        <div class="nomin">
            <h1 class="Cont">Байқаулар келесі номинациялар бойынша өткізіледі:</h1>
            <h2 class="Cont">Конкурсы проводятся по следующим номинациям:</h2>
        
            <div class="workItem">
                <p>Сурет</p>
                <img src="public/img/work1.png" id="imgOne">
                <p>Рисунок</p>
            </div>
            <div class="workItem">
                <p>Қолөнер</p>
                <img src="public/img/work2.png" id="imgTwo">
                <p>Поделка</p>
            </div>
            <div class="workItem">
                <p>Шығарма</p>
                <img src="public/img/work3.png" id="imgThree">
                <p>Сочинение</p>
            </div>
            <div class="workItem">
                <p>Өлең</p>
                <img src="public/img/work4.png" id="imgFour">
                <p>Стихотворение</p>
            </div>
        </div>

        <h1 class="h1Cont" style="margin-bottom: 10px; margin-top: 1em;">Біздің қатысушылар  Наши участники</h1>
        <h1 class="h1Cont" style="font-size: 1.5em;">Өз жетістіктеріңізбен бөлісіңіз!  Делитесь вашими достижениями!</h1>

        <div class="slider">
    <div class="slider__wrapper">
      <?php
      
        require_once 'app/pdo/connect.php';

        $sql = 'SELECT * FROM `people`';
        $res = $pdo->query($sql);
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($res as $k => $v) {
          echo '<div class="slider__item">';
            echo '<div>';
              echo '<img src="'.$v['src'].'" style="width: 80%;">';
              echo '</div>';
              echo '<p class="name">'.$v['name'].'</p>';
              echo '<p class="old">'.$v['old'].'</p>';
          echo '</div>';
        }
      
      ?>
      <div class="slider__item">
        <div style="">
            <img src="public/img/people/1.png" style="width: 80%;">
        </div>
        <p class="name">Андрей Симонов</p>
        <p class="old">12 лет</p>
      </div>
      <div class="slider__item">
        <div style="">
            <img src="public/img/people/1.png" style="width: 80%;">
        </div>
        <p class="name">Андрей Симонов</p>
        <p class="old">12 лет</p>
      </div>
    </div>
    <a class="slider__control slider__control_left" href="#" role="button"></a>
    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
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


    <script>
    'use strict';
    var multiItemSlider = (function () {
      return function (selector, config) {
        var
          _mainElement = document.querySelector(selector), // основный элемент блока
          _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
          _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
          _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
          _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
          _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
          _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
          _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
          _positionLeftItem = 0, // позиция левого активного элемента
          _transform = 0, // значение транфсофрмации .slider_wrapper
          _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
          _items = []; // массив элементов
        // наполнение массива _items
        _sliderItems.forEach(function (item, index) {
          _items.push({ item: item, position: index, transform: 0 });
        });

        var position = {
          getMin: 0,
          getMax: _items.length - 1,
        }

        var _transformItem = function (direction) {
          if (direction === 'right') {
            if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
              return;
            }
            if (!_sliderControlLeft.classList.contains('slider__control_show')) {
              _sliderControlLeft.classList.add('slider__control_show');
            }
            if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
              _sliderControlRight.classList.remove('slider__control_show');
            }
            _positionLeftItem++;
            _transform -= _step;
          }
          if (direction === 'left') {
            if (_positionLeftItem <= position.getMin) {
              return;
            }
            if (!_sliderControlRight.classList.contains('slider__control_show')) {
              _sliderControlRight.classList.add('slider__control_show');
            }
            if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
              _sliderControlLeft.classList.remove('slider__control_show');
            }
            _positionLeftItem--;
            _transform += _step;
          }
          _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
        }

        // обработчик события click для кнопок "назад" и "вперед"
        var _controlClick = function (e) {
          if (e.target.classList.contains('slider__control')) {
            e.preventDefault();
            var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
            _transformItem(direction);
          }
        };

        var _setUpListeners = function () {
          // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
          _sliderControls.forEach(function (item) {
            item.addEventListener('click', _controlClick);
          });
        }

        // инициализация
        _setUpListeners();

        return {
          right: function () { // метод right
            _transformItem('right');
          },
          left: function () { // метод left
            _transformItem('left');
          }
        }

      }
    }());

    var slider = multiItemSlider('.slider')

  </script>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/slider.js"></script>
</body>
</html>