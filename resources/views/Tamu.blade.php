@extends('layouts.parent')
@section('title','Tamu')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">            
                <div class="card-header py-3">
                    <h6 class="font-weight-bold text-info">{{ __(' Tambah Tamu') }}</h6>
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
                <form class="user" method="POST" action="{{ route('Tamu.store') }}"> 
                    @csrf                    

                    <div class="form-group">
                        <label for="">Nama Tamu</label>
                        <input type="text" class="form-control
                        form-ccontrol-user" id="nama" name="nama_tamu" required>
                    </div> 

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control
                        form-ccontrol-user" id="alamat" name="alamat" required>
                    </div>

                    <div class="form-group">
                        <label for="">Tujuan</label>
                        <textarea class="form-control
                        form-ccontrol-user" id="tujuan" name="tujuan" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">No Tlpn</label>
                        <input type="text" class="form-control
                        form-ccontrol-user" id="no_tlpn" name="no_tlpn" required>
                    </div>
                            

                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select class="form-select form-control" id="id_kategori" name="id_kategori" >  
                            <option value="" >Silahkan Pilih Kategori Tamu</option>
                            @foreach ($Kategori as $item)
                            <option value="{{ $item->id}}" >{{ $item->kategori }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Jam Kedatangan</label>
                        <input type="time" class="form-control
                        form-ccontrol-user" id="jam_kedatangan" name="jam_kedatangan" placeholder="Jam Kedatangan" required>
                    </div> 

                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control
                        form-ccontrol-user" id="tanggal" name="tanggal" placeholder="Tanggal" required>
                    </div>         
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>                                                        
            </div>
        </div>
    </div>                   
</div>
@endsection
