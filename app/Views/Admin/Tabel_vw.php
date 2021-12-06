<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tabel Referal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th>Nama Pemilik</th>
                    <th>No.Hp</th>
                    <th>Nama Usaha</th>
                    <th>Alamat Usaha</th>
                    <th>Metode Akusisi</th>
                    <th>Foto KTP</th>
                    <th>Status</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Nama Sales</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $key => $baris) { ?>
                    <td><?= $baris['namapemilik']; ?></td>
                    <td><?= $baris['nohp']; ?></td>
                    <td><?= $baris['namausaha']; ?></td>
                    <td><?= $baris['alamatusaha']; ?></td>
                    <td><?= $baris['metode_akusisi']; ?></td>
                    <td><a href="javascript:void()" data-toggle="modal" data-target="#viewImage<?= $key ?>"><?= $baris['foto']; ?></a>
                        <hr />
                        <a href="<?= base_url('admin/tabel/download/' . $baris['idreperal']) ?>" class="btn btn-primary">Download</a>
                    </td>
                    <td><?= $baris['status']; ?></td>
                    <td><?= $baris['Tanggal']; ?></td>
                    <td><?= $baris['namasales']; ?></td>
                    <td><a href="<?= base_url('admin/tabel/updata/' . $baris['idreperal']) ?>" class="btn btn-primary">Closing</a>
                        <hr /> <a href="<?= base_url('admin/tabel/hapus/' .  $baris['idreperal']) ?>" class="btn btn-primary">Hapus</a>
                    </td>
                    <div class="modal fade" id="viewImage<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <img src="<?= base_url() . '/admin/fotoktp/' . $baris['foto'] ?>" alt="" width="100%">
                                <div class="modal-body">
                                    <a href="<?= base_url('admin/tabel/download/') . '/' . $baris['idreperal'] ?>" target="_black" class="btn btn-primary btn-sm">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>


    </tbody>
<?php } ?>
</table>

</div>
</div>