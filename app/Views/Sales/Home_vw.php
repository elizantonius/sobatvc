<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
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

    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <p><b>Reperal: <?= $totalReferal ?></b></p>
                <p><b>Closing Reperal: <?= $totalReword['jumlah'] ?></b></p>
                <p><b>Reward: <?= number_format($totalReword['jumlah'] * 50000, 2, '.', ',') ?></b></p>
                <hr />
                <!-- Button trigger modal -->
                <button type="button" class=" btn btn-primary " data-toggle="modal" data-target="#exampleModal">
                    Tambah Reperal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Reperal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/sales/home/add') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="namapemilik" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                                        <input type="text" class="form-control" name="nohp" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Usaha</label>
                                        <input type="text" class="form-control" name="namausaha" aria-describedby="emailHelp">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Alamat Usaha</label>
                                        <input type="text" class="form-control" name="alamatusaha" aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" aria-describedby="emailHelp">

                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Metode Akusisi</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metode" id="metode" value="Livin by Mandiri">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Livin by Mandiri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="metode" id="metode" value="Manual">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Manual
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="FotoKTP" class="form-label">Foto KTP</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fotoktp" accept=".png .jpg .jpeg" required>
                                            <label class="custom-file-label" for="fotoktp">Pilih Foto</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan Reperal</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>