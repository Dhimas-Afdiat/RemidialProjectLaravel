@extends('layouts.master')

@section('top')

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Peminjaman Buku</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <form action="{{route('stockout.store')}}" method="post" novalidate>
		{{ csrf_field() }}
        <input type="hidden" id="id" name="id">
        <div class="box-body">
          <div class="form-group">
              <label >Buku</label>
              <select name="product_id" class="form-control @error('product_id') is-invalid @enderror" required>
                  <option value="" disabled selected>Select a Product</option>
                  @foreach($products as $brg)
                  <option value="{{ $brg->id_barang }}">{{ $brg->nama_barang }}</option>
                  @endforeach
              </select>
              <span class="help-block with-errors"></span>
                @error('product_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Nama Peminjam</label>
                <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Qty</label>
                <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty"  autofocus required>
                <span class="help-block with-errors"></span>
                @error('qty')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label >Email</label>
                <input type="text" class="form-control" id="email" name="email"  autofocus required>
                <span class="help-block with-errors"></span>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Tambah Data">
        <a href="/stockout" class="btn btn-outline-primary">Kembali</a>
	    </form>
    </div>
  </div>
</div>
</div>
<!-- /.container-fluid -->
@endsection