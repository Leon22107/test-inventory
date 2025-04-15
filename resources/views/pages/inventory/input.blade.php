@extends('layout.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Input Stocks</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Stocks</li>
        <li class="breadcrumb-item active">Input</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <form action="/stock/addmaterial" method="POST">
            @csrf
            {{-- make sure method post --}}
            @method('POST')
            <div class="card">
                <div class="card-body">
                    {{-- nama --}}
                    <div class="form-group">
                        <label for="item_category" class="form-label">Category</label>
                        <select name="item_category" id="item_category" class="form-control">
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Item Name</label>
                        <select name="name" id="name" class="form-control">
                            @foreach ($item as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="vendor" class="form-label">Vendor</label>
                        <select name="vendor" id="vendor" class="form-control">
                            @foreach ($vendor as $vendor)
                                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" inputmode="numeric" name="qty" id="qty" class="form-control">
                    </div>
                    {{-- Belum ada data transaksi
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div> --}}
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <div class="mr-2">
                            <a href="/stock" class="btn btn-sm btn-outline-secondary me-2">Cancel</a>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
