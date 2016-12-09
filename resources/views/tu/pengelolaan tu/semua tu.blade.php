@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Petugas Tata Usaha
@endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $tu)
                <tr>
                    <td>{{ $tu->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('tu.show', ['id' => $tu->id]) }}"><button type="button" class="btn btn-default">Lihat Petugas</button></a>
                            <a href="{{ route('tu.edit', ['id' => $tu->id]) }}"><button type="button" class="btn btn-info">Ubah Data</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection