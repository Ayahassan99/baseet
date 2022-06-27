<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/reg.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img class="logo" src="/assets/photos/logo.png" \/>
        </a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
                class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                style="--bs-scroll-height: 100px"
            >
                @auth()
                @elseauth()
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="loginpage.html">
                            سجل دخولك</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup-user.html">مستخدم جديد</a>
                    </li>
                @endauth
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
                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="plumber.html">سباكه</a></li>
                    <li><a class="dropdown-item" href="carpent.html">نجاره</a></li>
                    <li><a class="dropdown-item" href="painter.html">نقاشه</a></li>
                    <li><a class="dropdown-item" href="cooling.html">تبريد و تكييف</a></li>
                    <li><a class="dropdown-item" href="tailer.html">خياطه</a></li>
                    <li><a class="dropdown-item" href="cleaner.html">نظافه</a></li>
                    <li><a class="dropdown-item" href="electrician.html">كهرباء</a></li>
                    <li><a class="dropdown-item" href="iron.html">حداد</a></li>
                    <li><a class="dropdown-item" href="tile.html">تركيب بلاط</a></li>
                    <li><a class="dropdown-item" href="nurse.html">تمريض</a></li>
                    <li><a class="dropdown-item" href="caring.html">رعاية اطفال / مسنين</a></li>
                    <li><a class="dropdown-item" href="cook.html">طبخ</a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarScroll"></div>
            <form class="d-flex m-20" action="{{route('service-workers', 'sebaka')}}" method="get" role="search">
                <input name="name" class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
                <button type="submit" class="search">
                    <span class="icon"><ion-icon name="search"></ion-icon></span>
                </button>
            </form>

            <div class="col-1"></div>
            @auth()
            <div class="dropdown">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="icon"><ion-icon name="list"></ion-icon></span>
                </a>

                <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="orders-user.html">طلباتك</a></li>
                    <li><a class="dropdown-item" href="user-edit.html">تعديل البيانات</a></li>
                    <li>
                        <button class="dropdown-item danger" href="#">تسجيل الخروج</button>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>
