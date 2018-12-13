@extends ('layouts.admin_template')
@section ('content')
@include('layouts.errors')
<fieldset><h3 class="box-title">{{ $page_title }}</h3></fieldset>
<div class="box">
<div class="box-body">
  <table id="table"
 class="table table-striped"
 data-pagination="true"
 data-toggle="table"
 data-search="true"
 data-page-size="20"
 data-show-refresh="true"
 data-toolbar="#toolbar">
    <thead>
    <tr>
          <th>Item Name</th>
          <th>Item Quantity</th>
          <th>Item Price</th>
          <th>Action</th>
          <th></th>
    </tr>
    </thead>
    <tbody>
  @foreach($pembelians as $pembelian)
  <tr>
        <td>{{($pembelian->item_name)}}</td>
        <td>{{($pembelian->item_qty)}}</td>
        <td>{{ number_format($pembelian->item_price) }}</td>
        <td>
         <button type="button" class="btn btn-xs btn-danger" title="Edit Kategori" onclick="window.location.href='/hapus-kupon/{{$pembelian->id}}'"><i class="fa fa-pencil-square-o"></i> Hapus</button>
         </td>
         <td>
                <button type="button" class="btn btn-xs btn-warning" onclick="window.location.href='/pembelian/{{$pembelian->id}}'"><i class="fa fa-sign-out"></i> CANCEL</button>

              </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
@endsection
@section('pagescript')
<script type="text/javascript">
  $('#table').bootstrapTable();
</script>
@endsection
