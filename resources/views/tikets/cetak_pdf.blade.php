<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pemesanan Tiket</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Id Tiket</th>
				<th>Nama Pemesan</th>
				<th>No Hp</th>
				<th>Email</th>
				<th>Status</th>
				<th>Waktu Check In</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($tikets as $tiket)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $tiket->id }}</td>
            <td>{{ $tiket->nama }}</td>
            <td>{{ $tiket->no_hp }}</td>
            <td>{{ $tiket->email }}</td>
            <td>{{ $tiket->status === "0" ? "-" : "Check In" }}</td>
            <td>{{ $tiket->checkin === null ? "-" : $tiket->checkin }}</td>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>