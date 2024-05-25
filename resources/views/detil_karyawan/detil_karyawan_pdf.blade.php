<!DOCTYPE html>
<html>
<head>
    <title>Laporan Detil Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Laporan Detil Karyawan</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Karyawan Detail</th>
                <th>Nama Karyawan</th>
                <th>Nomor KTP</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat KTP</th>
                <th>Kota KTP</th>
                <th>Provinsi KTP</th>
                <th>Kode pos KTP</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp

            @foreach($detil_karyawan as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->kode_karyawan_detail }}</td>
                <td>{{ $item->nama_karyawan }}</td>
                <td>{{ $item->nomor_ktp }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat_ktp }}</td>
                <td>{{ $item->kota_ktp }}</td>
                <td>{{ $item->provinsi_ktp }}</td>
                <td>{{ $item->kode_pos_ktp }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
