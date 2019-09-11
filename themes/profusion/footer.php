
<footer class="b-footer">
    <div class="container">
        <div class="section-b tac">
            <?php the_field('social_text', 'options'); ?>

            <ul class="list social__list-footer">
                <li>
                    <a href="mailto:<?php bloginfo('admin_email'); ?>">
                        <svg width="22.9px" height="14.9px" viewBox="0 0 22.9 14.9" style="enable-background:new 0 0 22.9 14.9;"
                             xml:space="preserve">
								<path class="social__icoS" d="M11,8.4c0.2,0.2,0.6,0.2,0.8,0l9.7-6.6L21.9,1H1l0.2,0.7L11,8.4z M1,2.7v9.4l6.8-4.8L1,2.7z M15,7.4l6.8,4.8
									V2.7L15,7.4z M21.9,13.9l-0.3-0.8L14.2,8l-2.3,1.6c-0.2,0.2-0.6,0.2-0.8,0L8.7,8l-7.4,5.1L1,13.9H21.9z M22.4,14.9H0.5
									c-0.3,0-0.5-0.2-0.5-0.5V0.5C0,0.2,0.2,0,0.5,0h21.9c0.3,0,0.5,0.2,0.5,0.5v13.9C22.9,14.7,22.6,14.9,22.4,14.9"/>
								</svg>
                    </a>
                </li>
                <?php if($site_ln = get_field('site_ln', 'options')): ?>
                    <li>
                        <a href="<?php echo $site_ln; ?>" target="_blank">
                            <svg width="19.3px" height="19px" viewBox="0 0 19.3 19" style="enable-background:new 0 0 19.3 19;"
                                 xml:space="preserve">
								<path class="social__icoS" d="M0.3,6.3h4V19h-4V6.3z M2.3,0c1.3,0,2.3,1,2.3,2.3c0,1.3-1,2.3-2.3,2.3C1,4.6,0,3.5,0,2.3C0,1,1,0,2.3,0"/>
                                <path class="social__icoS" d="M6.8,6.3h3.8V8h0.1c0.5-1,1.8-2,3.8-2c4.1,0,4.8,2.6,4.8,6V19h-4v-6.2c0-1.5,0-3.4-2.1-3.4c-2.1,0-2.4,1.6-2.4,3.2V19h-4
									V6.3z"/>
								</svg>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if($site_fb = get_field('site_fb', 'options')): ?>
                    <li>
                        <a href="<?php echo $site_fb; ?>" target="_blank">
                            <svg width="11.1px" height="23.7px" viewBox="0 0 11.1 23.7" style="enable-background:new 0 0 11.1 23.7;"
                                 xml:space="preserve">
								<defs>
                                </defs>
                                <path class="social__icoS" d="M2.4,4.6v3.3H0v4h2.4v11.9h4.9V11.8h3.3c0,0,0.3-1.9,0.5-4H7.3V5.1c0-0.4,0.5-1,1.1-1h2.7V0H7.4C2.3,0,2.4,4,2.4,4.6"/>
								</svg>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if($site_yt = get_field('site_yt', 'options')): ?>
                    <li>
                        <a href="<?php echo $site_yt; ?>" target="_blank">
                            <svg width="22px" height="16px" viewBox="0 0 22 16" version="1.1" >
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g>
                                        <path d="M21.4914,2.8684 C21.2424,1.9294 20.5074,1.1904 19.5744,0.9394 C17.8834,0.4834 11.1034,0.4834 11.1034,0.4834 C11.1034,0.4834 4.3234,0.4834 2.6334,0.9394 C1.7004,1.1904 0.9654,1.9294 0.7164,2.8684 C0.2634,4.5704 0.2634,8.1204 0.2634,8.1204 C0.2634,8.1204 0.2634,11.6714 0.7164,13.3734 C0.9654,14.3124 1.7004,15.0514 2.6334,15.3024 C4.3234,15.7584 11.1034,15.7584 11.1034,15.7584 C11.1034,15.7584 17.8834,15.7584 19.5744,15.3024 C20.5074,15.0514 21.2424,14.3124 21.4914,13.3734 C21.9444,11.6714 21.9444,8.1204 21.9444,8.1204 C21.9444,8.1204 21.9444,4.5704 21.4914,2.8684 Z M2.1104,14.0344 L20.0964,14.0344 L20.0964,1.8384 L2.1104,1.8384 L2.1104,14.0344 Z" class="social__icoS"></path>
                                        <path d="M2.111,14.034 L20.097,14.034 L20.097,1.838 L2.111,1.838 L2.111,14.034 Z M8.887,4.897 L14.553,8.121 L8.887,11.344 L8.887,4.897 Z" class="social__icoS"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($site_insta = get_field('site_insta', 'options')): ?>
                    <li>
                        <a href="<?php echo $site_insta; ?>" target="_blank">
                            <svg width="23.1px" height="23.1px" viewBox="0 0 23.1 23.1" style="enable-background:new 0 0 23.1 23.1;"
                                 xml:space="preserve">
								<path class="social__icoS" d="M11.5,0C8.4,0,8,0,6.8,0.1C5.6,0.1,4.7,0.3,4,0.6c-0.8,0.3-1.4,0.7-2,1.3c-0.6,0.6-1,1.3-1.3,2
									C0.3,4.7,0.1,5.6,0.1,6.8C0,8,0,8.4,0,11.5c0,3.1,0,3.5,0.1,4.8c0.1,1.2,0.3,2.1,0.5,2.8c0.3,0.8,0.7,1.4,1.3,2c0.6,0.6,1.3,1,2,1.3
									C4.7,22.8,5.6,23,6.8,23c1.2,0.1,1.6,0.1,4.8,0.1c3.1,0,3.5,0,4.8-0.1c1.2-0.1,2.1-0.3,2.8-0.5c0.8-0.3,1.4-0.7,2-1.3
									c0.6-0.6,1-1.3,1.3-2c0.3-0.7,0.5-1.6,0.5-2.8c0.1-1.2,0.1-1.6,0.1-4.8c0-3.1,0-3.5-0.1-4.8C23,5.6,22.8,4.7,22.5,4
									c-0.3-0.8-0.7-1.4-1.3-2c-0.6-0.6-1.3-1-2-1.3c-0.7-0.3-1.6-0.5-2.8-0.5C15.1,0,14.7,0,11.5,0 M11.5,2.1c3.1,0,3.4,0,4.7,0.1
									c1.1,0.1,1.7,0.2,2.1,0.4c0.5,0.2,0.9,0.5,1.3,0.9c0.4,0.4,0.7,0.8,0.9,1.3c0.2,0.4,0.3,1,0.4,2.1C21,8.1,21,8.5,21,11.5
									s0,3.4-0.1,4.7c-0.1,1.1-0.2,1.7-0.4,2.1c-0.2,0.5-0.5,0.9-0.9,1.3s-0.8,0.7-1.3,0.9c-0.4,0.2-1,0.3-2.1,0.4C15,21,14.6,21,11.5,21
									c-3.1,0-3.4,0-4.7-0.1c-1.1-0.1-1.7-0.2-2.1-0.4c-0.5-0.2-0.9-0.5-1.3-0.9s-0.7-0.8-0.9-1.3c-0.2-0.4-0.3-1-0.4-2.1
									c-0.1-1.2-0.1-1.6-0.1-4.7s0-3.4,0.1-4.7c0.1-1.1,0.2-1.7,0.4-2.1C2.8,4.2,3,3.8,3.4,3.4C3.8,3,4.2,2.8,4.7,2.5
									c0.4-0.2,1-0.3,2.1-0.4C8.1,2.1,8.5,2.1,11.5,2.1"/>
                                <path class="social__icoS" d="M11.5,15.4c-2.1,0-3.8-1.7-3.8-3.8s1.7-3.8,3.8-3.8s3.8,1.7,3.8,3.8S13.7,15.4,11.5,15.4 M11.5,5.6
									c-3.3,0-5.9,2.7-5.9,5.9s2.7,5.9,5.9,5.9c3.3,0,5.9-2.7,5.9-5.9S14.8,5.6,11.5,5.6"/>
                                <path class="social__icoS" d="M19.1,5.4c0,0.8-0.6,1.4-1.4,1.4c-0.8,0-1.4-0.6-1.4-1.4c0-0.8,0.6-1.4,1.4-1.4C18.5,4,19.1,4.6,19.1,5.4"/>
								</svg>

                        </a>
                    </li>
                <?php endif; ?>
                <?php if($site_twitter = get_field('site_twitter', 'options')): ?>
                    <li>
                        <a href="<?php echo $site_twitter; ?>" target="_blank">
                            <svg width="24px" height="19.3px" viewBox="0 0 24 19.3" style="enable-background:new 0 0 24 19.3;"
                                 xml:space="preserve">
								<path id="XMLID_1_" class="social__icoS" d="M23.9,2.4c-0.8,0.3-1.7,0.6-2.6,0.7c1-0.6,1.7-1.4,2.1-2.5c0-0.1,0-0.1-0.1-0.1
									c-0.9,0.5-1.9,0.9-3,1.1C19.4,0.6,18.1,0,16.7,0c-2.7,0-5,2.2-5,4.9c0,0.4,0,0.8,0.1,1.1C7.8,5.8,4.1,3.9,1.7,0.9c0,0,0,0,0,0
									C1.2,1.6,1,2.5,1,3.3c0,1.7,0.8,3.1,2.1,4c0,0,0,0.1,0,0.1C2.4,7.4,1.6,7.1,1,6.8c0,0,0,0,0,0C1,7,1.1,8,1.3,8.6
									c0.6,1.5,2,2.7,3.6,3c-0.4,0.1-0.9,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0,0,0,0,0,0c0.6,1.9,2.4,3.3,4.5,3.3c0,0,0,0,0,0.1
									c-1.7,1.3-3.8,2-6.1,2c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.6,2.2c3.9,0,7-1.3,9.3-3.3c2.3-2,3.8-4.8,4.5-7.6
									c0.2-1,0.3-2,0.3-2.9c0-0.2,0-0.4,0-0.6c0.9-0.6,1.7-1.4,2.3-2.3C24,2.4,24,2.4,23.9,2.4z"/>
								</svg>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
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