<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Transaksi</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Member</th>
				<th>Tanggal Transaksi</th>
				<th>Batas Waktu Pengambilan</th>
				<th>Tanggal Bayar</th>
				<th>Status</th>
                <th>Status Pembayaran</th>
                <th>Nama Kasir</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($transaksis as $transaksi)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $transaksi->member->nama }}</td>
                    <td>{{ $transaksi->tgl }}</td>
                    <td>{{ $transaksi->batas_waktu }}</td>
                    <td>{{ $transaksi->tgl_bayar }}</td>
                    <td>{{ $transaksi->status }}</td>
                    <td>{{ $transaksi->status_bayar }}</td>
                    <td>{{ $transaksi->user->nama }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>