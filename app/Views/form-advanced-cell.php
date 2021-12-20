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
                                <div class="table-responsive">
                                    <table class="table table-editable table-nowrap align-middle table-edits">
                                        <thead>
                                            <tr style="cursor: pointer;">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1" style="cursor: pointer;">
                                                <td data-field="id" style="width: 80px">1</td>
                                                <td data-field="name" style="width: 585.906px;">David McHenry</td>
                                                <td data-field="age" style="width: 242.156px;">24</td>
                                                <td data-field="gender" style="width: 350.969px;">Male</td>
                                                <td style="width: 100px">
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt" title="Edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="2" style="cursor: pointer;">
                                                <td data-field="id">2</td>
                                                <td data-field="name">Frank Kirk</td>
                                                <td data-field="age">22</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="3" style="cursor: pointer;">
                                                <td data-field="id">3</td>
                                                <td data-field="name">Rafael Morales</td>
                                                <td data-field="age">26</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="4" style="cursor: pointer;">
                                                <td data-field="id">4</td>
                                                <td data-field="name">Mark Ellison</td>
                                                <td data-field="age">32</td>
                                                <td data-field="gender">Male</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr data-id="5" style="cursor: pointer;">
                                                <td data-field="id">5</td>
                                                <td data-field="name">Minnie Walter</td>
                                                <td data-field="age">27</td>
                                                <td data-field="gender">Female</td>
                                                <td>
                                                    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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

</body>

</html>