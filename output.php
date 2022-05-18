<?php 
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$rubah = date_format(date_create($tgl_lahir), 'Y');
$thn_skrg = date('Y');
$usia = $thn_skrg - $rubah;
	$pekerjaan = $_POST['pekerjaan'];
	$gaji		= $_POST['gaji'];

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Output</title>
	<style>
		tr, td {
			text-align: center;
		}
	</style>
</head>
<body>
	<table width="80%" border="1" cellpadding="5" cellspacing="0" align="center">
		<tr>
			<td colspan="2">Output</td>
		</tr>
		<tr>
			<td width="50%">Nama :</td>
			<td width="50%"><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir :</td>
			<td><?php echo $tgl_lahir; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan :</td>
			<td><?php echo $pekerjaan; ?></td>
		</tr>
		<tr>
			<td>Gaji :</td>
			<td><?php echo $gaji; ?></td>
		</tr>
		<tr>
			<td>Umur :</td>
			<td><?php echo $usia; ?></td>
		</tr>		
	</table>
</body>
</html>