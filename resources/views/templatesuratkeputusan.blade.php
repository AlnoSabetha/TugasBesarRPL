<!DOCTYPE html>
<html>
<head>
	<title>contoh surat keputusan</title>
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
					<font size="2"><b>SURAT KEPUTUSAN DEKAN</b></font><br>
                    <font size="2"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
                    <font size="2">UNIVERSITAS KRISTEN DUTA WACANA</font><br>
					<font size="2">NOMOR: </font><br><br>
                    <font size="2">Tentang </font><br>

                    <font size="2">{{ $tujuan }}</font><br>
	</center>
				</td>
		</table>
		<table>

		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
               <p>Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana</p>
               <p>Memimbing : {{ $membimbimbing }} </p>
               <p>Memimbing : {{ $mengingat }} </p>

                    <center>
					<font size="2"><b>MEMUTUSKAN  :</b></font><br><br>
                    </center>
                    <p><b>Menetapkan :</b></p><br>
                    <p>{{ $menetapkan }} </p>

                    <center>
                    <font size="2">Ditetapkan di: {{ $kota }}</font><br>
					<font size="2">Pada tanggal: {{ $tanggal }}</font><br><br>
					<p>{{ $pejabat }}</p><br><br>
					<p>{!! QrCode::generate('BELAJAR QR'); !!}</p><br><br><br><br><br><br><br>
					<p>{{ $nameygtdd }}</p>
                    <p>{{ $nik }}</p>
                	</center>

				

</div>

<script>
    window.print();
</script>

</body>
</html>
