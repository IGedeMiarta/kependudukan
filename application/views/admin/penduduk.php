<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Penduduk</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header  badge badge-success">
                        <h4>Data Penduduk</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <a href="<?= base_url('admin/pendudukAdd') ?>" class="btn btn-success mb-3"><i class="fas fa-plus"> Tambah</i></a>
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>

                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>RT/RW</th>
                                        <th>Tempat, Tgl Lahir</th>
                                        <th>Jenkel</th>
                                        <th>Agama</th>
                                        <th>Pendidikan</th>
                                        <th>Pekerjaan</th>
                                        <th>Opsi</th>
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
                                            <td><?= $p->agama ?></td>
                                            <td><?= $p->pendidikan ?></td>
                                            <td><?= $p->pekerjaan ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/penduduk_edit/') . $p->id ?>" class="badge badge-warning"><i class="fas fa-edit"> Edit</i></a>
                                                <a href="<?= base_url('admin/penduduk_del/') . $p->id ?>" class="badge badge-danger"><i class="fas fa-trash"> Hapus</i></a>
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