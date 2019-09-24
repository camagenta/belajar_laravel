<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>

<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->pegawai_nama . ' | Alamat : ' . $p->pegawai_alamat }}</li>
	@endforeach
</ul>

</body>
</html>