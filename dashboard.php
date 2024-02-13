<?php
    session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html >
<html >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Galeri | DMR</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="dashboard.php">Galeri | DMR</a></h1>
        <ul>
           <li><a href="profil.php">Profil</a></li>
           <li><a href="data-image.php">Data Foto</a></li>
           <li><a href="keluar.php">Keluar</a></li>
        </ul>
        </div>
    </header>
    
    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->full_name ?> di Website Galeri Foto</h4>
            </div>
        </div>
    </div>
    
</body>
</html>