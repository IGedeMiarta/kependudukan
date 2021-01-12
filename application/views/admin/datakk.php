<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data KK</li>
            </ol>
        </div>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header badge badge-success" id="headingTwo">
                    <div class="row">
                        <div class="col-11">
                            <h4 class="pull-left">Hubungkan Keluarga</h4>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="text-white "><i class="fas fa-eye"></i></h4>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">

                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>RT/RW</th>
                                    <th>Tempat, Tgl Lahir</th>
                                    <th>Jenkel</th>
                                    <th>Keluarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($penduduk as $p) { ?>
                                    <tr>

                                        <td><?= $p->nik ?></td>
                                        <td><?= $p->nama ?></td>
                                        <td><?= $p->rt_rw ?></td>
                                        <td><?= $p->tempat_lh . ', ' . date('d M Y', strtotime($p->tgl_lh)) ?></td>
                                        <td><?php
                                            if ($p->jenkel == 'L') {
                                                echo 'Laki-Laki';
                                            } else {
                                                echo 'Perempuan';
                                            }
                                            ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/kk_add/') . $p->id ?>" class="btn btn-success"><i class="fas fa-arrow-alt-circle-right"> Hubungkan</i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

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
                            <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No KK</th>
                                        <th>Kepala Keluarga</th>
                                        <th>Detail</th>
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
                                            <td class="text-center">
                                                <a href="<?= base_url('admin/kk_detail/') . $k->id ?>" class="badge badge-info"><i class="fas fa-eye"> Detail</i></a>
                                            </td>
                                            <td class="text-center">
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