<!DOCTYPE html>
<html>
<head>
	<title>Manchester City</title>
</head>
<body>
		<center>
	<h1>Data Keluarga</h1>
		@foreach($ortu as $data)<hr><table border="1">
		<tr>
		<td >
		Nama Ibu </td><td> {{ $data->nama_ibu}}</td></tr>
		<tr><td >Nama Ayah </td><td>{{ $data->nama_ayah}}</td></tr>
		<tr><td >Umur Ibu </td><td>{{ $data->umur_ibu}}</td></tr>
		<tr><td >Umur Ayah </td><td>{{ $data->umur_ayah}}<br></td></tr>
		<tr><td >Nama Anak </td><td>
		@foreach($data->anak as $key)
		<li>{{$key->nama}}</li>
		@endforeach</table>
		<hr>
		@endforeach

	
</center>
</body>
</html>