<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/slider.css">
    <link rel="stylesheet" href="public/css/headerPs.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Danishpan</title>

    <style>
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
      font-size: 100px;
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
    </style>
</head>
<body>
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
                <p>Не секрет, что развитие ребенка в дошкольном возрасте напрямую сказывается на его познавательных навыках во всей дальнейшей жизни, и, чем живее, интереснее, корректнее будут преподнесены знания, умения и навыки в этом возрасте, тем более способным и смышленым будет он в дальнейшем, тем более цельной будет его личность во взрослой жизни. Именно на дошкольном развитии и специализируется наш центр. Детки у нас объединены небольшими психологически комфортными группами, разделенными как по возрастам, так и по направлениям.</p>
            </div>
        </div>

        <div class="nomin">
            <h1 class="Cont">Біздің қатысушылар  Наши участники</h1>
            <h2 class="Cont">Өз жетістіктеріңізбен бөлісіңіз!  Делитесь вашими достижениями!</h2>
        
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