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
    }
    body {
      font-size: 16px;
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
    .card, .card-body {
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
        color: #558BCF;
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
    .card {border: 1px solid #E3E3E3!important; border-radius: 7px!important; overflow: hidden;}
    .card-header {background-color: #3C4251 !important; padding-top: 10px!important;padding-bottom: 10px!important; font-size: 18px!important;}
    .card-text {padding-bottom: 30px; min-height: 102px;}
    .card-body {background-color: white !important; padding: 3rem !important; color: #808080;}
    .main_button {background-color: #03A9F4 !important; border: 0 !important; font-size: 2rem;}
    .add_h2 {padding-bottom: 30px; color: #000!important;}
    .card {border: 1px solid #E3E3E3; border-radius: 5px;}
    .bg-back {background: url(/assets/images/background.png) center center no-repeat; background-size: cover; padding: 150px 0;}
    .heading-t {text-align: left;}
    .heading-t h4{font-size: 15px;}
    .heading-t h1{font-size: 48px; font-weight: 700;}
    .blue {color: #558BCF;}
    .nav-item.on a {color: white!important; background: #03A9F4!important; padding: 5px 10px; border-radius: 20px;}
    .bg-sub {background-color: #2D323E; color: white;}
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
      <a href="#" class="navbar-brand d-flex align-items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg> -->
        <strong><span class="high">VMS 가상</span>공작기계</strong>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item on"><a href="#" class="nav-link" aria-current="page">Product</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Manuel</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Download</a></li>
        <li class="nav-item"><a href="pages/faq" class="nav-link">Q&A</a></li>
        <li class="nav-item"><a href="/login" class="nav-link">Sign in</a></li>
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
                <i class="bx bx-home-circle"></i> > product
              </div>
              <div class="sub_heading_txt">
                <h1>Product</h1>
              </div>
            </div>
        </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
        <h2 class="add_h2">Product</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
        <div class="col">
              <div class="card">
                <div class="card-header text-white">플랫폼 개념</div>
                <div class="card-body">
                  <p class="card-text">다양한 제품 적용을 통한 당사 공작기계 경쟁력 향상 Application 생태계 구축을 통한 플랫폼 사업</p>
                  <!-- <div class="">
                    <div class="btn-group">
                      <button type="button" class="btn btn-md btn-outline-secondary main_button text-white">제품소개</button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-header text-white">플랫폼 구조</div>
                <div class="card-body">
                  <p class="card-text ">지능형 HMI플랫폼 아키텍처 구조 - 계층형 아키텍처, 내부 모듈 간 관계 블럭도</p>
                  <!-- <div class="">
                    <div class="btn-group">
                      <button type="button" class="btn btn-md btn-outline-secondary main_button text-white">제품소개</button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
              <div class="card-header text-white">앱 개발 지원 방식</div>
                <div class="card-body">
                  <p class="card-text ">HMI의 지능화 소프트웨어 기능들을 앱 단위로 용이하게 개발할 수 있도록 앱에 대한 구동 제어</p>
                  <!-- <div class="">
                    <div class="btn-group">
                      <button type="button" class="btn btn-md btn-outline-secondary main_button text-white">제품소개</button>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>

      </div>
    </div>
  </div>

</main>

</body>

</html>