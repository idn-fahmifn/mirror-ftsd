@extends('layouts.app')

@section('area-header')
<div class="bg-overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="header-text">Kategori Buku</h1>
                <p>Tambahkan kategori untuk memudahkan mencari buku</p>
            </div>
            <div class="col-md-6">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_create">
                    Tambah Kategori
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('area-body')

<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-bordered table-striped" id="datatable">
                <thead>
                    <th>Nama Kategori</th>
                    <th>Pilihan</th>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$item->kategori}}</td>
                        <td>
                            <form action="{{route('categories.destroy', $item->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <a href="{{route('categories.show', $item->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin anda akan menghapus?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('categories.store')}}" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" name="kategori" placeholder="contoh: Teknologi">
                            </div>
                            </>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection