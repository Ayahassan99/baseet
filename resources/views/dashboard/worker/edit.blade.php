@push('styles')
    <link rel="stylesheet" href="/assets/css/reg.css">
@endpush

@include('partials/header')
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 ">
            <div class="flex-container">
                <h2 style="color: #1f4e5f;">تعديل البيانات الشخصيه </h2>
                <form action="{{ route('worker.update') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <div class="txt">
                            <input type="text" class="txt" name="name" value="{{$user['name']}}">
                            <label>الاسم</label>
                        </div>

                        <div class="txt">
                            <input type="text" class="txt" name="email" value="{{$user['email']}}">
                            <label>البريد الاكتروني</label>
                        </div>

                        <div class="txt">
                            <input type="tel" class="txt" name="phone" value="{{$user['phone']}}">
                            <label>رقم التليفون</label>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label class="label extrapadding" for="city">تغيير المحافظه</label>
                                    <select id="mySelect" onchange="change()" class="form-select"
                                            aria-label="Default select example" name="city"
                                            selected="{{$user['city']}}">
                                        <option selected>اختر المحافظه</option>
                                        <option value="cairo">القاهره</option>
                                        <option value="alex">الاسكندريه</option>
                                        <option value="portsaid">بورسعيد</option>
                                        <option value="behaira">البحيره</option>
                                        <option value="sharkia">الشرقيه</option>
                                        <option value="gharbia">الغربيه</option>
                                        <option value="mounfia">المنوفيه</option>
                                    </select></div>

                                <div class="col" id="viewalex">
                                    <label class="label extrapadding" for="city">المنطقة</label>
                                    <input type="text" class="form-control" aria-label="Default select example"
                                           name="region" value="{{$user['region']}}">
                                </div>


                                <div class="mb-3"></div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-8 "></div>
                                    <div class="col-2 "></div>


                                    <div class="col-4 mt-1 "><label class="label extrapadding gender"
                                                                    for="city">الحرفة</label></div>
                                    <div class="col-4 ">
                                        <select class="form-select" aria-label="Default select example" name="service">
                                            <option value="">اختر حرفتك</option>
                                            <option @if($user->service == 'sbaka') selected @endif value="sbaka">سباكة</option>
                                            <option @if($user->service == 'negara') selected @endif  value="negara">نجارة</option>
                                            <option @if($user->service == 'nasha') selected @endif value="nasha">نقاشة</option>
                                            <option @if($user->service == 'tabreed') selected @endif value="tabreed">تبريد وتكيف
                                            </option>
                                            <option @if($user->service == 'kheta') selected @endif value="kheta">خياطة</option>
                                            <option @if($user->service == 'nazafa') selected @endif value="nazafa">نظافة</option>
                                            <option @if($user->service == 'kahrba') selected @endif value="kahrba">كهرباء</option>
                                            <option @if($user->service == 'hada') selected @endif value="hada">حداد</option>
                                            <option @if($user->service == 'balat') selected @endif value="balat">تركيب بلاط
                                            </option>
                                            <option @if($user->service == 'tamreed') selected @endif value="tamreed">تمريض
                                            </option>
                                            <option @if($user->service == 'chelidern') selected @endif value="chelidern">
                                                جليسةاطفال/مسنين
                                            </option>
                                            <option @if($user->service == 'food') selected @endif value="food">طبخ</option>
                                        </select>
                                    </div>
                                    <div class="col-4 ">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-4 ">
                                        <label class="label extrapadding gender" for="city">الاجر/ساعة</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" aria-label="Default select example"
                                               name="hour" value="{{$user['hour']}}">
                                    </div>
                                    <div class="col-4 "></div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 ">
                                        <label class="label extrapadding gender" for="city">صورة شخصية</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="file" name="photo" id="img" accept="image/*">
                                    </div>
                                    <div class="col-4 "></div>

                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 ">
                                        <label class="label extrapadding gender" for="city">نبذة عنك </label>
                                    </div>
                                    <div class="col-8">
                                        <textarea class="form-control extratext" name="about"
                                                  value="{{$user['about']}}"></textarea>
                                    </div>


                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-2 "></div>
                        <div class="col-8 "><input type="submit" value="تعديل"></div>
                        <div class="col-2 "></div>
                    </div>

                </form>

                @push('script')
                    <script src="/assets/js/signup.js"></script>
@endpush

@include('partials/footer')
