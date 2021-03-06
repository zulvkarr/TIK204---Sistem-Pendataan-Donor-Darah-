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
    <div class="wrapper">
        <section id="home">
            <img src="image/animasi-darah-png-1.png"/>
            <div class="kolom">
                <p class="deskripsi">Kita semua sau-darah</p>
                <h2>Saudara dan Sedarah</h2>
                <p>jadilah bagian dari relawan pendonor terbaik
                </p>
                <p><a href="https://hellosehat.com/kelainan-darah/syarat-donor-darah/" class="tbl-pink">Syarat dan Ketentuan</a></p>
            </div>
        </section>

        <section id="Para pejuang donor">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Warriors</p>
                    <h2>Para Tim Medis & Pendonor Hebat</h2>
                    <p>Mereka telah menyelamatkan banyak orang dengan bergabung bersama kami!</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="image/OIP.jpg"/>
                        <p>Dokter Adi</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="image/download.jpg"/>
                        <p>Nurse joe & karen</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="image/WhatsApp Image 2022-04-30 at 22.10.01.jpeg"/>
                        <p>Pendonor:Syahkuwan</p>
                    
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                    <p>Kami juga bekerja sama dengan lembaga berikut untuk meningkatkan kualitas pelayanan yang kami berikan dan berdedikasi dalam membantu semua orang.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="image/USK-Universitas-Syiah-Kuala-ganti-sebutan-Unsyiah.webp"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="image/Logo PMI.png"/>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Bcare</h3>
                    <p>Membantu dan melayani setiap keperluan dalam pendonoran darah!</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Website pendataan pendonor dan stok darah yang tersedia!</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. hadrah, Kajhu, Aceh besar</p>
                    <p>Telepon: +082 8387 8398</p>
                    <p>Kode Pos: 233371</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>Website: </b>BLOODcare.com</p>
                    
                </div>
            </div>
        </div>
    </div>
