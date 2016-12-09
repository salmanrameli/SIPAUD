@extends('layouts.layout-tu')

@section('header')
    Pengelolaan Pelajaran
    @endsection

@section('content')
    <div class="col-lg-12">
        <table class="table">
            @foreach($hasil as $pelajaran)
                <tr>
                    <td>{{ $pelajaran->nama }}</td>
                    <td><div class="pull-right">
                            <a href="{{ route('tu.pelajaran.show', ['id' => $pelajaran->id]) }}"><button type="button" class="btn btn-default">Lihat Pelajaran</button></a>
                            <a href="{{ route('tu.pelajaran.edit', ['id' => $pelajaran->id]) }}"><button type="button" class="btn btn-info">Ubah Data</button></a>
                        </div></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection