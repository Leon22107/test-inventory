@extends('layout.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Add New Item</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item">Stocks</li>
        <li class="breadcrumb-item active">Add New Item</li>
      </ol>
    </div>
  </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <form action="/stock/newItem" method="POST">
            @csrf
            {{-- make sure method post --}}
            @method('POST')
            <div class="card">
                <div class="card-body">
                    {{-- nama --}}
                    <div class="form-group">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control">
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Item Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" name="sku" id="sku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" id="unit" class="form-control">
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
