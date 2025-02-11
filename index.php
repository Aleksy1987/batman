<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/swiper-bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Batman</title>
</head>

<body>
    <header class="header">
        <container class="container">
            <div class="header__menu">
                <div class="header__logo">
                    <img src="img/logo.svg" alt="">
                </div>
                <nav class="header__nav">
                    <a href="#">Описание</a>
                    <a href="#">Трейлер</a>
                    <a href="#">Отзывы</a>
                </nav>

            </div>

            <div class="header__socials">
                <a href="#">
                    <img src="img/twitter.svg" alt="">
                    </a>
                <a href="#">
                    <img src="img/instagram.svg" alt="">
                </a>
                <a href="#">
                    <img src="img/facebook.svg" alt="">
                </a>
            </div>
        </container>
    </header>

    <main class="main">
        <div class="container">
            <div class="main_rating">
                <div class="main__rating-ganre">2022, боевик, триллер</div>
                <div class="main__rating-wrap">
                    <div class="main__rating-stars">
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star star-active">
                            <img src="img/star-active.svg">
                        </div>
                        <div class="main__rating-star">
                            <img src="img/star-deactive.svg">
                        </div>
                        <div class="main__rating-star">
                            <img src="img/star-deactive.svg">
                        </div>
                        <div class="main__rating-star">
                            <img src="img/star-deactive.svg">
                        </div>
                    </div>
                    <div class="main__rating-number">7/10</div>
                </div>
                <h1 class="main__header">
                Бэтмен
                </h1>
                <div class="main__description-wrapper">
                    <div class="main__description">
                        <p>
                        После двух лет поисков правосудия на улицах Готэма для своих сограждан Бэтмен становится олицетворением беспощадного возмездия. Когда в городе происходит серия жестоких нападений на представителей элиты, загадочные улики приводят Брюса Уэйна в самые темные закоулки преступного мира. Теперь под прицелом оказывается сам Бэтмен.
                        </p>
                    </div>
                    <div class="main__button-play">
                        <div class="main__button-dark">
                            <img src="img/arrow-play.svg" alt="Кнопка для запуска видео">
                        </div>
                    </div>
                </div>
                <a href="#" class="main__button">Купить билеты</a>
                
                <div class="main-slider__wrapper">
                    <div class="main-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="main-slider__slide swiper-slide">
                                <img src="img/slide1.jpg" alt="">
                                <span>
                                    Трейлер № 1
                                </span>
                            </div>
                            <div class="main-slider__slide swiper-slide">
                                <img src="img/slide2.jpg" alt="">
                                <span>
                                    Трейлер № 2
                                </span>
                            </div>
                            <div class="main-slider__slide swiper-slide">
                                <img src="img/slide1.jpg" alt="">
                                <span>
                                    Трейлер № 3
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="main-slider__arrow">
                        <img src="img/arrow.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <container class="container">
            <div class="footer__copy">
                © 2018 Acme. All rig
            </div>
            <ul class="footer__menu">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Legal</a></li>
            </ul>
        </container>
    </footer>
    <script src="js/swiper-bundle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>