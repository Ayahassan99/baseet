
<!DOCTYPE html>
<html lang="ar" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Signup Form</title>
      
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/reg.css">
        <link rel="stylesheet" href="/assets/css/nav.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla">
    </head>

    <body>
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
                    <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/user/login">تسجيل دخول</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1:8000/worker/register">انشاء حساب عامل جديد</a>
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
        
          </div>
          <div class="col-6 ">
            <div class="flex-container">
                <h2 style="color: #1f4e5f;">مستخدم جديد</h2>
            <form action="{{ route('user.create') }}" method="post" autocomplete="off">
            @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
            @csrf
                <div class="mb-3">
                    <div class="txt">
                        <input type="text" class="txt" required name="name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        <label>الاسم</label>
                        
                    </div>
                    <div class="txt">
                        <input type="text" class="txt" required name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                        <label>البريد الاكتروني</label>
                        
                    </div>        
                    <div class="txt">
                        <input type="password" class="txt" required name="password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        <label>كلمة السر</label>
                    </div>
                    <div class="txt">
                        <input type="password" class="txt" required name="cpassword" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                        <label>تاكيد كلمة السر</label>
                   </div>
                   <div class="txt">
                      <input type="tel" class="txt" required name="phone">
                      <label>رقم التليفون</label>
                      
                  </div>
                    <div class="container">
                      <div class="row">
                          <div class="col">
                      <label class="label extrapadding" for="city">اختار المحافظه</label>
                      <select name="city" id="mySelect" onchange="change()"  class="form-select"  aria-label="Default select example" >
                      <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                      <option  value="cairo" >القاهره</option>
                          <option  value="alex" selected>الاسكندريه</option>
                          <option value="portsaid">بورسعيد</option>
                          <option value="behaira">البحيره</option>
                          <option value="sharkia">الشرقيه</option>
                          <option value="gharbia">الغربيه</option>
                          <option value="mounfia">المنوفيه</option>
                      </select></div>
                      <div class="col" id="viewalex">
                        <label class="label extrapadding" for="city">المنطقة</label>
                        <input name="region" type="text"  class="form-control"  aria-label="Default select example">
                        </div>
                     
                      
                     </div>
                      
                   </div>
                   </div>

                 



                  <div class="row">
                       <div class="col-2 "> </div>
                       <div class="col-8 ">   <input  type="submit" value="تسجيل الدخول"></div> 
                    <div class="col-2 "> </div>
                </div>
                
              </form>
            </div>
            </div> </div>

          </div>
          <div class="col-3">
        
        </div>
        </div>

      </div>
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
<script src="/assets/js/signup.js"></script>

    </body>

</html>