<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/kematian') ?>">Kematian</a></li>
                <li class="breadcrumb-item active">Kamatian Baru</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Atas Nama : <?= $penduduk['nama'] ?></h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/mati_act') ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tanggal Kematian</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="tgl">
                                    </div>
                                </div>
                                <input type="text" name="id" id="" value="<?= $penduduk['id'] ?>" hidden>

                                <div class="form-group row">
                                    <label class="col-sm-2 "> Sebab</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Kecelakaan / Sakit / Tua / dll.." type="text" name="sebab">
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