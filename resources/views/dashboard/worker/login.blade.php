@push('styles')
<link rel="stylesheet" href="/assets/css/reg.css">
@endpush

@include('partials/header')



<div class="container">
    <div class="row">
        <div class="col-3">

            <img class="worker" src="/assets/photos/mechanic-presenting-something-removebg-preview.png">

        </div>
        <div class="col-5">
            <div class="position-relative">
                <div class="position-absolute top-50 start-50 center">


                    <h2 style="color: #1f4e5f;">تسجيل الدخول</h2>
                    <form action="{{ route('worker.check') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="txt">
                            <input type="text" class="txt" name="email" required value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            <label>الاسم</label>

                        </div>
                        <div class="txt">
                            <input type="password" class="txt" name="password" required value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                            <label>كلمة السر</label>
                        </div>
                        <div class="row">
                            <div class="col-2 "> </div>
                            <div class="col-8 "> <input type="submit" value="تسجيل الدخول"></div>
                            <div class="col-2 "> </div>
                        </div>
                        <div class="signup-link">
                            لست مشترك؟
                            <a href="{{route('user.register')}}">اشترك</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

@include('partials/footer')
