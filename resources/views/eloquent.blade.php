@extends('layouts.template')
@section('konten')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
</head>
<body>
    @foreach($mahasiswa as $data)
            <h3>{{$data->nama}} <small>[{{$data -> nim}}]</small></h3>
        <h5>Hobi : 
    @foreach($data->hobi as $wal)
           <small>{{$wal->hobi}},</small>
    @endforeach
    </h5>
    <h4>

       <li>
          Nama Wali : <strong>{{$data ->wali->nama}}</strong>
      </li>
      <li>Nama Dosen :  <strong>{{$data ->dosen->nama}}</li>

    </h4>
        <hr>
    @endforeach
</body>
</html>

@endsection