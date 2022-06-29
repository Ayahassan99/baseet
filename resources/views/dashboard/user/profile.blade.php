
@push('styles')
    <link rel="stylesheet" href="/assets/css/rate.css">
    <link rel="stylesheet" href="/assets/css/profile.css">
@endpush

@include('partials/header')
        <div class="container align-items-center">
          <div class="row backgroud">

            <div class="col-9 padding ">
                <h1>{{$user['name']}}</h1><br>
                <p class="fs-3">{{$user['city']}}</p><br>
                <p class="fs-3">{{$user['region']}}</p><br>
                <p class="fs-3">{{$user['phone']}}</p><br>

                @if(!$showMyProfile)
                <a href="{{route('report')}}" class="btn btn-warning align-self-center">ابلاغ</a>
                @else
                <a href="{{route('user.order.index')}}" class="btn btn-info">طلباتك  </a>
                <a href="{{route('user.edit')}}" class="btn btn-success"> تعديل </a>
                @endif
            </div>

            <div class="card-header  ">
                اراء العمال
            </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <p class="fs-5 fw-bold">احمد السيد</p>
                  <p> شخص كويس جدا </p>
                </li>
                <li class="list-group-item">
                  <p class="fs-5 fw-bold">احمد السيد</p>
                  <p> المكان بعيد مش بيقول العنوان الحقيقي </p>
                </li>
                <li class="list-group-item">
                  <p class="fs-5 fw-bold">احمد السيد</p>
                  <p> ارشح التعامل معه </p>
                </li>
              </ul>

@include('partials/footer')

