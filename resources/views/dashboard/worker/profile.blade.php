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
            <p>{{$user['city']}} </p><br>
            <p>{{$user['region']}}</p><br>
            <h4>{{$user['service']}} </h4><br>
            <p>{{$user['hour']}}</p><br>
            <p> {{$user['photo']}}</p>
            <p> {{$user['about']}}</p>

            <div class="stars" data-rating="3">
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
                    <a href="http://127.0.0.1:8000/report" class="btn btn-warning align-self-center">ابلاغ</a>
                </div>
            @else
                <div class="card-body">
                    <a href="{{route('worker.order')}}" class="btn btn-primary">اعمالك </a>
                    <a href="{{route('worker.edit')}}" class="btn btn-primary"> تعديل </a>
                </div>
            @endif
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"> اختر طريقة الحساب التى تفضلها </h5>
                        </div>
                        <div class="modal-body">
                            <div class="col-4">
                                <input type="radio" class="form-check-input" id="variable" name="price">
                                <label for="variable"> الاجر/ساعه </label>
                            </div>
                            <div class="col-4">
                                <input type="radio" class="form-check-input" id="fixed" name="price">
                                <label for="fixed">غير محدد</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger color" data-bs-dismiss="modal">اغلاق</button>
                            <button type="submit" class="btn btn-primary color">اطلب</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="col-3 back position-relative">

            <div class="position-absolute  ">
                <img src="/assets/photos/sabak.jpg" class="rounded-circle" width="200px" height="190px">

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="col-4">
</div>
</div>
</div>
<div class="card feedback">
    <div class="card-header  ">
        اراء العملاء
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>شخص ملتزم فى مواعيده وشغله ممتاز </p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>راجل زى الفل شغله ميه ميه</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>عامل محترم شغله عظيم وفاهم فيه</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>شغله نظيف وبأعلى جودة وسعره مناسب</p>
        </li>
        <li class="list-group-item">
            <p class="fs-5 fw-bold">احمد السيد</p>
            <p>راجل زى الفل شغله ميه ميه</p>
        </li>
    </ul>

</div>


@push('script')
<script src="/assets/js/hours.js"></script>
@endpush
@include('partials/footer')
