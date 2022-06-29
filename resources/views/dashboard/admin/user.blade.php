
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/crud.css">
</head>
<body>

<div class="side-menue">
    <div class="brand-name">
        <img  src="./assets/photos/logo.png" alt="">
    </div>
    <ul>
        <li>
            <a href="crud-worker.html" class="link">العاملين</a>
        </li>
        <li>
            <a href="crud-user.html" class="link">العملاء</a>
        </li>
        <li>
            <a href="crud-order.html" class="link">الطلبات</a>
        </li>
        <li>
            <a href="crud-report.html" class="link">التقارير</a>
        </li>
    </ul>
</div>
    <div class="container">
        <div class="content">
        <div class="header dash">ادارة العملاء</div>
        <div class="pt-3 ">
            <a href="signup-user.html" class="btn btn-success" > اضافة عميل جديد </a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body fs-5">
                        تاكيد حذف المحدد؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">الغاء</button>
                        <button type="button" class="btn btn-success">تاكيد </button>
                    </div>
                    </div>
                </div>
            </div>

        </div>


    <table class="table table-borded">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد الكترونى</th>
            <th scope="col">رقم التليفون</th>
            <th scope="col">المحافظه </th>
            <th scope="col"> المنطقه</th>
            <th scope="col"> </th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td scope="row">
                <input type="checkbox" id="checkbox1" >
                <label for="checkbox1"></label>
            </td>
            <td>احمد</td>
            <td>@mail.com</td>
            <td>0122359874</td>
            <td>الاسكندريه</td>
            <td>سيدى بشر</td>
            <td><a href="user-edit.html" class="btn btn-dark">تعديل</a></td>
            </tr>
            <tr>
            <td scope="row">
                <input type="checkbox" id="checkbox1">
                <label for="checkbox1"></label>
            </td>
            <td>على</td>
            <td>@mail.com</td>
            <td>01552369</td>
            <td>البحيره</td>
            <td>كفرالدوار</td>
            <td><a href="user-edit.html" class="btn btn-dark">تعديل</a></td>
            </tr>

            <tr>
            <td scope="row">
                <input type="checkbox" id="checkbox1">
                <label for="checkbox1"></label>
            </td>
            <td>نوره</td>
            <td>@gmail.com</td>
            <td>011259837</td>
            <td>القاهره</td>
            <td>هرم</td>
            <td><a href="user-edit.html" class="btn btn-dark">تعديل</a></td>

        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/modal.js"></script>

</body>
</html>
