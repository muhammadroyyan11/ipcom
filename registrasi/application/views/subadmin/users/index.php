<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<ul class="breadcrumb">
    <li><a href="#">Beranda</a></li>
    <li class="active">Users</li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> Users</h2>
</div>
<!-- END PAGE TITLE -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo site_url('users/create'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> User</a>
            <!--   <a href="<?php echo site_url('admin/users'); ?>" class="btn btn-primary">See all users</a>       -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <!-- START DATATABLE EXPORT -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">DataTable Export</h3>
                            <div class="btn-group pull-right">
                                <a href="<?php echo site_url(); ?>exportprofil/generateXls" class="btn btn-danger"><i class="fa fa-download"></i> Export Data</a>
                            </div>
                        </div>
                        <?= showFlashMessage() ?>
                        <?= showMessage() ?>
                        <div class="panel-body">

                            <table id="table" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Level</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $no = 1;
                                    foreach ($users as $d) {
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $d->username; ?></td>
                                            <td><?= $d->nama; ?></td>
                                            <td><?= $d->level; ?></td>
                                            <!--
                                            <td><?php if ($d->active === '1') {
                                                    echo 'Aktif';
                                                } else if ($d->active === '0') {
                                                    echo 'Nonaktif';
                                                } else {
                                                    echo 'Error! gagal mengambil status akun';
                                                } ?></td>


                                            -->
                                            <td><?= $d->jabatan; ?></td>
                                            <td>
                                                <a href="<?php echo base_url(); ?>users/ubah/<?php echo $d->id ?>" class="btn btn-sm-btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!-- END DATATABLE EXPORT -->
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">

        </div>
    </div>
</div>