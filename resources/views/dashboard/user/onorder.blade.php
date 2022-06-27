
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
                    <div class="photo">
                        <img src="/assets/photos/sabak.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">اسم العامل</h5>
                        <p class="card-text">الحرفه</p>
                        <p class="card-text"> حالة الطلب : قيد العمل </p>
                        <p class="card_text">تاريخ الطلب</p>
                        <p class="card_text">وقت الطلب</p>
                    </div>
            </div>
            <div class="arr"> 
                <button type="button" class="btn btn-primary color" data-bs-toggle="modal" data-bs-target="#staticBackdrop">تم انتهاء العمل </button>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">من فضلك قم بادخال عدد ساعات العمل</h5>
                    </div>
                    <div class="modal-body">
                        <input type="number" placeholder="اكتب هنا" required>
                    </div>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">شارك تجربتك رايك يهمنا !</h5>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control extratext" required placeholder="Feedback"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger " data-bs-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary color">حفظ</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted" >
                    <a href="worker-profile.html" class="btn btn-link">عرض صفحة العامل</a>
            </div>



    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/modal.js"></script>

</body>
</html>