<?php 
    include "koneksi.php";
    $qkelas = "select * from kelas";
    $data_kelas = $conn->query($qkelas);
    $qmahasiswa = "select * from viewtampil";
    $data_mahasiswa = $conn->query($qmahasiswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <script src="../assets/jquery/jquery-3.2.1.slim.min.js"></script>
	    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="../assets/datatable/datatable.min.css">
		<link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container, .data-container {
            display: inline-block;
            vertical-align: top;
            width: 45%;
        }
        .data-container {
            margin-left: 5%;
        }
        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .data-card {
            background: #f8f9fa;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .data-card h4 {
            margin: 0;
            font-size: 18px;
        }
        .data-card p {
            margin: 5px 0 0;
            color: #555;
        }
    </style>
</head>
<body>

<h4 style="text-align: center;">FORM</h4>
<div class="form-container">
        <h3 class="header">Input Data</h3><br>
        <form action="simpan_mahasiswa.php" method="POST">
            <div class="mb-3">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <select class="custom-selct d-block w-100" id="kelas_id" name="kelas_id" required>
                    <option value="">Pilih...</option>
                        <?php
                            foreach($data_kelas as $index => $value){
                        ?>
                            <option value="<?php echo $value['kelas_id']?>"><?php echo $value['nama']?></option>
                        <?php
                            }
                        ?>
                </select>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
            </div>
        </form>
</div>
            <div class="data-container">
                
                    <h3 class="header">
                        <span >Data Mahasiswa</span>
                    </h3>
                    <?php
                        foreach($data_mahasiswa as $index => $value){
                    ?>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $value['nama_lengkap']?></h6>
                                <small class="text-muted"><?php echo $value['alamat']?></small>
                            </div>
                            <span class="text-muted"><?php echo $value['nama']?></span>
                        </li>
                    </ul>
                <?php
                    }
                ?>
            </div>
</body>
</html>