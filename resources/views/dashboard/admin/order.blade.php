
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
        <td>
         <a  button  class="btn btn-danger mt-5" class="nav-link link-danger" href="{{route('admin.logout')}}"
         onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل الخروج</a>
        <form action="{{route('admin.logout')}}" method="post" class="d-none"
         id="logout-form"> @csrf</form>
</td>
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
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>أميرة احمد على</td>
            <td>محمد أحمد عوض</td>
            <td>7/2/2022</td>
            <td>6:25</td>
            <td></td>
            <td></td>
            <td>تم بنجاح</td>
</tr>

<tr>
            <td>أميرة احمد على</td>
            <td>محمد أحمد عوض</td>
            <td>7/2/2022</td>
            <td>6:25</td>
            <td></td>
            <td></td>
            <td>تم الالغاء</td>
</tr>

        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>

</body>
</html>
