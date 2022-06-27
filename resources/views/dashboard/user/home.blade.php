
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/home.css" >
    <link rel="stylesheet" href="/assets/css/nav.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000"
          ><img class="logo" src="/assets/photos/logo.png"
        /></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
            style="--bs-scroll-height: 100px"
          >
          <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/user/profile">الملف الشخصى</a>
              </li>
              <li class="nav-item">
              <tbody>
            <tr>
        <!-- <td>Radwa samir</td>
          <td>radwa32000@gmail.com</td>-->
           <td>
       <a class="nav-link" href="http://127.0.0.1:8000/user/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل الخروج</a>
               <form action="http://127.0.0.1:8000/user/logout" method="post" class="d-none" id="logout-form"><input type="hidden" name="_token" value="kKfe8GMGWu8XInzI7pSFnS0Ko8jXaHJjLZgZoiYy"></form>
                                 </td>
                             </tr>
          </ul>

          <div class="dropdown m-5">
            <a
              class="btn btn-light dropdown-toggle"
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              خدماتنا
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="http://127.0.0.1:8000/sebaka">سباكه</a></li>
              <li><a class="dropdown-item" href="carpent.html">نجاره</a></li>
              <li><a class="dropdown-item" href="painter.html">نقاشه</a></li>
              <li>
                <a class="dropdown-item" href="cooling.html">تبريد و تكييف</a>
              </li>
              <li><a class="dropdown-item" href="tailer.html">خياطه</a></li>
              <li><a class="dropdown-item" href="cleaner.html">نظافه</a></li>
              <li>
                <a class="dropdown-item" href="electrician.html">كهرباء</a>
              </li>
              <li><a class="dropdown-item" href="iron.html">حداد</a></li>
              <li><a class="dropdown-item" href="tile.html">تركيب بلاط</a></li>
              <li><a class="dropdown-item" href="nurse.html">تمريض</a></li>
              <li>
                <a class="dropdown-item" href="caring.html"
                  >رعاية اطفال / مسنين</a
                >
              </li>
              <li><a class="dropdown-item" href="cook.html">طبخ</a></li>
            </ul>
          </div>

          <div class="collapse navbar-collapse" id="navbarScroll"></div>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
            
            <button class="btn search " type="submit">ابحث</button>
          </form>

        </div>
      </div>
    </nav>

    <div class="position-relative home">
      <div class="homecenter position-absolute">
        <h1>موقعك لايجاد صنايعى او مقدم خدمة بسهولة</h1>
        <h3>أنجز أعمالك بسهولة</h3>
        <button type="button" class="btn btn-lg">سجل الان</button>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row row-cols-2 row-cols-lg-4">
        <div class="col p-4">
          <div class="position-relative job">
            <a href="http://127.0.0.1:8000/sebaka">
              <img
                src="/assets/photos/wrench-flexible-connector-dark-table.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">سباكة</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="carpent.html">
              <img
                src="/assets/photos/screwing-self-tapping-screw-into-metal-fastening-hole-wood-strip-using-screwdriver-work-carpenter.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">نجارة</h4>
            </div>
          </div>
        </div>

        <div class="col p-4">
          <div class="position-relative job">
            <a href="painter.html">
              <img
                src="/assets/photos/593205.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">نقاشة</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="cooling.html">
              <img
                src="/assets/photos/logo-1.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">تبريد وتكيف</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-2 row-cols-lg-4">
        <div class="col p-4">
          <div class="position-relative job">
            <a href="tailer.html">
              <img
                src="/assets/photos/2102.i305.033_realistic_sewing_machine.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">خياطة</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="cleaner.html">
              <img
                src="/assets/photos/3282021.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">نظافة</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="electrician.html">
              <img
                src="/assets/photos/electric.jpeg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">كهرباء</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="iron.html">
              <img
                src="/assets/photos/327cbb0f0a40fb045bf1e3ee611d4569.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">حداد</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-2 row-cols-lg-4">
        <div class="col p-4">
          <div class="position-relative job">
            <a href="tile.html">
              <img
                src="/assets/photos/شركة-تركيب-سيراميك-في-ابوظبي.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">تركيب بلاط</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="nurse.html">
              <img
                src="/assets/photos/nurse-measuring-patient-blood-pressure.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">تمريض</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="caring.html">
              <img
                src="/assets/photos/closeup-support-hands.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">رعاية اطفال / مسنين</h4>
            </div>
          </div>
        </div>
        <div class="col p-4">
          <div class="position-relative job">
            <a href="cook.html">
              <img
                src="/assets/photos/2844811.jpg"
                class="jobimg"
                alt="Cinque Terre"
            /></a>
            <div class="jobcenter position-absolute">
              <h4 class="text-center">طبخ</h4>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script src="/assets/js/bootstrap.js"></script>
  </body>
</html>
