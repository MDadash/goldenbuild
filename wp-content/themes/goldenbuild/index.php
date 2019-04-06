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
    	<section class="services" id="services">
            <div class="container">
                <div class="row">
                    <p class="col-12 text-justify">Наша ремонтно-строительная компания обладает богатым опытом и высоким профессионализмом в области общестроительных, инженерных и отделочных работ. Основной специализацией компании «Голден строй» является реконструкция, ремонт и отделка всех видов коммерческой недвижимости.</p>
                    <p class="col-md-12 text-center my-4">Мы профессионально выполняем ремонт коммерческих помещенийй в Москве и МО</p>

                    <?php
                    $query = new WP_Query( array( 'category_name' => 'services' ) );
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                      <div class="col-md-6 services-item">
                        <?php the_post_thumbnail(); ?>
                        <h4 class="services-item__heading"><?php the_title(); ?></h4>
                      </div>
                    <?php } ?>

                </div>
            </div>
      	</section>

    	<section class="about">
            <div class="container">
                <div class="row">
                <?php $the_query = new WP_Query('p=150'); ?>
                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h3 class="col-12 my-3"><?php the_title(); ?></h3>
                    <div class="col-12 col-lg-6 about__description">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-lg-6 about__video">
                        <?php echo do_shortcode('[video mp4="http://goldenbuild/wp-content/uploads/2019/03/presentation-1.mp4"][/video]'); ?>
                        <p class="about__working-years about__working-years--number">5</p>
                        <p class="about__working-years">лет<br> работы</p>
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
    	</section>

    	<section class="application" id="application">
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

    	<section class="repairs" id="repairs">
            <div class="container">
                <div class="row">
                    <h3 class="col-12 text-center my-3">Вы можете заказать любой вид ремонта</h3>

                    <?php $the_query = new WP_Query('p=136'); ?>
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-12 col-lg-6 my-3 repairs__type order-1">
                            <h4 class="repairs__name"><?php the_title(); ?></h4>
                            <div class="repairs__img"><?php the_post_thumbnail(); ?></div>
                            <p class="repairs__price">от <span class="repairs__price--number"><?php the_field('price'); ?></span> руб/м.кв.</p>
                        </div>
                        <div class="col-12 col-lg-6 my-3 order-2 repairs__description">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>

                    <?php $the_query = new WP_Query('p=139'); ?>
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-12 col-lg-6 my-3 order-4 order-lg-3 repairs__description">
                            <?php the_content(); ?>
                        </div>
                        <div class="col-12 col-lg-6 my-3 order-3 order-lg-4">
                            <h4 class="repairs__name"><?php the_title(); ?></h4>
                            <div class="repairs__img"><?php the_post_thumbnail(); ?></div>
                            <p class="repairs__price">от <span class="repairs__price--number"><?php the_field('price'); ?></span> руб/м.кв.</p>
                        </div>
                    <?php endwhile; ?>

                    <?php $the_query = new WP_Query('p=141'); ?>
                    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-12 col-lg-6 my-3 order-5">
                            <h4 class="repairs__name"><?php the_title(); ?></h4>
                            <div class="repairs__img"><?php the_post_thumbnail(); ?></div>
                            <p class="repairs__price">от <span class="repairs__price--number"><?php the_field('price'); ?></span> руб/м.кв.</p>
                        </div>
                        <div class="col-12 col-lg-6 my-3 order-6 repairs__description">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
    	</section>

    	<section class="additional-services" id="additional-services">
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
	    			<div class="col-md-7 advantages__description">

                        <?php $the_query = new WP_Query('p=182'); ?>
                        <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                          <h3 class="col-12"><?php the_title(); ?></h3>
                          <?php the_content(); ?>
                        <?php endwhile; ?>
	    			</div>
	    			<div class="col-md-5">
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
	    					<li class="builder__item">Цены на предоставление услуг не должны быть слишком низкими, это уже наводит на подозрение, что работы будут выполнены некачественно. Ценовая политика должна быть на уровне среднего сегмента. При подписании договорного соглашения внимательно просматривайте все пункты, при оговорке низких цен могут быть дополнительные условия.</li>
	    					<li class="builder__item">Строительная фирма должна иметь все разрешительные документы на осуществление и предоставление такого рода услуг. Это могут быть сертификаты, лицензии, доказательства прохождения специалистов для повышения квалификации.</li>
	    					<li class="builder__item">При поиске организаций через сеть Интернет, обязательно ознакомьтесь с отзывами клиентов, просмотрите форумы с обсуждениями. Если есть негативное мнение предшественников, стоит поискать другую компанию.</li>
	    					<li class="builder__item">Сотрудники компании должны иметь специальную униформу для проведения строительных работ, настоящая фирма, которая имеет конкурентные преимущества на рынке строительства, будет соблюдать технику безопасности.</li>
	    					<li class="builder__item">Внимательно прочитайте все пункты договора, особенно условия оплаты. Тем самым вы обезопасите себя от наличия подводных камней, которые могут выплывать в уже запущенном процессе строительных работ. Условия и требования должны быть прозрачны, без сомнительного содержания.</li>
	    				</ol>
	    			</div>
	    			<div class="col-md-4">
	    				<img src="<?php bloginfo('template_url') ?>/images/right1.jpg" alt="" class="advantages__img">
	    				<img src="<?php bloginfo('template_url') ?>/images/right2.jpg" alt="" class="advantages__img">
	    				<img src="<?php bloginfo('template_url') ?>/images/right3.jpg" alt="" class="advantages__img">
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

    	<section class="workexamples container" id="portfolio">
            <div class="row">
                <h3 class="col-12 workexamples__heading">Выполненные работы</h3>
              <div class="workexamples__gallery">
                <?php $the_query = new WP_Query('p=245'); ?>
                <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
              </div>
                <?php
                    $query = new WP_Query( array( 'category_name' => 'portfolio' ) );
                    while ( $query->have_posts() ) { $query->the_post(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="col-12 col-md-4 my-3 workexamples__link tooltip-wrap">
                            <?php the_post_thumbnail(); ?>
                            <span class="tooltiptext"><?php the_title(); ?></span>
                        </a>
                <?php } ?>
            </div>
    	</section>

    	<section class="reviews">
            <div class="container">
                <div class="row justify-content-around">
                    <h3 class="col-12 reviews__heading">Отзывы и благодарности</h3>

                    <p class="col-6 col-md-2 rewiews__link mt-3">
                      <img src="<?php bloginfo('template_url') ?>/images/reviews2.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                      <span class="reviews__author">ООО “Сеть Плюс”</span>
                    </p>
                    <div class="col-12 col-md-10 mt-3">
                      <h5>Ремонт магазина в тц</h5>
                      <p>На меня, как на управляющего магазином, была возложена обязанность найти надежную строительно-ремонтную бригаду для ремонта в ТЦ. Компанию “Голден Строй” нашел по отзывам, клиенты уверяли, что подрядчик добросовестно и качественно выполняет поставленные на него обязанности. После звонка в компанию, специалисты сразу же приехали на объект для осмотра и составили объективную оценку по дальнейшему планированию. Могу сказать точно, ценовая политика у них на уровне среднего сегмента, со сроками не подвели, объект сдали в назначенные сроки. Спасибо менеджерам и строителям за качественно выполненные работы!</p>
                    </div>


                    <p class="col-6 col-md-2 rewiews__link mt-3">
                      <img src="<?php bloginfo('template_url') ?>/images/reviews3.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                      <span class="reviews__author">ООО “Дионик”</span>
                    </p>
                    <div class="col-12 col-md-10 mt-3">
                      <h5>Ремонт офиса</h5>
                      <p>Долго сомневались с выбором надежного подрядчика для выполнения строительных работ в нашем офисе.Так как предстоял капитальный ремонт, нам нужно было провести коммуникацию, электрику, выполнить комплексные работы по установке сантехники, радиаторов. Голден Строй отлично справилась со своими обязанностями, составила всю необходимую документацию по расходной и технической части. Сотрудники выполнили заказ в оговоренные сроки, все работы проводились под пристальным присмотром организаторов и проектантов. Рекомендуем к сотрудничеству!</p>
                    </div>


                    <p class="col-6 col-md-2 rewiews__link mt-3">
                      <img src="<?php bloginfo('template_url') ?>/images/reviews5.jpg" alt="Отзывы Голден Строй" class="reviews__img">
                      <span class="reviews__author">ООО “Варис”</span>
                    </p>
                    <div class="col-12 col-md-10 mt-3">
                      <h5>Штукатурка и покраска зданияя в тц</h5>
                      <p>Компания “Голден Строй” предоставляла нам услуги по покраске и штукатурке фасада. Помимо состава комплексных услуг,  нам нужно было провести капитальное устранение дефектов и утеплить офисное здание. Специалисты выполнили качественную штукатурно-малярную работу. На период выполнения услуг составили официальный договор, обязанности которого компания выполнила в полном объеме.  Работа сделана качественно и в срок.</p>
                    </div>
                </div>
              <div class="row justify-content-around">
                <a href="<?php bloginfo('template_url') ?>/docs/letter1.pdf" target="_blank" class="col-6 col-md-2 rewiews__link">
                  <img src="<?php bloginfo('template_url') ?>/images/Screenshot1.png" alt="Отзывы Голден Строй" class="reviews__img">
                  <span class="reviews__author">Генеральный директор ООО "ОптимаСмарт" Журавлев О.И.</span>
                </a>
                <a href="<?php bloginfo('template_url') ?>/docs/letter2.pdf" target="_blank" class="col-6 col-md-2 rewiews__link">
                  <img src="<?php bloginfo('template_url') ?>/images/sertifikat.png" alt="Отзывы Голден Строй" class="reviews__img">
                  <span class="reviews__author">Заместитель генерального директора ООО "М-корпорация" А.В.Береснев</span>
                </a>
              </div>
            </div>
    	</section>

    	<section class="application application--padding" id="application-contacts">
    		<div class="container">
    			<div class="row">
<!--    				<div class="col-md-6 col-lg-8">-->
<!--    					<p class="application__option">Есть смета конкурента?</p>-->
<!--    					<p class="application__option">Отправьте ее нам, мы проверим цены и расчеты!</p>-->
<!--    					<p class="application__option">Возможно сможем предложить Вам более выгодное коммерческое предложение!</p>-->
<!--    					<p class="application__option">+7 495 142 93 83</p>-->
<!--    				</div>-->
<!--    				<div class="col-md-6 col-lg-4">-->
                     <div class="col-12">
                        <div class="wp-form__wrap">
                            <img src="<?php bloginfo('template_url') ?>/images/form-photo3.png" alt="Оставьте заявку прямо сейчас и получите смету под ваш бюджет" class="application__image d-none d-lg-block">
                            <?php echo do_shortcode('[contact-form-7 id="205" title="Contact form - send file"]'); ?>
                        </div>
                     </div>
<!--    				</div>-->

    			</div>
    		</div>
    	</section>

    </main>
<?php

get_footer();
