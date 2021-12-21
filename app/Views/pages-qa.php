<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<body>
    <style>
    html {
      font-size: 100%!important;
      font-family: 'Roboto', sans-serif;
      background-color: rgb(248, 249, 250) !important;
    }
    body {
      font-size: 16px;
    }
    main {
      background-color: rgb(248, 249, 250) !important;
    }
    header a {
      text-decoration: none!important;
    }
    .border-bottom {
      border-bottom: 0!important;
    }
    .muiltr-b10jnn .container {
      max-width: 1320px!important;
      width: none!important;
    }
    .mainSlider {
      height: 600px;
      background: url(/assets/main.png) center center no-repeat;
      background-size: cover;
    }
    .section_main {
      background: #222222!important;
    }
    .blue_main_logo {
      color: #558BCF!important;
    }
    .main_logo {
      font-weight: 900!important;
    }
    .btn-group {
      display: block!important;
    }
    .main_button {
      width: 100%;
    }
    .navbar {
        color: #000;
    }
    .navbar .high {
        color: #03A9F4;
    }
    .navbar>.container a, .navbar>.container strong {
        color: black;
    }
    .nav-pills {list-style: none;}
    .nav-pills::after {
        display: table;
        content: "";
        clear: both;
    }
    .nav-pills li {float: left;}
    .navbar>.container ul {list-style: none; margin-bottom: 0;}
    .navbar>.container ul {display: flex; justify-content: center;align-items: center;}
    .navbar>.container ul li {float: left; padding: 0 10px;}
    .navbar>.container ul li:last-child {padding-right: 0;}
    .card-header {background-color: #3C4251 !important; padding-top: 10px!important;padding-bottom: 10px!important; font-size: 18px!important;}
    .card-text {padding-bottom: 0px; min-height: 80px;}
    .card-body {background-color: white !important; padding: 3rem !important; color: #808080;}
    .main_button {background-color: #03A9F4 !important; border: 0 !important; font-size: 2rem;}
    .add_h2 {padding-bottom: 30px; color: #000!important;}
    .bg-back {background: url(/assets/images/background.png) center center no-repeat; background-size: cover; padding: 150px 0;}
    .heading-t {text-align: left;}
    .heading-t h4{font-size: 15px;}
    .heading-t h1{font-size: 48px; font-weight: 700;}
    .blue {color: #558BCF;}
    .nav-item.on a {color: white!important; background: #03A9F4!important; padding: 5px 10px; border-radius: 20px;}
    .bg-sub {background-color: #2D323E; color: white;}
    .container.video {padding: 30px 200px;background-color: rgb(248, 249, 250);}
    .video-container { position: relative; padding-bottom: 56.25%; padding-top: 30px; height: 0; overflow: hidden; } .video-container iframe, .video-container object, .video-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
    .sub_heading_txt {padding-top: 20px;}
    .manual_list a {min-width: 270px; text-align: center; color: #000!important; display: inline-block!important; background-color: #e9e9e9!important; margin-bottom: 20px;}
    .login_go {padding: 5px 10px!important; border-radius: 10px!important; background-color: #03A9F4!important; color: white!important; width: 80px!important; display: inline-block!important; margin-left: 15px;}
    .pagination {justify-content: center; margin-bottom: 30px;}
    .page-link {color: #4B4B4B !important;}
    .page-item.active .page-link {background-color: #4B4B4B !important; border-color: #4B4B4B !important; color: white !important;}
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossOrigin="anonymous" />
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar shadow-sm">
    <div class="container">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> -->
        <strong><span class="high">VMS 가상</span>공작기계</strong>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/pages-product" class="nav-link" aria-current="page">Product</a></li>
        <li class="nav-item"><a href="/pages-manual" class="nav-link">Manual</a></li>
        <li class="nav-item"><a href="/pages-download" class="nav-link">Download</a></li>
        <li class="nav-item on"><a href="/pages-qa" class="nav-link">Q&A</a></li>
        <li class="nav-item"><a href="/auth-login" class="nav-link">Sign in</a></li>
      </ul>
    </div>
  </div>
</header>

<main>

  <section class="bg-sub">
    <div class="py-lg-5">
        <div class="container">
            <div class="sub_heading">
              <div class="sub_heading_title">
                <i class="bx bx-home-circle"></i> > Q&A
              </div>
              <div class="sub_heading_txt">
                <h1 class="text-white">Q&A</h1>
              </div>
            </div>
        </div>
    </div>
  </section>

  
  <div class="album py-5 bg-light">
    <div class="container">
        <!-- <h2 class="add_h2">Product</h2> -->
      <div class="row">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-gen-ques" role="tabpanel" aria-labelledby="v-pills-gen-ques-tab">
                                                    <h4 class="card-title mb-5">자주 묻는 질문</h4>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">FocasAPI 의 C# BackgroundWorker 스레드 상에서 비정상 작동에 관한 질문</h5>
                                                            <!-- <p class="text-muted"></p> -->
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">FocasApi.cnc_rdtofsr 에 관한 문의 1 file</h5>
                                                            <!-- <p class="text-muted">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators.</p> -->
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">FocasApi.cnc_rdparam 관련 문의 2 file</h5>
                                                            <!-- <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p> -->
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">메뉴얼 질문드립니다. 1</h5>
                                                            <!-- <p class="text-muted">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                                                    <h4 class="card-title mb-5">Privacy Policy</h4>
                                                    
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where does it come from?</h5>
                                                            <p class="text-muted">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators.</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where can I get some?</h5>
                                                            <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">What is Lorem Ipsum?</h5>
                                                            <p class="text-muted">New common language will be more simple and regular than the existing European languages. It will be as simple as occidental.</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Why do we use it?</h5>
                                                            <p class="text-muted">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex   ">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where can I get some?</h5>
                                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                                    <h4 class="card-title mb-5">Support</h4>
                                                
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where can I get some?</h5>
                                                            <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where does it come from?</h5>
                                                            <p class="text-muted">Everyone realizes why a new common language would be desirable one could refuse to pay expensive translators.</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Why do we use it?</h5>
                                                            <p class="text-muted">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                                        </div>
                                                    </div>
                                                    <div class="faq-box d-flex mb-4">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">Where can I get some?</h5>
                                                            <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="faq-box d-flex">
                                                        <div class="flex-shrink-0 me-3 faq-icon">
                                                            <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-15">What is Lorem Ipsum?</h5>
                                                            <p class="text-muted">New common language will be more simple and regular than the existing European languages. It will be as simple as occidental.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
      </div>

      <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">

                                        <thead>
                                            <tr>
                                                <th>번호</th>
                                                <th>제목</th>
                                                <th>이름</th>
                                                <th>날짜</th>
                                                <th>조회수</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>FocasApi.cnc_rdtofsr 에 관한 문의 1 file</td>
                                                <td>이진호</td>
                                                <td>2021.12.21</td>
                                                <td>26</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>메뉴얼 질문드립니다. 1</td>
                                                <td>김대혁</td>
                                                <td>2021.11.15</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>processMachiningTime 1</td>
                                                <td>정수민</td>
                                                <td>2021.09.15</td>
                                                <td>55</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
      </div>
    </div>
  </div>

</main>

</body>

</html>