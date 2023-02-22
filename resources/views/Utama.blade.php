@extends('layouts.parent')
@section('title','Utama')
@section('css')
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Hari ini</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hari_ini}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Keseluruhan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$seluruh}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h6 class="m-0 font-weight-bold text-info">Data Tamu Tanggal <?=date('d F Y')?></h6>
            </div>            
        </div>            
    </div>        
    <div class="card-body">
        <div class="table-responsive">                
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tamu</th>
                        <th>Kategori Tamu</th>
                        <th>Alamat</th>
                        <th>No. Tlp</th>
                        <th>Tanggal</th>
                        <th>Jam Kedatangan</th>
                        <th>Jam Keluar</th>
                        <th>Tujuan</th>
                        <th>Option</th>                            
                    </tr>
                </thead>                    
                <tbody>  
                    @foreach ($data as $item)
                    <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$item->nama_tamu}}</td>
                     <td>{{$item->kategori->kategori}}</td>
                     <td>{{$item->alamat}}</td>
                     <td>{{$item->no_tlpn}}</td>
                     <td>{{$item->tanggal}}</td>
                     <td>{{$item->jam_kedatangan}}</td>
                     @if ($item->jam_keluar != null) 
                     <td>{{$item->jam_keluar}}</td>
                     @else
                     <td>--</td>
                     @endif
                     <td>{{$item->tujuan}}</td>
                     <td>
                             <a href="{{ route('Utama.edit', $item->id) }}" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                             <a href="{{ route('Utama.hapus', $item->id) }}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                         </form>
                     </td>
                 </tr> 
                 @endforeach                                
                </tbody>
            </table>
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
