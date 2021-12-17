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
        <div style="width: 35%; text-align: left; float: right;"> {{ $tanggal }}</font></div>
	</center>
				</td>
		</table>
		<table>

		</table>
		<br>
		<table width="625">
			<tr>
		       <td>


            <font size="2">Nomor: {{ $nosur }}</font><br>
            <font size="2">Hal:{{ $hal }}</font><br>
            <font size="2">Lamp: 1 lembar</font><br><br><br>
            <font size="2"><b>Kepada Yth :<b></font><br>
            <font size="2"><b>{{ $kepada }}<b></font><br>
            <font size="2"><b>Universitas Kristen Duta Wacana<b></font><br>
            <font size="2"><b>Yogyakarta<b></font><br>

               <p>Salam sejahtera, <br> Menyusuli surat kami {{ $nosur }}, perihal Permohonan $keterangan atas nama {{ $nama }}. Melalui surat ini kami menyampaikan <b> {{ $tujuan }} </b> {{ $keperluan }}</p>

<p>Demikian surat ini kami sampaikan. Atau perhatian dan kerjasama yang diberikan kami <br> mengucapkan terima kasih.
</p><br>


<div style="width: 50%; text-align: left; float: left;">{!! QrCode::generate('BELAJAR QR'); !!}</div><br><br><br><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: left;">{{ $ttd }}</div><br>
<div style="width: 50%; text-align: left; float: left;">$nim</div><br>
</div>

<script>
    window.print();
</script>

</body>
</html>
