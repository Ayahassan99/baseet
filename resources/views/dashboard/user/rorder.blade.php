@push('styles')
    <link rel="stylesheet" href="/assets/css/orders-user.css">
@endpush

@include('partials/header')
            <div class="card text-center">
                <div class="d-flex">
                    <div class="photo">
                        <img src="/assets/photos/sabak.jpg" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">اسم العامل</h5>
                        <p class="card-text">الحرفه</p>
                        <p class="card-text"> حالة الطلب : تم الرفض </p>
                        <p class="card_text">تاريخ الطلب</p>
                        <p class="card_text">وقت الطلب</p>
                    </div>
            </div>
            <div class="card-footer text-muted" >
                    <a href="{{route('worker.profile')}}" class="btn btn-link">عرض صفحة العامل</a>
            </div>

            @include('partials/footer')


