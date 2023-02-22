@extends('layouts.parent')
@section('title','Edit Jam')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info">{{ __('Edit Kategori') }}</h6>
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
                    <form method="POST" enctype="multipart/form-data" action="{{route('Utama.update', $Utama->id) }}">
                    @csrf
                   {{method_field('PUT') }}       
                        <div class="form-group">
                            <label for="">Jam Keluar</label>
                            <input type="time" class="form-control form-ccontrol-user" id="jam_keluar" name="jam_keluar" >
                        </div> 
                        
                        <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                        <a href="/Utama" class="btn btn-sm btn-danger">Batal</a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
