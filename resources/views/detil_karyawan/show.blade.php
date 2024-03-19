@extends('detil_karyawan.layout')
@section('content')
<div class="container">
    <div class="row" style="margin:50px;">
        <div class="col-14">
            <div class="card">
                <div class="card-header">
                    <h2>DETIL KARYAWAN</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Kode Karyawan Detail</th>
                                    <td>{{ $detil_karyawan->kode_karyawan_detail }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kode Karyawan</th>
                                    <td>{{ $detil_karyawan->kode_karyawan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor KTP</th>
                                    <td>{{ $detil_karyawan->nomor_ktp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td>{{ $detil_karyawan->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Lahir</th>
                                    <td>{{ $detil_karyawan->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat KTP</th>
                                    <td>{{ $detil_karyawan->alamat_ktp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kota KTP</th>
                                    <td>{{ $detil_karyawan->kota_ktp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Provinsi KTP</th>
                                    <td>{{ $detil_karyawan->provinsi_ktp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kode Pos KTP</th>
                                    <td>{{ $detil_karyawan->kode_pos_ktp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor Telepon</th>
                                    <td>{{ $detil_karyawan->nomor_telepon }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $detil_karyawan->email }}</td>
                                </tr>
                                <!-- Tambahkan informasi detil lainnya sesuai kebutuhan -->
                            </tbody>
                        </table>
                        </div>
                        <a href="{{ route('detil_karyawan.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
