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
				<td><img src="/img/logoukdw.png" width="70" height="90"></td>
				<td>
					<font size="4"><b>UNIVERSITAS KRISTEN DUTA WACANA</b></font><br>
					<font size="5"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
					<font size="2">PROGRAM STUDI INFORMATIKA</font><br>
					<font size="2">PROGRAM STUDI SISTEM INFORMASI</font><br>
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
					<font size="2"><b><u>SURAT KETERANGAN</u></b></font><br>
					<font size="2">Nomor: {{ $nosur }}</font><br>
	</center>
				</td>
		</table>
		<table>

		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
               <p>{{ $jabatan }} Himpunan Mahasiswa Sistem Infromasi Universitas Kristen Duta Wacana  <br> {{ $tahun }} dengan ini menyatakan bahwa</p>

<table>
    <tr>
        <td style="width: 30%;">Nama</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $nama }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Nomor Induk</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $nim }}</td>
    </tr>
    <tr>
        <td style="width: 30%;">Program Studi</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">Sistem Informasi</td>
    </tr>
    <tr>
        <td style="width: 30%;">Fakultas</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">Teknologi Informasi</td>
    </tr>
</table>


<p>Telah menjadi sebagai Badan Pengurus Harian ({{ $jabatan }}) Sistem Informasi Universitas Kristen Duta Wacana dalam periode jabatan {{ $tahun }}.
</p>
<p>Demikian kiranya surat keterangan ini dibuat supaya dapat dipergunakan sebagaimana mestinya
</p>

<div style="width: 50%; text-align: left; float: right;">{{ $update }}</div><br>
<div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br>
<div style="width: 50%; text-align: left; float: right;">{!! QrCode::generate('BELAJAR QR'); !!}</div><br><br><br><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: right;">{{ $ttd }}</div>

</div>

<script>
    window.print();
</script>

</body>
</html>
