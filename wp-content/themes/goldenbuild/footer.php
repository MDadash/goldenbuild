<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goldenbuild
 */

?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 footer__contacts">
                    <a href="tel:<?php echo get_option('my_phone'); ?>" class="company-contacts__phone"><?php echo get_option('my_phone'); ?></a>
                    <br>
                    <a href="emailto:<?php echo get_option('email'); ?>" class="company-contacts__email"><?php echo get_option('email'); ?></a>
                </div>
                <div class="col-12 col-sm-6 text-right">
                    <div class="social-icons">
                        <a href="<?php echo get_option('fb_link'); ?>" target="_blank" class="fab fa-facebook-f"></a>
                        <a href="<?php echo get_option('tw_link'); ?>" target="_blank" class="fab fa-vk"></a>
                        <a href="<?php echo get_option('in_link'); ?>" target="_blank" class="fab fa-instagram"></a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo get_option('my_second_phone'); ?>" target="_blank" class="fab fa-whatsapp"></a>
                        <a href="viber://chat?number=<?php echo get_option('my_second_phone'); ?>" target="_blank" class="fab fa-viber"></a>
                    </div>
                    <div class="copyright">
                        <p>© 2019, ООО "ГОЛДЕН СТРОЙ"</p>
                        <a href="<?php echo get_page_link( 3 ); ?>" class="footer__policies">Политика конфиденциальности обрабатываемых данных</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!---->
<!--<div class="modal" id="modal-review1">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h2 class="modal-title">Ремонт магазина в тц</h2>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>На меня, как на управляющего магазином, была возложена обязанность найти надежную строительно-ремонтную бригаду для ремонта в ТЦ. Компанию “Голден Строй” нашел по отзывам, клиенты уверяли, что подрядчик добросовестно и качественно выполняет поставленные на него обязанности. После звонка в компанию, специалисты сразу же приехали на объект для осмотра и составили объективную оценку по дальнейшему планированию. Могу сказать точно, ценовая политика у них на уровне среднего сегмента, со сроками не подвели, объект сдали в назначенные сроки. Спасибо менеджерам и строителям за качественно выполненные работы!</p>-->
<!--                <p class="modal-review__author">ООО “Сеть Плюс”</p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="modal__close btn" data-dismiss="modal">Закрыть</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="modal" id="modal-review2">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h2 class="modal-title">Ремонт офиса</h2>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>Долго сомневались с выбором надежного подрядчика для выполнения строительных работ в нашем офисе.Так как предстоял капитальный ремонт, нам нужно было провести коммуникацию, электрику, выполнить комплексные работы по установке сантехники, радиаторов. Голден Строй отлично справилась со своими обязанностями, составила всю необходимую документацию по расходной и технической части. Сотрудники выполнили заказ в оговоренные сроки, все работы проводились под пристальным присмотром организаторов и проектантов. Рекомендуем к сотрудничеству!</p>-->
<!--                <p class="modal-review__author">ООО “Дионик”</p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="modal__close btn" data-dismiss="modal">Закрыть</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="modal" id="modal-review3">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h2 class="modal-title">Штукатурка и покраска зданияя в тц</h2>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>Компания “Голден Строй” предоставляла нам услуги по покраске и штукатурке фасада. Помимо состава комплексных услуг,  нам нужно было провести капитальное устранение дефектов и утеплить офисное здание. Специалисты выполнили качественную штукатурно-малярную работу. На период выполнения услуг составили официальный договор, обязанности которого компания выполнила в полном объеме.  Работа сделана качественно и в срок.</p>-->
<!--                <p class="modal-review__author">ООО “Варис”</p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="modal__close btn" data-dismiss="modal">Закрыть</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php wp_footer(); ?>

</body>
</html>
