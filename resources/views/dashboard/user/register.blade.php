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
                <h2 class="h2">عميل جديد </h2>
            <form action="{{ route('user.create') }}" enctype="multipart/form-data" method="post" autocomplete="off" >
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

@push('script')
    <script src="/assets/js/signup.js"></script>
@endpush

@include('partials/footer')
