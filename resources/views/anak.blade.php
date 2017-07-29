<!DOCTYPE html>
<html>
<head>
	<title>Manchester City</title>
</head>
<body>
		<center>
	<h2>Data Orang Tua</h2>
	

		@foreach($anak as $data)<hr><table border="1">
		<tr>
		<td >
		Nama </td><td> {{ $data->nama}}</td></tr>
		<tr><td>Id Orang Tua</td><td> {{$data->ortu_id}}</td></tr>	
		<tr><td >Umur </td><td>{{ $data->umur}}</td></tr>
		<tr><td >Alamat </td><td>{{ $data->alamat}}<br></td></tr></table>
		<hr>
		@endforeach
</center>
</body>
</html>