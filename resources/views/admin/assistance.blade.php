@extends('adminlte::page')

@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List of Assistance Regimes</h3>
    </div>
        <!-- Button trigger addNewAssistance Modal -->
    <button type="button" class="btn btn-danger btn-small" data-toggle="modal" data-target="#addNewAssistance">
      Add New
    </button>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example" class="table table-bordered table-striped table-hover display" style="width:100%">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th class="no-sort">Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($assistance as $key => $value)
            <tr>
              <td>{{$value->assistance_id}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->price}}€</td>
              <td>
                <button class="btn btn-primary btn-xs" data-title="Edit" data-assistance_id="{{$value->assistance_id}}" data-name="{{$value->name}}" data-price="{{$value->price}}" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-edit"></span></button>
                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-assistance_id="{{$value->assistance_id}}"><span class="glyphicon glyphicon-trash"></span></button>
              </td>
            </td>
          @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
   </div>
   <!-- /.box -->
   <!-- Modal addNewAssistance-->
   <div class="modal fade" id="addNewAssistance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="myModalLabel">New AssistanceRegime</h4>
         </div>
         <form action="{{route('assistance.store')}}" method="POST">
           {{csrf_field()}}
           <div class="modal-body">
           <!-- form start -->
             @include('admin.assistForm')
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
           <h4 class="modal-title" id="myModalLabel">Edit Assistance Regime</h4>
         </div>
         <form action="{{route('assistance.update')}}" method="POST">
           {{method_field('patch')}}
           {{csrf_field()}}
           <div class="modal-body">
           <!-- form start -->
             <div class="form-group">
               <label for="assistance_id">ID</label>
               <input type="text" class="form-control" name="assistance_id" id="assistance_id" value="" autocomplete="off" readonly>
             </div>
             @include('admin.assistForm')
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
         <form action="{{route('assistance.destroy')}}" method="POST">
           {{method_field('delete')}}
           {{csrf_field()}}
           <div class="modal-body">
               <input type="hidden" class="form-control" name="assistance_id" id="assistance_id" value="" autocomplete="off">
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
