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
        <th>Site Id</th>
        <th>Description</th>
        <th>Location</th>
        <th>List_MachineCells</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>ST00010</td>
        <td>?????????????????? ?????????</td>
        <td>????????????????????? 14D??? 107???</td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>ST00011</td>
        <td>????????? ????????? ???</td>
        <td>????????????????????? 14A??? 106???</td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>ST00000</td>
        <td>????????????</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>ST00020</td>
        <td>?????????????????? ?????????</td>
        <td>???????????????????????????</td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>ST00030</td>
        <td>?????????????????? ????????? ??????</td>
        <td>SMEC?????????, ?????????</td>
        <td></td>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>ST00100</td>
        <td>???????????? ?????????(10??? * 4???)</td>
        <td></td>
        <td></td>
    </tr>                                                                                                                                    
</tbody>
</table>
<!-- end select2 -->

                                </div>
                                </div>
                        </div>
                    </div>

                    </div>

                    <div class="col-lg-6">
                    <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Site ?????????</h4>
                                <!-- <p class="card-title-desc">Site ??????</p> -->

                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Site Id</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Location</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="form-label">List of Machine Cells</label>

                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <optgroup label="????????????????????? 14D???">
                                                        <option value="AK">MC00010</option>
                                                        <option value="HI">MC00011</option>
                                                    </optgroup>
                                                    <optgroup label="????????????????????? 14A???">
                                                        <option value="CA">MA0001</option>
                                                        <option value="NV">MA0002</option>
                                                        <option value="OR">MA0003</option>
                                                    </optgroup>
                                                </select>

                                            </div>
                                            <div class="">
                                                <label class="mb-1">Description</label>
                                                <p class="text-muted mb-2">
                                                    
                                                </p>
                                                <textarea id="textarea" class="form-control" maxlength="225" rows="4" placeholder="This textarea has a limit of 225 chars."></textarea>
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