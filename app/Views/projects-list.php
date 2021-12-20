<!doctype html>
<html lang="en">

    <head>
        
        <?= $title_meta ?>

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
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Projects</th>
                                                    <th scope="col">Due Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">New admin Design</a></h5>
                                                        <p class="text-muted mb-0">It will be as simple as Occidental</p>
                                                    </td>
                                                    <td>15 Oct, 19</td>
                                                    <td><span class="badge bg-success">Completed</span></td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-success text-white font-size-16">
                                                                            A
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else here</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div>
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
                            </tbody>
                            <table>
</div>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-center my-3">
                                    <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle me-2"></i> Load more </a>
                                </div>
                            </div> <!-- end col-->
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

        <script src="assets/js/app.js"></script>

    </body>
</html>
