
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/reg.css">
        <link rel="stylesheet" href="/assets/css/nav.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css">
</head>
<body>
    <body>
          <div class="container">
            <div class="row">
              <div class="col-3">
            
              </div>
              <div class="col-6 ">
                <div class="flex-container">
                    <h2 style="color: #1f4e5f;">تعديل البيانات الشخصيه </h2>
                <form action="{{ route('user.update') }}" method="Post">
                  @csrf
                  @method('PUT')
                    <div class="mb-3">
                        <div class="txt">
                            <input type="text" class="txt"  name="name" value="{{$user['name']}}">
                            <label>الاسم</label>
                        </div>

                        <div class="txt">
                            <input type="text" class="txt"  name="email" value="{{$user['email']}}">
                            <label>البريد الاكتروني</label>
                        </div>
                        
                        <!-- <div class="txt">
                            <input type="password" class="txt"  name="password" value="{{$user['password']}}">
                            <label>كلمة السر</label>
                        </div> -->

                        <div class="txt">
                          <input type="tel" class="txt" name="phone" value="{{$user['phone']}}">
                          <label>رقم التليفون</label>
                        </div>

                        <div class="container">
                          <div class="row">
                              <div class="col">
                          <label class="label extrapadding" for="city">تغيير المحافظه</label>
                          <select id="mySelect" onchange="change()"  class="form-select" name="city" aria-label="Default select example" selected="{{$user['city']}}" >
                              <option selected >اختر المحافظه</option>
                              <option value="cairo" >القاهره</option>
                              <option value="alex">الاسكندريه</option>
                              <option value="portsaid">بورسعيد</option>
                              <option value="behaira">البحيره</option>
                              <option value="sharkia">الشرقيه</option>
                              <option value="gharbia">الغربيه</option>
                              <option value="mounfia">المنوفيه</option>
                          </select></div>

                          <div class="col" id="viewalex">
                            <label class="label extrapadding" for="city">المنطقة</label>
                            <input type="text"  class="form-control"  aria-label="Default select example" name="region" value="{{$user['region']}}">
                          </div>


                          <div class="mb-3"></div>
                          <div class="row">
                            <div class="col-2"> </div>
                            <div class="col-8 ">
                                <input  type="submit" value="تعديل ">
                            </div> 
                          <div class="col-2 "> </div>
                    

                          
    
        </form>
        <script src="/assets/js/bootstrap.js"></script>
        <script src="/assets/js/sidemenu.js"></script>
        <script src="/assets/js/signup.js"></script>
</body>
</html>