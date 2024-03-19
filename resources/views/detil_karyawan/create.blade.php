@extends('detil_karyawan.layout')
@section('content')
  

<div style="margin:20px;">
  <h1 class="text-center" style="font-size: 1.5rem;"><b>Create New detil karyawan</b></h1>
  <div>

  <form action="{{ route('detil_karyawan.store') }}" method="post">
  @csrf
  <!-- <div class="form-group">
            <label for="kode_karyawan_detail">Kode Karyawan Detail</label>
            <input type="text" class="form-control" id="kode_karyawan_detail" name="kode_karyawan_detail" required>
        </div> -->
        <div class="form-group">
            <label for="kode_karyawan">Kode Karyawan</label>
            <input type="text" class="form-control" id="kode_karyawan" name="kode_karyawan" required>
        </div>
        <div class="form-group">
            <label for="nomor_ktp">Nomor KTP</label>
            <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="form-group">
            <label for="alamat_ktp">Alamat KTP</label>
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" required></textarea>
        </div>
        <div class="form-group">
            <label for="kota_ktp">Kota KTP</label>
            <input type="text" class="form-control" id="kota_ktp" name="kota_ktp" required>
        </div>
        <div class="form-group">
            <label for="provinsi_ktp">Provinsi KTP</label>
            <input type="text" class="form-control" id="provinsi_ktp" name="provinsi_ktp" required>
        </div>
        <div class="form-group">
            <label for="kode_pos_ktp">Kode Pos KTP</label>
            <input type="text" class="form-control" id="kode_pos_ktp" name="kode_pos_ktp" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <a href="{{ url('detil_karyawan') }}" class="btn btn-secondary mt-2">Back</a>
            <input type="submit" value="Save" class="btn btn-success mt-2">
        </div>
        <!-- <input type="submit" value="Save" class="btn btn-success"></br> -->
    </form>

    </div>
</div>

@endsection
