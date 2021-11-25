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
				<center>
					<font size="4">LEMBAGA PERATIKUM 2019</font><br>
					<font size="5"><b>UNIVERSITAS KRISTEN DUTA WACANA</b></font><br>
					<font size="2">Bidang Keahlian : Teknologi informasi</font><br>
					<font size="2"><i>Jl. Dr. Wahidin Sudirohusodo No.5-25, Kotabaru, Daerah Istimewa Yogyakarta 55224</i></font>
				</center>
				</td>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
			</tr>
		<table width="625">
			<tr>
				<td class="text2">Yogyakarta, 16 mei 2021</td>
			</tr>
		</table>
		</table>
		<table>
			<tr class="text2">
				<td>Nomer</td>
				<td width="572">: -</td>
			</tr>
			<tr>
				<td>Perihal</td>
				<td width="564">: -</td>
			</tr>
		</table>
		<br>
		<table width="625">
			<tr>
		       <td>
               <p>Dengan Hormat, <br> Yang bertanda tangan dibawah ini saya :</p>

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
