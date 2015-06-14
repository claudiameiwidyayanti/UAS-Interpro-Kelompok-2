<?php
	$koneksi = mysql_connect("localhost", "root", "");
	mysql_select_db("presensidanjurnalkelas_online");
?>

<!DOCTYPE html>
<html lang="en">
<html>


<!-- isi index -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Presensi dan Jurnal Kelas Online</title>
<meta name="keywords" content="" />
<meta name="description" content="" />


<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
		
<div class="judul"> 
		<p><h1><b><center><marquee><font color=blue>SELAMAT DATANG !!</font><center></marquee></b></h1></p>
		<p><h1><b><center><font color=red>Sistem Informasi Presensi dan Jurnal Kelas Online</font><center></b></h1></p>
		</div>
		
    <div id="tooplate_header">
	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="informasi.php">Informasi</a></li>
                <li><a href="galeri.php">Gallery</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
	
	<!-- Isi tampilan utama -->
		<body>
<center><a href="admin/login_admin.php"><button style="width: 200px; heigth: 700px;">Login Admin</button></a>
<a href="dosen/login_dosen.php"><button style="width: 200px; heigth: 700px;">Login Dosen</button></a>
</body>

    
    <div id="tooplate_middle">
    	<div id="slider">
            <a href="#"><img src="image/slideshow/danau.jpg"/></a>
            <a href="#"><img src="image/slideshow/danau-lidah.jpg"/></a>
            <a href="#"><img src="image/slideshow/gerbanggg.jpg"/></a>
            <a href="#"><img src="image/slideshow/jtif.jpg"/></a>
            <a href="#"><img src="image/slideshow/rektor.jpg"/></a>
        </div>	
	</div> <!-- end of middle -->

<div id="tooplate_copyright_wrapper">
	<div id="tooplate_copyright">
	
    	Copyright © 2015 <a href="#">Kelompok 2</a>
		
    </div>
</div>	
	</body>
	