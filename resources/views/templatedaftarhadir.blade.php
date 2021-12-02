<!DOCTYPE html>
<html>
<head>
	<title>contoh daftar hadir</title>
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
					<font size="5"><b>DAFTAR HADIR</b></font><br><br>
					<font size="2">Program Studi SISTEM INFORMASI Fakultas Teknologi Informasi</font><br>
					<font size="2">Universitas Kristen Duta Wacana</font><br>
					<font size="2">Jln. Dr. Wahidin Sudirohusodo No.5-25 Yogyakarta</font><br>
					<font size="2">Telp. 0274563929 ext 321, 322</font>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
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
    
<table>
    <tr>
        <td style="width: 30%;">Nama Kegiatan :</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $nama_kegiatan }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Hari, Tanggal :</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $tanggal }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Waktu :</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $waktu }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Tempat :</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $tempat }}</td>
    </tr>
	<tr>
        <td style="width: 30%;">Pembicara :</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $pembicara }}</td>
    </tr>
</table>
<br>
<center>
	
<table border="2">
	
<th bgcolor="grey" rowspan="2">No</th>
<th bgcolor="grey" rowspan="2">NIM</th>
<th bgcolor="grey" rowspan="2">Nama Lengkap</th>
<th bgcolor="grey" colspan="3">Tanda Tangan</th>

        <tr>
           
        </tr>
        <tr>
            <td>1</td>
            <td>72190270</td>
			<td>Manuel Vallancio Nugroho</td>
			<td>1.</td>
			<td></td>
        </tr>
		<tr>
            <td>2</td>
            <td>72190271</td>
			<td>Jessica</td>
			<td></td>
			<td>2.</td>
        </tr>
    </table>
	</center>
	<br>



<div style="width: 50%; text-align: left; float: right;">Waktu dan tempat menandatangani</div><br>
<div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br>
<div style="width: 50%; text-align: left; float: right;">{!! QrCode::generate('BELAJAR QR'); !!}</div><br><br><br><br><br><br><br><br>
<div style="width: 50%; text-align: left; float: right;">{{ $name }}</div>

</div>

<script>
    window.print();
</script>

</body>
</html>
