<div class="form-group">
  <label for="Vendor">Vendor</label>
  <input type="text" class="form-control" name="Vendor" id="Vendor" placeholder="Enter Vendor" autocomplete="off">
</div>
<div class="form-group">
  <label for="Model">Model</label>
  <input type="text" class="form-control" name="Model" id="Model" placeholder="Enter Model" autocomplete="off">
</div>
<div class="form-group">
  <label for="Serial Number">Serial Number</label>
  <input type="text" class="form-control" name="SerialNumber" id="SerialNumber" placeholder="Enter Serial Number" autocomplete="off">
</div>
<div class="form-group">
  <label for="Software">Software</label>
  <input type="text" class="form-control" name="Software" id="Software" placeholder="Enter Software" autocomplete="off">
</div>
<div class="form-group">
  <label for="Memory">Memory</label>
  <input type="text" class="form-control" name="Memory" id="Memory" placeholder="Enter Memory" autocomplete="off">
</div>
<div class="form-group">
  <label for="Modules">Modules</label>
  <input type="number" class="form-control" name="Modules" id="Modules" placeholder="Enter Number of Modules" autocomplete="off">
</div>
<div class="form-group">
  <label for="Interfaces">Interfaces</label>
  <input type="number" class="form-control" name="Interfaces" id="Interfaces" placeholder="Enter Number of Interfaces" autocomplete="off">
</div>
<div class="form-group">
  <label for="assistance_id">Assistance Regime</label>
  <select class="form-control" name="assistance_id" id="assistance_id" placeholder="Select Assistance Regime" autocomplete="off">
    <option value="" disabled selected hidden>Select Assistance Regime</option>
    {{-- <option value="1">NonStop</option>
    <option value="2">SameDay</option>
    <option value="3">NextDay</option>
    <option value="4">Alive</option>
    <option value="5">None</option> --}}
    @foreach ($assistance as $key => $value)
    <option value="{{$value->assistance_id}}">{{$value->name}}</option>
    @endforeach
  </select>
</div>
