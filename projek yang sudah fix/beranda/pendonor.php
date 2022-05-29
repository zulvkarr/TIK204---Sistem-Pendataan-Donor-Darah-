<?php 
	session_start();
	include '../config.php';
	if($_SESSION['username'] != true){
		echo '<script>window.location="../login.php"</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOODcare.</title>
    <link rel="stylesheet" href="beranda.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>BLOOD CARE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="stok darah.php">STOK DARAH</a></li>
                    <li><a href="pendonor.php">PENDONOR</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="beranda.php">BACK</a></li>
                    <li><a href="../logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<link rel="stylesheet" href="pendonor.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>
<body>


  
  
  <section>
  <div class="wrapper">
    <div class="left">
        <img src="image/WhatsApp Image 2022-04-30 at 22.10.01.jpeg" 
        alt="user" width="200">
        <h4>Kamarul Syahkuwan</h4>
         <p>Pendonor O - 001</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Data Pendonor 001</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Golongan Darah</h4>
                    <p>O+</p>
                 <div class="data">
                    <h4>Pemeriksa Kesehatan</h4>
                    <p>Dr. Adi : Pendonor Sehat</p>    
                 </div>
                 <div class="data">
                   <h4>Usia dan Tempat Tinggal Pendonor</h4>
                    <p>20 Tahun ; Kajhu, Aceh Besar</p>
                 <div class="data">
                   <h4>Keterangan</h4>
                   <p>Siap untuk Mendonor</p>
                 <div class="data">
                   <h4>Terakhir Mendonor</h4>
                   <p>22 Februari 2022</p>
                 <div class="data">
                   <h4>Nomor Hp</h4>
                   <p>0813 7742 9304</p>
              </div>
            </div>
        </div>

<section>
<div class="wrapper">
    <div class="left">
        <img src="image/R.png" 
         alt="user" width="200">
        <h5>Sayyid Jamalul</h5>
        <r>Pendonor O - 002</r>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Data Pendonor 002</h3>
                    <div class="info_data">
                         <div class="data">
                            <h4>Golongan Darah</h4>
                            <p>O</p>
                         <div class="data">
                            <h4>Pemeriksa Kesehatan</h4>
                            <p>Dr. Adi : Pendonor Sehat</p>    
                         </div>
                         <div class="data">
                           <h4>Usia dan Tempat Tinggal Pendonor</h4>
                            <p>20 Tahun ; Kajhu, Aceh Besar</p>
                         <div class="data">
                           <h4>Keterangan</h4>
                           <p>Tidak bisa mendonor (pemulihan donor)</p>
                         <div class="data">
                           <h4>Terakhir Mendonor</h4>
                           <p>18 Mei 2022</p>
                         <div class="data">
                           <h4>Nomor Hp</h4>
                           <p>0852 3939 7865</p>
                      </div>
                    </div>
                </div>
<div class="wrapper">
    <div class="left">
        <img src="image/R.png" 
        alt="user" width="200">
        <h5>Fahlul Rezi</h5>
        <r>Pendonor A - 003</r>
    </div>
          <div class="right">
             <div class="info">
                     <h3>Data Pendonor 003</h3>
                     <div class="info_data">
                              <div class="data">
                                       <h4>Golongan Darah</h4>
                                       <p>A</p>
                                    <div class="data">
                                       <h4>Pemeriksa Kesehatan</h4>
                                       <p>Dr. Ami : Pendonor Sehat</p>    
                                    </div>
                                    <div class="data">
                                      <h4>Usia dan Tempat Tinggal Pendonor</h4>
                                       <p>20 Tahun ; Lampuuk, Aceh Besar</p>
                                    <div class="data">
                                      <h4>Keterangan</h4>
                                      <p>Tidak bisa mendonor (pemulihan donor)</p>
                                    <div class="data">
                                      <h4>Terakhir Mendonor</h4>
                                      <p>23 April 2022</p>
                                    <div class="data">
                                      <h4>Nomor Hp</h4>
                                      <p>0813 4453 7733</p>
                                 </div>
                               </div>
                           </div>    

</body>
</html>

