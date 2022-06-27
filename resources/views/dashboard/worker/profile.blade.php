<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Profile</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/rate.css">
    <link rel="stylesheet" href="/assets/css/nav.css">
    <link rel="stylesheet" href="/assets/css/profile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">

</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000/worker/home"
        ><img class="logo" src="/assets/photos/logo.png"
            /></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
                class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                style="--bs-scroll-height: 100px"
            >
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/worker/edit">
                        تعديل الملف الشخصى</a
                    >
                </li>
                <tr>
                    <!-- <td>Radwa samir</td>
                      <td>radwa32000@gmail.com</td>-->
                    <td>
                        <a class="nav-link" href="http://127.0.0.1:8000/worker/logout"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل
                            الخروج</a>
                        <form action="http://127.0.0.1:8000/worker/logout" method="post" class="d-none"
                              id="logout-form"><input type="hidden" name="_token"
                                                      value="kKfe8GMGWu8XInzI7pSFnS0Ko8jXaHJjLZgZoiYy"></form>
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
<div class="container">
    <div class="row backgroud">

        <div class="col-9 padding">
            <h1>{{$user['name']}} </h1><br>
            <p>{{$user['phone']}} </p><br>
            <p>{{$user['city']}} </p><br>
            <p>{{$user['region']}}</p><br>
            <h4>{{$user['service']}} </h4><br>
            <p>{{$user['hour']}}</p><br>
            <p> {{$user['photo']}}</p>
            <p> {{$user['about']}}</p>

            <div class="stars" data-rating="3">
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
            </div>
            <br>

            @if(!$showMyProfile)
                <div class="card-body ">
                    <button type="button" class="btn btn-primary color" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"> اطلب الان
                    </button>
                    <a href="http://127.0.0.1:8000/report" class="btn btn-warning align-self-center">ابلاغ</a>
                </div>
            @else
                <div class="card-body">
                    <a href="http://127.0.0.1:8000/worker/worder" class="btn btn-primary">اعمالك </a>
                    <a href="http://127.0.0.1:8000/worker/worder" class="btn btn-primary"> تعديل </a>
                </div>
            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"> اختر طريقة الحساب التى تفضلها </h5>
                        </div>
                        <div class="modal-body">
                            <div class="col-4">
                                <input type="radio" class="form-check-input" id="variable" name="price">
                                <label for="variable"> الاجر/ساعه </label>
                            </div>
                            <div class="col-4">
                                <input type="radio" class="form-check-input" id="fixed" name="price">
                                <label for="fixed">غير محدد</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger color" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary color">اطلب</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-3 back position-relative">

            <div class="position-absolute  ">
                <img src="/assets/photos/sabak.jpg" class="rounded-circle" width="200px" height="190px">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="col-4">
</div>
</div>
</div>
<div class="card feedback">
    <div class="card-header  ">
        اراء العملاء
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>شخص ملتزم فى مواعيده وشغله ممتاز </p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>راجل زى الفل شغله ميه ميه</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>عامل محترم شغله عظيم وفاهم فيه</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>شغله نظيف وبأعلى جودة وسعره مناسب</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>راجل زى الفل شغله ميه ميه</p>
        </li>
    </ul>

</div>


<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/hours.js"></script>
</body>
</html>
