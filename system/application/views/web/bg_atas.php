<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tiara Aksara | Pendaftaran Siswa Online</title>
<link href="<?php echo base_url(); ?>system/application/views/web/images/lgs.png" rel="shortcut icon" />
<link href="<?php echo base_url(); ?>system/application/views/web/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>system/application/views/web/css/highslide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/dropdown.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/slideshow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/highslide-with-html.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>system/application/views/web/js/transisi.js"></script>
<script type="text/javascript">
hs.graphicsDir = '<?php echo base_url(); ?>system/application/views/web/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';

</script>
</head>

<body>
<div id="menu-atas">
<div id="atas">
<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>system/application/views/web/images/logo.png" border="0" /></a></div>
<div class="menu" id="nav" style="width: 630px;margin-left:0px;">
	<ul>
    	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<?php
	$no=1;
	foreach($menu->result_array() as $m){
		if($m["id"]=="3" or $m["id"]=="4"){}else{
			echo "<li><div id='parent_".$no."' class='sample_attach'><a href='#'>".$m['title']."</a></div></li>";
			
		}
		$sub_menu=$this->Web_model->Sub_Menu_Atas($m['id'],"1");

		//print_r($sub_menu);
		//echo $m['id_parent'];
		echo"<div id='child_".$no."'>";
		foreach($sub_menu->result_array() as $sm)
		{
			
				echo "<a class='sample_attach' href='".base_url()."index.php/web/data/".$sm['id']."'>".$sm['title']."</a>";
			
		}
		echo"</div>";
		echo'<script type="text/javascript">
		at_attach("parent_'.$no.'", "child_'.$no.'", "hover", "y", "pointer");
		</script>';
		$no++;
	}
	echo "<li><div id='parent_66' class='sample_attach'><a href='".base_url()."index.php/web/prestasi'>Data guru</a></div></li>";
	echo "<li><div id='parent_67' class='sample_attach'><a href='".base_url()."index.php/web/organisasi'>Organisasi Sekolah</a></div></li>";
	echo "<li><div id='parent_68' class='sample_attach'><a href='#'>Pendaftaran</a></div></li>";
	?>
	<div id="child_68">
		<a href="<?php echo base_url()."index.php/psb/daftar/1"; ?>" class="sample_attach">Pendaftaran TPQ</a>
		<a href="<?php echo base_url()."index.php/psb/daftar/2"; ?>" class="sample_attach">Pendaftaran TKI</a>
		<a href="<?php echo base_url()."index.php/psb/daftar/3"; ?>" class="sample_attach">Pendaftaran SDIT</a>
		<a href="<?php echo base_url()."index.php/psb/daftar/4"; ?>" class="sample_attach">Pendaftaran SMPIT</a>
		<a href="<?php echo base_url()."index.php/psb/daftar/5"; ?>" class="sample_attach">Pendaftaran SMK</a>
	</div>
	<script type="text/javascript">
		at_attach("parent_68", "child_68", "hover", "y", "pointer");
	</script>
	</ul>
</div>
</div>
</div>
<div id="kulit-luar">
<div id="header">
<script type="text/javascript">

var flashyshow=new flashyslideshow({ //create instance of slideshow
	wrapperid: "myslideshow", //unique ID for this slideshow
	imagearray: [
		["<?php echo base_url(); ?>system/application/views/web/images/header1.png"],
		["<?php echo base_url(); ?>system/application/views/web/images/header2.png"]
	],
	pause: 5000, //pause between content change (millisec)
	transduration: 1000 //duration of transition (affects only IE users)
})

</script>
<div class="ggc">
Pendaftaran Siswa Baru
</div>
</div>
<div id="menu-bawah">
<div class="menu-bottom" id="nav-bawah">
	<ul>
<?php
	if(!isset($_SESSION["userlog"])){ ?>
	<li>
		<a href="<?php echo base_url()."index.php/web/data/6" ?>">Berita</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/web/data/7" ?>">Agenda</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/psb/login" ?>">Login Calon Siswa</a>
	</li>
	<li>
		<a href="<?php echo base_url()."admin" ?>" target="_BLANK">Admin</a>
	</li>
	<?php
	}
	else{ ?>
	<li>
		<a href="<?php echo base_url()."index.php/login/datasiswa" ?>">Data Siswa</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/dataortu" ?>">Data Orang Tua</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/datapay" ?>">Data Pembayaran</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/datahasil" ?>">Data Hasil</a>
	</li>
	<li>
		<a href="<?php echo base_url()."index.php/login/logout" ?>">Logout</a>
	</li>

	<?php

	}
		/*foreach($menu_bawah->result_array() as $mb)
		{
			echo "<li><a href='".base_url()."index.php/web/data/".$mb['id']."'>".$mb['title']."</a></li>";
		}*/
	?>
    	<div class="none-ul" style="text-align: right; width: 460px;">
			<form method="post" action="">
				<input type="text" size="20" class="input" value="Pencarian"  onfocus="this.value=(this.value=='Pencarian')? '' : this.value ;" />
				<input type="submit" class="submitButton" value="GO" />
			</form>
		</div>
	</ul>
</div>
<div id="bawah-menu"><img src="<?php echo base_url(); ?>system/application/views/web/images/bawah-menu.png" /></div>
</div>
