<html>
 <head>
  <title> SURAT KETERANGAN </title>
 </head>
 <button onclick="printContent('cetak')">Cetak</button>
 <body bgcolor="white" >
 <div id="cetak">
 <?php foreach($kk as $k){ ?>
  <font face="Arial" > <p align="center"> PEMERINTAH KABUPATEN/KOTA <?php echo $k['Kabkota']; ?> </p></font>
  <font face="Arial" > <p align="center"> KECAMATAN <?php echo $k['Kecamatan']; ?></p></font>
  <font face="Arial" > <p align="center"> KELURAHAN <?php echo $k['Desakel']; ?></p></font>
  <font face="Arial"  size="3"> <p align="center"> Alamat :<?php echo $k['Alamat']; ?> , Kec. <?php echo $k['Kecamatan']; ?> , Kab/Kota. <?php echo $k['Kabkota']; ?>, <?php echo $k['Kodepos']; ?>, <?php echo $k['Provinsi']; ?> </p></font>
  <hr>

  <font face="Arial" size="4"> <p align="center"> <u> <b> SURAT KETERANGAN UPGRADE KK </b></u></font><br>
  <font face="Arial"  size="4"> No: 12/PKB/VII/2019 </p></font>

  <p align="letf">
   Yang bertandatangan dibawah ini
   <br> <br> Nama  : <?php echo $k['Kepkeluarga']; ?>
   <br> Jabatan  : <?php echo $k['Kepkeluarga']; ?>
   <br> Alamat  : <?php echo $k['Alamat']; ?> <?php echo $k['RT/RW']; ?>
   <br><br><br>
   Dengan ini menerangkan bahwa telah mengubah KK sebagai berikut :
  </p>


    <pre >
    <font face="Arial"  size="3">
    Nama Lengkap 			  : <?php echo $anggotakk['Nama'];?> 
    NIK 				          : <?php echo $anggotakk['Nik'];?> 
    Jenis Kelaminan 	          : <?php echo $anggotakk['JenisKel'];?> 
    Tempat Lahir 			  : <?php echo $anggotakk['Tl'];?> 
    Tanggal Lahir 			  : <?php echo $anggotakk['Tgl'];?> 
    Agama 				  : <?php echo $anggotakk['Agama'];?> 
    Pendidikan Terakhir		  : <?php echo $anggotakk['Pendidikan'];?> 
    Jenis Pekerjaan 			  : <?php echo $anggotakk['JenisPek'];?> 
    Keperluan 			          : Sebagai pengantar untuk mengupgrade KK

    </font>
    </pre>
<p align="letf">
Demikian Surat Keterangan ini dibuat untuk digunakan seperlunya .
</p>

<p align="Right">
Dibuat di : <?php echo $k['Kabkota']; ?>
<br> Pada tanggal : <?php echo  date("d-m-Y"); ?>
</p>

  <p align="center"><font face="Arial">
  Tanda Tangan <br>
  Kepala Keluarga <br>
  <br> <br> <br> <br>
  <?php echo $k['Kepkeluarga']; ?>
  </font></p>


  <?php } ?>
  </div>
 </body>

</html>
<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>