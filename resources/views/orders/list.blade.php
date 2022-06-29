@push('styles')
    <link rel="stylesheet" href="/assets/css/orders-user.css">
@endpush

@include('partials.header')
<div class=" arrange ">
    @foreach($orders as $order)
    <div class="card text-center">
        <div class="d-flex">
            <div class="photo">
                <img src="/assets/photos/sabak.jpg" alt="">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$order->worker->name}}</h5>
                <p class="card-text">{{$order->service}}</p>
                <p class="card-text">حالة الطلب : {{$order->status}} </p>
            </div>
        </div>
        <div class="center">
            <a href="{{route(Auth::guard('worker')->check() ? 'worker.order.show' : 'user.order.show', $order->id)}}" class="btn btn-primary color">تفاصيل الطلب</a>
        </div>
        <div class="card-footer text-muted">
            مدة الطلب
        </div>
    </div>
    @endforeach
</div>


@include('partials.footer')
