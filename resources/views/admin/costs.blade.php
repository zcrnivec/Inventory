@extends('adminlte::page')

@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List of yearly costs for Assistance Support</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped table-hover display" style="width:100%">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>numOfDevices</th>
          <th>pricePerDevice</th>
          <th>routersYearlyPrice</th>
          <th>switchesYearlyPrice</th>
          <th>firewallsYearlyPrice</th>
          <th>apsYearlyPrice</th>
          <th>total</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($cost as $key => $value)
            <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->numOfDevices}}</td>
              <td>{{$value->pricePerDevice}}€</td>
              <td>{{$value->routersYearlyPrice}}€</td>
              <td>{{$value->switchesYearlyPrice}}€</td>
              <td>{{$value->firewallsYearlyPrice}}€</td>
              <td>{{$value->apsYearlyPrice}}€</td>
              <td>{{$value->total}}€</td>
            </td>
          @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>numOfDevices</th>
          <th>pricePerDevice</th>
          <th>routersYearlyPrice</th>
          <th>switchesYearlyPrice</th>
          <th>firewallsYearlyPrice</th>
          <th>apsYearlyPrice</th>
          <th>total</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
   </div>
   <!-- /.box -->
@endsection

@section('css')

@endsection
  <!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">-->
@section('js')
<!--<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>-->
<script>
  $(document).ready(function() {
    $('#example').dataTable( {
            "columnDefs": [ {
              "targets": 'no-sort',
              "orderable": false,
        } ],
        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [25, 50, 100, 200, "All"]
        ]
    } );
  } );
</script>
@stop
