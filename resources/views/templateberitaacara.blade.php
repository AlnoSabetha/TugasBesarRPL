<!DOCTYPE html>
<html>
<head>
	<title>contoh surat berita acara</title>
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
					<font size="4"><b>Berita Acara</b></font><br><br>
					<font size="3"><b>"{{ $tujuan }}"</b></font><br>
					<font size="3"><b{{ $nama_acara  }}</b></font><br>
					<font size="2">No: {{ $nosur }}</font><br>
	</center>
				</td>
		</table>
		<table>

		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
               <p>
					   Pada hari {{ $tanggal }} bertempat di {{ $tempat }} telah dilangsungkan {{ $tujuan }} dengan tema  {{ $nama_acara  }} dengan mengundang pembicara yaitu {{ $pembicara }}
				   acara ini diikuti oleh seluruh civitas akademika UKDW dan perwakilan dari beberapa mitra kerjasama Fakultas Teknologi Informasi UKDW.
				   <br><br> Adapun TOR acara, daftar kehadiran peserta, foto kegiatan seperti terlampir pada berita acara ini.</p>



<p>Demikian berita acara ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.
</p><br>

<center>
					<div style="width: 50%; text-align: left; float: right;">{{ $update }}</div><br>
					<div style="width: 50%; text-align: left; float: right;">yang bertandatangan,</div><br><br>
					<div style="width: 50%; text-align: left; float: right;">{!! QrCode::generate('BELAJAR QR'); !!}</div><br><br><br><br><br><br><br><br>
					<div style="width: 50%; text-align: left; float: right;">{{ $ttd }}</div>
	</center>

</div>

<script>
    window.print();
</script>

</body>
</html>
