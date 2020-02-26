@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Edit Data Dosen
                </div>
                <div class="card-body">
                <form action="{{Route('dosen.update',$dosen->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input type="text" name="nama" value="{{$dosen->nama}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">No Induk Pegawai Dosen</label>
                        <input type="text" name="nipd" value="{{$dosen->nipd}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url()->previous()}}" class="btn btn-outline-danger">Kembali</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

