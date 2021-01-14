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
                        <h4>Keluarga <?= $kk['kepala'] ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>RT/RW</th>
                                        <th>Tempat, Tgl Lahir</th>
                                        <th>Jenkel</th>
                                        <th>Hubungan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($penduduk as $p) { ?>
                                        <tr>

                                            <td><?= $p->nik ?></td>
                                            <td><?php if ($p->ket == 0) {
                                                    echo '<b>(alm) </b>' . $p->nama;
                                                } else {
                                                    echo $p->nama;
                                                }  ?></td>
                                            <td><?= $p->rt_rw ?></td>
                                            <td><?= $p->tempat_lh . ', ' . date('d M Y', strtotime($p->tgl_lh)) ?></td>
                                            <td><?php
                                                if ($p->jenkel == 'L') {
                                                    echo 'Laki-Laki';
                                                } else {
                                                    echo 'Perempuan';
                                                }
                                                ?></td>
                                            <td><?= $p->hubungan ?></td>
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