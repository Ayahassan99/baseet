@push('styles')
    <link rel="stylesheet" href="/assets/css/orders-user.css">
@endpush
@include('partials/header')
    <div class="arrange">
        <div class="card text-center">
            <div class="d-flex">
                <div class="card-body">
                    <h5 class="card-title">اسم العميل</h5>
                    <p class="card-text">المنطقه</p>
                    <p class="card-text">حالة الطلب : معلق </p>
                </div>
        </div>
                <div class="mb-3">
                    <a href="{{route('worker.porder')}}" class="btn btn-primary color">تفاصيل العمل</a>
                </div>
                <div class="card-footer text-muted" >
                    مدة الطلب
                </div>
        </div>


        <div class="card text-center">
            <div class="d-flex">
                <div class="card-body">
                    <h5 class="card-title">اسم العميل</h5>
                    <p class="card-text">المنطقه</p>
                    <p class="card-text">حالة الطلب : تم بنجاح </p>
                </div>
        </div>
                <div class="mb-3">
                    <a href="{{route('worker.forder')}}" class="btn btn-primary color">تفاصيل العمل</a>
                </div>
                <div class="card-footer text-muted">
                    مدة الطلب
                </div>
        </div>


        <div class="card text-center">
            <div class="d-flex">
                <div class="card-body">
                    <h5 class="card-title">اسم العميل</h5>
                    <p class="card-text">المنطقه</p>
                    <p class="card-text">حالة الطلب : قيد العمل  </p>
                </div>
        </div>
                <div class="mb-3">
                    <a href="{{route('worker.onorder')}}" class="btn btn-primary color">تفاصيل العمل</a>
                </div>
                <div class="card-footer text-muted">
                    مدة الطلب
                </div>
        </div>


        <div class="card text-center">
            <div class="d-flex">
                <div class="card-body">
                    <h5 class="card-title">اسم العميل</h5>
                    <p class="card-text">المنطقه</p>
                    <p class="card-text">حالة الطلب : تم الالغاء   </p>
                </div>
        </div>
                <div class="mb-3">
                    <a href="{{route('worker.corder')}}" class="btn btn-primary color">تفاصيل العمل</a>
                </div>
                <div class="card-footer text-muted">
                    مدة الطلب
                </div>
        </div>


        <div class="card text-center">
            <div class="d-flex">
                <div class="card-body">
                    <h5 class="card-title">اسم العميل</h5>
                    <p class="card-text">المنطقه</p>
                    <p class="card-text">حالة الطلب : تم الرفض   </p>
                </div>
        </div>
                <div class="mb-3">
                    <a href="{{route('worker.rorder')}}" class="btn btn-primary color">تفاصيل العمل</a>
                </div>
                <div class="card-footer text-muted">
                    مدة الطلب
                </div>
        </div>
    </div>

    @include('partials/footer')
