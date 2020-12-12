<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <?php
    include('koneksi.php');

        if(isset($_POST['nama'], $_POST['npm'], $_POST['pakultas'], $_POST['prodi'])){
            $nama = $_POST['nama'];
            $npm = $_POST['npm'];
            $pakultas = $_POST['pakultas'];
            $prodi = $_POST['prodi'];

            $query = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('0','$nama', '$npm', '$pakultas', '$prodi')");
            
            if($query){
            $msg = "Berhasil input data mahasiswa !";  
            }else{
            $msg = "Gagal input data mahasiswa !";  
            }
        }

    
    ?>



        <div class="card">
            <div class="card-header">
            Input Data Mahasiswa 
            </div>
            <div class="card-body"><br>
            <form action="" method="POST">
                <input type="text" class="form-control mb-4" name="nama" placeholder="Masukan Nama">
                <input type="number" class="form-control mb-4" name="npm" placeholder="Masukan NPM">
                <input type="text" class="form-control mb-4" name="pakultas" placeholder="Masukan Pakultas">
                <input type="text" class="form-control mb-4" name="prodi" placeholder="Masukan Prodi">
                    <?php
                        if(isset($msg)){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?php echo $msg; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            
                            <?php
                        }
                    
                    
                    ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    <script>
        
    </script>
</body>
</html>