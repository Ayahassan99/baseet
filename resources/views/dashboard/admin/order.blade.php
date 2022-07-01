
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>
<body>

<div class="side-menue">
    <div class="brand-name">
        <img  src="./assets/photos/logo.png" alt="">
    </div>
    <ul>
    <li>
            <a href="{{route('admin.worker')}}" class="link">العاملين</a>
        </li>
        <li>
            <a href="{{route('admin.user')}}" class="link">العملاء</a>
        </li>
        <li>
            <a href="{{route('admin.order')}}" class="link">الطلبات</a>
        </li>
        <li>
            <a href="{{route('admin.report')}}" class="link">التقارير</a>
        </li>
        <li>
            <button  class="btn btn-danger mt-5">خروج</a>
        </li>
    </ul>
</div>
    <div class="container">
        <div class="header dash">ادارة الطلبات</div>
        <div class="content">


    <table class="table table-borded">
        <thead>
            <tr>
            <th scope="col">العميل</th>
            <th scope="col">العامل</th>
            <th scope="col">التاريخ</th>
            <th scope="col">الوقت</th>
            <th scope="col">مدة العمل</th>
            <th scope="col">التكلفه</th>
            <th scope="col">حالة الطلب</th>
            <th scope="col"> تعديل حالة الطلب</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>احمد</td>
            <td>منصور</td>
            <td>17/12/2022</td>
            <td>12:25</td>
            <td></td>
            <td></td>
            <td>معلق</td>
            <td><a href="order-worker-pending.html" class="btn btn-dark">تعديل</a></td>
            </tr>

            <td>على</td>
            <td>حسن</td>
            <td>15/10/2021</td>
            <td>21:12</td>
            <td>5</td>
            <td>400</td>
            <td>تم بنجاح</td>
            <td><a href="order-user-finish.html" class="btn btn-dark">تعديل</a></td>
            </tr>

            <tr>
            <td>نوره</td>
            <td>عبدالله</td>
            <td>20/1/2019</td>
            <td>1:35</td>
            <td></td>
            <td></td>
            <td>قيد العمل</td>
            <td><a href="order-user-ongoing.html" class="btn btn-dark">تعديل</a></td>

        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>

</body>
</html>
