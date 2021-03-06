<div class="block-header">
    <h2>
        Data Paket Jasa Kebersihan
    </h2>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <a href="<?= site_url('paket/p/input'); ?>" class="btn btn-primary waves-effect">TAMBAH</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Paket</th>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($val as $data) {
                             ?>
                            <tr>
                                <td width="10px"><?= $no++ ?></td>
                                <td><?= $data->id_paket; ?></td>
                                <td><?= $data->nama; ?></td>
                                <td><?= $data->harga; ?></td>
                                <td width="130px">
                                    <a href="<?= site_url('paket/p/input') ?>/<?= $data->id_paket ?>" class="btn btn-warning waves-effect">EDIT</a>
                                    <a href="<?= site_url('paket/hapus') ?>/<?= $data->id_paket ?>" class="btn btn-danger waves-effect" onclick="return confirm('Anda yakin ingin menghapus data!!')">HAPUS</a>
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
<!-- #END# Basic Examples -->
