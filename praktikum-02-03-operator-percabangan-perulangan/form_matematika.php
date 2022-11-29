<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From matematika</title>
    <style>
    button{
        position: absolute;
        top: 260px;
        left: 530px;
        font-size: 18px;
        }
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <h1 class="text-center">Operation Aritmatika</h1>
</head>
<body>
    <p class="text-center">Nim_20202205056 - Nama_Alanjayapranata</p>
<?php
echo "<center>";
              $hari = date ("l");
              switch ($hari){
                case"Sunday":
                  $hari="Minggu";
                break;
                case"Monday":
                  $hari="Senin";
                break;
                case"Tuesday":
                  $hari="Selasa";
                break;
                case"Wednesday":
                  $hari="Rabu";
                break;
                case"Thursday":
                  $hari="Kamis";
                break;
                case"Friday":
                  $hari="Jumat";
                break;
                case"Saturday":
                  $hari="Sabtu";
                break;
              }

              $bulan = date ("F");
              switch ($bulan){
                case"January":
                  $bulan="Januari";
                break;
                case"February":
                  $bulan="Februari";
                break;
                case"March":
                  $bulan="Maret";
                break;
                case"April":
                  $bulan="April";
                break;
                case"May":
                  $bulan="Mei";
                break;
                case"June":
                  $bulan="Juni";
                break;
                case"July":
                  $bulan="Juli";
                break;
                case"August":
                  $bulan="Agustus";
                break;
                case"September":
                  $bulan="September";
                break;
                case"October":
                  $bulan="Oktober";
                break;
                case"November":
                    $bulan="November";
                    break;
                    case"December":
                      $bulan="Desember";
                    break;
                  }
                  date_default_timezone_set ('Asia/Makassar');
                  echo $hari.date (", d "),$bulan.date(" Y H:i:s");
                ?>
    <br>
    <br>
    <form action="form_matematika.php" method="post"> 
    <div class="col-sm-7 row "> 
    <label  for="inputangka" class="col-sm-7 col-form-label4">Angka pertama</label>
    <div class="col-sm-4" >
    <input type="number" name="pertama" class="form-control " id="inputangka">
    </div>
    </div>
    <br>
    <div class="col-sm-7 row "> 
    <label  for="inputangka" class="col-sm-7 col-form-label4">Angka Kedua</label>
    <div class="col-sm-4" >
    <input type="number" name="kedua" class="form-control " id="inputangka">
    </div>
    </div>
    <br>
    <div class="button">
    <button id="submit" class="btn btn-success " onclick="submit" name="save"> HITUNG </button>
    </div>
<br/>
<hr>
</div>

</form>
<?php
$a_pertama = isset ($_POST["pertama"]) ? $_POST["pertama"] : "";
               $a_kedua = isset ($_POST["kedua"]) ? $_POST["kedua"] : "";
               if (empty($a_pertama))
               {
                 echo '<div class="alert alert-danger text-center col-sm-4">Angka pertama tidak boleh kososng </div>';
               }
               else if (empty($a_kedua))
               {
                 echo '<div class="alert alert-danger text-center col-sm-4">Angka kedua tidak boleh kososng </div>';

               }
               else if ($a_pertama < $a_kedua )
               {
                 echo '<div class="alert alert-danger text-center col-sm-4">Angka pertama harus lebih besar dari pada angka kedua </div>';
               }
               else{
                 echo "<h3>Hasil Operasi Aritmatika</h3>";
                 echo "# Hasil Penjumlahan = ".($a_pertama + $a_kedua)."<br>";
                 echo "# Hasil Pengurangan = ".($a_pertama - $a_kedua)."<br>";
                 echo "# Hasil Perkalian = ".($a_pertama * $a_kedua)."<br>";
                 echo "# Hasil Pembagian = ".($a_pertama / $a_kedua)."<br>";
                 echo "# Sisa Hsail Bagi = ".($a_pertama % $a_kedua)."<br>";
               }

        ?>
</body>
</html>