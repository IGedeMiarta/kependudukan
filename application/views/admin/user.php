<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header badge badge-info">
                        <h4>Daftar User</h4>
                    </div>
                    <div class="card-body">
                        <form class="user" method="post" action="<?php echo base_url('auth/registration') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>');  ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username..." value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>');  ?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="role" id="" class="form-control">
                                    <option>--pilih</option>
                                    <option value="1">Staf Kaur Pemerintahan</option>
                                    <option value="2">Lurah</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info btn-user btn-block">
                                Daftarkan Account
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header  badge badge-success">
                        <h4>Data User</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($user as $p) { ?>
                                        <tr>

                                            <td><?= $p->nama ?></td>
                                            <td><?= $p->username ?></td>
                                            <td><?php

                                                if ($p->role == 1) {
                                                    echo 'Admin';
                                                } else if ($p->role == 2) {
                                                    echo 'Lurah';
                                                }
                                                ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div><!-- container -->