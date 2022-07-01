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
            @if($order->status == 'finished')
                <p class="card-text">{{\Carbon\Carbon::make($order->updated_at)->format('m-d-Y, h:mA')}}</p>
                <p class="card-text">{{$order->price}}</p>
            @endif
        </div>
    </div>
    @if($order->status == 'ongoing' && auth()->guard('web')->check())
        <div class="arr">
            <button type="button" class="btn btn-primary color" data-bs-toggle="modal" data-bs-target="#staticBackdrop">تم انتهاء العمل </button>
        </div>
        <form action="{{route('user.order.finish', $order->id)}}" method="post">
            @csrf
            @method("PATCH")
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">من فضلك قم بادخال عدد ساعات العمل</h5>
                        </div>
                        <div class="modal-body">
                            <input min="1" name="number_of_hours" type="number" placeholder="اكتب هنا" required>
                        </div>
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">من فضلك قم بادخال المبلغ الكلي للطلب</h5>
                        </div>
                        <div class="modal-body">
                            <input min="1" name="price" type="number" placeholder="اكتب هنا" required>
                        </div>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">شارك تجربتك رايك يهمنا !</h5>
                            </div>
                            <div class="modal-body">
                                <textarea name="review" class="form-control extratext" required placeholder="Feedback"></textarea>
                            </div>
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">تقييم العامل</h5>
                            </div>
                            <div class="modal-body">
                                <input name="rating" type="number" min="1" max="5" class="form-control" required placeholder="*"/>
                                <p class="small">القيمة أقل من 1 تحتسب 1، القيمة أكبر من 5 تحتسب 5</p>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger " data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary color">حفظ</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
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

    @if($order->status == 'pending' && auth()->check())
        <div class="d-flex justify-content-around">
            <div class="space">
                <form method="post" action="{{route('user.order.update', $order->id)}}">
                    @csrf
                    @method("PATCH")
                    <input type="hidden" name="status" value="canceled">
                    <button type="submit" class="btn btn-primary color">الغاء الطلب</button>
                </form>
            </div>
        </div>
    @endif
    @if(auth()->guard('web')->check())
        <div class="card-footer text-muted">
            <a href="{{route('worker.profile', $order->worker->id)}}" class="btn btn-link">عرض صفحة العامل</a>
        </div>
    @else
        <div class="card-footer text-muted">
            <a href="{{route('user.profile', $order->user->id)}}" class="btn btn-link">عرض صفحة العميل</a>
        </div>
    @endif

@include('partials/footer')


