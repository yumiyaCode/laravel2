@extends('layouts.app')
@section('content')
    <div class="container">
     <div class="row justify-center-content">
      <div class="col md-10">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                {{ session('message') }}
                </div>
            @elseif(session('message1'))
                <div class="alert alert-danger" role="alert">
                {{ session('message1') }}
                </div>
            @endif
       <div class="card">
        <div class="card-header">
            Data Hobi
            <a href="{{Route('hobi.create')}}" class="float-right btn btn-success">

                Tambah data
    
            </a>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table">
            <thead>
        <tr>
                <th>No</th>      
                <th>Hobi</th>
        </tr>  
            </thead>
            <tbody>
                @php $no= 1; @endphp
                @foreach($hobi as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->hobi}}</td>
                    <td>
                    <form action="{{Route('hobi.destroy',$data->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{Route('hobi.show',$data->id)}}" class="btn btn-outline-primary"> Lihat</a>
                        <a href="{{Route('hobi.edit',$data->id)}}" class="btn btn-outline-success">   Edit </a>
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin Hapus?')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>  
        </table>
             </div>
           </div>
         </div>
       </div>
    </div>
 </div>
@endsection