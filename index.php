<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login pemilihanpresma</title>

    <style>
        .card{
            width:50%;
            margin:auto;
        }
        
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header bg-primary text-light">Login Pemilihan Presma</div>
        <div class="card-body">
            <form action="pilihan.php" method="post">
                <label for="nama">Nama Mahasiswa</label><br>
                <input type="text" name="nama" placeholder="Masukan Nama Anda" require><br> 
                <label for="nama">NPM</label><br>
                <input type="text" name="npm" require placeholder="Masukan NPM"><br>
                <label for="nama">Semester</label><br>
                <input type="text" name="semester" placeholder="Semester Kuliah"><br>
                <input style="margin-top:3%;" type="submit" name="submit" value="Masuk"><br>
            </form>
        </div>
    </div>
    
</body>
</html>