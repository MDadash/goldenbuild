<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenbuild
 */

get_header();
?>
    <main>
    	<section class="services">
            <div class="container">
                <div class="row">
                    <p class="col-12 text-justify">Наша ремонтно-строительная компания обладает богатым опытом и высоким профессионализмом в области общестроительных, инженерных и отделочных работ. Основной специализацией компании «Голден строй» является реконструкция, ремонт и отделка всех видов коммерческой недвижимости.</p>
                    <p class="col-md-12 text-center my-4">Мы профессионально выполняем ремонт коммерческих помещенийй в Москве и МО</p>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/offices.jpg" alt="Ремонт офисов" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт офисов</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/shops.jpg" alt="Ремонт магазинов" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт магазинов</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/caffe.jpg" alt="Ремонт кафе и ресторанов" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт кафе и ресторанов</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/business.jpg" alt="Ремонт торговых центров" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт торговых центров</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/banks.jpg" alt="Ремонт банков" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт банков</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/hotels.jpg" alt="Ремонт гостиниц и отелей" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт гостиниц и отелей</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/beauty.jpg" alt="емонт салонов красоты и фитнес клубов" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт салонов красоты <br>и фитнес клубов</h4>
                    </div>
                    <div class="col-md-6 services-item">
                        <img src="<?php bloginfo('template_url') ?>/images/med.jpg" alt="Ремонт медицинских центров и детских садов" class="services-item__img">
                        <h4 class="services-item__heading">Ремонт медицинских <br>центров и детских садов</h4>
                    </div>
                </div>
            </div>
      	</section>

    	<section class="about">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 my-3">О компании</h3>
                    <div class="col-12 col-lg-6">
                        <p class="about__description">На протяжении более 5 лет мы занимаемся ремонтными работами коммерческих помещений под ключ. Наши профессионалы берутся за работу любой сложности, от обычного ремонта до капитального, от простой отделки помещений до элитных проектов с тщательной разработкой уникального дизайна. Для “Голден строй” нет невыполнимых решений - мы найдём способ воплотить ваш проект в жизнь и провести ремонт коммерческой недвижимости согласно всем указанным пожеланиям.</p>
                        <p class="about__description">Мы прекрасно понимаем, что репутация - наиболее ценный из наших активов, и стараемся соответствовать самым высоким требованиям, предъявленными заказчиками к строительным компаниям.</p>
                        <p class="about__description">Мы дорожим своими партнерами, от крупных игроков рынка коммерческой недвижимости до арендаторов малых помещений. Поэтому мы всегда стремимся к долгосрочным отношениям. Мы будем рады видеть вас в числе своих постоянных заказчиков и постараемся оправдать ваше доверие.</p>
                    </div>
                    <div class="col-12 col-lg-6 about__video">
                        <?php echo do_shortcode('[video mp4="http://goldenbuild/wp-content/uploads/2019/03/presentation-1.mp4"][/video]'); ?>
                        <p class="about__working-years about__working-years--number">5</p>
                        <p class="about__working-years">лет<br> работы</p>
                    </div>
                </div>
            </div>
    	</section>

    	<section class="application">
    		<div class="container">
    			<div class="row">
    				<div class="col-12 col-lg-4 pr-3 pr-lg-0">
                        <div class="wp-form__wrap">
                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                        </div>
    				</div>
    				<div class="col-lg-8 d-none d-lg-block form-image pl-0">
                        <img src="<?php bloginfo('template_url') ?>/images/form-photo.png" alt="Оставьте заявку прямо сейчас и получите смету под ваш бюджет" class="application__image">
    				</div>
    			</div>
    		</div>
    	</section>

    	<section class="repairs">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 text-center my-3">Вы можете заказать любой вид ремонта</h3>
                    <div class="col-12 col-lg-6 my-3 repairs__type order-1">
                        <h4 class="repairs__name">Косметический ремонт</h4>
                        <img src="<?php bloginfo('template_url') ?>/images/repair.jpg" alt="Косметический ремонт" class="repairs__img">
                        <p class="repairs__price">от <span class="repairs__price--number">3000</span> руб/м.кв.</p>
                    </div>
                    <div class="col-12 col-lg-6 my-3 order-2">
                        <ul class="repairs__description">
                            <li>снятие старого настенного покрытия;</li>
                            <li>шпаклёвка стен, потолков, трещин, неровностей и прочих дефектов;</li>
                            <li>покраска стен, оклейка обоями от;</li>
                            <li>монтаж труб отопительных систем;</li>
                            <li>реставрация внешнего вида отопительных труб;</li>
                            <li>укладка ламината, паркета, линолеума, ковролина;</li>
                            <li>обработка и шлифовка паркетных покрытий пола;</li>
                            <li>установка или замена осветительных приборов;</li>
                            <li>установка и сборка межкомнатных дверей;</li>
                            <li>монтаж сантехники.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 my-3 order-4 order-lg-3">
                        <ul class="repairs__description">
                            <li>снятие старого настенного покрытия;</li>
                            <li>шпаклёвка стен, потолков, трещин, неровностей и прочих дефектов;</li>
                            <li>выравнивание больших повреждённых настенных участков;</li>
                            <li>покраска стен, оклейка обоями от;</li>
                            <li>монтаж труб отопительных систем;</li>
                            <li>реставрация внешнего вида отопительных труб;</li>
                            <li>укладка ламината, паркета, линолеума, ковролина;</li>
                            <li>обработка и шлифовка паркетных покрытий пола;</li>
                            <li>установка или замена осветительных приборов;</li>
                            <li>установка и сборка межкомнатных дверей;</li>
                            <li>монтаж сантехники;</li>
                            <li>электромонтажные работы.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6 my-3 order-3 order-lg-4">
                        <h4 class="repairs__name">Капитальный ремонт</h4>
                        <img src="<?php bloginfo('template_url') ?>/images/repair.jpg" alt="Капитальный ремонт" class="repairs__img">
                        <p class="repairs__price">от <span class="repairs__price--number">6000</span> руб/м.кв.</p>
                    </div>
                    <div class="col-12 col-lg-6 my-3 order-5">
                        <h4 class="repairs__name">Элитный ремонт</h4>
                        <img src="<?php bloginfo('template_url') ?>/images/repair.jpg" alt="Элитный ремонт" class="repairs__img">
                        <p class="repairs__price">от <span class="repairs__price--number">14000</span> руб/м.кв.</p>
                    </div>
                    <div class="col-12 col-lg-6 my-3 order-6">
                        <ul class="repairs__description">
                            <li>полный спектр ремонтно-отделочных работ "под ключ";</li>
                            <li>дизайн-проект объекта;</li>
                            <li>демонтажные работы;</li>
                            <li>шпаклёвка стен, потолков, трещин, неровностей и прочих дефектов;</li>
                            <li>выравнивание больших повреждённых настенных участков;</li>
                            <li>покраска стен, оклейка обоями и т.д.;</li>
                            <li>монтаж труб отопительных систем;</li>
                            <li>монтаж напольного покрытия (ламинат, кладка плитки, ковролин, паркет и т.д.);</li>
                            <li>установка или замена осветительных приборов;</li>
                            <li>установка и сборка межкомнатных дверей;</li>
                            <li>монтаж сантехники;</li>
                            <li>электромонтажные работы.</li>
                        </ul>
                    </div>
                </div>
            </div>
    	</section>

    	<section class="additional-services">
    		<div class="container">
    			<div class="row">
		    		<h3 class="col-12">Наши дополнительные услуги</h3>
                    <?php
                    $query = new WP_Query( array( 'category_name' => 'additional-services' ) );
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                        <div class="col-12 col-md-6 additional-services__item my-3">
                            <?php the_post_thumbnail(); ?>
                            <h4 class="mx-3 text-center additional-services__heading"><a href="<?php echo get_page_link( 11 ); ?>"> <?php the_title(); ?> </a></h4>
                        </div>
                    <?php } ?>
    			</div>
    		</div>
    	</section>

    	<section class="advantages">
    		<div class="container">
    			<div class="row">
	    			<div class="col-md-7">
	    				<h3 class="col-12">Наши преимущества</h3>
	    				<ul class="advantages__list">
	    					<li class="advantages__item">- большой стаж работы, опотные и квалифицированные сотрудники</li>
	    					<li class="advantages__item">- применение передового оборудования в выполнении любых задач</li>
	    					<li class="advantages__item">- использование современных технологий и регулярная оптимизация рабочего дня позволяет делать всю работу эффективно и качественно</li>
	    					<li class="advantages__item">- выполнение широкого спектра услуг с различной сложностью</li>
	    					<li class="advantages__item">- состовление официального договора</li>
	    					<li class="advantages__item">- гарантия на любую проделаную работу до 5 лет</li>
	    					<li class="advantages__item">- возможность оплаты любым удобным способом, как безналичным так и наличным путем</li>
	    					<li class="advantages__item">- все работы осуществляются в срок, согласно графиков выполнения работ</li>
	    					<li class="advantages__item">- возможность работать в удобное для заказчиков время</li>
	    				</ul>
	    			</div>
	    			<div class="col-md-5">
	    				<img src="<?php bloginfo('template_url') ?>/images/adv1.jpg" alt="Преимущества компании Голден Строй" class="advantages__img">
	    				<img src="<?php bloginfo('template_url') ?>/images/adv2.jpg" alt="Преимущества компании Голден Строй" class="advantages__img">
	    				<img src="<?php bloginfo('template_url') ?>/images/adv3.jpg" alt="Преимущества компании Голден Строй" class="advantages__img">
	    				<img src="<?php bloginfo('template_url') ?>/images/adv4.jpg" alt="Преимущества компании Голден Строй" class="advantages__img">
	    			</div>
    			</div>
    		</div>
    	</section>

    	<section class="builder">
    		<div class="container">
	    		<div class="row">
	    			<div class="col-12">
	    				<h3 class="text-center builder__heading">Как выбрать надежного подрядчика?</h3>
	    				<p>Опыт фирмы играет важную роль, это первая характеристика на которую стоит обратить особое внимание. Если строительная организация функционирует месяц или несколько недель, рекомендуем воздержаться от такого выбора.</p>
	    			</div>
	    			<div class="col-md-8">
	    				<ol class="builder__list">
	    					<li class="builder__item">Опыт фирмы играет важную роль, это первая характеристика на которую стоит обратить особое внимание. Если строительная организация функционирует месяц или несколько недель, рекомендуем воздержаться от такого выбора.</li>
	    					<li class="builder__item">Цены на предоставление услуг не должны быть слишком низкими, это уже наводит на подозрение, что работы будут выполнены некачественно. Ценовая политика должна быть на уровне среднего сегмента. При подписании договорного соглашения внимательно просматривайте все пункты, при оговорке низких цен могут быть дополнительные условия.</li>
	    					<li class="builder__item">Строительная фирма должна иметь все разрешительные документы на осуществление и предоставление такого рода услуг. Это могут быть сертификаты, лицензии, доказательства прохождения специалистов для повышения квалификации.</li>
	    					<li class="builder__item">При поиске организаций через сеть Интернет, обязательно ознакомьтесь с отзывами клиентов, просмотрите форумы с обсуждениями. Если есть негативное мнение предшественников, стоит поискать другую компанию.</li>
	    					<li class="builder__item">Сотрудники компании должны иметь специальную униформу для проведения строительных работ, настоящая фирма, которая имеет конкурентные преимущества на рынке строительства, будет соблюдать технику безопасности.</li>
	    					<li class="builder__item">Внимательно прочитайте все пункты договора, особенно условия оплаты. Тем самым вы обезопасите себя от наличия подводных камней, которые могут выплывать в уже запущенном процессе строительных работ. Условия и требования должны быть прозрачны, без сомнительного содержания.</li>
	    				</ol>
	    			</div>
	    			<div class="col-md-4">
	    				<img src="" alt="">
	    				<img src="" alt="">
	    				<img src="" alt="">
	    				<img src="" alt="">
	    			</div>
	    			<div class="col-12">
	    				<p>Строительно-ремонтная компания “Голден Строй” имеет все вышеперечисленные характеристики и готова предоставить квалифицированных строителей для выполнения строительно-монтажных работ. Мы знаем как выбрать надежного подрядчика, и готовы проконсультировать вас по всем вопросам. Услуги выполняются с соблюдением стандартов и норм проектно-технической документации в утвержденные с заказчиком сроки.</p>
	    			</div>
	    		</div>
    		</div>
    	</section>

    	<section class="application">
    		<div class="container">
    			<div class="row">
    				<div class="col-12 col-lg-6">
                        <div class="wp-form__wrap">
                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                        </div>
    				</div>
    				<div class="col-lg-6 d-none d-lg-block">
                        <img src="<?php bloginfo('template_url') ?>/images/form-photo2.png" alt="Оставьте заявку прямо сейчас и получите смету под ваш бюджет" class="application__image">
    				</div>
    			</div>
    		</div>
    	</section>

    	<section class="partnership container">
    		<div class="row">
                <h3 class="col-12 partnership__heading">Схема сотрудничества</h3>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme1.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">1</span>Звонок/заявка</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme2.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">2</span>Бесплатный выезд<br> специалиста на объект</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme3.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">3</span>Выполнение<br> обмерных работ</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme4.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">4</span>Составление сметы<br> и коммерческого<br> предложения</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme5.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">5</span>Подписание<br> официального договора</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme6.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">6</span>Выполнение<br> строительно-монтажных<br> работ</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme7.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">7</span>Комплектация мебелью<br> и оборудованием</p>
    		    </div>
    			<div class="col-12 col-sm-6 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme8.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">8</span>Уборка после<br> выполненных работ</p>
    		    </div>
    			<div class="col-12 col-md-4 text-center partnership__item">
    				<img src="<?php bloginfo('template_url') ?>/images/scheme9.png" alt="" class="partnership__img">
    				<p class="partnership__description">
                        <span class="partnership__description--number">9</span>Сдача<br> объекта</p>
    			</div>
    		</div>
    	</section>

    	<section class="workexamples container">
            <div class="row">
                <h3 class="col-12 workexamples__heading">Выполненные работы</h3>
                <?php
                    $query = new WP_Query( array( 'category_name' => 'portfolio' ) );
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="col-12 col-md-4 my-3 workexamples__link"><?php the_post_thumbnail(); ?></a>
                <?php } ?>
            </div>
    	</section>

    	<section class="reviews">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 reviews__heading">Отзывы и благодарности</h3>
                    <a href="<?php bloginfo('template_url') ?>/docs/letter1.pdf" target="_blank" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews1.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                    <a href="#reviews1" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews2.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                    <a href="#reviews2" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews3.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                    <a href="<?php bloginfo('template_url') ?>/docs/letter2.pdf" target="_blank" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews4.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                    <a href="#reviews3" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews5.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                    <a href="#reviews3" class="col-6 col-sm-4 col-md-2">
                        <img src="<?php bloginfo('template_url') ?>/images/reviews6.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                    </a>
                </div>
            </div>
    	</section>

    	<section class="application application--padding">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6 col-lg-8">
    					<p class="application__option">Есть смета конкурентов?</p>
    					<p class="application__option">Вам уже составили смету в другой компании?</p>
    					<p class="application__option">Отправьте её нам, мы проверим цены и ошибки в расчетах.</p>
    					<p class="application__option">Возможно сможем уменьшить стоимость. Аргументируем на чем можно сэкономить и какие позиция выше рыночной стоимости.</p>
    				</div>
    				<div class="col-md-6 col-lg-4">
                        <div class="wp-form__wrap">
                            <img src="<?php bloginfo('template_url') ?>/images/form-photo3.png" alt="Оставьте заявку прямо сейчас и получите смету под ваш бюджет" class="application__image d-none d-lg-block">
                            <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
                        </div>
    				</div>
    			</div>
    		</div>
    	</section>
    </main>
<?php

get_footer();
