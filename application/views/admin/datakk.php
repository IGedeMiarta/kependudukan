<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data KK</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header  badge badge-success">
                        <h4>Data KK</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <a href="<?= base_url('admin/datakk_add') ?>" class="btn btn-success mb-3"><i class="fas fa-plus"> Tambah</i></a>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No KK</th>
                                        <th>Kepala Keluarga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($kk as $k) { ?>
                                        <tr>
                                            <td><?= $k->no_kk ?></td>
                                            <td><?= $k->kepala ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kk_edit/') . $k->id ?>" class="badge badge-warning"><i class="fas fa-edit"> Edit</i></a>
                                                <a href="<?= base_url('admin/kk_del/') . $k->id ?>" class="badge badge-danger"><i class="fas fa-trash"> Hapus</i></a>
                                            </td>
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