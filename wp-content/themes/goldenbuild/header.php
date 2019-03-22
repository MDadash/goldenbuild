<?php wp_head() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3 col-sm-3 header__logo">
                    <a href=""><img src="<?php bloginfo('template_url') ?>/images/logo.jpg" alt="logo goldenbuild"></a>
                </div>
                <div class="col-9 col-sm-9 text-right my-sm-3 header__contacts">
                    <a href="emailto:golden.stroy@mail.ru">golden.stroy@mail.ru</a>
                    <a href="tel:74956422334">+7 (495)-642-23-34</a>
                    <button class="header__makeorder">Заказать звонок</button>
                </div>
            </div>
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-dark col-12">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Прайс-листы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Вакансии</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-8 text-center text-md-left header__properties">
                    <h1 class="col-12 header__heading my-lg-5">Ремонт всех видов коммерческих <br>помещений с гарантией под ключ!</h1>
                    <div class="col-12 col-sm-6 col-md-3 header__properties__item mb-4 mb-md-0">
                        <img src="<?php bloginfo('template_url') ?>/images/warranty.png" alt="">
                        <h4>Гарантия<br> до 5 лет </h4>
                        <p>предоставляем расширенную гарантию на работы</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 header__properties__item mb-4 mb-md-0">
                        <img src="<?php bloginfo('template_url') ?>/images/terms.png" alt="">
                        <h4>Быстро и<br> в срок </h4>
                        <p>все работы выполняются не только качественно, но и в срок</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 header__properties__item mb-4 mb-md-0">
                        <img src="<?php bloginfo('template_url') ?>/images/payment.png" alt="">
                        <h4>Оплата любым<br> удобным способом </h4>
                        <p>безналичным и наличным путем</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 header__properties__item mb-4 mb-md-0">
                        <img src="<?php bloginfo('template_url') ?>/images/agreement.png" alt="">
                        <h4>Официальный<br> договор</h4>
                        <p>все обязательства фиксируются в договоре</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                   <div class="form__wrap">
                       <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                   </div>

<!--                    <form action="">-->
<!--                        <h3>Оставьте заявку прямо сейчас и получите смету под ваш бюджет</h3>-->
<!--                        <input type="text" placeholder="+7 (___) ___-__-__">-->
<!--                        <input type="submit" value="Получить смету">-->
<!--                        <input type="checkbox" id="agree">-->
<!--                        <label for="agree">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности.</label>-->
<!--                    </form>-->
                </div>
            </div>
        </div>
    </header>
