<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAP - APP</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo site_url('css/theme-default.css'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|M+PLUS+Rounded+1c|Marmelad|Merriweather|Quattrocento" rel="stylesheet">
    <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js') ?>"></script>
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
            <ul class="x-navigation">
                <li class="xn-logo">
                    <a href="<?php echo site_url('admin'); ?>">SIAP-APP</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
                <li class="xn-profile">
                    <a href="#" class="profile-mini">
                        <img src="<?php echo base_url() . 'foto/' . $this->session->userdata('foto') ?>" width="45px" height="45px" alt="Foto Profil" />
                    </a>
                    <div class="profile">
                        <div class="profile-image">
                            <img src="<?php echo base_url() . 'foto/' . $this->session->userdata('foto') ?>" alt="Foto Profil" />
                        </div>
                        <div class="profile-data">
                            <div class="profile-data-name"><?php echo $this->session->userdata('nama'); ?></div>
                            <div class="profile-data-name"><?php echo $this->session->userdata('jabatan'); ?></div>
                        </div>
                        <div class="profile-controls">
                            <a href="<?php echo base_url(); ?>profildb/ubah" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <!-- <li class="xn-title">MENU</li>   -->

                <li <?php if ($this->uri->segment(2) == "") {
                        echo 'class="active"';
                    } ?>>
                    <a href="<?php echo site_url('dekan'); ?>"><span class="fa fa-tachometer"></span> <span class="xn-text">Beranda</span></a>
                </li>
                <li <?php if ($this->uri->segment(2) == "ubahdekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>penggunadekan/ubahdekan"><span class="fa fa-user"></span> Profil</a></li>
                <li <?php if ($this->uri->segment(2) == "getKeteranganAktifDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>KeteranganAktif/getKeteranganAktifDekan"><span class="fa fa-compress"></span> Aktif Kuliah

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('keteranganaktif');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span></a></li>
                <li <?php if ($this->uri->segment(2) == "getBebanAkademikDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>BebanAkademik/getBebanAkademikDekan"><span class="fa fa-gavel"></span> Beban Akademik

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('bebanakademik');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span></a></li>

                <li <?php if ($this->uri->segment(2) == "getBerkelakuanBaikDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>BerkelakuanBaik/getBerkelakuanBaikDekan"><span class="fa fa-heart-o"></span> Berkelakuan Baik

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('berkelakuanbaik');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getBeasiswaDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>Beasiswa/getBeasiswaDekan"><span class="fa fa-usd"></span> Beasiswa

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('beasiswa');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getCutiPejabat") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>Cuti/getCutiPejabat"><span class="fa fa-expand"></span> Keterangan Cuti

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('cuti');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getBebasPustakaDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>BebasPustaka/getBebasPustakaDekan"><span class="fa fa-thumbs-up"></span> Bebas Pustaka

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('bebaspustaka');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getTugasAkhirDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>TugasAkhir/getTugasAkhirDekan"><span class="fa fa-folder-o"></span> Tugas Akhir

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('tugasakhir');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getBiayaKuliahDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>BiayaKuliah/getBiayaKuliahDekan"><span class="fa fa-building-o"></span> Biaya Kuliah

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('biayakuliah');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getKeteranganHilangDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>KeteranganHilang/getKeteranganHilangDekan"><span class="glyphicon glyphicon-print"></span> Pencetakan KHS

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('keteranganhilang');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>

                <li <?php if ($this->uri->segment(2) == "getHapusmkDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>Hapusmk/getHapusmkDekan"><span class="glyphicon glyphicon-trash"></span> Hapus Mata Kuliah

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('hapusmk');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>

                <li <?php if ($this->uri->segment(2) == "getKeteranganLulusDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>KeteranganLulus/getKeteranganLulusDekan"><span class="glyphicon glyphicon-check"></span> Keterangan Lulus

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('keteranganlulus');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>

                <li <?php if ($this->uri->segment(3) == "getPenelitianMahasiswaKaprodi") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>PenelitianMahasiswa/getPenelitianMahasiswaKaprodi"><span class="glyphicon glyphicon-edit"></span> Izin Penelitian

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('penelitianmahasiswa');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>

                <li <?php if ($this->uri->segment(3) == "getPermintaandata") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>Permintaandata/getPermintaandataDekan"><span class="glyphicon glyphicon-edit"></span> Permintaan Data

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('permintaandata');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>
                                </span>
                    </a></li>

                <li><a href="<?php echo site_url('auth/logout'); ?>"><span class="fa fa-sign-out"></span><span class="xn-text">Logout</span></a></li>
                <!---<li><?php echo anchor('admin/rake', 'RAKE Tool'); ?></li>  -->
                <!-- END X-NAVIGATION -->
        </div>
        <!-- END PAGE SIDEBAR -->
        <!-- PAGE CONTENT -->
        <!-- PAGE CONTENT -->
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                <!-- TOGGLE NAVIGATION -->
                <li class="xn-icon-button">
                    <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->

                <li class="dropdown">
                    <?= anchor('#', '<span class="glyphicon glyphicon-book"></span> e-Files <span class="caret"></span>', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false']) ?>
                    <ul class="dropdown-menu">
                        <li <?php if ($this->uri->segment(3) == "SKRektor") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>SKRektorDosen/getSKRektorDosen"><span class="glyphicon glyphicon-list-alt"></span> SK Rektor</a></li>
                        <li <?php if ($this->uri->segment(3) == "SKDekan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>SKDekanDosen/getSKDekanDosen"><span class="glyphicon glyphicon-list-alt"></span> SK Dekan</a></li>
                        <li <?php if ($this->uri->segment(3) == "pendidikan") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>MoUDosen/getMoUDosen"><span class="glyphicon glyphicon-list-alt"></span> MoU</a></li>
                    </ul>
                </li>

                <li <?php if ($this->uri->segment(2) == "getPenelitianDosenDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>PenelitianDosen/getPenelitianDosenDekan"><span class="fa fa-code"></span> izin Penelitian &nbsp;

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('penelitiandosen');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>

                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(2) == "getSuratTugasDekan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>SuratTugasDekan/getSuratTugasDekan"><span class="fa fa-paperclip"></span> Surat Tugas &nbsp;

                        <?php $this->db->select('*');
                        $this->db->where('verifikasi', '1');
                        $this->db->where('approval', '0');
                        $query = $this->db->get('surattugas');
                        $label = $query->num_rows();
                        if ($label == 0) {
                        ?>
                            <span class="label label-default pull-right">
                                <?php echo $query->num_rows(); ?>
                            <?php
                        } else {
                            ?>
                                <span class=" label label-danger pull-right">
                                    <?php echo $query->num_rows(); ?>
                                <?php
                            }
                                ?>

                                </span>
                    </a></li>
                <li <?php if ($this->uri->segment(3) == "agenda") {
                        echo 'class="active"';
                    } ?>><a href="#"><span class="glyphicon glyphicon-transfer"></span> Bantuan Pendidikan</a></li>
                <li <?php if ($this->uri->segment(3) == "agenda") {
                        echo 'class="active"';
                    } ?>><a href="#"><span class="fa fa-list"></span> Keterangan Mengajar</a></li>


                <li class="xn-search">
                    <form role="form">
                        <input type="text" name="search" placeholder="Search..." />
                    </form>
                </li>
                <!-- SIGN OUT -->
                <li class="xn-icon-button pull-right">
                    <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                </li>
                <!-- END SIGN OUT -->
                <!-- MESSAGES -->
                <li class="xn-icon-button pull-right">
                    <a href="#"><span class="fa fa-comments"></span></a>
                    <div class="informer informer-danger">4</div>
                    <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                            <div class="pull-right">
                                <span class="label label-danger">4 new</span>
                            </div>
                        </div>
                        <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-online"></div>
                                <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe" />
                                <span class="contacts-title">John Doe</span>
                                <p>Praesent placerat tellus id augue condimentum</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk" />
                                <span class="contacts-title">Dmitry Ivaniuk</span>
                                <p>Donec risus sapien, sagittis et magna quis</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-away"></div>
                                <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali" />
                                <span class="contacts-title">Nadia Ali</span>
                                <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="list-group-status status-offline"></div>
                                <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader" />
                                <span class="contacts-title">Darth Vader</span>
                                <p>I want my money back!</p>
                            </a>
                        </div>
                        <div class="panel-footer text-center">
                            <a href="pages-messages.html">Show all messages</a>
                        </div>
                    </div>
                </li>
                <!-- END MESSAGES -->
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
            <!-- END MESSAGE BOX-->
            <?php $this->load->view($mainView) ?>

            <!-- START PRELOADS -->
            <audio id="audio-alert" src="<?php echo base_url(); ?>audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="<?php echo base_url(); ?>audio/fail.mp3" preload="auto"></audio>
            <!-- END PRELOADS -->

            <script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/bootstrap-datetimepicker.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/jquery/jquery.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/jquery/jquery-ui.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
            <!-- END PLUGINS -->

            <!-- START THIS PAGE PLUGINS-->
            <script type="text/javascript" src="<?php echo site_url('js/plugins/icheck/icheck.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/scrolltotop/scrolltopcontrol.js'); ?>"></script>

            <script type="text/javascript" src="<?php echo site_url('js/plugins/morris/raphael-min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/morris/morris.min.js') ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/rickshaw/d3.v3.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/rickshaw/rickshaw.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-datepicker.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/owl/owl.carousel.min.js'); ?>"></script>

            <script type="text/javascript" src="<?php echo site_url('js/plugins/moment.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-datepicker.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-file-input.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/bootstrap/bootstrap-select.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tagsinput/jquery.tagsinput.min.js'); ?>"></script>
            <!-- START THIS PAGE PLUGINS-->
            <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/jquery.dataTables.delay.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/datatables/javascript.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/tableExport.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jquery.base64.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/html2canvas.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/libs/sprintf.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/jspdf.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/tableexport/jspdf/libs/base64.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/plugins/summernote/summernote.js'); ?>"></script>
            <!-- END THIS PAGE PLUGINS-->
            <!-- END SCRIPTS -->

            <!-- START TEMPLATE -->
            <script type="text/javascript" src="<?php echo site_url('js/plugins.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo site_url('js/actions.js'); ?>"></script>



</body>

</html>