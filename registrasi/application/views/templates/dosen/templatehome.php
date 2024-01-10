<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAP - APP</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo site_url('css/theme-default.css');?>"/>
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="<?php echo site_url('admin');?>">KIMPSI II</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="<?php echo base_url() . 'foto/' . $this->session->userdata('foto') ?>"  width="45px" height="45px" alt="Foto Profil"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="<?php echo base_url() . 'foto/' . $this->session->userdata('foto') ?>" alt="Foto Profil"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name"><?php echo $this->session->userdata('nama');?></div>
                        <div class="profile-data-name"><?php echo $this->session->userdata('jabatan');?></div>
                        <!-- <div class="xn-title"><?= $users->company ?></div>-->
                    </div>
                    <div class="profile-controls">
                        <a href="<?php echo base_url(); ?>profildb/ubahjuri" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                    </div>
                </div>
            </li>
             <!-- <li class="xn-title">MENU</li>   -->
            
            <li <?php if($this->uri->segment(2)==""){echo 'class="active"';} ?>>
                <a href="<?php echo site_url('lomba');?>"><span class="fa fa-tachometer"></span> <span class="xn-text">Beranda</span></a>
            </li>
            <?php
            $username = $this->session->userdata('nama');
            $lomba = $this->session->userdata('reg_jenis');
            if ($lomba == 'Psy-Paper'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psypaper'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Paper</span></a></li> 
            <?php
            } elseif ($lomba == 'Psy-Poster'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyposter'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Poster</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Proposal'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyproposal'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Proposal</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Cerpen'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psypuisi'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Cerpen</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Lagu Religi'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psylagureligi'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Lagu Religi</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Esai'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyessay'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Esai</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Qira\'ah'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyqiraah'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Qira'ah</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Preach'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psypreach'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Preach</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Fotografi'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyphotography'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Photography</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Debat'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psydebat'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Debat</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-Cerdas Cermat'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psycerdascermat'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-Cerdas Cermat</span></a></li>
            <?php
            } elseif ($lomba == 'Psy-HCMotion'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psyhcmotion'); ?>"><span class="fa fa-user"></span><span class="xn-text">Psy-HCMotion</span></a></li>
            <?php
            } elseif ($lomba == 'PSY-TAHFIDZ JUZ 1-5'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psytahfidz15'); ?>"><span class="fa fa-user"></span><span class="xn-text">PSY-TAHFIDZ JUZ 1-5</span></a></li>
            <?php
            } elseif ($lomba == 'PSY-TAHFIDZ JUZ 30'){ ?>
                <li><a href="<?php echo site_url('Lomba/Psytahfidz30'); ?>"><span class="fa fa-user"></span><span class="xn-text">PSY-TAHFIDZ JUZ 30</span></a></li>
            <?php
            } ?>
       
            <li <?php if($this->uri->segment(2)=="nilai"){echo 'class="active"';} ?>>
                <a href="<?php echo site_url('nilai/getLomba');?>"><span class="fa fa-signal"></span> <span class="xn-text">Penilaian</span></a>
            </li>
                <li><a href="<?php echo site_url('auth/logout'); ?>"><span class="fa fa-sign-out"></span><span class="xn-text">Logout</span></a></li>

         <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->
    <!-- PAGE CONTENT -->
    <!-- PAGE CONTENT -->
    <div class="page-content">
        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel navbar-collapse collapse">
            <!-- TOGGLE NAVIGATION -->
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <!-- END TOGGLE NAVIGATION -->
            <!-- SEARCH -->
        <!-- Phonebook -->

            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
            </li>
            <!-- END SIGN OUT -->
        </ul>

        <!-- END X-NAVIGATION VERTICAL -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END MESSAGE BOX  -->
        <?php $this->load->view($mainView) ?>
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url();?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url();?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

        <script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/bootstrap-datetimepicker.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/jquery/jquery.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/jquery/jquery-ui.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap.min.js');?>"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type="text/javascript" src="<?php echo site_url('js/plugins/icheck/icheck.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/scrolltotop/scrolltopcontrol.js');?>"></script>

        <script type="text/javascript" src="<?php echo site_url('js/plugins/morris/raphael-min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/morris/morris.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/rickshaw/d3.v3.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/rickshaw/rickshaw.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-datepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/owl/owl.carousel.min.js');?>"></script>

        <script type="text/javascript" src="<?php echo site_url('js/plugins/moment.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/daterangepicker/daterangepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-datepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-file-input.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-select.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tagsinput/jquery.tagsinput.min.js');?>"></script>
        <!-- START THIS PAGE PLUGINS-->
        <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/jquery.dataTables.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/jquery.dataTables.delay.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/javascript.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/tableExport.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jquery.base64.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/html2canvas.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/libs/sprintf.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/jspdf.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/libs/base64.js');?>"></script>
         <script type="text/javascript" src="<?php echo site_url('js/plugins/summernote/summernote.js');?>"></script>
        <!-- END THIS PAGE PLUGINS-->
        <!-- END SCRIPTS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo site_url('js/plugins.js');?>"></script>
        <script type="text/javascript" src="<?php echo site_url('js/actions.js');?>"></script>

</body>
</html>