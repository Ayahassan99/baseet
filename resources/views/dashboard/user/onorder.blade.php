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
                        <h5 class="card-title">اسم العامل</h5>
                        <p class="card-text">الحرفه</p>
                        <p class="card-text"> حالة الطلب : قيد العمل </p>
                        <p class="card_text">تاريخ الطلب</p>
                        <p class="card_text">وقت الطلب</p>
                    </div>
            </div>
            <div class="arr">
                <button type="button" class="btn btn-primary color" data-bs-toggle="modal" data-bs-target="#staticBackdrop">تم انتهاء العمل </button>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">من فضلك قم بادخال عدد ساعات العمل</h5>
                    </div>
                    <div class="modal-body">
                        <input type="number" placeholder="اكتب هنا" required>
                    </div>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">شارك تجربتك رايك يهمنا !</h5>
                        </div>
                        <div class="modal-body">
                            <textarea class="form-control extratext" required placeholder="Feedback"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger " data-bs-dismiss="modal">اغلاق</button>
                        <button type="submit" class="btn btn-primary color">حفظ</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted" >
                    <a href="{{route('worker.profile')}}" class="btn btn-link">عرض صفحة العامل</a>
            </div>



@push('script')
    <script src="/assets/js/modal.js"></script>
@endpush

@include('partials/footer')
