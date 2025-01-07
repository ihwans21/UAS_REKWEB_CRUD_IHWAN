<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pemesanan</title>
</head>
<body>
    <h1>Data Pemesanan</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nama Tamu</th>
                <th>Tipe Kamar</th>
                <th>Tanggal Check in</th>
                <th>Tanggal Check out</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Hotel as $item)
                <tr>
                    <td>{{ $item->Nama_Tamu }}</td>
                    <td>{{ $item->Tipe_Kamar }}</td>
                    <td>{{ $item->Tanggal_Check_in }}</td>
                    <td>{{ $item->Tanggal_Check_out }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
