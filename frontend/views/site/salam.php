<h1>Selamat Datang Di STT-NF</h1>

<h3>Seminar : <?php echo $seminar ?></h3>
Pembicara: <?php echo $pembicara ?>
<hr/>
Daftar Peserta:
<ol>
<?php
	foreach($pesertas as $p){
		echo '<li>'.$p.'</li>';
	}
?>
</ol>