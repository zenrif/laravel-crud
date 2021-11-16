@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Mahasiswa</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col" style="text-align: center">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col" style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td style="text-align: center">{{ $loop->iteration }}</td>
                <td>
                    {{ $mhs['nim'] }}
                </td>
                <td>
                    {{ $mhs['namamhs'] }}
                </td>
                <td><img src="/img/{{ $mhs['foto'] }} " alt="" class="foto"></td>
                {{-- <td><img src="{{ asset('storage/'. $mhs->foto) }} " alt="" class="foto"></td> --}}
                <td style="text-align: center">
                    <a href="/mahasiswa/{{ $mhs['id'] }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/mahasiswa/{{ $mhs['id'] }}/edit" class="badge bg-warning"><span
                            data-feather="edit"></span></a>
                    <form action="/mahasiswa" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0"
                            onclick="return confirm('Yakin ingin menghapus data ini?')"><span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection