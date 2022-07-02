
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
        <div class="content">
        <div class="header dash"> التقارير</div>


    <table class="table table-borded">
        <thead>
            <tr>
            <th scope="col">العميل</th>
            <th scope="col">العامل</th>
            <th scope="col">التاريخ</th>
            <th scope="col">الوقت</th>
            <th scope="col">المشكله</th>
            <th scope="col">الاكشن</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>أميرة احمد على</td>
            <td>محمد أحمد عوض</td>
            <td>17/12/2022</td>
            <td>12:25</td>
            <td>اسلوب سئ فالتعامل</td>
            <td>حذف العامل</td>
            </tr>
            <tr>
            <tr>
            <td>أحمد محمد</td>
            <td>محمد أحمد عوض</td>
            <td>17/12/2022</td>
            <td>12:25</td>
            <td>اسلوب محترم مواعيد مظبوطة وسعر مناسب</td>
            </tr>
            <tr>
           


        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>

</body>
</html>
