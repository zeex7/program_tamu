@extends('layouts.parent')
@section('title','Kategori')
@section('css')
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">{{ __('Kategori') }}</h6>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">                
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kategori</th>
                                    <th>Option</th>                            
                                </tr>
                            </thead>                    
                            <tbody>  
                                @foreach ($Kategori as $item)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>
                                    <form action="{{ route('Kategori.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Kategori.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('Kategori.hapus', $item->id) }}" class="btn btn-danger">Hapus</a>
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
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">{{ __('Tambah Kategori') }}</h6>
                </div>
                <div class="card-body">
                    @if (count ($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{route('Kategori.store')}}">
                        @csrf
                       <label for="">Nama Kategori</label>
                       <input class="form-control mb-3" type="text" name="kategori" id="name">
                       <td> <input type="submit" class="btn btn-success" value="Simpan"></td>    
                        <a href="/Kategori" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

@endsection