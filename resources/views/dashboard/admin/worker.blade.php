
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

    <div class="container">
        <div class="content">
        <div class="header dash">ادارة العاملين</div>
        <div class="pt-3 ">
            <a href="signup-worker.html" class="btn btn-success" > اضافة عامل جديد </a>
            <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >حذف</button>	
            
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
            <th scope="col"> الجنس</th>
			<th scope="col"> الحرفه</th>
			<th scope="col"> الاجر/ساعه</th>
			<th scope="col"> صورة شخصيه</th>
			<th scope="col"> نبذه عنك</th>
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
			<td>ذكر</td>
			<td>نجار</td>
			<td>180</td>
			<td>صوره</td>
			<td>نجار باب و شباك</td>
            <td><a href="woker-edit.html" class="btn btn-dark">تعديل</a></td>
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
			<td>ذكر</td>
			<td>سباك</td>
			<td>100</td>
			<td>صورة</td>
			<td>سباكة جميع انواع الصرف</td>
            <td><a href="worker-edit.html" class="btn btn-dark">تعديل</a></td>
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
			<td>انثى</td>
			<td>تمريض</td>
			<td>300</td>
			<td>صوره</td>
			<td>رعايه طبيه منزليه متكامله</td>
            <td><a href="worker-edit.html" class="btn btn-dark">تعديل</a></td>

        </tbody>
        </table>
    </div>
</div>


<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/modal.js"></script>

</body>
</html>