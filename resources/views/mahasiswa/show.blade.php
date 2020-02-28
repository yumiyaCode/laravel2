@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Lihat Data Mahasiswa
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="nama" value="{{$mhs->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No Induk Mahasiswa</label>
                        <input type="text" name="nim" value="{{$mhs->nim}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="id_dosen" class="form-control" value="{{$mhs->dosen->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-outline-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

