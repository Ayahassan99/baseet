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

                <div class="dropdown m-5">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        خدماتنا
                    </a>
                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('service-workers','sebaka')}}">سباكه</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','negara')}}">نجاره</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','nasha')}}">نقاشه</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','tabreed')}}">تبريد و تكييف</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','kheta')}}">خياطه</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','nazafa')}}">نظافه</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','kahrba')}}">كهرباء</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','hada')}}">حداد</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','balat')}}">تركيب بلاط</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','tamreed')}}">تمريض</a></li>
                        <li><a class="dropdown-item" href="c{{route('service-workers','chelidern')}}">رعاية اطفال / مسنين</a></li>
                        <li><a class="dropdown-item" href="{{route('service-workers','food')}}">طبخ</a></li>
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
                    @if(Auth::guard('worker')->check())
                    <tr>
                    <td>



    <div class="container">
<div class="row">
    <div class="col-3">

        <img class="worker" src="/assets/photos/mechanic-presenting-something-removebg-preview.png">

    </div>
    <div class="col-5">
        <div class="position-relative">
            <div class="position-absolute top-50 start-50 center">


        <h2 class="h2">تسجيل الدخول</h2>
        <form action="{{ route('admin.check') }}" method="post">
        @csrf
            <div class="txt">
                <input type="text" class="txt" name="email" required value="{{ old('email') }}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                <label>الاسم</label>

            </div>
            <div class="txt">
                <input type="password" class="txt" name="password" required   value="{{ old('password') }}">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                <label>كلمة السر</label>
            </div>
            <div class="row">
              <div class="col-2 "> </div>
              <div class="col-8 ">   <input  type="submit" value="تسجيل الدخول"></div>
           <div class="col-2 "> </div>
       </div>
            <div class="signup-link">
                لست مشترك؟
                <a href="signup.html">اشترك</a>
            </div>

    </form>


        </div></div></div>
        <div class="col-4"></div>
</div></div>

<script src="/assets/js/bootstrap.js"></script>
</body>
</html>
