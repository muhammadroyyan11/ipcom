<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAP - APP</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="<?php echo site_url('css/theme-default.css'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
                            <!-- <div class="xn-title"><?= $users->company ?></div>-->
                        </div>
                        <div class="profile-controls">
                            <a href="<?php echo base_url(); ?>profildb/ubahadm" class="profile-control-left"><span class="fa fa-info"></span></a>
                            <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                        </div>
                    </div>
                </li>
                <!-- <li class="xn-title">MENU</li>   -->

                <li <?php if ($this->uri->segment(2) == "") {
                        echo 'class="active"';
                    } ?>>
                    <a href="<?php echo site_url('TU'); ?>"><span class="fa fa-tachometer"></span> <span class="xn-text">Beranda</span></a>
                </li>
                <?php $adm = $this->session->userdata('id'); ?>
                <li <?php if ($this->uri->segment(2) == "ubahadm") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>PenggunaTU/ubahadm"><span class="fa fa-user"></span> Profil</a></li>
                <li <?php if ($this->uri->segment(2) == "getPendidikanPegawai") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>PendidikanTU/getPendidikanPegawai"><span class="fa fa-graduation-cap"></span> Pendidikan</a></li>
                <li <?php if ($this->uri->segment(2) == "getPekerjaan") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>PekerjaanTU/getPekerjaan"><span class="fa fa-suitcase"></span> Kepangkatan</a></li>
                <li <?php if ($this->uri->segment(2) == "getOrganisasi") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>OrganisasiTU/getOrganisasi"><span class="fa fa-group"></span> Organisasi</a></li>
                <li <?php if ($this->uri->segment(2) == "getSeminar") {
                        echo 'class="active"';
                    } ?>><a href="<?php echo site_url(); ?>SeminarTU/getSeminar"><span class="fa fa-plane"></span> Pelatihan/Seminar</a></li>
                <li><a href="<?php echo site_url('auth/logout'); ?>"><span class="fa fa-sign-out"></span><span class="xn-text">Logout</span></a></li>
                <!---<li><?php echo anchor('admin/rake', 'RAKE Tool'); ?></li>  -->
            </ul>
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
                <li class="xn-openable"><a href="#"><span class="fa fa-list"></span><span class="xn-text"> Layanan Mahasiswa</span></a>
                    <ul>
                        <li class="xn-openable"><a href="#"><span class="fa fa-bookmark"></span><span class="xn-text"> Surat Keterangan</span></a>
                            <ul>
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>KeteranganAktifTU/getKeteranganAktifAdm"><span class="fa fa-floppy-o"></span> Aktif Kuliah
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>BebanAkademik/getBebanAkademikAdm"><span class="fa fa-gavel"></span> Beban Akademik
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>BerkelakuanBaik/getBerkelakuanBaikAdm"><span class="fa fa-heart-o"></span> Berkelakuan Baik
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>Beasiswa/getBeasiswaAdm"><span class="fa fa-usd"></span> Beasiswa
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "pengumuman") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>Cuti/getCutiAdm"><span class="fa fa-expand"></span> Keterangan Cuti
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>BebasPustaka/getBebasPustakaAdm"><span class="fa fa-thumbs-up"></span> Bebas Pustaka
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>TugasAkhir/getTugasAkhirAdm"><span class="fa fa-folder-o"></span> Tugas Akhir
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>Dispensasi/getDispensasiAdm"><span class="fa fa-recycle"></span> Dispensasi
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
                                        $query = $this->db->get('dispensasi');
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
                                <li <?php if ($this->uri->segment(3) == "tentang") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>BiayaKuliah/getBiayaKuliahAdm"><span class="fa fa-building"></span> Biaya Kuliah
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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
                                <li <?php if ($this->uri->segment(3) == "agenda") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>KeteranganHilang/getKeteranganHilangAdm"><span class="glyphicon glyphicon-print"></span> Pencetakan KHS
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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

                                <li <?php if ($this->uri->segment(3) == "agenda") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>Hapusmk/getHapusmkAdm"><span class="glyphicon glyphicon-trash"></span> Hapus Mata Kuliah
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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

                                <li <?php if ($this->uri->segment(3) == "agenda") {
                                        echo 'class="active"';
                                    } ?>><a href="<?php echo site_url(); ?>KeteranganLulus/getKeteranganLulusAdm"><span class="glyphicon glyphicon-check"></span> Keterangan Lulus
                                        <?php $this->db->select('*');
                                        $this->db->where('verifikasi', '0');
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

                            </ul>
                        </li>
                        <li <?php if ($this->uri->segment(3) == "getPenelitianMahasiswa") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>PenelitianMahasiswa/getPenelitianMahasiswaAdm"><span class="fa fa-code"></span> Izin Penelitian
                                <?php $this->db->select('*');
                                $this->db->where('verifikasi', '0');
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
                            } ?>><a href="<?php echo site_url(); ?>Permintaandata/getPermintaandataAdm"><span class="fa fa-code"></span> Permintaan Data
                                <?php $this->db->select('*');
                                $this->db->where('verifikasi', '0');
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

                        <li <?php if ($this->uri->segment(3) == "download") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>KunjunganMahasiswa/getKunjunganMahasiswaAdm"><span class="fa fa-desktop"></span> Kunjungan Mahasiswa
                                <?php $this->db->select('*');
                                $this->db->where('verifikasi', '0');
                                $query = $this->db->get('kunjunganmahasiswa');
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

                        <li <?php if ($this->uri->segment(3) == "download") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>Skripsi/getSkripsiUmum"><span class="fa fa-building"></span> Penyerahan Skripsi
                            </a></li>
                    </ul>
                </li>
                <li class="xn-openable"><a href="#"><span class="fa fa-list"></span><span class="xn-text"> Layanan Dosen</span></a>
                    <ul>
                        <li <?php if ($this->uri->segment(3) == "download") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>PenelitianDosen/getPenelitianDosenAdm"><span class="fa fa-code"></span> izin Penelitian
                                <?php $this->db->select('*');
                                $this->db->where('verifikasi', '0');
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
                        <li <?php if ($this->uri->segment(3) == "download") {
                                echo 'class="active"';
                            } ?>><a href="<?php echo site_url(); ?>SuratTugas/getSuratTugasAdm"><span class="fa fa-paperclip"></span> Surat Tugas
                                <?php $this->db->select('*');
                                $this->db->where('verifikasi', '0');
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
                            } ?>><a href="#"><span class="fa fa-glyphicon glyphicon-transfer"></span> Bantuan Pendidikan</a></li>
                        <li <?php if ($this->uri->segment(3) == "agenda") {
                                echo 'class="active"';
                            } ?>><a href="#"><span class="fa fa-cog"></span> Keterangan Mengajar</a></li>
                    </ul>
                </li>
                <!-- END TOGGLE NAVIGATION -->
                <!-- SEARCH -->
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