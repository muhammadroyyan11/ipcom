<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Keterangan Aktif Kuliah</title>
  <style>
  	body {
    padding: 0px;
    margin-top: 130px;
    margin-bottom: 20px;
    line-height: 1.2em;
    margin-left: 60px;
    margin-right: 60px;
    font-family: 'Pontano sans', sans-serif;
    font-size: 16px;
    color: #000000;
    background: #ffffff;
}

/*design table 1*/

.tabel {
    font-family: 'Pontano sans', sans-serif;
    color: #232323;
    border-collapse: collapse;
}

table.one {
    border-collapse: collapse;
    margin-bottom: 18px;
    line-height: 22px;
}

table.two {
    border-collapse: collapse;
    margin-bottom: 18px;
    line-height: 22px;
}

table.three {
    border-collapse: collapse;
    margin-bottom: 18px;
    line-height: 22px;
    margin-left: 290px;
}


td.a {
    border-style: solid;
    border-width: 1px;
    border-color: #000000;
    padding-top: 0px;
    padding-left: 5px;
    padding-bottom: 1px;
}

td.c{
    text-indent: 25px;
}

th.b {
    border-style: solid;
    border-width: 1px;
    border-color: #000000;
    padding: 2px;
    font-family: 'Pontano sans', sans-serif;
}

.table1,
th,
td {
    border: 0px solid #999;
    font-family: 'Pontano sans', sans-serif;
    padding-left: 0px;
    padding-top: 0px;
    padding-bottom: -5px;
    padding-right: 0px;
}

.table3,
th,
td {
    border: 0px solid #999;
    font-family: 'Pontano sans', sans-serif;
    padding-left: 0px;
    padding-top: =10px;
    padding-bottom: -5px;
    padding-right: 0px;
}


.table2,
th,
td {
    border: 0px solid #999;
    font-family: 'Pontano sans', sans-serif;
    padding-left: 0px;
    padding-top: 0px;
    padding-bottom: -5px;
    padding-right: 0px;
}
.table3,
{
    border: 0px solid #999;
    font-family: 'Pontano sans', sans-serif;
    padding-left: 0px;
    padding-top: 0px;
    padding-bottom: -5px;
    padding-right: 0px;
    font-size: 22px;
}
td.d{
    line-height: 16px;
    text-align: justify;
    vertical-align: top;
    padding-top: 8px;
    padding-bottom: -2px;
}

td.f{
    padding-top: -3px;
}

td.g{
    vertical-align: top;
    text-align: justify;
    line-height: 16px;
    padding-top: 7px;
}

  </style> 	
  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/bootstrap.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo site_url('css/mystyles.css');?>"/>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


  <table class="table3" border="0" width="100%">
      <tr>
          <td align="center"><b><u>SURAT KETERANGAN AKTIF KULIAH</u></b></td>
      </tr>
  </table>
  <table class="table1" border="0" width="100%">
      <tr>
          <td align="center" width="100px">Nomor : <?php echo $keteranganaktif->nosurat; ?></td>
      </tr>
  </table>
    <br><br><br>
    
      <p align="justify">Dekan Fakultas Psikologi Universitas Islam Riau menerangkan bahwa :</p>

	<table class="one">
            <tr>
                <td width="130px">Nama</td>
                <td width="10px"> : </td>
                <td width="500px"><?php echo $keteranganaktif->nama; ?></td>
            </tr>
            <tr>
                <td>Tempat/Tgl. Lahir</td>
                <td width="10px"> : </td>
                <td><?php echo $keteranganaktif->tempat_lhr; ?>/<?php echo mediumdate_indo($keteranganaktif->tgl_lahir); ?></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td width="10px"> : </td>
                <td><?php echo $keteranganaktif->username; ?></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td width="10px"> : </td>
                <td>Psikologi</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td width="10px"> : </td>
                <td>Ilmu Psikologi</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td width="10px"> : </td>
                <td><?php echo $keteranganaktif->alamat; ?> <?php echo $keteranganaktif->kabupaten; ?></td>
            </tr>
	</table>

        <p align="justify">Nama tersebut di atas adalah benar mahasiswa pada Fakultas Psikologi Universitas Islam Riau Pekanbaru yang terdaftar (Aktif Kuliah) pada Tahun Akademik <?php echo $keteranganaktif->ta; ?>.</p>
        <p align="justify">Surat Keterangan ini diberikan untuk keperluan <b><?php echo $keteranganaktif->keperluan; ?></b>.</p>
        

        <p align="justify">Demikian Surat Keterangan ini dibuat agar dapat dipergunakan sebagaimana mestinya. </p>
        <table class="three">
           
            <tr>
                <td>Pekanbaru, <?php echo mediumdate_indo($keteranganaktif->tglmasehi); ?></td>
            </tr>
            <tr>
                <td><b>Dekan</b></td>
            </tr>
        </table>
        <br>
        <table class="three">
            <tr>
                <td><?php
                    $approval = $keteranganaktif->approval;

                    if($approval == 0){

                            echo "<br>";


                    }else{
  echo "<br><br>";
 // echo img('foto/Tandatangan.png');
                    }
                    ?></td>
            </tr>
        </table>

        <table class="three">
            <tr>
                
                <td width="350px"><b><u>Yanwar Arief, M.Psi Psikolog</u></b></td>
            </tr>
            <tr>
                <td width="350px"><b>NPK.10 03 02 390</b></td>
            </tr>
        </table>

       
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>