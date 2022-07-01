@push('styles')
        <link rel="stylesheet" href="/assets/css/home.css">
        <link rel="stylesheet" href="/assets/css/rate.css">
@endpush
@include("partials/header")
<div class="container">
<form class="d-flex mb-5 mt-5" action="{{route('service-workers',$service)}}" method="get">

<select name="city" id="" class="form-select col-form-label ms-2" aria-label="Default select example" >
<option selected>اختر المحافظه</option>
<option value="cairo">القاهره</option>
<option value="alex">الاسكندريه</option>
<option value="portsaid">بورسعيد</option>
<option value="behaira">البحيره</option>
<option value="sharkia">الشرقيه</option>
<option value="gharbia">الغربيه</option>
<option value="mounfia">المنوفيه</option>
</select>

<input type="text"  name="name" class="form-control ms-2" placeholder=" اكتب اسم العامل">

<button type="submit" class="btn btn-info ">تصفيه</button>
</form>
    <div class="row row-cols-1 row-cols-lg-3 ">
        @foreach($workers as $worker)
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    <p class="card-text"><img src="{{Storage::url($worker->photo)}}" class="card-img-top" alt="worker profile picture"/></p>
                    <ul class="list-group list-group-flush align-items-center">
                        <li class="list-group-item">{{$worker->name}}</li>
                        <li class="list-group-item">{{$worker->hour}}</li>
                        <li class="list-group-item">{{$worker->city}}</li>
                        <li class="list-group-item">{{$worker->region}}</li>
                        <li class="list-group-item">
                            <div class="stars" data-rating="{{$worker->rating()}}">
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                            </div>
                                </li>
                        <li class="list-group-item text-center">
                                <a href="{{route('worker.profile', $worker->id)}}" class="btn plus">المزيد</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>


        @endforeach


@include("partials/footer")
