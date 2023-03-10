<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Laporan</title>
    <!-- Favicon -->
    <link href="{{ asset('img/laundry-machine.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
  
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-8 mb-3 mt-3">
            <h1 class="text-center">Laporan Transaksi</h1>
            <h1 class="text-center">Laundry in Aja</h1>
        </div>
        <div class="col-10"><a href="{{ url('/home') }}"><i class="bi bi-arrow-left text-dark" style="font-size: 25px; "></i></a></div>
        <div class="col-10">
            <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Invoice</th>
                <th>Pelanggan</th>
                <th>Outlet</th>
                <th>No Telepon</th>
                <th>Tanggal Bayar</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Dibayar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($generateData as $trx)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $trx->kode_invoice }}</td>
                <td>{{ $trx->member->nama }}</td>
                <td>{{ $trx->outlet->nama }}</td>
                <td>{{ $trx->member->telepon }}</td>
                <td>{{ $trx->tgl_bayar }}</td>
                <td>Rp. {{ number_format($trx->total_harga,0,',','.') }}</td>
    
                <td>
                    @if ($trx->status == 'baru')
                    <span class="text-black">{{$trx->status}}</span>
                    @endif
                    @if ($trx->status == 'proses')
                    <span class="text-black">{{$trx->status}}</span>
                    @endif
                    @if ($trx->status == 'diambil')
                    <span class="text-black">{{$trx->status}}</span>
                    @endif
                    @if ($trx->status == 'selesai')
                    <span class="text-black">{{$trx->status}}</span>
                    @endif
                </td>
                <td>
                    @if ($trx->dibayar=='dibayar')
                    <span class=" text-black"
                        >{{$trx->dibayar}}</span>
                    @else()
                    <span class="text-black">{{$trx->dibayar}}</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
    
        
      </section>
      <script>
        window.print();
      </script>
      <script src="{{ asset('js/app.js') }}" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</body>
</html>
