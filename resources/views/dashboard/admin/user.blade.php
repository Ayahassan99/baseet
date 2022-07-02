
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
        <div class="header dash">ادارة العملاء</div>
        <div class="pt-3 ">
            <a href="http://127.0.0.1:8000/admin/creatuser" class="btn btn-success" > اضافة عميل جديد </a>

    <table class="table table-borded">
        <thead>
            <tr>
            <th scope="col">الاسم</th>
            <th scope="col">البريد الكترونى</th>
            <th scope="col">رقم التليفون</th>
            <th scope="col">المحافظه </th>
            <th scope="col"> المنطقه</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            </tr>
        </thead>
        @foreach($users as $user)

        <tbody>
            <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['phone']}}</td>
            <td>{{$user['city']}}</td>
            <td>{{$user['region']}}</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body fs-5">
                                    تاكيد حذف المحدد؟
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">الغاء</button>
                                <a  href="{{route('admin.delete' ,$user->id)}}" class="btn btn-success">تاكيد </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </td>
            </tr>


            @endforeach

        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/modal.js"></script>

</body>
</html>
