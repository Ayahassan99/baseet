@push('styles')
<link rel="stylesheet" href="/assets/css/home.css">
@endpush

@include("partials/header")
<div class="position-relative home">
    <div class="homecenter position-absolute">
        <h1>موقعك لايجاد صنايعى او مقدم خدمة بسهولة</h1>
        <h3>أنجز أعمالك بسهولة</h3>
        @if(!Auth::guard('worker')->check() && !Auth::guard('admin')->check() && !auth()->check())
        <a href="{{route('user.register')}}" class="btn btn-lg">سجل الان</a>
        @endif
    </div>
</div>
<div class="container mt-4">
    <div class="row row-cols-2 row-cols-lg-4">
        @foreach($services as $service)
        <div class="col p-4">
            <div class="position-relative job">
                <a href="{{route('service-workers', $service->value)}}">
                    <img src="{{$service->image}}" class="jobimg" alt="Cinque Terre" /></a>
                <div class="jobcenter position-absolute">
                    <h4 class="text-center">{{$service->label}}</h4>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@include("partials/footer")
