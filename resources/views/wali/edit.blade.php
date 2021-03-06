@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-center-content">
        <div class="col md-10">
            <div class="card">
                <div class="card-header">
                Edit Data Wali
                </div>
                <div class="card-body">
                <form action="{{Route('wali.update',$wl->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input type="text" name="nama" value="{{$wl->nama}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="id_mahasiswa" class="form-control" required>
                            @foreach($mhs as $data)
                                <option value="{{$data->id}}"
                                {{$data->id == $wl->id_mahasiswa ? "selected":""}}>{{$data->nama}}</option>
                            @endforeach
                        </select>
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

