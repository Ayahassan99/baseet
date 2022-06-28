@push('styles')
        <link rel="stylesheet" href="/assets/css/home.css">
        <link rel="stylesheet" href="/assets/css/rate.css">
@endpush
@include('partials/header')

    <div class="container top">

    <form class="d-flex mb-5 mt-5">

    <select class="form-select col-form-label ms-2" aria-label="Default select example">
    <option selected>اختر المحافظه</option>
    <option value="cairo" >القاهره</option>
    <option value="alex" >الاسكندريه</option>
    <option value="portsaid">بورسعيد</option>
    <option value="behaira">البحيره</option>
    <option value="sharkia">الشرقيه</option>
    <option value="gharbia">الغربيه</option>
    <option value="mounfia">المنوفيه</option>
    </select>

    <input type="text" class="form-control ms-2" placeholder=" اكتب اسم العامل هنا">

    <button class="btn btn-info ">تصفيه</button>
</form>


    <div class="row row-cols-1 row-cols-lg-3">

    <div class="col">
    <div class="card ">
        <div class="card-body">
            <p class="card-text"> <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
            <ul class="list-group list-group-flush align-items-center">
            <li class="list-group-item">احمد محمد السيد</li>
            <li class="list-group-item">120</li>
            <li class="list-group-item">الاسكندريه - المندره</li>
            <li class="list-group-item">
            <div class="stars" data-rating="3">
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
            </li>
            </div>
            <li class="list-group-item text-center"> <a href="{{route('worker.profile')}}" class="btn plus">المزيد</a></li>
            </ul>
        </div>
        </div>

        <div class="col">

    <div class="card ">
        <div class="card-body">
            <p class="card-text"> <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
            <ul class="list-group list-group-flush align-items-center">
            <li class="list-group-item">احمد محمد السيد</li>
            <li class="list-group-item">120</li>
            <li class="list-group-item">الاسكندريه - المندره</li>
            <li class="list-group-item">
            <div class="stars" data-rating="3">
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
            </li>
            </div>
            <li class="list-group-item text-center"> <a href="{{route('worker.profile')}}" class="btn plus">المزيد</a></li>
            </ul>
        </div>
    </div>

        <div class="col">

            <div class="card ">
                <div class="card-body">
                <p class="card-text"> <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
                <ul class="list-group list-group-flush align-items-center">
                    <li class="list-group-item">احمد محمد السيد</li>
                    <li class="list-group-item">120</li>
                    <li class="list-group-item">الاسكندريه - المندره</li>
                    <li class="list-group-item">
                    <div class="stars" data-rating="3">
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                    </li>
                    </div>
                    <li class="list-group-item text-center"> <a href="{{route('worker.profile')}}" class="btn plus ">المزيد</a></li>
                </ul>
                </div>
            </div>
</div></div>


@push('script')
        <link rel="stylesheet" href="/assets/js/rate.js">
@endpush

@include('partials/footer')
