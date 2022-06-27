
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/orders-user.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"
        ><img class="logo" src="/assets/photos/logo.png"
      /></a>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul
          class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
          style="--bs-scroll-height: 100px"
        >
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="loginpage.html">
              سجل دخولك</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup-user.html">مستخدم جديد</a>
          </li>
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
            <li><a class="dropdown-item" href="plumber.html">سباكه</a></li>
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


    <div class="card text-center">
        <div class="d-flex">
            <div class="card-body">
                <h5 class="card-title">اسم العميل</h5>
                <p class="card-text">المنطقه</p>
                <p class="card-text"> طريقة الحساب  </p>
                <p class="card-text">حالة الطلب : معلق </p>
                <p class="card-text"> تاريخ الطلب </p>
                <p class="card-text">  وقت الطلب </p>
            </div>
    </div>
        <div class="d-flex justify-content-around">
            <div class="space"> 
                <button type="button" class="btn btn-primary color">قبول الطلب</button>
            </div>
            <div class="space"> 
                <button type="button" class="btn btn-primary color">رفض الطلب</button>
            </div>
        </div>

            <div class="card-footer text-muted" >
                <a href="user-profile.html" class="btn btn-link">عرض صفحة العميل</a>
            </div>
    </div>


    <script src="/assets/js/bootstrap.js"></script>
</body>
</html>