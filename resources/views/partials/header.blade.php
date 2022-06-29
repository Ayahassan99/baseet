<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    @stack('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img class="logo" src="/assets/photos/logo.png" \ />
            </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    @if((Auth::guard('worker')) || (Auth::guard('user')))
                        <a class="nav-link ps-5 " href="{{route('worker.profile')}}">الملف الشخصى</a>
                        <a class="nav-link ps-5" href="{{route('worker.worder')}}"> طلباتى </a>
                    @else()
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('user.login')}}">
                            سجل دخولك</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.register')}}">مستخدم جديد</a>
                    </li>
                    @endif
                </ul>

                <div class="dropdown m-5">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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


                <div class="col-5"></div>


                @auth()
                <div class="dropdown">
                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="icon">
                            <ion-icon name="list"></ion-icon>
                        </span>
                    </a>

                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                    @if(Auth::guard('worker'))
                    <tr>
                    <!-- <td>Radwa samir</td>
                      <td>radwa32000@gmail.com</td>-->
                    <td>
                        <a class="nav-link" href="http://127.0.0.1:8000/worker/logout"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل
                            الخروج</a>
                        <form action="http://127.0.0.1:8000/worker/logout" method="post" class="d-none"
                              id="logout-form"><input type="hidden" name="_token"
                                                      value="kKfe8GMGWu8XInzI7pSFnS0Ko8jXaHJjLZgZoiYy"> @csrf</form>
                    </td>
                </tr>
                @else
                <tr>
                    <!-- <td>Radwa samir</td>
                      <td>radwa32000@gmail.com</td>-->
                    <td>
                        <a class="nav-link" href="http://127.0.0.1:8000/user/logout"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل
                            الخروج</a>
                        <form action="http://127.0.0.1:8000/user/logout" method="post" class="d-none"
                              id="logout-form"><input type="hidden" name="_token"
                                                      value="kKfe8GMGWu8XInzI7pSFnS0Ko8jXaHJjLZgZoiYy"> @csrf</form>
                    </td>
                </tr>
                    </ul>
                </div>
                @endauth
                @endif
            </div>
        </div>
    </nav>
