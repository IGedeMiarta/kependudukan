<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/pindah') ?>">Perpindahan</a></li>
                <li class="breadcrumb-item active">Perpindahan Baru</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Atas Nama : <?= $penduduk['nama'] ?></h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/pindah_act') ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tanggal Pindah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="tgl">
                                    </div>
                                </div>
                                <input type="text" name="id" id="" value="<?= $penduduk['id'] ?>" hidden>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Alamat Tujuan</label>
                                    <div class="col-sm-10">
                                        <!-- <input class="form-control" placeholder="Pekerjaan..." type="text" name="pekerjaan"> -->
                                        <textarea name="tujuan" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Keterangan Pindah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Menikah / Menetap / dll.." type="text" name="ket">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2">

                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!--end row-->
        </div><!-- container -->