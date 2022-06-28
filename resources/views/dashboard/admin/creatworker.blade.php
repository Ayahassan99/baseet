
<!DOCTYPE html>
<html lang="ar" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Signup Worker Form</title>

        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/reg.css">
        <link rel="stylesheet" href="/assets/css/nav.css">

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
                    <a class="nav-link" href="signup-user.html">انشاء حساب مستخدم جديد </a>
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


    <div class="container">
        <div class="row">
            <div class="col-3">
        
            </div>
            <div class="col-6 ">
            <div class="flex-container">
                <h2 style="color: #1f4e5f;">عامل جديد</h2>
            <form>
                <div class="mb-3">
                    <div class="txt">
                        <input type="text" class="txt" required>
                        <label>الاسم</label>
                        
                    </div>
                    <div class="txt">
                        <input type="text" class="txt" required>
                        <label>البريد الاكتروني</label>
                        
                    </div>        
                    <div class="txt">
                        <input type="password" class="txt" required>
                        <label>كلمة السر</label>
                    </div>
                    <div class="txt">
                        <input type="password" class="txt" required>
                        <label>تاكيد كلمة السر</label>
                    </div>

                    <div class="txt">
                        <input type="tel" class="txt" required>
                        <label>رقم التليفون</label>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                        <label class="label extrapadding" for="city">اختار المحافظه</label>
                        <select id="mySelect" onchange="change()"  class="form-select"  aria-label="Default select example" >
                            <option selected>اختر المحافظه</option>
                            <option value="cairo" >القاهره</option>
                            <option value="alex" >الاسكندريه</option>
                            <option value="portsaid">بورسعيد</option>
                            <option value="behaira">البحيره</option>
                            <option value="sharkia">الشرقيه</option>
                            <option value="gharbia">الغربيه</option>
                            <option value="mounfia">المنوفيه</option>
                        </select></div>

                        <div class="col" id="viewalex">
                        <label class="label extrapadding" for="city">المنطقة</label>
                        <input type="text"  class="form-control"  aria-label="Default select example">
                        </div>
                        <div class="mb-3"></div>
                        <div class="row">
                            <div class="col-2"> </div>
                                <div class="col-8 "></div> 
                                <div class="col-2 "> </div>
                    
                                    <div class="row mt-3" >
                                        <div class="col-4 ">
                                        <label class="label extrapadding gender" for="city">الجنس</label>
                                        </div>
                                        <div class="col-4"> 
                                            <input type="radio" class="form-check-input" id="male" name="gender">
                                        <label  for="male" id="male">ذكر</label>
                                    </div>
                                        <div class="col-4">   
                                            <input type="radio"class="form-check-input" id="female" name="gender">
                                        <label  for="female" >أنثى</label>
                                    </div>  
                                </div>
                                <div class="mb-3"></div>

                    <div class="col-4 mt-1 "> <label class="label extrapadding gender" for="city">الحرفة</label></div>
                    <div class="col-4 ">           
                        <select  class="form-select"  aria-label="Default select example" >
                            <option  value="select" selected>اختر حرفتك</option>
                            <option  value="sbaka" >سباكة</option>
                            <option  value="negara" >نجارة</option>
                            <option value="nasha">نقاشة</option>
                            <option value="tabreed">تبريد وتكيف</option>
                            <option value="kheta">خياطة</option>
                            <option value="nazafa">نظافة</option>
                            <option value="kahrba">كهرباء</option>
                            <option value="hada">حداد</option>
                            <option value="balat">تركيب بلاط</option>
                            <option value="tamreed">تمريض</option>
                            <option value="chelidern">رعاية اطفال / مسنين</option>
                            <option value="food">طبخ</option>
                            <option value="other">حرفة اخرى</option>
                        </select> </div>    <div class="col-4 "> 
                        </div>
                    </div>
                    
                    <div class="row mt-3" >
                    <div class="col-4 ">
                        <label class="label extrapadding gender" for="city">الاجر/ساعة</label>
                    </div>
                    <div class="col-4"> 
                        <input type="number"  class="form-control"  aria-label="Default select example">
                    </div>
                    <div class="col-4 "> </div>
                </div>

                <div class="row mt-3" >
                <div class="col-4 ">
                    <label class="label extrapadding gender" for="city">صورة شخصية</label>
                </div>
                <div class="col-4"> 
                    <input type="file" id="img" name="img" accept="image/*">                         
                </div>
                <div class="col-4 "> </div>
            </div>
            <div class="row mt-3" >
                <div class="col-4 ">
                    <label class="label extrapadding gender" for="city">نبذة عنك </label>
                </div>
                <div class="col-8"> 
                    <textarea class="form-control extratext"></textarea>
                </div>
                </div>
                </div>
                </div>

            </div>


                    <div class="row" >
                        <div class="col-2 "> </div>
                        <div class="col-8 mt-3">   
                            <input type="submit" value="تسجيل الدخول"></div> 
                <div class="col-2 "> </div>
                    </div>
                </form>



                    <script src="/assets/js/signup.js"></script>
                    <script src="/assets/js/bootstrap.js"></script>
        
    </body>