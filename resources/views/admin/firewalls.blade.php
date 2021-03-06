@extends('adminlte::page')

@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List of Firewall Appliances</h3>
    </div>
        <!-- Button trigger addNewFirewall Modal -->
    <button type="button" class="btn btn-danger btn-small" data-toggle="modal" data-target="#addNewFirewall">
      Add New
    </button>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped table-hover display" style="width:100%">
        <thead>
        <tr>
          <th>#</th>
          <th>Vendor</th>
          <th>Model</th>
          <th>SerialNumber</th>
          <th>Software</th>
          <th>Memory</th>
          <th>Modules</th>
          <th>Interfaces</th>
          <th>Regime</th>
          <th class="no-sort">Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($firewall as $key => $value)
            <tr>
              <td>{{$value->firewall_id}}</td>
              <td>{{$value->Vendor}}</td>
              <td>{{$value->Model}}</td>
              <td>{{$value->SerialNumber}}</td>
              <td>{{$value->Software}}</td>
              <td>{{$value->Memory}}</td>
              <td>{{$value->Modules}}</td>
              <td>{{$value->Interfaces}}</td>
              <td>{{$value->assistance->name}}</td>
              <td>
                <button class="btn btn-primary btn-xs" data-title="Edit" data-firewall_id="{{$value->firewall_id}}" data-vendor="{{$value->Vendor}}" data-model="{{$value->Model}}" data-serialnumber="{{$value->SerialNumber}}" data-memory="{{$value->Memory}}" data-software="{{$value->Software}}" data-modules="{{$value->Modules}}" data-interfaces="{{$value->Interfaces}}" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-edit"></span></button>
                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-firewall_id="{{$value->firewall_id}}"><span class="glyphicon glyphicon-trash"></span></button>
              </td>
            </td>
          @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>#</th>
          <th>Vendor</th>
          <th>Model</th>
          <th>SerialNumber</th>
          <th>Software</th>
          <th>Memory</th>
          <th>Modules</th>
          <th>Interfaces</th>
          <th>Regime</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
   </div>
   <!-- /.box -->
   <!-- Modal addNewFirewall-->
   <div class="modal fade" id="addNewFirewall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">New Firewall</h4>
         </div>
         <form action="{{route('firewall.store')}}" method="POST">
           {{csrf_field()}}
           <div class="modal-body">
           <!-- form start -->
             @include('admin.form')
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-danger btn-small">Save</button>
           </div>
         </form>
       </div>
     </div>
   </div>
   <!-- Modal edit-->
   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Edit Firewall</h4>
         </div>
         <form action="{{route('firewall.update')}}" method="POST">
           {{method_field('patch')}}
           {{csrf_field()}}
           <div class="modal-body">
           <!-- form start -->
             <div class="form-group">
               <label for="firewall_id">ID</label>
               <input type="text" class="form-control" name="firewall_id" id="firewall_id" value="" autocomplete="off" readonly>
             </div>
             @include('admin.form')
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-danger btn-small">Save Changes</button>
           </div>
         </form>
       </div>
     </div>
   </div>
   <!-- Modal Delete-->
   <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
         </div>
         <!-- form start -->
         <form action="{{route('firewall.destroy')}}" method="POST">
           {{method_field('delete')}}
           {{csrf_field()}}
           <div class="modal-body">
               <input type="hidden" class="form-control" name="firewall_id" id="firewall_id" value="" autocomplete="off">
             <h4 class="modal-title text-center">Are you sure you want to delete this?</h2>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
             <button type="submit" class="btn btn-danger btn-small">Yes, Delete</button>
           </div>
         </form>
       </div>
     </div>
   </div>
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
