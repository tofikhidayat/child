<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Balok</title>
</head>
<body bgcolor="lightblue">
	<form action="output_vol2.php" method="GET">
		<table style="color: blue; margin: 0 auto;" border="2" bgcolor="black">
			<tr>
				<th colspan="2">
					Volume Balok
				</th>
			</tr>
			<tr>
				<td>
					Masukkan Panjang :
				</td>
				<td>
					<input type="text" name="panjang" maxlength="6" size="20">cm
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Lebar :
				</td>
				<td>
					<input type="text" name="lebar" maxlength="6" size="20">cm
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Tinggi :
				</td>
				<td>
					<input type="text" name="tinggi" maxlength="6" size="20">cm
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="hitung" value="Hitung">
				</td>
				<td>
					<input type="reset" name="reset" value="Hapus">
				</td>
			</tr>
				<form action="home.php"></form>
				<tr>
					<td colspan="2">
						<center>
							<input type="submit" name="submit" value="Home">
						</center>
						
					</td>
				</tr>
		</table>
		
	</form>

</body>
</html>