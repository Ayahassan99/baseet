
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/reg.css">
        <link rel="stylesheet" href="/assets/css/nav.css">


        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            
          <a class="navbar-brand" onclick="openNav();" href="#">
            <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: white">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg></a>
          <a class="navbar-brand"  href="http://127.0.0.1:8000"><img class="logo" src="/assets/photos/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/worker/register">انشاء حساب عامل جديد</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/user/register">عميل جديد</a>
                    </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
              <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
            </form>
          </div>
        </div>
      </nav>
      

    <div class="container">
<div class="row">
    <div class="col-3">
    
        <img class="worker" src="/assets/photos/mechanic-presenting-something-removebg-preview.png">
        
    </div>
    <div class="col-5">
        <div class="position-relative">
            <div class="position-absolute top-50 start-50 center">


        <h2 style="color: #1f4e5f;">تسجيل الدخول</h2>
        <form action="{{ route('worker.check') }}" method="post" autocomplete="off">
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
            <div class="pass">نسيت كلمة السر؟</div>
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

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/sidemenu.js"></script>
</body>
</html>