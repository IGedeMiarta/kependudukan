<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/penduduk') ?>">Penduduk</a></li>
                <li class="breadcrumb-item active">Tambah Penduduk</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Tambah Penduduk</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/penduduk_act') ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">NIK</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nomer Induk Kependudukan" type="number" name="nik">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Tempat Lahir" type="text" name="tempat_lh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Tanggal Lahir" type="date" name="tgl_lh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2" for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
                                            <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="agama">
                                            <option>--pilih--</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Penghayat Kepercayaan">Penghayat Kepercayaan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Pendidikan..." type="text" name="pendidikan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Pekerjaan..." type="text" name="pekerjaan">
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