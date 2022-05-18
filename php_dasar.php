<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Input Output HTML dan PHP</title>
		<style>
			tr, td {
				text-align: center;
			}
		</style>
		<script>
function tampilkan(){
  var pek=document.getElementById("finput").pekerjaan.value;
  if (pek=="staff")
    {
        document.getElementById("gaji").value = 'Rp. 6.000.000';
    }
  else if (pek=="op")
    {
       document.getElementById("gaji").value = 'Rp. 5.000.000';
    }
}
</script>
	</head>
	<body>
		<form id="finput" name="finput" method="post" action="output.php">
			<table border="1" width="80%" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="2" align="center">Input</td>
				</tr>
				<tr>
					<td width="45%">Nama</td>
					<td width="55%"><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="date" name="tgl_lahir"></td>
				</tr>								
				<tr>
					<td>Pekerjaan</td>
					<td><select id="pekerjaan" name="pekerjaan" onchange="tampilkan()">
    				<option value='0' disabled="disabled" selected/>Pilih</option>
    				<option value="staff">Staff</option>
    				<option value="op">Operator</option>
 					</select></td>
				<tr>
				<tr>
					<td>Gaji</td>
					<td><input type='text' name="gaji" id="gaji"></td>
				<tr>

					<td colspan="2" align="center">
						<input type="submit" name="tampil" value="Input">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>