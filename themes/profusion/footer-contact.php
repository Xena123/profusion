
<footer class="b-footer">
    <?php if(is_page_template(array(
            'page-contact.php',
            'page-careers.php',
            'page-work.php',
        )) || is_singular(array('guides', 'casestudies', 'company' )) || is_front_page() || basename(get_page_template()) === 'page.php'): ?>
        <div class="blue-bg gtknw___box-out info_sec">
            <div class="container">
                <div class="rates-caro-elem gtknw___box">
                    <?php the_field('footer_form_text_1', 'options'); ?>


                    <div class="gtknw___box-form">
                        <!--START Scripts : this is the script part you can add to the header of your theme-->
                        <script type="text/javascript" src="/wp-includes/js/jquery/jquery.js?ver=2.10.2"></script>
                        <script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.10.2"></script>
                        <script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.10.2"></script>
                        <script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.10.2"></script>
                        <script type="text/javascript">
                            /* <![CDATA[ */
                            var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
                            /* ]]> */
                        </script>
                        <script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.10.2"></script>
                        <!--END Scripts-->

                        <div class="widget_wysija_cont html_wysija">
                            <div id="msg-form-wysija-html5bf5033d995e8-2" class="wysija-msg ajax"></div>
                            <!--<form id="form-wysija-html5bf5033d995e8-2" method="post" action="#wysija" class="widget_wysija html_wysija">
                                <div class="row gtknw___box-row b-20">
                                    <div class="col-lg-5 gtknw___box-row__elem b20">
                                        <input type="text" name="wysija[user][firstname]" class="wysija-input validate[required]" placeholder="First name" value="" />
                                    </div>
                                    <div class="col-lg-5 gtknw___box-row__elem b20">
                                        <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" placeholder="Email" value="" />
                                    </div>
                                    <div class="col-lg-2 gtknw___box-row__elem b20">
                                        <input class="wysija-submit wysija-submit-field" type="submit" value="Subscribe" />
                                    </div>
                                </div>
                                <input type="hidden" name="form_id" value="2" />
                                <input type="hidden" name="action" value="save" />
                                <input type="hidden" name="controller" value="subscribers" />
                                <input type="hidden" value="1" name="wysija-page" />

                                <input type="hidden" name="wysija[user_list][list_ids]" value="1" />

                            </form>-->
<!--                            <div style="display:none !important;">-->
                                <form id="subscribe_form" method="post" action="<?= get_permalink(get_the_ID()); ?>">
                                    <div class="row gtknw___box-row b-20">
                                        <div class="col-lg-5 gtknw___box-row__elem b20 order-2">
                                            <input type="email" name="email" class="wysija-input" placeholder="Email" value="" />
                                        </div>
                                        <div class="col-lg-5 gtknw___box-row__elem b20 order-1">
                                            <input type="text" name="firstName" class="wysija-input" placeholder="First name" value="" />
                                        </div>
                                        <div class="col-lg-2 gtknw___box-row__elem b20 order-3">
                                            <input type="submit" value="Subscribe" />
                                        </div>
                                    </div>
                                </form>
<!--                            </div>-->
                        </div>
                    </div>
                    <div class="gtknw___box-footer">
                        <?php the_field('footer_form_text_2', 'options'); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="black-bg">
        <div class="container">
            <div class="section-b tac">
                <div class="footer_logo">
                    <?php if($footerlogo = get_field('footer_logo', 'options')):?>
                        <img src="<?php echo $footerlogo;?>" alt="">
                    <?php endif;?>
                </div>
                <small class="copyright">© <?php echo date('Y'); ?> <?php bloginfo('title'); ?>. All rights reserved.</small>

                <nav class="footer_nav">
                    <?php
                    wp_nav_menu([
                        'menu'            => 'footermenu',
                        'theme_location'  => 'footermenu',
                        'container'       => false,
                        'container_id'    => '',
                        'container_class' => '',
                        'menu_id'         => false,
                        'menu_class'      => 'footer_nav-list footer_nav-list-top',
                        'depth'           => 1,
                        // 'fallback_cb'     => 'bs4navwalker::fallback',
                        // 'walker'          => new bs4navwalker()
                    ]);
                    ?>
                </nav>
                <nav class="footer_nav">
                    <?php
                    wp_nav_menu([
                        'menu'            => 'termsmenu',
                        'theme_location'  => 'termsmenu',
                        'container'       => false,
                        'container_id'    => '',
                        'container_class' => '',
                        'menu_id'         => false,
                        'menu_class'      => 'footer_nav-list',
                        'depth'           => 1,
                        // 'fallback_cb'     => 'bs4navwalker::fallback',
                        // 'walker'          => new bs4navwalker()
                    ]);
                    ?>
                </nav>

                <div class="footerContacts">
                    <?php
                    $str2 = get_field('site_phone', 'options');
                    $n_str = preg_replace('/[^\p{L}\p{N}\s]/u', '', $str2);
                    $main_phone = str_replace(" ","",$n_str);
                    if($str2):
                        ?>
                        <a href="tel:<?php echo $main_phone;?>"><?php echo $str2;?></a>
                        /
                    <?php endif; ?>
                    <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>
                </div>
                <div class="footer__adr">
                    <?php the_field('address', 'options'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!--//.b-wrap-->

<?php //if( !isset($_SESSION['send_mailpoet_newsletter']) ) : ?>
<!--START Scripts : this is the script part you can add to the header of your theme-->
<script type="text/javascript" src="/wp-includes/js/jquery/jquery.js?ver=2.10.2"></script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.10.2"></script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.10.2"></script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.10.2"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
    /* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.10.2"></script>
<!--END Scripts-->
<!--popup form-->
<div class="inbox__b">
    <div class="inbox__b-close"></div>



    <div class="widget_wysija_cont html_wysija">
        
        <form id="subscribe_form_clone" method="post" action="<?= get_permalink(get_the_ID()); ?>">
            <div class="message_loading">
                Loading...
            </div>
            <div class="subscribe__inner">
                <?php the_field('popup_form_text_1', 'options'); ?>
                <div class="gtknw___box-form">
                    <input type="text" name="firstName" class="wysija-input" placeholder="First name" value="" />
                    <input type="email" name="email" class="wysija-input" placeholder="Email" value="" />
                    <input type="submit" value="Sign up" />
                </div>
                <div class="gtknw___box-footer">
                    <?php the_field('popup_form_text_2', 'options'); ?>
                </div>
            </div>
        </form>
        <!--<div id="msg-form-wysija-html5bf50dfe0d94e-3" class="wysija-msg ajax"></div>
        <form id="form-wysija-html5bf50dfe0d94e-3" method="post" action="#wysija" class="widget_wysija html_wysija">
            <?php /*the_field('popup_form_text_1', 'options'); */?>
            <div class="gtknw___box-form">
                <input type="text" name="wysija[user][firstname]" class="wysija-input validate[required]" title="First name" placeholder="First name" value="" />
                <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email" placeholder="Email" value="" />
                <input class="wysija-submit wysija-submit-field" type="submit" value="Sign up" />

                <input type="hidden" name="form_id" value="3" />
                <input type="hidden" name="action" value="save" />
                <input type="hidden" name="controller" value="subscribers" />
                <input type="hidden" value="1" name="wysija-page" />
                <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
            </div>
            <div class="gtknw___box-footer">
                <?php /*the_field('popup_form_text_2', 'options'); */?>
            </div>
        </form>-->
    </div>



</div>
<?php //endif; ?>



<script type="text/javascript">
    (function($) {
        $(function() {


            var checked = false;
            $('#checkall').click(function() {
                $(this).toggleClass('active');
                if (checked) {
                    $(':checkbox').each(function() {
                        $(this).prop('checked', false).trigger('refresh');
                    });
                    checked = false;
                } else {
                    $(':checkbox').each(function() {
                        $(this).prop('checked', true).trigger('refresh');
                    });
                    checked = true;
                }
                return false;
            });

        })

        $(document).ready(function() {
            $('form.widget_wysija').submit(function(){
                console.log('send');
                if($(this).find('input[name="wysija[user][firstname]"]').eq(1).val() != 'First name' && $(this).find('input[name="wysija[user][email]"]').eq(1).val() != 'Email'){
                    $.ajax({
                        type : "GET",
                        url : '<?=admin_url('admin-ajax.php')?>',
                        data : {
                            action: 'send_mailpoet_newsletter',
                        },
                        success: function (response) {
                            console.log('AJAX response : ',response);
                        }
                    });
                }
            });
        });
    })(jQuery)

</script>
<?php wp_footer(); ?>

<script type="application/ld+json">
{
 "@context" : "http://schema.org",
 "@type" : "LocalBusiness",
 "name" : "Profusion",
 "image" : [ "https://www.profusion.com/wp-content/uploads/2018/10/logo.svg",
 "https://www.profusion.com/wp-content/uploads/2018/10/Personalised_message_has_impact.jpg",
 "https://www.profusion.com/wp-content/uploads/2018/10/Young-woman-with-dreadlocked-hair-engaged-on-phone.jpg",
 "https://www.profusion.com/wp-content/uploads/2018/10/men-with-laptop-having-a-coffee-2.jpg",
 "https://www.profusion.com/wp-content/uploads/2018/10/Home_couple_viewing_mobile.jpg"
 ],
 "telephone" : "020 7014 5450",
 "email" : "hello@profusion.com",
 "address" : {
   "@type" : "PostalAddress",
   "streetAddress" : "Telephone House, 69-77 Paul Street, Old Street",
   "addressLocality" : "London",
   "postalCode" : "EC2A 4NW"
 }
}
</script>
</body>
</html>