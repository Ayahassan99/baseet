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
            <p class="card-text"> حالة الطلب : {{$order->statusText}} </p>
            <p class="card_text">{{\Carbon\Carbon::make($order->created_at)->format("d-m-Y")}}</p>
            <p class="card_text">{{\Carbon\Carbon::make($order->created_at)->format("h:mA")}}</p>
        </div>
    </div>
    @if($order->status == 'pending' && auth()->guard('worker')->check())
        <div class="d-flex justify-content-around">
            <div class="space">
                <form method="post" action="{{route('worker.order.update', $order->id)}}">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="status" value="ongoing">
                    <button type="submit" class="btn btn-primary color">قبول الطلب</button>
                </form>
            </div>
            <div class="space">
                <form method="post" action="{{route('worker.order.update', $order->id)}}">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="status" value="canceled">
                    <button type="submit" class="btn btn-primary color">رفض الطلب</button>
                </form>
            </div>
        </div>
    @endif
    @if(auth()->guard('web')->check())
        <div class="card-footer text-muted">
            <a href="{{route('worker.profile', $order->worker->id)}}" class="btn btn-link">عرض صفحة العامل</a>
        </div>
@else

        <div class="card-footer text-muted" >
            <a href="{{route('user.profile', $order->user->id)}}" class="btn btn-link">عرض صفحة العميل</a>
        </div>

@endif

@include('partials/footer')


