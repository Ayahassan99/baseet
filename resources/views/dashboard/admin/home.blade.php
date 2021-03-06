
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>
<body>

<div class="side-menue">
    <div class="brand-name">
        <img  src="/assets/photos/logo.png" alt="">
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
    <div class="header dash">Dashboard</div>
    <div class="content">
        <div class="carts">

            <div class="cart">
                <div class="box">
                    <h2>3</h2>
                    <h5>العاملين</h5>
                </div>
            </div>

            <div class="cart">
                <div class="box">
                    <h2>1</h2>
                    <h5>العملاء</h5>
                </div>
            </div>

            <div class="cart">
                <div class="box">
                    <h2>2</h2>
                    <h5>الطلبات</h5>
                </div>
            </div>

            <div class="cart">
                <div class="box">
                    <h2>2</h2>
                    <h5>التقارير</h>
                </div>
            </div>
        </div>




        </div>

    </div>
</div>

</body>
</html>
