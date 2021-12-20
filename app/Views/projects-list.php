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
<style>
    .project-list-table tr:hover {cursor: pointer;}
    .project-list-table tr.open table {display: block;}
    .project-list-table tr table {display: none;}
    .tables {display: none;}
</style>
                        <?= $page_title ?>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead>
                                                <tr class="on_toggle open" onclick="show('table1')">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="on_toggle open">
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table1">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table2');">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">2000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table2">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 
                                        
                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table3');">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">4000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table3">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table3');"> 
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">6000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table3">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table4');">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">8000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table4">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table5');">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">10000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table5">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr class="on_toggle open" onclick="show('table6');">
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">12000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped tables" id="table6">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
</div>
                                            </tbody>
                                        </table> 

                                        <div class="table-responsive">
                                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                                            <thead style="visibility: hidden;">
                                                <tr>
                                                    <th scope="col" style="width: 100px">#</th>
                                                    <th scope="col">Object Id<br>Type</th>
                                                    <th scope="col">X</th>
                                                    <th scope="col">Y</th>
                                                    <th scope="col">Z</th>
                                                    <th scope="col">RX</th>
                                                    <th scope="col">RY</th>
                                                    <th scope="col">RZ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="assets/images/companies/img-1.png" alt="" class="avatar-sm"></td>
                                                    <td>
                                                        <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">MT04301</a></h5>
                                                        <p class="text-muted mb-0">Machine</p>
                                                    </td>
                                                    <td>SMEC SM400DH</td>
                                                    <td><span class="badge bg-success">14000</span></td>
                                                    <td><span class="badge bg-success">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                    <td><span class="badge bg-warning">0</span></td>
                                                </tr>
                                                <div>
                                                <table class="table mb-10 table-striped">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Machine Cell Id</th>
                                    <th>Description</th>
                                    <th>List Objects</th>
                                    <th>posX</th>
                                    <th>posY</th>
                                    <th>posZ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>MC00010</td>
                                    <td>SM400DH 10대</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>                                    
                                </tr>                                                                                                                                 
                            </tbody>
                        </table>
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
                                    <!-- <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle me-2"></i> Load more </a> -->
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
