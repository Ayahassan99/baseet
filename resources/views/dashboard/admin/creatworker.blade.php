<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/adding-form.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6 ">
            <div class="flex-container">
                <h2 class="h2">عامل جديد</h2>
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
                            <input type="submit" value="اضافة عامل جديد "></div>
                <div class="col-2 "> </div>
                    </div>
                </form>



                    <script src="./assets/js/signup.js"></script>
                    <script src="./assets/js/bootstrap.js"></script>

    </body>
</html>
