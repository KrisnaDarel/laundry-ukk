@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if (Auth::user()->role=='admin')    
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
        
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Membership</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$member->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaksi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transaksi->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Paket</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$paket->count()}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cubes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (Auth::user()->role=='kasir')    
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
        
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Membership</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$member->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaksi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transaksi->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (Auth::user()->role=='owner')    
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transaksi</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$transaksi->count()}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
    @endif
        
    <div class="row">
        <div class="col-md-3 col-12">
            <a href="{{ url('/home/generate-data') }}" class="btn btn-primary mb-2" style="background-color: white; color: black;">Cetak Data</a>
        </div>

        {{-- <div class="card-body">
            <form action="{{ url('/home/cariTgl')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="from" class="form-control" placeholder="Tanggal Awal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                </div>
                <div class="form-group">
                    <input type="text" name="to" class="form-control" placeholder="Tanggal Akhir" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%">Cari tanggal</button>
            </form>
        </div> --}}

        <div class="col-12">
            @if($transaksi ?? '')
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr style="background-color: white; black;">
                        <th>No</th>
                        <th>Kode Invoice</th>
                        <th>Membership</th>
                        <th>Outlet</th>
                        <th>No Telepon</th>
                        <th>Tanggal Bayar</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Dibayar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksiPaid as $transaksiPaid)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $transaksiPaid->kode_invoice }}</td>
                        <td>{{ $transaksiPaid->member->nama }}</td>
                        <td>{{ $transaksiPaid->outlet->nama }}</td>
                        <td>{{ $transaksiPaid->member->telepon }}</td>
                        <td>{{ $transaksiPaid->tgl_bayar }}</td>
                        <td>Rp. {{ number_format($transaksiPaid->total_harga,0,',','.') }}</td>
            
                        <td>
                            @if ($transaksiPaid->status == 'baru')
                            <span class="badge text-primary py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #c8c1ff">{{$transaksiPaid->status}}</span>
                            @endif
                            @if ($transaksiPaid->status == 'proses')
                            <span class="badge text-warning py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #fdff9b">{{$transaksiPaid->status}}</span>
                            @endif
                            @if ($transaksiPaid->status == 'diambil')
                            <span class="badge py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #ffdfc2; color: #ff9100">{{$transaksiPaid->status}}</span>
                            @endif
                            @if ($transaksiPaid->status == 'selesai')
                            <span class="badge text-success py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #b4ffa4">{{$transaksiPaid->status}}</span>
                            @endif
                        </td>
                        <td>
                            @if ($transaksiPaid->dibayar=='dibayar')
                            <span class="badge text-success py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #b4ffa4">{{$transaksiPaid->dibayar}}</span>
                            @else()
                            <span class="badge text-danger py-1 px-2"
                                style="font-size: 13px; border-radius: 20px; background-color: #ffd9d9">{{$transaksiPaid->dibayar}}</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <div class="text-center">
                    data tidak ada
                </div>
            @endif    
        </div>
    </div>

@endsection