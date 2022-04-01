<?php
session_start();
if (!isset($_SESSION['login'])){
    header("Location:index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Presma & Wapresma 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        



        img{
            width:30%;
            margin:auto;
        }
        .img,h3{
            display:block;
        }
        h3{
            text-align:center;
        }
        .header{
            display:grid;
            grid-template-columns:33% 33% 33%;
            background-color:#80ccff;
            padding:1%;
        }

        img.foto{
            width:80%;

        }
        .fotopaslon{
            display:grid;
            grid-template-columns:100%
            width:50%;
            margin:auto;
            margin-top:3%;
        }
        p{
            margin:3%;
            text-align:center;
            font-family: 'Permanent Marker', cursive;
        }
        img.foto{
            display:block;
            width:80%;
            margin:auto;
        }
        .content{
            display:grid;
            grid-template-columns:50% 50%;
            width:80%;
            margin:auto;

        }
        input{
            margin-left:10%;
        }
        .btn-primary{
            width:50%;
            margin-left:10%;
            margin-top:5%;
            margin-bottom:5%;
            border-radius:10%
        }
        body{
            background-image: url(https://i.pinimg.com/originals/7b/da/3c/7bda3cc5018a5e8af756a1ce82048cf0.jpg);
        }
        h1{
            color:white;
            font-family: 'Permanent Marker', cursive;
        }



        @media only screen and (max-width: 600px) {

            h3{
                font-size:12px;
            }
            .header{
               
            }
        }

 
    </style>
</head>
<body>
    <div class="header"><!--header-->
        <img src="logo_akatirta.png" alt="">
        <div class="detail">
            <h3 style="margin-top:3%;">Pemilihan Presma Wapresma </h3>
            <h3 style="text-align:center;">Tahun 2022</h3>
        </div>
        <img src="logokpunew.png" alt="">
    </div>
    <form action="input.php" method="post">

    <div class="content"><!-- detail paslon1-->
        <div class="fotopaslon">
            <div class="ketua">
                <img class="foto" src="paslon2.png" alt="">
                <h1 style="text-align:center;">Paslon 1</h1>
            </div>
        </div>
        <div class="video">
            <h3 style="margin-top:25%;color:white;font-family: 'Permanent Marker', cursive;">Video Kampanye</h3>
        <video style="display:block;margin:auto;margin-top:5%" width="80%" controls>
                <source src="12.mov" type="video/mp4">
                <source src="12.mov" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="card" style="width:80%;margin:auto;">
        <p style="display:block; margin:auto;"><pre style="widht:90%;margin:auto;"><?php include "visimisi.txt" ?></pre></p>
    </div>
    <div class="btn-primary">
        <input type="radio" for="paslon1" id="pason1" name="pilihan" value="Memilih Paslon 1">
        <label for="paslon1">Saya Memilih Paslon 1</label><br>
    </div>
    <hr>
  

  <div class="content"><!-- detail paslon2-->
        <div class="fotopaslon">
            <div class="ketua">
                <img class="foto" src="paslon2.png" alt="">
                <h1 style="text-align:center;">Paslon 1</h1>
            </div>
        </div>
        <div class="video">
            <h3 style="margin-top:25%">Video Kampanye</h3>
        <video style="display:block;margin:auto;margin-top:5%" width="80%" controls>
                <source src="12.mov" type="video/mp4">
                <source src="12.mov" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
    <div class="card" style="width:80%;margin:auto;">
        <p style="display:block; margin:auto;"><pre style="widht:90%;margin:auto;"><?php include "visimisi.txt" ?></pre></p>
    </div>
    <div class="btn-primary">
        <input type="radio" for="paslon1" id="pason2" name="pilihan" value="Memilih Paslon 2">
        <label for="paslon1">Saya Memilih Paslon 2</label><br>
    </div>

    <input type="Submit" value="Kirim">

    </form>
    
</body>
</html>