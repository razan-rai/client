<div class="pull-right">
  <a href="{{ URL::to('admin/orders/downloadExcel/xls') }}"><button class="btn btn-danger btn-xs"><span class="fa fa-cloud-download"></span>Download Excel (All)</button></a>

  <a href="{{ URL::to('admin/current-month/orders/downloadExcel/xls') }}"><button class="btn btn-warning btn-xs"><span class="fa fa-download"></span>Download Excel (Current Month)</button></a>

  <a href="{{ URL::to('admin/todays/orders/downloadExcel/xls') }}"><button class="btn btn-info btn-xs"><span class="fa fa-download"></span>Download Excel (Today)</button></a>

  <a href="{{ URL::to('clients/create') }}"><button class="btn btn-success btn-xs"><span class="icon_plus_alt2"></span>Add client</button></a>

  <a href="{{ URL::to('clients') }}"><button class="btn btn-primary btn-xs"><span class="fa fa-list-alt"></span>All Clients</button></a>
</div>