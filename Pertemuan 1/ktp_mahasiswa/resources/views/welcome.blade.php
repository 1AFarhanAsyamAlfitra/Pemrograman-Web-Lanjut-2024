<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KTP</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=OCR+A&display=swap');

    .table-ktp {
 /* Add outer border to the table */
      border-collapse: collapse;
      border-radius: 10px;
      font-family: Arial, sans-serif;
    }
    .table-wrapper{
      padding: 20px;
      background-image: url('https://lh5.googleusercontent.com/-W4FM3TIV9I0/TYQzLeULsNI/AAAAAAAAAIo/4HwHZD_bgzQ/s1600/KTP+2.jpg'); /* Add background image */
      background-size: cover; 
    }
    .nik {
      font-family: 'OCR A', monospace; 
      font-size: 20px;
    }
    .table-ktp td:not(.nik) { /* Apply Arial, sans-serif to all td elements except those with class 'nik' */
      font-family: Arial, sans-serif;
      font-weight: bold;
    }
    .header {
      font-size: 18px;
      text-align: center;
    }

    .img-profile{
      width: 200px;
      object-fit: cover;
    }

    .img-signature{
      width: 100px;
      margin-top: 12px;
      text-align: center;
    }
    
    
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <h1 style="text-align: center">KTP</h1>
  <div class="wrapper row justify-content-center">

    <div class="table-wrapper col-5  ">
      <div class="header mb-2">
        <P class="m-0 fw-bold">PROVINSI JAWA TIMUR</P class="m-0">
        <P class="m-0 fw-bold">KABUPATEN MALANG</P class="m-0">
      </div>
      <div class="wrapper d-flex">
        <table class="table-ktp" >
          <tr>
              <td colspan="3" style="font-size: 20px" class="nik" >NIK &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; : 3574020213040003</td>
          </tr>
          <tr>
              <td>Nama</td>
              <td>: Farhan Asyam Alfitra</td>
              </td>
          </tr>
          <tr>
              <td>Tempat/Tgl Lahir</td>
              <td>: Malang, 04 Desember 2002</td>
          </tr>
          <tr>
              <td>Jenis Kelamin</td>
              <td>: LAKI-LAKI &ensp; &ensp; &ensp; Gol. Darah : B</td>
          </tr>
          <tr>
              <td>Alamat</td>
              <td>: Jl Gerbera No. 56 <br>&ensp; Springhill Garden</td>
          </tr>
          <tr>
              <td> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; RT/RW</td>
              <td>: 011/016</td>
            </tr>
            <tr>
              <td> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; Kel/Desa</td>
              <td>: SEKARPURO</td>
            </tr>
            <tr>
              <td> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; Kecamatan</td>
              <td>: PAKIS</td>
            </tr>
          <tr>
              <td>Agama</td>
              <td>: ISLAM</td>
          </tr>
          <tr>
              <td>Status Perkawinan</td>
              <td>: BELUM KAWIN</td>
          </tr>
          <tr>
              <td>Pekerjaan</td>
              <td>: PELAJAR/MAHASISWA</td>
          </tr>
          <tr>
              <td>Kewarganegaraan</td>
              <td>: WNI</td>
          </tr>
          <tr>
              <td>Berlaku Hingga</td>
              <td>: SEUMUR HIDUP</td>
          </tr>
        </table>
        <div class="img-wrapper">
          <img src="{{asset('images/fotoktp.jpeg')}}" class="img-profile mt-5 mb-1">
          <div class="date text-center">
            <p class="m-0 fw-bold fs-6">Malang</p>
            <p class="m-0 fs-6">19-01-2020</p>
          </div>
          <div class="wrapper text-center">
            <img src="{{asset('images/ttd.png')}}" class="img-signature">

          </div>

        </div>
      </div>
  </div>
  </div>
</body>
</html>