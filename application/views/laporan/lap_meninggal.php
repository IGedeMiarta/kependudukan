<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Laporan Meninggal</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h6>Filter Berdasarkan Tanggal</h6>
                                    </div>
                                    <div class="card-body">

                                        <form method="get" action="">
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="tanggal_mulai">Tanggal Mulai</label>
                                                <input type="date" class="form-control" name="tanggal_mulai" placeholder="Masukkan tanggal mulai pinjam">
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-bold" for="tanggal_sampai">Tanggal Sampai</label>
                                                <input type="date" class="form-control" name="tanggal_sampai" placeholder="Masukkan tanggal pinjam sampai">
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Filter">
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        // membuat tombol cetak jika data sudah di filter
                        if (isset($_GET['tanggal_mulai']) && isset($_GET['tanggal_sampai'])) {
                            $mulai = $_GET['tanggal_mulai'];
                            $sampai = $_GET['tanggal_sampai'];
                        ?>
                            <a class='btn btn-primary' target="_blank" href='<?php echo base_url() . 'laporan/lap_meninggal_cetak?tanggal_mulai=' . $mulai . '&tanggal_sampai=' . $sampai ?>'><i class='fa fa-print'></i> CETAK</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="card">

                    <div class="card-body">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Meninggal</th>
                                    <th scope="col">NIK </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Jenkel</th>
                                    <th scope="col">TTL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mati as $m) { ?>
                                    <tr>
                                        <td><?= date('d M Y', strtotime($m->tgl_meninggal)); ?></td>
                                        <td><?= $m->nik ?></td>
                                        <td><?= $m->nama ?></td>
                                        <td><?php if ($m->jenkel == 'L') {
                                                echo 'Laki-Laki';
                                            } else {
                                                echo 'Perempuan';
                                            }
                                            ?></td>
                                        <td><?= $m->tempat_lh . ', ' . $m->tgl_lh ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>


                </div>

            </div>
        </div>
        <!--end row-->
    </div><!-- container -->