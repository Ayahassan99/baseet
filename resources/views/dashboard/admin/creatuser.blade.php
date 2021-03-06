<!DOCTYPE html>
<html lang="ar" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>

        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/adding-form.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
    </head>

    <body>

    <div class="container">
        <div class="row">
          <div class="col-3">

          </div>
          <div class="col-6 ">
            <div class="flex-container">
                <h2 class="h2">عميل جديد </h2>
            <form action="{{ route('user.create') }}" method="post" autocomplete="off" >
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
                        <input type="password" class="txt" required name="password">
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        <label>كلمة السر</label>
                    </div>
                    <div class="txt">
                        <input type="password" class="txt" required name="cpassword">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                        <label>تاكيد كلمة السر</label>
                </div>
                   <div class="txt">
                      <input type="tel" class="txt" required name="phone" value="{{ old('phone')}}">
                      <label>رقم التليفون</label>

                  </div>
                    <div class="container">
                      <div class="row">
                          <div class="col">
                      <label class="label extrapadding" for="city">اختار المحافظه</label>
                      <select name="city" id="mySelect" onchange="change()"  class="form-select"  aria-label="Default select example" >
                      <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                      <option selected>اختار المحافظه</option>
                      <option  value="cairo" >القاهره</option>
                          <option value="alex" >الاسكندريه</option>
                          <option value="portsaid">بورسعيد</option>
                          <option value="behaira">البحيره</option>
                          <option value="sharkia">الشرقيه</option>
                          <option value="gharbia">الغربيه</option>
                          <option value="mounfia">المنوفيه</option>
                      </select>
                          </div>
                      <div class="col" id="viewalex">
                        <label class="label extrapadding" for="city">المنطقة</label>
                        <input name="region" type="text"  class="form-control"  aria-label="Default select example">
                        </div>


                     </div>

                   </div>
                   </div>





                  <div class="row">
                       <div class="col-2 "> </div>
                       <div class="col-8 ">   <input  type="submit" value="اضافة عميل جديد"></div>
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


                    <script src="/assets/js/signup.js"></script>
                    <script src="/assets/js/bootstrap.js"></script>

    </body>
</html>
