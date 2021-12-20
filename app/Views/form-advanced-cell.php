<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>
<style>
    .table {
  border-spacing: 0 0.85rem !important;
}

.table .dropdown {
  display: inline-block;
}

.table td,
.table th {
  vertical-align: middle;
  margin-bottom: 10px;
  border: none;
}

.table thead tr,
.table thead th {
  border: none;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
  background: transparent;
}

.table td {
  background: #fff;
}

.table td:first-child {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.table td:last-child {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.avatar {
  width: 2.75rem;
  height: 2.75rem;
  line-height: 3rem;
  border-radius: 50%;
  display: inline-block;
  background: transparent;
  position: relative;
  text-align: center;
  color: #868e96;
  font-weight: 700;
  vertical-align: bottom;
  font-size: 1rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.avatar-sm {
  width: 2.5rem;
  height: 2.5rem;
  font-size: 0.83333rem;
  line-height: 1.5;
}

.avatar-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.avatar-blue {
  background-color: #c8d9f1;
  color: #467fcf;
}

table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > td:first-child:before,
table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > th:first-child:before {
  top: 28px;
  left: 14px;
  border: none;
  box-shadow: none;
}

table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
  padding-left: 48px;
}

table.dataTable > tbody > tr.child ul.dtr-details {
  width: 100%;
}

table.dataTable > tbody > tr.child span.dtr-title {
  min-width: 50%;
}

table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
  padding: 0.75rem 1rem 0.125rem;
}

div.dataTables_wrapper div.dataTables_length label,
div.dataTables_wrapper div.dataTables_filter label {
  margin-bottom: 0;
}

@media (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    -ms-flex-pack: center !important;
    justify-content: center !important;
    margin-top: 1rem;
  }
}

.btn-icon {
  background: #fff;
}
.btn-icon .bx {
  font-size: 20px;
}

.btn .bx {
  vertical-align: middle;
  font-size: 20px;
}

.dropdown-menu {
  padding: 0.25rem 0;
}

.dropdown-item {
  padding: 0.5rem 1rem;
}

.badge {
  padding: 0.5em 0.75em;
}

.badge-success-alt {
  background-color: #d7f2c2;
  color: #7bd235;
}

.table a {
  color: #212529;
}

.table a:hover,
.table a:focus {
  text-decoration: none;
}

table.dataTable {
  margin-top: 12px !important;
}

.icon > .bx {
  display: block;
  min-width: 1.5em;
  min-height: 1.5em;
  text-align: center;
  font-size: 1.0625rem;
}

.btn {
  font-size: 0.9375rem;
  font-weight: 500;
  padding: 0.5rem 0.75rem;
}

.avatar-blue {
      background-color: #c8d9f1;
      color: #467fcf;
    }

    .avatar-pink {
      background-color: #fcd3e1;
      color: #f66d9b;
    }
</style>
<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <!-- <h4 class="card-title">Example</h4> -->
                                <!-- <p class="card-title-desc">This is an experimental awesome solution for responsive tables with complex data.</p> -->

                                <div class="table-rep-plugin">
                                <div class="table-responsive mb-0" data-pattern="priority-columns">
                    <table class="table mb-10 table-striped">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Object Id</th>
                                    <th>Type</th>
                                    <th>X</th>
                                    <th>Y</th>
                                    <th>Z</th>
                                    <th>RX</th>
                                    <th>RY</th>
                                    <th>RZ</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">0</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                 
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>2000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                  
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>4000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                  
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>6000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                 
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>8000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                  
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>10000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>12000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>14000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                                
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>MT04301</td>
                                    <td>Machine</td>
                                    <td>SMEC SM400DH</td>
                                    <td>16000</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>                               
                                </tr>                                                                                                                                                                                                                                                                                                                                                  
                            </tbody>
                        </table>
                        <!-- end select2 -->
                        <div class="container">
  <div class="row py-5">
    <div class="col-12">
      <table id="example" class="table table-hover responsive nowrap" style="width:100%">
        <thead>
          <tr>
            <th>Client Name</th>
            <th>Phone Number</th>
            <th>Profession</th>
            <th>Date of Birth</th>
            <th>App Access</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="#">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-blue mr-3">EB</div>

                  <div class="">
                    <p class="font-weight-bold mb-0">Ethan Black</p>
                    <p class="text-muted mb-0">ethan-black@example.com</p>
                  </div>
                </div>
              </a>
            </td>
            <td>(784) 667 8768</td>
            <td>Designer</td>
            <td>09/04/1996</td>
            <td>
              <div class="badge badge-success badge-success-alt">Enabled</div>
            </td>
            <td>
              <div class="dropdown">
                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                        title="Actions"></i>
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                  <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-pink mr-3">JR</div>

                  <div class="">
                    <p class="font-weight-bold mb-0">Julie Richards</p>
                    <p class="text-muted mb-0">julie_89@example.com</p>
                  </div>
                </div>
              </a>
            </td>
            <td> (937) 874 6878</td>
            <td>Investment Banker</td>
            <td>13/01/1989</td>
            <td>
              <div class="badge badge-success badge-success-alt">Enabled</div>
            </td>
            <td>
              <div class="dropdown">
                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                        title="Actions"></i>
                    </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                  <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row py-5">
    <div class="col-12">
      <h6 class="small text-danger">Currently I'm just experimenting with this stuff, so there might be lots of redundant CSS.</h6>
    </div>
  </div>
</div>
                        </div></div></div></div>
                    </div>

                    <div class="col-lg-6">
                    <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Object 새등록</h4>
                                <!-- <p class="card-title-desc">Object 등록</p> -->

                                <form>
                                    <div class="row">
                                        <div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Object Id</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tyes</label>

                                                <select class="form-select" data-placeholder="Choose ...">
                                                    <optgroup label="Types">
                                                        <option value="AK">Machine</option>
                                                        <option value="HI">T1</option>
                                                    </optgroup>
                                                </select>

                                            </div> 
                                            <div class="">
                                                <label class="mb-1">Description</label>
                                                <p class="text-muted mb-2">
                                                    
                                                </p>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                                            </div>                                       
                                            <button class="btn btn-light dropdown-toggle w-100 mt-2" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-plus me-1"></i> Create New
                                            </button>                                                
                                        </div>

                                        <!-- <div class="col-lg-6">
                                            
                                        </div> -->
                                    </div>

                                </form>

                            </div>
                        </div>                        
                    </div>

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

<!-- form advanced init -->
<script src="assets/js/pages/form-advanced.init.js"></script>

<script src="assets/js/app.js"></script>
<script>
    $(document).ready(function() {
  $("#example").DataTable({
    aaSorting: [],
    responsive: true,

    columnDefs: [
      {
        responsivePriority: 1,
        targets: 0
      },
      {
        responsivePriority: 2,
        targets: -1
      }
    ]
  });

  $(".dataTables_filter input")
    .attr("placeholder", "Search here...")
    .css({
      width: "300px",
      display: "inline-block"
    });

  $('[data-toggle="tooltip"]').tooltip();
});

</script>
</body>

</html>