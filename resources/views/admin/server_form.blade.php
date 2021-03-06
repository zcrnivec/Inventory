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
  <label for="Hypervisor">Hypervisor</label>
  <input type="text" class="form-control" name="Hypervisor" id="Hypervisor" placeholder="Enter Hypervisor" autocomplete="off">
</div>
<div class="form-group">
  <label for="Cpu">Cpu</label>
  <input type="text" class="form-control" name="Cpu" id="Cpu" placeholder="Enter Cpu" autocomplete="off">
</div>
<div class="form-group">
  <label for="Memory">Memory</label>
  <input type="text" class="form-control" name="Memory" id="Memory" placeholder="Enter Memory" autocomplete="off">
</div>
<div class="form-group">
  <label for="Modules">Storage</label>
  <input type="number" class="form-control" name="Storage" id="Storage" placeholder="Enter Amount of Storage" autocomplete="off">
</div>
<div class="form-group">
  <label for="Disks">Disks</label>
  <input type="number" class="form-control" name="Disks" id="Disks" placeholder="Enter Number of Disks" autocomplete="off">
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
