<?php 
	session_start();
	include '../config.php';
	if($_SESSION['username'] != true){
		echo '<script>window.location="../login.php"</script>';
	}

	$query = mysqli_query($conn, "SELECT * FROM datausers WHERE username = '".$_SESSION['username']."' ");
	$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOODcare.</title>
    <link rel="stylesheet" href="beranda.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>BLOOD CARE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="stok darah.html">STOK DARAH</a></li>
                    <li><a href="pendonor.html">PENDONOR</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="beranda.html">BACK</a></li>
                    <li><a href="../logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<link rel="stylesheet" href="pendonor.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="section">
		<div class="container">
			<h3>Profil</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->Nama; ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username; ?>" required>
					<input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->NomerHp ?>" required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->email ?>" required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->Alamat ?>" required>
					<input type="submit" name="submit" value="Ubah Profil" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$Nama 	= ucwords($_POST['nama']);
						$username 	= $_POST['user'];
						$NomerHp 	= $_POST['hp'];
						$email 	= $_POST['email'];
						$Alamat = ucwords($_POST['alamat']);

						$update = mysqli_query($conn, "UPDATE datausers SET 
										Nama = '".$Nama."',
										username = '".$username."',
										NomerHp = '".$NomerHp."',
										email = '".$email."',
										Alamat = '".$Alamat."'
										WHERE username = '".$d->username."' ");
						if($update){
							echo '<script>alert("Ubah data berhasil")</script>';
							echo '<script>window.location="profile.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>

			<h3>Ubah Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="password" name="password" placeholder="Password Baru" class="input-control" required>
					<input type="Password" name="cpassword" placeholder="Konfirmasi Password Baru" class="input-control" required>
					<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
				</form>
				<?php 
					if(isset($_POST['ubah_password'])){

						$password 	= $_POST['password'];
						$cpassword 	= $_POST['cpassword'];

						if($cpassword != $password){
							echo '<script>alert("Konfirmasi Password Baru tidak sesuai")</script>';
						}else{

							$u_pass = mysqli_query($conn, "UPDATE datausers SET 
										password = '".MD5($password)."'
										WHERE username = '".$d->username."' ");
							if($u_pass){
								echo '<script>alert("Ubah data berhasil")</script>';
								echo '<script>window.location="profile.php"</script>';
							}else{
								echo 'gagal '.mysqli_error($conn);
							}
						}

					}
				?>
			</div>
		</div>
	</div>

	
</body>
</html>