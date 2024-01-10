<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <!-- START WIDGETS -->
    <div class="row">
        <div class="col-md-3">

            <!-- START WIDGET REGISTRED -->
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psydebate') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Debat');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyscience') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                   $this->db->where('reg_jenis', 'Psy-Cerdas Cermat');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psytahfidz1') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                   $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 1-5');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psytahfidz30') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                   $this->db->where('reg_jenis', 'PSY-TAHFIDZ JUZ 30');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyessay') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Esai');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypaper') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Paper');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyproposal') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Proposal');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyhcmotion') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                   $this->db->where('reg_jenis', 'Psy-HCMotion');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypuisi') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Cerpen');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyqiraah') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Qira\'ah');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psypreach') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Preach');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyreligi') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Lagu Religi');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyphotography') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Fotografi');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Psyposter') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
                    $this->db->where('reg_jenis', 'Psy-Poster');
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
            <div class="widget widget-default widget-item-icon" onclick="location.href='<?= base_url('Peserta') ?>';">
                <div class="widget-item-left">
                    <span class="fa fa-user"></span>
                </div>
                <div class="widget-data">
                    <?php $this->db->select('*');
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
   
  