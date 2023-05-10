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
			@foreach ($buktis as $bukti)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $bukti->id }}</td>
            <td>{{ $bukti->nama }}</td>
            <td>{{ $bukti->no_hp }}</td>
            <td>{{ $bukti->email }}</td>
            <td>{{ $bukti->status === "0" ? "-" : "Check In" }}</td>
            <td>{{ $bukti->checkin === null ? "-" : $bukti->checkin }}</td>
        @endforeach
		</tbody>
	</table>
</body>
</html>