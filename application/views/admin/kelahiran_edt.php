<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <div class="bred mt-n5 mb-n3 content-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('admin/kelahiran') ?>">Kelahiran</a></li>
                <li class="breadcrumb-item active">Tambah Kelahiran</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header badge badge-success">
                <h4>Tambah Kelahiran</h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <?php echo $this->session->flashdata('messege'); ?>
                    <form action="<?= base_url('admin/kelahiran_update/') . $kelahiran['id_lahir'] ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">KK</label>
                                    <div class="col-sm-10">
                                        <select name="no_kk" id="" class="form-control">
                                            <option value="<?= $kelahiran['id_kk'] ?>"><?= $kelahiran['no_kk'] . ' - ' . $kelahiran['kepala'] ?></option>
                                            <?php foreach ($kk as $k) { ?>
                                                <option value="<?= $k->id ?>"><?= $k->no_kk . ' - ' . $k->kepala ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" value="<?= $kelahiran['nama'] ?>" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Tempat Lahir" value="<?= $kelahiran['tempat_lh'] ?>" type="text" name="tempat_lh">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 ">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" placeholder="Tanggal Lahir" type="date" value="<?= $kelahiran['tgl_lh'] ?>" name="tgl_lh">
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-sm-2" for="jenis_kelamin">Jenis Kelamin</label>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label><input type="radio" name="jenis_kelamin" <?php if ($kelahiran['jenkel'] == 'L') {
                                                                                                echo "checked";
                                                                                            } ?> value="L"> Laki-laki</label>
                                            <label><input type="radio" name="jenis_kelamin" <?php if ($kelahiran['jenkel'] == 'P') {
                                                                                                echo "checked";
                                                                                            } ?> value="P"> Perempuan</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-sm-2">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="agama">
                                            <option value="<?= $kelahiran['agama'] ?>"><?= $kelahiran['agama'] ?></option>
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