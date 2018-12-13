@extends ('layouts.admin_template')
  @section ('content')
<div class="box-header with-border">
  <h3 class="box-title">{{ $page_title }}</h3>
</div>
@include('layouts.errors')
{{-- @include('sweet::alert') --}}
<form action="{{ url('/edit-barang') }}" method='post' enctype="multipart/form-data" class="form-horizontal">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$barangs->id}}">
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Nama Barang <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_barang" required="required" value="{{$barangs->name_barang}}">
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Stok <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="number" class="form-control number" name="stok" required="required" min="0" value="{{$barangs->stok}}">
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Harga Pembelian <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="number" class="form-control number" name="harga_pembelian" required="required" min="0" value="{{$barangs->harga_pembelian}}">
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Harga Penjualan <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="number" class="form-control number" name="harga_penjualan" required="required" min="0" value="{{$barangs->harga_penjualan}}">
              </div>
            </div>
            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='/master-barang'"><i class="fa fa-refresh"></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i>Update</button>
    </div>
  </div>
</form>
@endsection
