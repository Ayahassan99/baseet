@push('styles')
    <link rel="stylesheet" href="/assets/css/orders-user.css">
@endpush

@include('partials/header')
    <div class="card text-center">
        <div class="d-flex">
            <div class="card-body">
                <h5 class="card-title">اسم العميل</h5>
                <p class="card-text">المنطقه</p>
                <p class="card-text">حالة الطلب : تم الرفض </p>
                <p class="card-text"> تاريخ الطلب </p>
                <p class="card-text"> وقت الطلب </p>
            </div>
    </div>
            <div class="card-footer text-muted" >
                <a href="{{route('user.profile')}}" class="btn btn-link">عرض صفحة العميل</a>
            </div>
    </div>


    @include('partials/footer')
