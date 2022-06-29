@push('styles')
    <link rel="stylesheet" href="/assets/css/orders-user.css">
@endpush

@include('partials/header')
    <div class=" arrange ">
        <div class="card text-center">
            <div class="d-flex">
                <div class="photo">
                    <img src="/assets/photos/sabak.jpg" alt="">
                </div>
                <div class="card-body">
                  <h5 class="card-title">اسم العامل</h5>
                  <p class="card-text">الحرفه</p>
                  <p class="card-text">حالة الطلب : معلق </p>
                </div>
        </div>
                <div class="center">
                  <a href="{{route('user.porder')}}" class="btn btn-primary color">تفاصيل الطلب</a>
                </div>
                <div class="card-footer text-muted" >
                  مدة الطلب
                </div>
        </div>


        <div class="card text-center">
            <div class="d-flex">
                <div class="photo">
                    <img src="/assets/photos/sabak.jpg" alt="">
                </div>
                <div class="card-body">
                  <h5 class="card-title">اسم العامل</h5>
                  <p class="card-text">الحرفه</p>
                  <p class="card-text">حالة الطلب : تم بنجاح </p>
                </div>
        </div>
                <div class="center">
                  <a href="{{route('user.forder')}}" class="btn btn-primary color">تفاصيل الطلب</a>
                </div>
                <div class="card-footer text-muted">
                  مدة الطلب
                </div>
        </div>


        <div class="card text-center">
          <div class="d-flex">
              <div class="photo">
                  <img src="/assets/photos/sabak.jpg" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title">اسم العامل</h5>
                <p class="card-text">الحرفه</p>
                <p class="card-text">حالة الطلب : قيد العمل  </p>
              </div>
      </div>
              <div class="center">
                <a href="{{route('user.onorder')}}" class="btn btn-primary color">تفاصيل الطلب</a>
              </div>
              <div class="card-footer text-muted">
                مدة الطلب
              </div>
      </div>


      <div class="card text-center">
        <div class="d-flex">
            <div class="photo">
                <img src="/assets/photos/sabak.jpg" alt="">
            </div>
            <div class="card-body">
              <h5 class="card-title">اسم العامل</h5>
              <p class="card-text">الحرفه</p>
              <p class="card-text">حالة الطلب : تم الالغاء   </p>
            </div>
    </div>
            <div class="center">
              <a href="{{route('user.corder')}}" class="btn btn-primary color">تفاصيل الطلب</a>
            </div>
            <div class="card-footer text-muted">
              مدة الطلب
            </div>
    </div>


    <div class="card text-center">
      <div class="d-flex">
          <div class="photo">
              <img src="/assets/photos/sabak.jpg" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">اسم العامل</h5>
            <p class="card-text">الحرفه</p>
            <p class="card-text"> حالة الطلب : تم الرفض </p>
          </div>
  </div>
          <div class="center">
            <a href="{{route('user.rorder')}}" class="btn btn-primary color">تفاصيل الطلب</a>
          </div>
          <div class="card-footer text-muted">
            مدة الطلب
          </div>
  </div>

    </div>


    @include('partials/footer')
