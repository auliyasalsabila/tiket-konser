<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Tiket</title>
</head>
<body>
	<table class="table table-bordered">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Id Tiket</th>
            <th>Nama Pembeli</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Status</th>
            <th>Waktu Check In</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($buktis as $bukti)
        <tr style="text-align: center;">
            <td>{{ ++$i }}</td>
            <td>{{ $bukti->id }}</td>
            <td>{{ $bukti->nama }}</td>
            <td>{{ $bukti->no_hp }}</td>
            <td>{{ $bukti->email }}</td>
            <td>{{ $bukti->status === "0" ? "-" : "Check In" }}</td>
            <td>{{ $bukti->checkin === null ? "-" : $tiket->checkin }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>