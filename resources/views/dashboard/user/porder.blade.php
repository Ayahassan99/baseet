
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
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            
          <a class="navbar-brand"  href="#"><img class="logo" src="/assets/photos/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="loginpage.html"> سجل دخولك</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup-user.html">مستخدم جديد</a>
              </li>
            </ul>
    
            <div class="dropdown m-5">
              <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                خدماتنا
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">سباكه</a></li>
                <li><a class="dropdown-item" href="#">نجاره</a></li>
                <li><a class="dropdown-item" href="#">نقاشه</a></li>
                <li><a class="dropdown-item" href="#">تبريد و تكييف</a></li>
                <li><a class="dropdown-item" href="#">خياطه</a></li>
                <li><a class="dropdown-item" href="#">نظافه</a></li>
                <li><a class="dropdown-item" href="#">كهرباء</a></li>
                <li><a class="dropdown-item" href="#">حداد</a></li>
                <li><a class="dropdown-item" href="#">تركيب بلاط</a></li>
                <li><a class="dropdown-item" href="#">تمريض</a></li>
                <li><a class="dropdown-item" href="#">رعاية اطفال / مسنين</a></li>
                <li><a class="dropdown-item" href="#">طبخ</a></li>
              </ul>
            </div>
    
            <div class="collapse navbar-collapse" id="navbarScroll"></div>
    
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
              <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
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
                        <p class="card-text"> حالة الطلب : معلق </p>
                        <p class="card_text">تاريخ الطلب</p>
                        <p class="card_text">وقت الطلب</p>
                    </div>
            </div>
            <div class="arr"> 
                <button type="button" class="btn btn-primary color">الغاء الطلب</button>
            </div>
            <div class="card-footer text-muted" >
                    <a href="#" class="btn btn-link">عرض صفحة العامل</a>
            </div>


            <script src="/assets/js/bootstrap.js"></script>
</body>
</html>