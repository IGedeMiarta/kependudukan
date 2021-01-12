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
                <h4>Keluarga <?= $penduduk['nama']; ?></h4>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="<?= base_url('admin/keluarga_kk') ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group row">
                                    <label class="col-sm-2 ">NO KK</label>
                                    <div class="col-sm-10">
                                        <select name="kk" id="" class="form-control">
                                            <option value="">--Cari</option>
                                            <?php
                                            $kk = $this->db->get('kk')->result();
                                            foreach ($kk as $k) { ?>
                                                <option value="<?= $k->id ?>"><?= $k->no_kk . ' - ' . $k->kepala ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <input class="form-control" placeholder="Nama Kepala Keluarga" type="text" name="penduduk" value="<?= $penduduk['id'] ?>" hidden>

                                <div class="form-group row">
                                    <label class="col-sm-2 ">Hubugan</label>
                                    <div class="col-sm-10">
                                        <select name="hubungan" id="" class="form-control">
                                            <option value="">--pilih</option>
                                            <option value="Kepala">Kepala Keluarga</option>
                                            <option value="Istri">Istri</option>
                                            <option value="Anak">Anak</option>

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