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
      <div class="col-3 col-sm-3">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.jpg"
                                                     alt="Голден Строй" class="company-logo"></a>
      </div>
      <div class="col-9 col-sm-9 text-right my-sm-3 company-contacts">
        <a href="emailto:<?php echo get_option('email'); ?>"
           class="company-contacts__email"><?php echo get_option('email'); ?></a>
        <a href="tel:<?php echo get_option('my_phone'); ?>"
           class="company-contacts__phone"><?php echo get_option('my_phone'); ?></a>
        <button class="company-contacts__callrequest">Заказать звонок</button>
      </div>
    </div>
    <div class="row">
      <nav class="navbar navbar-expand-md navbar-dark col-12">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url(); ?>">Главная
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false">Услуги</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo get_home_url() . '/#repairs'; ?>">Ремонтно-отделочные
                  работы</a>
                <a class="dropdown-item" href="<?php echo get_home_url() . '/additionalservises/#additionat-service1'; ?>">Дизайн интерьеров и
                  проектирование</a>
                <a class="dropdown-item" href="<?php echo get_home_url() . '/additionalservises/#additionat-service2'; ?>">Фасадные работы</a>
                <a class="dropdown-item" href="<?php echo get_home_url() . '/additionalservises/#additionat-service3'; ?>">Кровельные работы</a>
                <a class="dropdown-item" href="<?php echo get_home_url() . '/additionalservises/#additionat-service4'; ?>">Общестроительные работы</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() . '/#portfolio'; ?>">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() . '/#reviews'; ?>">Отзывы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo get_home_url() . '/#application-contacts'; ?>">Контакты</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-8 text-center text-md-left header__properties">
        <h1 class="col-12 header__heading my-lg-5">Ремонт всех видов коммерческих <br>помещений с гарантией под ключ!
        </h1>
        <div class="col-12 col-sm-6 col-md-3 company-feature mb-4 mb-md-0">
          <img src="<?php bloginfo('template_url') ?>/images/warranty.png" alt="Гарантия 5 лет"
               class="company-feature__img">
          <h4 class="company-feature__heading">Гарантия<br> до 5 лет </h4>
          <p class="company-feature__description">предоставляем расширенную гарантию на работы</p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 company-feature mb-4 mb-md-0">
          <img src="<?php bloginfo('template_url') ?>/images/terms.png"
               alt="Все работы выполняются качественно и в срок" class="company-feature__img">
          <h4 class="company-feature__heading">Быстро и<br> в срок </h4>
          <p class="company-feature__description">все работы выполняются не только качественно, но и в срок</p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 company-feature mb-4 mb-md-0">
          <img src="<?php bloginfo('template_url') ?>/images/payment.png" alt="Оплата любым удобным способом"
               class="company-feature__img">
          <h4 class="company-feature__heading">Оплата любым<br> удобным способом </h4>
          <p class="company-feature__description">безналичным и наличным путем</p>
        </div>
        <div class="col-12 col-sm-6 col-md-3 company-feature mb-4 mb-md-0">
          <img src="<?php bloginfo('template_url') ?>/images/agreement.png"
               alt="Все обязательства фиксируются в договоре" class="company-feature__img">
          <h4 class="company-feature__heading">Официальный<br> договор</h4>
          <p class="company-feature__description">все обязательства фиксируются в договоре</p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="wp-form__wrap">
            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </div>
</header>
