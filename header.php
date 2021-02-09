	<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    .offcanvas-header {
      display: none;
    }
    .bg-primary {
      background-color: #012e41 !important;
    }
    .top_bar .top_content {
      background-color: #012e41;
      color: #fff;
      display: block !important;
    }
    .top_bar .phone {
      display: block !important;
      font-size: 15px;
      padding-right: 5px !important;
    }
    .top_bar .social_icons {
      display: block !important;
      font-size: 15px;
      position: relative;
    }
    .social_icons_wrapper {
      position: absolute;
      right: 18px;
    }
    .social_icons i {
      font-size: 18px;
      font-weight: 100;
      padding-left: 5px;
    }
    .badge-success,
    .badge-primary {
      background-color: #012e41 !important;
    }
    .logo {
      margin-left: 270px;
    }
    .nav-link {
      font-family: "Lato", sans-serif;
    }
    .logo img {
      height: 90px !important;
    }
    .carousel-caption span {
      padding: 10px;
      background-color: #012e41;
    }
    .main_content .message {
      border-left: 2px solid #012e41;
    }

    .main_content .notice {
      background-color: whitesmoke;
    }
    .about {
      border-left: 2px solid #012e41;
    }
    .message_about .readmore {
      background-color: transparent;
      border: 1px solid #012e41;
      color: #012e41;
    }
    .notice .notice_date {
      width: 50%;
      height: 50px;
      background-color: #012e41;
    }
    .notice .all_events {
      color: #012e41;
      padding: 2px;
    }
    .message_about {
      background-color: whitesmoke;
    }
    header .login {
      margin-left: 300px;
    }
    .btn-outline-danger {
      color: #fff;
      border-color: #fff;
    }

    .project_sidebar .notice h6 {
      background-color: #012e41;
      padding: 10px;
      color: #fff;
    }
    .carousel-indicators .active {
      background-color: #012e41;
    }
    .carousel-control-next-icon {
      color: #012e41 !important;
    }
    .title {
      background-color: #012e41;
      padding: 10px;
      color: #fff;
    }
    .project_sidebar .msg {
      background-color: whitesmoke;
    }
    /* Channel */
    .imp_h1 {
      font-size: 20px;
      margin-bottom: 20px !important;
      padding: 20px 0px 30px 0px;
      margin-left: 40%;
    }
    .Tprimary {
      color: #0f4859;
    }
    .Tsecondary {
      color: #012e41;
    }

    .card_channelBg {
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    .card_channelBg {
      border-radius: 5%;
      background: white;
      padding: 1.5rem;
      box-shadow: 0 0 18px -10px rgba(0, 0, 0, 0.1);
      border: 1px solid #eee;
      text-align: center;
      transition: all ease-in-out 0.8s;
      -webkit-transition: all ease-in-out 0.8s;
      -moz-transition: all ease-in-out 0.8s;
      -ms-transition: all ease-in-out 0.8s;
      -o-transition: all ease-in-out 0.8s;
      cursor: pointer;
    }
    .card-img-top {
      width: 100%;
      padding: 5px;
    }

    .programs .card-title {
      color: #012e41;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 100 !important;
    }
    /* Channel End */

    .site-footer {
      background-color: #012e41;
      padding: 45px 0 20px;
      font-size: 15px;
      line-height: 24px;
      color: #fff;
    }
    .site-footer hr {
      border-top-color: #bbb;
      opacity: 0.5;
    }
    .site-footer hr.small {
      margin: 20px 0;
    }
    .site-footer h6 {
      color: #fff;
      font-size: 16px;
      text-transform: uppercase;
      margin-top: 5px;
      letter-spacing: 2px;
    }
    .site-footer a {
      color: #fff;
    }
    .site-footer a:hover {
      color: #3366cc;
      text-decoration: none;
    }
    .footer-links {
      padding-left: 0;
      list-style: none;
    }
    .footer-links li {
      display: block;
    }
    .footer-links a {
      color: #fff;
    }
    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
      color: #3366cc;
      text-decoration: none;
    }
    .footer-links.inline li {
      display: inline-block;
    }
    .site-footer .social-icons {
      text-align: right;
    }
    .site-footer .social-icons a {
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin-left: 6px;
      margin-right: 0;
      border-radius: 100%;
      background-color: #fff;
    }
    .copyright-text {
      margin: 0;
    }
    @media (max-width: 991px) {
      .site-footer [class^="col-"] {
        margin-bottom: 30px;
      }
    }
    @media (max-width: 767px) {
      .site-footer {
        padding-bottom: 0;
      }
      .logo {
        margin: 0px;
      }
      .main_content .message img {
        width: 100%;
      }

      .main_content .about {
        padding-top: 20px;
      }
      .main_content .about span {
        font-weight: bold;
      }
      .site-footer .copyright-text,
      .site-footer .social-icons {
        text-align: center;
      }
    }
    header .login {
      margin-left: 0px !important;
    }
    .top_bar .top_content {
      display: none;
    }
    .top_bar .phone {
      display: none;
    }
    .top_bar .email {
      display: none;
    }
    .social-icons {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
    }
    .social-icons li {
      display: inline-block;
      margin-bottom: 4px;
    }
    .social-icons li.title {
      margin-right: 15px;
      text-transform: uppercase;
      color: #96a2b2;
      font-weight: 700;
      font-size: 13px;
    }
    .social-icons a {
      background-color: #eceeef;
      color: #818a91;
      font-size: 16px;
      display: inline-block;
      line-height: 44px;
      width: 44px;
      height: 44px;
      text-align: center;
      margin-right: 8px;
      border-radius: 100%;
      -webkit-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }
    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
      color: #fff;
      background-color: #29aafe;
    }
    .social-icons.size-sm a {
      line-height: 34px;
      height: 34px;
      width: 34px;
      font-size: 14px;
    }
    .social-icons a.facebook:hover {
      background-color: #3b5998;
    }
    .social-icons a.twitter:hover {
      background-color: #00aced;
    }
    .social-icons a.linkedin:hover {
      background-color: #007bb6;
    }
    .social-icons a.dribbble:hover {
      background-color: #ea4c89;
    }
    @media (max-width: 767px) {
      .social-icons li.title {
        display: block;
        margin-right: 0;
        font-weight: 600;
      }
    }

    @media (max-width: 992px) {
      .offcanvas-header {
        display: block;
      }
      .navbar-collapse {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 100%;
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        overflow-y: auto;
        visibility: hidden;
        z-index: 100;
        background-color: #012e41;
        transition: visibility 0.2s ease-in-out,
          -webkit-transform 0.2s ease-in-out;
      }
      .navbar-collapse.show {
        visibility: visible;
        transform: translateX(-100%);
      }
    }
  </style>
  <body>
    <header>
      <div class="container">
        <!-- Top bar -->
        <div class="top_bar">
          <div class="top_content">
            <div class="row">
              <div class="col-lg-6 phone">
                &nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>
                2020:12:28
              </div>
              <div class="col-lg-6 social_icons">
                <div class="social_icons_wrapper">
                  <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                  <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                  <span
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></span>
                  <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 logo">
                <img
                  src="logo.JPG"
                  class="img-fluid"
                  height="100px!important;"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- /Top bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <button class="navbar-toggler" type="button" data-trigger="#main_nav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse" id="main_nav">
            <div class="offcanvas-header mt-3">
              <button class="btn btn-outline-danger btn-close float-right">
                &times Close
              </button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="medical_college.php">Medical college</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctorinfo.php">Doctor</a>
              </li>
              <li class="nav-item login">
                <a class="nav-link" href="login.php"
                  ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Login</a
                >
              </li>
            </ul>
          </div>
          <!-- navbar-collapse.// -->
        </nav>

        <!-- Slider -->
        <div
          id="carouselExampleIndicators"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://nefscun.org.np/wp-content/uploads/2019/12/NEFSCUN-BOD.jpg" width="100%;"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <span>Annual meeting</span>
                <p>...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="https://nefscun.org.np/wp-content/uploads/2019/12/NEFSCUN-BOD.jpg"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Annual meeting</h5>
                <p>...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="https://nefscun.org.np/wp-content/uploads/2019/12/NEFSCUN-BOD.jpg"
                alt="..."
              />
              <div class="carousel-caption d-none d-md-block">
                <h5>Annual meeting</h5>
                <p>...</p>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- /Slider -->
        <!-- Notice -->
        <div class="container">
          <!--start code-->
          <div class="row py-2">
            <!--Breaking box-->
            <div class="col-1 col-md-3 col-lg-2 py-1 pr-md-0 mb-md-1">
              <div
                class="d-inline-block d-md-block bg-primary text-white text-center breaking-caret py-1 px-2"
              >
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <span class="d-none d-md-inline-block">Notice</span>
              </div>
            </div>
            <!--Breaking content-->
            <div class="col-11 col-md-9 col-lg-10 pl-1 pl-md-2">
              <div class="breaking-box pt-2 pb-1">
                <!--marque-->
                <marquee
                  behavior="scroll"
                  direction="left"
                  onmouseover="this.stop();"
                  onmouseleave="this.start();"
                >
                  <a
                    class="h6 font-weight-light"
                    href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"
                    ><span
                      class="position-relative mx-2 badge badge-success rounded-0"
                      >Technology</span
                    >
                    Google Employees Protest Secret Work on Censored Search
                    Engine for China</a
                  >
                  <a
                    class="h6 font-weight-light"
                    href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"
                    ><span
                      class="position-relative mx-2 badge badge-primary rounded-0"
                      >Automotive</span
                    >
                    Investors Betting Against Tesla Made $1 Billion on Friday</a
                  >
                  <a
                    class="h6 font-weight-light"
                    href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/.html"
                    ><span
                      class="position-relative mx-2 badge badge-primary rounded-0"
                      >Football</span
                    >
                    World cup 2050 will release in Dubay</a
                  >
                  <a
                    class="h6 font-weight-light"
                    href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"
                    ><span
                      class="position-relative mx-2 badge badge-primary rounded-0"
                      >Beauty</span
                    >
                    Lemon make your skin fresh and glowing</a
                  >
                  <a
                    class="h6 font-weight-light"
                    href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/"
                    ><span
                      class="position-relative mx-2 badge badge-primary rounded-0"
                      >Sport</span
                    >
                    5 Takeaways From Elon Musk’s Interview With The Times About
                    Tesla</a
                  >
                </marquee>
              </div>
            </div>
          </div>
          <!--end code-->
        </div>
      </div>
    </header>
