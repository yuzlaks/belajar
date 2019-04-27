<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="asset/bootstrap.css">
    <link rel="stylesheet" href="asset/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid" style="margin-top:8px">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Tambah Data</h4>
                    </div>

                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control input-sm" name="nama">
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control input-sm"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control input-sm">
                            </div>

                            <input type="submit" value="Simpan" class="btn btn-success btn-sm" name="simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php
            include('koneksi.php');

            if( isset($_POST['simpan'])){
                // echo "submit!";
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $tgl_lahir = $_POST['tgl_lahir'];

                // $q = mysqli_query($conn, "INSERT INTO siswa (nama,alamat,tgl_lahir) VALUES ('$nama', '$alamat', '$tgl_lahir' )");

                $q      = mysqli_query($conn, "INSERT INTO siswa (nama,alamat,tgl_lahir) VALUES('$nama', '$alamat', '$kelas', '$tgl_lahir') ");

                // var_dump($q);
                // if($q){
                //     echo "berhasil";
                // }
            }
        ?>
    </div>
</body>
</html>