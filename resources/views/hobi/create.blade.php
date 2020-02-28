@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Tambah Data Hobi
                </div>
                <div class="card-body">
                <form action="{{Route('hobi.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Hobi</label>
                        <input type="text" name="hobi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{url()->previous()}}" class="btn btn-outline-danger">Kembali</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

