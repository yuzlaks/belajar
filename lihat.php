<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Workshop</title>

    <link rel="stylesheet" href="asset/bootstrap.css">
    <link rel="stylesheet" href="asset/font-awesome.min.css">
</head>
<body>

    <div class="container-fluid">
        <br>
            <a class="btn btn-success btn-sm" href="create.php">Tambah data</a>
        <br>
        <table class="table table-hover table-striped table-responsive">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include('connection.php');

                    $no  = 1;
                    $query = mysqli_query($conn,"select * from siswa") or mysqli_error($conn);
                    // var_dump($query);

                    while( $data = mysqli_fetch_array($query) ) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?=  date('d-m-Y', strtotime( $data['tgl_lahir'] ) ) ?></td>
                        <td>
                            -
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>