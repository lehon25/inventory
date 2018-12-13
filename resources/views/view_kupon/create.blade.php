@extends ('layouts.admin_template')
  @section ('content')
<div class="box-header with-border">
  <h3 class="box-title">{{ $page_title }}</h3>
</div>
@include('layouts.errors')
{{-- @include('sweet::alert') --}}
<form action="{{url('/tambah-kupon')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
{{ csrf_field() }}
  <div class="box box-default">
        <div class="box-body">
          <div class="row">
            <div class="col-md-9">
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Nama Kupon <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name_cupon" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Description <span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="description" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="nama" class="col-sm-2 control-label">Diskon Harga<span class="required">*</span></label>
              <div class="col-sm-10">
                <input type="number" class="form-control number" name="discount_harga" required="required" min="0">
              </div>
            </div>
            </div>
        </div>
      </div>
    <div class="box-footer text-center">
      <button type="button" class="btn btn-default" onclick="window.location.href='/kupon'"><i class="fa fa-refresh"></i> Kembali</button>
      <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div>
</form>
@endsection
