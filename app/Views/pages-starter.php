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
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <button id="test" type="button">test</button>
                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/right-sidebar') ?>

        <?= $this->include('partials/vendor-scripts') ?>

        <script src="assets/js/app.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $('#test').click(function(){
                $.ajax({
                    url:'http://52.78.61.227:3000/users', // 요청 할 주소
                    type:'POST', // GET, PUT
                    data: {
                        form_title:'ajax',
                        Age:'10'
                    },// 전송할 데이터
                    dataType:'json',// xml, json, script, html
                    success:function(jqXHR) {
                        console.log(jqXHR);
                    },// 요청 완료 시
                    error:function(jqXHR) {},// 요청 실패.
                    complete:function(jqXHR) {}// 요청의 실패, 성공과 상관 없이 완료 될 경우 호출
                    });
            });
        </script>
    </body>
</html>
