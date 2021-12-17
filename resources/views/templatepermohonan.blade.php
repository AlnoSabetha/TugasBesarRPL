<!DOCTYPE html>
<html>
<head>
	<title>contoh surat pengumuman</title>
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

				</td>
		</table>
		<table>

		</table>
		<br>
		<table width="625">
			<tr>
		       <td>


            <font size="2">Nomor: {{ $nosur }}</font><br>
            <font size="2">Hal: Permohonan Diskusi</font><br>
            <font size="2">Lamp: ---</font><br><br>
            <font size="2">{{ $tgl_pembuatan }}</font><br><br><br>
            <font size="2"><b>Kepada Yth :</b></font><br>
            <font size="2"><b>{{ $nama_mitra }}</b></font><br>


               <p>Salam sejahtera, <br> Menindaklanjuti pembicaraan beberapa waktu yang lalu antara FTI UKDW dengan pihak {{ $nama_mitra }}, perihal {{ $tujuan }}
             ,dengan ini kami mohon  kesediaan {{$nama_mitra }}</b> untuk meluangkan waktu guma menyelenggarakan {{ $nama_kegiatan }} tersebut diatas. adapun waktu pelaksanaanya adalah:</p>
             <table>
    <tr>
        <td style="width: 30%;">Hari/tanggal</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $tgl_pelaksanaan }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Jam</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $waktu }}</td>
    </tr>
    <tr>
        <td style="width: 30%;">Tempat</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $tempat }}</td>
    </tr>
</table>
<p>Demikian permohonan kami sampaikan. Atau perhatian dan kerjasama yang diberikan kami <br> mengucapkan terima kasih.
</p><br>

<div style="width: 50%; text-align: left; float: left;"><b></b></div><br><br>
<div style="width: 50%; text-align: left; float: left;"><b>{!! QrCode::generate('BELAJAR QR'); !!}</div><br><br><br><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: left;">{{ $ttd }}</b></div><br>
<div style="width: 50%; text-align: left; float: left;"><b>{{ $nim }}</b></div><br>
</div>

<script>
    window.print();
</script>

</body>
</html>
