@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Tambah Data Dosen
                </div>
                <div class="card-body">
                <form action="{{Route('dosen.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">No Induk Pegawai Dosen</label>
                        <input type="text" name="nipd" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

