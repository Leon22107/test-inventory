@extends('layout.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Stocks</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Stocks</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="/stock/input" class="btn btn-sm btn-primary">Add Stock</a>
            </div>
            <div class="card-body">
                <div class="card-header">
                    <button id="buttotal" class="btn btn-sm btn-primary mr-2" onclick="showTab('total')">Total Stock</button>
                    <button id="butvendor" class="btn btn-sm btn-outline-secondary" onclick="showTab('vendor')">Sort by Vendor</button>
                </div>
                <div id="tab-vendor" class="tab-content" style="display: none">
                    <!-- Tampilkan tabel stok total -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Vendor</th>
                                <th>SKU</th>
                                <th>Qty / Unit(s)</th>
                                <th>Price/Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stock as $item)
                                <tr>
                                    <td>{{ $item->item->id }}</td>
                                    <td>{{ $item->item->name }}</td>
                                    <td>{{ $item->item->category->name }}</td>
                                    <td>{{ $item->vendor->name }}</td>
                                    <td>{{ $item->item->sku }}</td>
                                    <td>{{ $item->qty }} {{ $item->item->unit }}</td>
                                    <td>{{ $item->unit_price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div id="tab-total" class="tab-content">
                    <!-- Tampilkan tabel stok per vendor -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Qty / Unit(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($total_stock as $stock)
                                <tr>
                                    <td>{{ $stock->id }}</td>
                                    <td>{{ $stock->name }}</td>
                                    <td>{{ $stock->category }}</td>
                                    <td>{{ $stock->total }} {{ $stock->unit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showTab(tab) {
            document.getElementById('tab-total').style.display = 'none';
            document.getElementById('tab-vendor').style.display = 'none';
            document.getElementById('buttotal').classList.remove('btn-primary');
            document.getElementById('butvendor').classList.remove('btn-primary');
            document.getElementById('buttotal').classList.add('btn-outline-secondary');
            document.getElementById('butvendor').classList.add('btn-outline-secondary');

            document.getElementById('tab-' + tab).style.display = 'block';
            document.getElementById('but' + tab).classList.add('btn-primary');
            document.getElementById('but' + tab).classList.remove('btn-outline-secondary');
        }
    </script>
</div>
@endsection
