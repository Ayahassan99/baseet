
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/report.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
    @if(Session::has('report'))
    <span>{{Session::get('report')}}</span>
    @endif
    <form method = "post" action="{{route('save.report')}}">
        @csrf
    <div class="d-flex flex-column mb-3 write text-center">
        <h1 >اكتب مشكلتك</h1>
    </div>

    <textarea  name="text" cols="60" rows="10" style="margin-right: 35%;"></textarea>

    <button type="submit" value="submit" class="btn btn-secondary btn-lg" >ارسال</button>

</form>

</body>
</html>