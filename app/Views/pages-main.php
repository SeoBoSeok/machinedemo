<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body>
    <style>
        html {
      font-size: 100%!important;
    }
    body {
      font-size: 16px;
    }
    main {
      background: black;
    }
    header span, header a {
      color: white!important;
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
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossOrigin="anonymous" />
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>

    <div className="container">
    <header className="d-flex flex-wrap justify-content-center py-3">
      <a href="/" className="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span className="fs-4 main_logo"><span className="blue_main_logo">가상</span>공작기계</span>
      </a>

      <ul className="nav nav-pills">
        <li className="nav-item"><a href="#" className="nav-link" aria-current="page">Product</a></li>
        <li className="nav-item"><a href="#" className="nav-link">Manuel</a></li>
        <li className="nav-item"><a href="#" className="nav-link">Download</a></li>
        <li className="nav-item"><a href="pages/faq" className="nav-link">FAQs</a></li>
        <li className="nav-item"><a href="#" className="nav-link">About</a></li>
        <li className="nav-item"><a href="/login" className="nav-link">Login</a></li>
      </ul>
    </header>
  </div>
    <main>
      <div className="mainSlider" style={mainStyle}>
        <section className="py-5 container">
          <div className="row py-lg-5">
            <div className="col-lg-6 col-md-8 mx-auto">
              {/* <h1 className="fw-light">Album example</h1>
              <p className="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
              <p>
                <a href="#" className="btn btn-primary my-2">Main call to action</a>
              </p> */}
            </div>
          </div>
        </section>
      </div>
    
      <div className="album py-5">
        <div className="container">

        <Typography color="inherit" className="font-bold text-24 md:text-38 text-white mb-10">
          HMI Product
        </Typography>
    
          <div className="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div className="col">
              <div className="card">
                <div className="card-header text-white">플랫폼 개념</div>
                <div className="card-body">
                  <p className="card-text text-white">다양한 제품 적용을 통한 당사 공작기계 경쟁력 향상 Application 생태계 구축을 통한 플랫폼 사업</p>
                  <div className="">
                    <div className="btn-group">
                      <button type="button" className="btn btn-md btn-outline-secondary main_button">View</button>
                      {/* <button type="button" className="btn btn-sm btn-outline-secondary">Edit</button> */}
                    </div>
                    {/* <small className="text-muted">9 mins</small> */}
                  </div>
                </div>
              </div>
            </div>
            <div className="col section_main">
              <div className="card">
                <div className="card-header text-white">플랫폼 구조</div>
                <div className="card-body">
                  <p className="card-text text-white">지능형 HMI플랫폼 아키텍처 구조 - 계층형 아키텍처, 내부 모듈 간 관계 블럭도</p>
                  <div className="">
                    <div className="btn-group">
                      <button type="button" className="btn btn-md btn-outline-secondary main_button">View</button>
                      {/* <button type="button" className="btn btn-sm btn-outline-secondary">Edit</button> */}
                    </div>
                    {/* <small className="text-muted">9 mins</small> */}
                  </div>
                </div>
              </div>
            </div>
            <div className="col">
              <div className="card">
              <div className="card-header text-white">앱 개발 지원 방식</div>
                <div className="card-body">
                  <p className="card-text text-white">HMI의 지능화 소프트웨어 기능들을 앱 단위로 용이하게 개발할 수 있도록 앱에 대한 구동 제어</p>
                  <div className="">
                    <div className="btn-group">
                      <button type="button" className="btn btn-md btn-outline-secondary main_button">View</button>
                      {/* <button type="button" className="btn btn-sm btn-outline-secondary">Edit</button> */}
                    </div>
                    {/* <small className="text-muted">9 mins</small> */}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </main>
    
    <footer className="text-muted py-5">
      <div className="container">
        <p className="float-end mb-1">
        </p>
        <p className="mb-1">가상공작기계 ⓒ 이비오 Corp.</p>
        {/* <p className="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p> */}
      </div>
    </footer>   


    <?= $this->include('partials/vendor-scripts') ?>

    <script src="assets/js/app.js"></script>

</body>

</html>