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
					<font size="2"><b><u>SURAT TUGAS</u></b></font><br>
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
               <p>Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana Yogyakarta  <br> memberikan tugas kepada para mahasiswa ini :</p>

<table>
    <tr>
        <td style="width: 30%;">Nama</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $nama }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Nim</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $nim }}</td>
    </tr>
</table>
<p>Untuk keperluan {{ $tujuan }} yang dilaksanakan oleh  {{ $name }} yang berada di {{ $alamat }}
</p>
<p> {{ $keterangan }}  Demikian Surat ini dibuat untuk dapat dipergunakan  sebagaimana perlunya.
	Kepada penerima tugas setelah menyelesaikan tugas dimohon menyampaikan laporan kepada pemberi tugas
</p>



<div style="width: 50%; text-align: left; float: right;">{{ $update }}</div><br>
<div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br>
<div style="width: 50%; text-align: left; float: right;">{!! QrCode::generate('Tanda Tangan'); !!}</a></div><br><br><br><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: right;">{{ $ttd }}</div>

</div>

<script>
    window.print();
</script>

</body>
</html>
