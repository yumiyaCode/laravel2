@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Lihat Data Dosen
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="nama" value="{{$dosen->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No Induk Pegawai Dosen</label>
                        <input type="text" name="nipd" value="{{$dosen->nipd}}" class="form-control" readonly>
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

