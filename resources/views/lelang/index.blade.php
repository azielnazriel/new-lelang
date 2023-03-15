@extends('layouts.dashboard')

@section('content') 
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>tanggal lelang</th>
                <th>harga akhir</th>                
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody > 
            @foreach ($lelang as $item)
           
            <tr>
                <th>{{$item->tgl_lelang_15480}}</th>
                <th>{{$item->harga_akhir_15480}}</th>
                <th>{{$item->status_15480}}</th>
                <th>
                    <a href="/lelang/{{$item->id_15480}}/edit" class="btn btn-sm btn-warning">Update</a>
                    <form action="/lelang/{{$item->id_15480}}" method="post" class="d-inline-block">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
                 
            @endforeach
        </tbody>
        
    </table>
    <a href="/lelang/create" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;"> Create</a>
@endsection