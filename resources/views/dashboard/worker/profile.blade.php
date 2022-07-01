@push('styles')
    <link rel="stylesheet" href="/assets/css/profile.css">
    <link rel="stylesheet" href="/assets/css/rate.css">
@endpush
@include('partials/header')
<div class="container">
    <div class="row backgroud">

        <div class="col-9 padding">
            <h1>{{$user['name']}} </h1><br>
            <p>{{$user['phone']}} </p><br>
            <p>{{$cities[$user->city]}} </p><br>
            <p>{{$user['region']}}</p><br>
            <h4>{{$services[$user->service]}} </h4><br>
            <p>{{$user['hour']}}</p><br>
            <p> {{$user['about']}}</p>
            <div class="stars" data-rating="{{$user->rating()}}">
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
            </div>
            <br>

            @if(!$showMyProfile)
                <div class="card-body ">
                    <button type="button" class="btn btn-primary color" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"> اطلب الان
                    </button>
                    <a href="{{route('report')}}" class="btn btn-warning align-self-center">ابلاغ</a>
                </div>
            @else
                <div class="card-body">
                    <a href="{{route('worker.worder')}}" class="btn btn-info">اعمالك </a>
                    <a href="{{route('worker.edit')}}" class="btn btn-success"> تعديل </a>
                </div>

            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                 aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('user.order.create')}}" method="post">
                            @csrf
                            <input type="hidden" name="workerid" value="{{$user->id}}">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel"> اختر طريقة الحساب التى تفضلها </h5>
                            </div>
                            <div class="modal-body">
                                <div class="col-4">
                                    <input type="radio" class="form-check-input" id="variable" value="hourly" name="type">
                                    <label for="variable"> الاجر/ساعه </label>
                                </div>
                                <div class="col-4">
                                    <input type="radio" class="form-check-input" id="fixed" value="undetermined" name="type">
                                    <label for="fixed">غير محدد</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger color" data-bs-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn btn-primary color">اطلب</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-3 back position-relative">

            <div class="position-absolute  ">
                <img alt="worker profile picture" src="{{Storage::url($user->photo)}}" class="rounded-circle" width="200px" height="190px">
            </div>
        </div>
    </div>
</div>
<div class="col-4">
</div>
<div class="card feedback">
    <div class="card-header  ">
        اراء العملاء
    </div>
    <ul class="list-group list-group-flush">
        @foreach($reviews as $review)
            <li class="list-group-item">
                <p class="fs-5 fw-bold">{{$review->order->user->name}}</p>
                <p>{{$review->text}}</p>
            </li>
        @endforeach
    </ul>

</div>


@push('script')
    <script src="/assets/js/hours.js"></script>
@endpush
@include('partials/footer')
