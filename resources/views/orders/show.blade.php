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
                        <h5 class="card-title">{{$order->username}}</h5>
                        <p class="card-text">{{$order->service}}</p>
                        <p class="card-text"> حالة الطلب : {{$order->status}} </p>
                        <p class="card_text">{{\Carbon\Carbon::make($order->created_at)->format("h:mA d-m-Y")}}</p>
                        <p class="card_text">وقت الطلب</p>
                    </div>
            </div>
            <div class="card-footer text-muted" >
                    <a href="{{route('worker.profile')}}" class="btn btn-link">عرض صفحة العامل</a>
            </div>

            @include('partials/footer')


