@extends('adminlte::page')

@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List of Users</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped table-hover display" style="width:100%">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th class="no-sort">Action</th>
        </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          @foreach ($user as $key => $value)
            <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->email}}</td>
              <td>
                <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-edit"></span></button>
                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button>
              </td>
            </td>
          @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
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
