@push('styles')
    <link rel="stylesheet" href="/assets/css/reg.css">
@endpush

@include('partials/header')
    <div class="container">
        <div class="row">
          <div class="col-3">

          </div>
          <div class="col-6 ">
            <div class="flex-container">
                <h2 style="color: #1f4e5f;">مستخدم جديد</h2>
            <form action="{{ route('worker.create') }}" enctype="multipart/form-data" method="post" autocomplete="off">
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
                        <input name ="name" type="text" class="txt" required>
                        <label>الاسم</label>

                    </div>
                    <div class="txt">
                        <input name="email" type="text" class="txt" required>
                        <label>البريد الاكتروني</label>

                    </div>
                    <div class="txt">
                        <input name="password" type="password" class="txt" required>
                        <label>كلمة السر</label>
                    </div>
                    <div class="txt">
                        <input  name="cpassword" type="password" class="txt" required>
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
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
                      <option selected>اختار المحافظه</option>
                      <option  value="cairo" >القاهره</option>
                          <option  value="alex" >الاسكندريه</option>
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <div  class="container-fluid">
                    <div id="text"  style="display: block;" >
                    <div class="row mt-3" >
                      <div class="col-4 ">
                        <label class="label extrapadding gender" for="city">الجنس</label>
                      </div>
                      <div class="col-4">

                        <input name="gender"
                          value="male"
                          @if(old('gender') == 'male') checked @endif type="radio" class="form-check-input" id="m">
                        <label  for="m">ذكر</label></div>
                        <div class="col-4">
                          <!-- TODO:: Change this -->
                         <input name="gender"

                          value="female"
                          @if(old('gender') =='female') checked @endif
                          type="radio"  class="form-check-input" id="f"/>
                       <label  for="f">أنثى</label></div>  </div>
                       <div class="row mt-3" >
                        <div class="col-4 mt-1 "> <label class="label extrapadding gender" for="city">الحرفة</label></div>
                        <div class="col-4 ">
                        <select name="service" class="form-select"  aria-label="Default select example" >
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
                          <option value="chelidern">جليسة اطفال/مسنين</option>
                          <option value="food">طبخ</option>
                          <option value="other">حرفة اخرى</option>



                      </select> </div>    <div class="col-4 "> </div>

                      </div>
                      <div class="row mt-3" >
                        <div class="col-4 ">
                          <label class="label extrapadding gender" for="city">الاجر/ساعة</label>
                        </div>
                        <div class="col-4">
                          <input type="text" name="hour" class="form-control"  aria-label="Default select example">
                        </div>
                        <div class="col-4 "> </div>

                      </div>
                      <div class="row mt-3" >
                        <div class="col-4 ">
                          <label class="label extrapadding gender" for="city">صورة شخصية</label>
                        </div>
                        <div class="col-4">
                          <input name="photo" type="file" id="img" name="img" accept="image/*">
                        </div>
                        <div class="row mt-3" >
                        <div class="col-4 ">
                        <label class="label extrapadding gender" for="city">نبذة عنك </label>
                        </div>
                        <div class="col-8">
                        <textarea class="form-control extratext" name="about"></textarea>
                        </div>


                      </div>
                        <div class="col-4 "> </div>

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

@push('script')
    <script src="/assets/js/signup.js"></script>
@endpush

@include('partials/footer')
