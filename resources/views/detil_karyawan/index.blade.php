@extends('detil_karyawan.layout')
@section('content')
<div class="container">
@if(session()->has('loginSuccess'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('loginSuccess')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('flash_message'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('flash_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('error_message'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('error_message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row" style="margin:50px;">
        <div class="col-14">
            <div class="card">
                <div class="card-header">
                    <h2>DETIL KARYAWAN</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('detil_karyawan/create') }}" class="btn btn-success" title="Add New detil_karyawan"><i class="fas fa-plus"></i>Add new</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-3"><i class="bi bi-box-arrow-right"></i>logout</button>
                    </form>
                    <br/>
                    <br/>
                    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Karyawan Detail</th>
                <th scope="col">Kode Karyawan</th>
                <th scope="col">Nomor KTP</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat KTP</th>
                <th scope="col">Kota KTP</th>
                <th scope="col">Provinsi KTP</th>
                <th scope="col">Kode pos KTP</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        @php
                $no = 1;
            @endphp

        @foreach($detil_karyawan as $item)
        <tbody class="table-group-divider">

            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ $item->kode_karyawan_detail }}</td>
                <td>{{ $item->kode_karyawan }}</td>
                <td>{{ $item->nomor_ktp }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>{{ $item->alamat_ktp }}</td>
                <td>{{ $item->kota_ktp }}</td>
                <td>{{ $item->provinsi_ktp }}</td>
                <td>{{ $item->kode_pos_ktp }}</td>
                <td>{{ $item->nomor_telepon }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('detil_karyawan.show', $item->kode_karyawan_detail) }}" class="btn btn-info me-2"><i class="bi bi-eye"></i>Show</a>
                        <a href="{{ route('detil_karyawan.edit', $item->kode_karyawan_detail) }}" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i>Edit</a>
                        <form method="POST" action="{{ route('detil_karyawan.destroy', $item->kode_karyawan_detail) }}" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="bi bi-trash3"></i> Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                var closeButton = alert.querySelector('.btn-close');
                closeButton.addEventListener('click', function() {
                    alert.style.display = 'none';
                });
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endsection


