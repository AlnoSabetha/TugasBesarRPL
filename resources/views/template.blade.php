<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengunguman</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr td {
			font-size: 13px;
		}

	</style>
</head>
<body>
	<center>
		<table>
			<tr>
				<td><img src="/img/logoukdw.png" width="90" height="90"></td>
				<td>
					<left>
					<font size="5"><b>UNIVERSITAS KRISTEN DUTA WACANA</b></font><br>
					<font size="5"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
					<font size="2">PROGRAM STUDI INFORMATIKA</font><br>
					<font size="2">PROGRAM STUDI SISTEM INFORMASI</font><br>
	</left>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		<table width="625">
			<tr>
				
			</tr>
		</table>

		<td>
		<center>
					<font size="2"><b><u>SURAT TUGAS</u></b></font><br>
					<font size="2">Nomor: </font><br>
	</center>
				</td>
		</table>
		<table>
			
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
               <p>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana Yogyakarta  <br> memberikan tugas kepada para mahasiswa ini :</p>

<table>
    <tr>
        <td style="width: 30%;">Nama</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $name }}</td>
    </tr>
    <tr>
        <td style="width: 30%;">Tujuan</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $tujuan }}</td>
    </tr>
    <tr>
        <td style="width: 30%; vertical-align: top;">Alamat</td>
        <td style="width: 5%; vertical-align: top;">:</td>
        <td style="width: 65%;">{{ $alamat }}</td>
    </tr>
</table>

<p>{{ $keterangan }}</p>

<div style="width: 50%; text-align: left; float: right;">Bandung, 12 November 2021</div><br>
<div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: right;">{{ $name }}</div>

</div>

<script>
    window.print();
</script>

</body>
</html>
