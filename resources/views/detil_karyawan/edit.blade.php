@extends('detil_karyawan.layout')
@section('content')

<form method="POST" action="{{ route('detil_karyawan.update', $detil_karyawan->kode_karyawan_detail) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="kode_karyawan_detail">Kode Karyawan Detail</label>
        <input type="text" class="form-control" id="kode_karyawan_detail" name="kode_karyawan_detail" value="{{ $detil_karyawan->kode_karyawan_detail }}" disabled>
    </div>
    <div class="form-group">
        <label for="kode_karyawan">Kode Karyawan</label>
        <input type="text" class="form-control" id="kode_karyawan" name="kode_karyawan" value="{{ $detil_karyawan->kode_karyawan }}" required>
    </div>
    <div class="form-group">
        <label for="nomor_ktp">Nomor KTP</label>
        <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="{{ $detil_karyawan->nomor_ktp }}" required>
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $detil_karyawan->tempat_lahir }}" required>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $detil_karyawan->tanggal_lahir }}" required>
    </div>
    <div class="form-group">
        <label for="alamat_ktp">Alamat KTP</label>
        <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" required>{{ $detil_karyawan->alamat_ktp }}</textarea>
    </div>
    <div class="form-group">
        <label for="kota_ktp">Kota KTP</label>
        <input type="text" class="form-control" id="kota_ktp" name="kota_ktp" value="{{ $detil_karyawan->kota_ktp }}" required>
    </div>
    <div class="form-group">
        <label for="provinsi_ktp">Provinsi KTP</label>
        <input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" value="{{ $detil_karyawan->provinsi_ktp }}" required>
    </div>
    <div class="form-group">
        <label for="kode_pos_ktp">Kode Pos KTP</label>
        <input type="text" class="form-control" id="kode_pos_ktp" name="kode_pos_ktp" value="{{ $detil_karyawan->kode_pos_ktp }}" required>
    </div>
    <div class="form-group">
        <label for="nomor_telepon">Nomor Telepon</label>
        <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ $detil_karyawan->nomor_telepon }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $detil_karyawan->email }}" required>
    </div>
    <div class="form-group">
    <a href="{{ route('detil_karyawan.index') }}" class="btn btn-secondary mt-2">Back</a>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </div>
    <!-- tambahkan form field lainnya sesuai kebutuhan -->
</form>
@endsection