<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/datakk') ?>">Data KK</a></li>
                <li class="breadcrumb-item active">Tambah KK</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Tambah KK</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/kk_update/') . $kk['id'] ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">NO KK</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nomer Induk Kartu Keluarga" type="number" name="no_kk" value="<?= $kk['no_kk'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Kepala Keluarga</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nama Kepala Keluarga" type="text" name="kepala" value="<?= $kk['kepala'] ?>">
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