<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard Admin Universitas</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psydebate/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Debat');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-DEBAT</div>
                    <div class="widget-subtitle">Registered</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyscience/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                   $this->db->where('reg_jenis', 'Psy-Cerdas Cermat');
                   $this->db->where('reg_universitas', $sub);
                   $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-CERDAS CERMAT</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psytahfidz1/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                   $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 1-5');
                   $this->db->where('reg_universitas', $sub);
                   $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-TAHFIDZ 5 JUZ (JUZ 1-5)</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        <div class="col-md-3">

            <!-- START WIDGET CLOCK -->
            <div class="widget widget-danger widget-padding-sm">
                <div class="widget-big-int plugin-clock">00:00</div>
                <div class="widget-subtitle plugin-date">Loading...</div>
                <div class="widget-controls">
                </div>
                <div class="widget-buttons widget-c3">
                    <div class="col">
                        <a href="#"><span class="fa fa-clock-o"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-bell"></span></a>
                    </div>
                    <div class="col">
                        <a href="#"><span class="fa fa-calendar"></span></a>
                    </div>
                </div>
            </div>
            <!-- END WIDGET CLOCK -->

        </div>
    </div>
    <!-- END WIDGETS -->

    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psytahfidz30/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                   $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 30');
                   $this->db->where('reg_universitas', $sub);
                   $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-TAHFIDZ JUZ 30</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyessay/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Esai');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-ESAI</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypaper/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Paper');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-PAPER</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyproposal/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Proposal');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-PROPOSAL</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>

    </div>
    <!-- END WIDGETS -->
    
     <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyhcmotion/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                   $this->db->where('reg_jenis', 'Psy-HCMotion');
                   $this->db->where('reg_universitas', $sub);
                   $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-HCMOTION</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypuisi/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Cerpen');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-CERPEN</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyqiraah/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Qira\'ah');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-QIRA'AH</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypreach/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Preach');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-PREACH</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>

    </div>
    <!-- END WIDGETS -->
    
    
       <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyreligi/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Lagu Religi');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-LAGU RELIGI</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyphotography/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Fotografi');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-PHOTOGRAPHY</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
        
       <div class="row">
       
        
        
        
<div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyposter/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Poster');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">PSY-POSTER</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->

        </div>
            <!-- END WIDGET REGISTRED -->



    
    <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Peserta/sub') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php 
                    $sub = $this->session->userdata('reg_universitas');
                    $this->db->select('*');
                    $this->db->where('reg_universitas', $sub);
                    $query = $this->db->get('tbl_reg');
                    ?>
                    <div class="widget-int num-count"><?php echo $query->num_rows(); ?></div>
                    <div class="widget-title">Peserta</div>
                    <div class="widget-subtitle">Registrasi</div>
                </div>
                <div class="widget-controls">
                </div>
            </div>
            <!-- END WIDGET REGISTRED -->
            
    </div>
        </div>
    <!-- END WIDGETS -->
    <!-- END WIDGETS -->
    
       <!-- START WIDGETS -->
   
  