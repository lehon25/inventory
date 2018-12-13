@extends ('layouts.admin_template')
@section ('content')
@include('layouts.errors')
{{-- @include('sweet::alert') --}}
<fieldset><h3 class="box-title">{{ $page_title }}</h3></fieldset>
<div class="box">
<div class="box-body">
  <table id="table"
 class="table table-striped"
 data-pagination="true"
 data-toggle="table"
 data-toolbar="#toolbar">
    <thead>
    <tr>
          <th>Nama Kupon</th>
          <th>Description</th>
          <th>Diskon Harga</th>
          <th>Action</th>
    </tr>
    </thead>
    <tbody>
  @foreach($kupons as $kupon)
    <tr>
    <td>{{$kupon->name_cupon}}</td>
    </td>
    <td>{{ ($kupon->description) }}</td>
    <td>{{ number_format($kupon->discount_harga) }}</td>
    <td>
            <button type="button" class="btn btn-info" onclick="window.location.href='/tambah-kupon'">
                <i class="fa fa-plus-square"></i> Tambah Kupon</button>
      </td>
      <td>
            <button type="button" class="btn btn-xs btn-info" title="Edit Kategori" onclick="window.location.href='/edit-kupon/{{$kupon->id}}'"><i class="fa fa-pencil-square-o"></i> Edit Kupon</button>
                  </td>
                  <td>
                        <button type="button" class="btn btn-xs btn-danger" title="Edit Kategori" onclick="window.location.href='/hapus-kupon/{{$kupon->id}}'"><i class="fa fa-pencil-square-o"></i> Hapus</button>
                  </td>
      </td>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
