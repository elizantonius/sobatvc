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
                    <th>Nama Sales</th>
                    <th>No.Hp</th>
                    <th>Distributor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($list as $baris) { ?>
                    <td><?= $baris['namasales']; ?></td>
                    <td><?= $baris['nohp']; ?> </td>
                    <td><?= $baris['distributor']; ?> </td>

    </div>
    </tbody>
<?php } ?>
</table>

</div>
</div>