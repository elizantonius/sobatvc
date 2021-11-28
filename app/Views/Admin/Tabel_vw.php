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
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th>Nama Owner</th>
                    <th>NO.KTP</th>
                    <th>Alamat Usaha</th>
                    <th>No HP</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $baris) { ?>
                    <td><?= $baris['namaowner']; ?>
                    </td>
                    <td><?= $baris['noktp']; ?></td>
                    <td><?= $baris['alamatusaha']; ?></td>
                    <td><?= $baris['nohp']; ?></td>

            </tbody>
        <?php } ?>
        </table>

    </div>
</div>