@include("partials/header")
<div class="position-relative home">
    <div class="homecenter position-absolute">
        <h1>موقعك لايجاد صنايعى او مقدم خدمة بسهولة</h1>
        <h3>أنجز أعمالك بسهولة</h3>
        <button type="button" class="btn btn-lg">سجل الان</button>
    </div>
</div>
<div class="container mt-4">
    <div class="row row-cols-2 row-cols-lg-4">
        @foreach($services as $service)
            <div class="col p-4">
                <div class="position-relative job">
                    <a href="{{route('service-workers', $service->value)}}">
                        <img
                            src="{{$service->image}}"
                            class="jobimg"
                            alt="Cinque Terre"
                        /></a>
                    <div class="jobcenter position-absolute">
                        <h4 class="text-center">{{$service->label}}</h4>
                    </div>
                </div>
            </div>
        @endforeach
        {{--        <div class="col p-4">--}}
        {{--            <div class="position-relative job">--}}
        {{--                <a href="http://127.0.0.1:8000/sebaka">--}}
        {{--                    <img--}}
        {{--                        src="./assets/photos/wrench-flexible-connector-dark-table.jpg"--}}
        {{--                        class="jobimg"--}}
        {{--                        alt="Cinque Terre"--}}
        {{--                    /></a>--}}
        {{--                <div class="jobcenter position-absolute">--}}
        {{--                    <h4 class="text-center">سباكة</h4>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="carpent.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/screwing-self-tapping-screw-into-metal-fastening-hole-wood-strip-using-screwdriver-work-carpenter.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">نجارة</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="painter.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/593205.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">نقاشة</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="cooling.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/logo-1.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">تبريد وتكيف</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row row-cols-2 row-cols-lg-4">--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="tailer.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/2102.i305.033_realistic_sewing_machine.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">خياطة</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="cleaner.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/3282021.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">نظافة</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="electrician.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/electric.jpeg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">كهرباء</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="iron.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/327cbb0f0a40fb045bf1e3ee611d4569.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">حداد</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row row-cols-2 row-cols-lg-4">--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="tile.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/شركة-تركيب-سيراميك-في-ابوظبي.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">تركيب بلاط</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="nurse.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/nurse-measuring-patient-blood-pressure.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">تمريض</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="caring.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/closeup-support-hands.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">رعاية اطفال / مسنين</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col p-4">--}}
{{--            <div class="position-relative job">--}}
{{--                <a href="cook.html">--}}
{{--                    <img--}}
{{--                        src="./assets/photos/2844811.jpg"--}}
{{--                        class="jobimg"--}}
{{--                        alt="Cinque Terre"--}}
{{--                    /></a>--}}
{{--                <div class="jobcenter position-absolute">--}}
{{--                    <h4 class="text-center">طبخ</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@include("partials/footer")
