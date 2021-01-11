<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/rt_rw') ?>">RT/RW</a></li>
                <li class="breadcrumb-item active">Tambah RT/RW Baru</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Tambah RT/RW</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/rt_rw_update/') . $rt['kd'] ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">RT/RW</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="00/00" type="text" name="rt_rw" value="<?= $rt['rt_rw'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Ketua RT</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="k_rt" value="<?= $rt['k_rt'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Ketua RW</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="k_rw" value="<?= $rt['k_rw'] ?>">
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