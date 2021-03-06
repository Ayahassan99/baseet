<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/reg.css"></link>
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>

<body>

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
