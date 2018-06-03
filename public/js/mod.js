$('#edit').on('show.bs.modal', function (event) {
  console.log("Modal opened2sadfsadas")
  var button = $(event.relatedTarget) // Button that triggered the modal
  var itemID = "", idCss = "aa"
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  if(button.data('router_id')) {
    itemID = button.data('router_id')
    idCss = "router_id"
  }
  else if(button.data('switch_id')) {
    itemID = button.data('switch_id')
    idCss = "switch_id"
  }
  else if(button.data('firewall_id')) {
    itemID = button.data('firewall_id')
    idCss = "firewall_id"
  }
  else if(button.data('ap_id')) {
    itemID = button.data('ap_id')
    idCss = "ap_id"
  }
  else if(button.data('server_id')) {
    itemID = button.data('server_id')
    idCss = "server_id"
  }
  else if(button.data('computer_id')) {
    itemID = button.data('computer_id')
    idCss = "computer_id"
  }
  else if(button.data('phone_id')) {
    itemID = button.data('phone_id')
    idCss = "phone_id"
  }
  else if(button.data('printer_id')) {
    itemID = button.data('printer_id')
    idCss = "printer_id"
  }
  else if(button.data('assistance_id')) {
    itemID = button.data('assistance_id')
    idCss = "assistance_id"
  }

  var vendor = button.data('vendor')
  var model = button.data('model')
  var serialnumber = button.data('serialnumber')
  var software = button.data('software')
  var memory = button.data('memory')
  var modules = button.data('modules') // Extract info from data-* attributes
  var interfaces = button.data('interfaces')
  var assistance = button.data('assistance')
  var name = button.data('name')
  var price = button.data('price')
  var cpu = button.data('cpu')
  var hypervisor = button.data('hypervisor')
  var storage = button.data('storage')
  var disks = button.data('disks')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #Vendor').val(vendor)
  modal.find('.modal-body #Model').val(model)
  modal.find('.modal-body #SerialNumber').val(serialnumber)
  modal.find('.modal-body #Software').val(software)
  modal.find('.modal-body #Memory').val(memory)
  modal.find('.modal-body #Modules').val(modules)
  modal.find('.modal-body #Interfaces').val(interfaces)
  modal.find('.modal-body #assistance_id').val(assistance)
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #price').val(price)
  modal.find('.modal-body #Hypervisor').val(hypervisor)
  modal.find('.modal-body #Disks').val(disks)
  modal.find('.modal-body #Cpu').val(cpu)
  modal.find('.modal-body #Storage').val(storage)
  modal.find(`.modal-body #${idCss}`).val(itemID)
})

$('#delete').on('show.bs.modal', function (event) {
  console.log("Modal opened")
  var button = $(event.relatedTarget) // Button that triggered the modal
  var itemID = "", idCss = ""
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  if(button.data('router_id')) {
    itemID = button.data('router_id')
    idCss = "router_id"
  }
  else if(button.data('switch_id')) {
    itemID = button.data('switch_id')
    idCss = "switch_id"
  }
  else if(button.data('firewall_id')) {
    itemID = button.data('firewall_id')
    idCss = "firewall_id"
  }
  else if(button.data('ap_id')) {
    itemID = button.data('ap_id')
    idCss = "ap_id"
  }
  else if(button.data('server_id')) {
    itemID = button.data('server_id')
    idCss = "server_id"
  }
  else if(button.data('computer_id')) {
    itemID = button.data('computer_id')
    idCss = "computer_id"
  }
  else if(button.data('phone_id')) {
    itemID = button.data('phone_id')
    idCss = "phone_id"
  }
  else if(button.data('printer_id')) {
    itemID = button.data('printer_id')
    idCss = "printer_id"
  }
  else if(button.data('assistance_id')) {
    itemID = button.data('assistance_id')
    idCss = "assistance_id"
  }

  modal.find(`.modal-body #${idCss}`).val(itemID)
})
