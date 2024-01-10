<!--Call Start-->
<!-- <div class="call-us"
    style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['cta_background']; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-12">
                <div class="call-text">
                    <h3>
                        <?php echo $setting['cta_text']; ?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="button">
                    <a href="<?php echo $setting['cta_button_url']; ?>">
                        <?php echo $setting['cta_button_text']; ?> <i class="fa fa-chevron-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--Call End-->

<!--Footer-Area Start-->
<div class="footer-area mt_50 mb_50 pb_90" style=" background-color: #EAFFEE; ">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6 col-md-6">
                <div class="footer-item">
                    <h3>
                        <?php echo $setting['footer_col2_title']; ?>
                    </h3>
                    <ul>
                        <?php
                        $i = 0;
                        foreach ($all_news as $news) {
                            $i++;
                            if ($i > $setting['footer_recent_news_item']) {
                                break;
                            }
                            ?>
                            <li><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>">
                                    <?php echo $news['news_title']; ?>
                                </a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div> -->
            <div class="col-lg-6 col-md-6">
                <div class="footer-item">
                    <h3>
                        <?php echo $setting['footer_col4_title']; ?>
                    </h3>
                    <div class="footer-address-item">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <div class="text">
                            <span>
                                <?php echo nl2br($setting['footer_address']); ?>
                            </span>
                        </div>
                    </div>
                    <div class="footer-address-item">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <div class="text">
                            <span>
                                <?php echo nl2br($setting['footer_phone']); ?>
                            </span>
                        </div>
                    </div>
                    <div class="footer-address-item">
                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                        <div class="text">
                            <span>
                                <?php echo nl2br($setting['footer_email']); ?>
                            </span>
                        </div>
                    </div>
                    <ul class="footer-social">
                        <?php
                        foreach ($social as $row) {
                            if ($row['social_url'] != '') {
                                echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom pt_50 pb_50" style=" background-color: #39af4f; ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copy-text">
                    <p>
                        <?php echo $setting['footer_copyright']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer-Area End-->

<style>
    .floatwa {
        position: fixed;
        bottom: 0px;
        right: 0px;
        background-color: #ffffff;
        width: 100%;
        z-index: 1000;
        padding: 2px;
        margin: auto;
        text-align: center;
        float: none;
        box-shadow: 0px -2px 10px #c0c0c0;
    }

    .tombolwa {
        border: 1px #56aa71 solid;
        background-color: #2f7e49;
        width: 90%;
        padding: 4px;
        text-align: center;
        margin: 0;
        border-radius: 5px;
        margin: auto;
        text-align: center;
        float: none;
    }

    .floatwa a {
        color: white;
    }
</style>
<!--
<div class="floatwa">
<a href="https://api.whatsapp.com/send?phone=6281267669209&amp;text=Halo%20gan,%20Saya%20mau%20order" target="_blank"><div class="tombolwa">ORDER VIA WHATSAPP</div></a></div>
-->
<!--Scroll-Top-->
<div class="scroll-top">
    <i class="fa fa-angle-up"></i>
</div>
<!--Scroll-Top-->

<!--Js-->
<script src="<?php echo base_url(); ?>public/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.meanmenu.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.filterizr.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/viewportchecker.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/custom.js"></script>

<script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 11490678;
    (function () {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();

    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });

    $('#confirm-delete').on('show.bs.modal', function (e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
 
    }) (jQuery);
</script>
<noscript>
    <a href="https://www.livechatinc.com/chat-with/11490678/" rel="nofollow">Chat with us</a>,
    powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>

</body>

</html>