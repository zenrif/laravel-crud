@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Mahasiswa</h1>
</div>

<div class="col-lg-8">
    {{-- Aneh, pake yang atas ga bisa, padahal semuanya sama --}}
    {{-- <form action="/mahasiswa" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <img class="foto-preview foto-fluid mb-3 col-sm-3">
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto"
                onchange="previewFoto()">
            @error('foto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form> --}}
    <form method="post" action="/mahasiswa" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group row mb-3">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <!-- Operasi ternary : if dan else dalam satu baris -->
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" autofocus
                    required value="{{ old('nim') }}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="namamhs" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namamhs" name="namamhs" required
                    value="{{ old('namamhs') }}" ; ?>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-control" id="jk" name="jk">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" required value="{{ old('alamat') }}">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kota" name="kota" required value="{{ old('kota') }}">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" required value="{{ old('email') }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <img class="foto-preview img-fluid mb-3 col-sm-3">
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto"
                onchange="previewFoto()">
            @error('foto')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>


@endsection