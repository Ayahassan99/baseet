
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link  rel="stylesheet" href="/assets/css/homepage.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/rate.css">
    <link rel="stylesheet" href="/assets/css/nav.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sakkal Majalla">

</head>
<body>
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            
          <a class="navbar-brand" onclick="openNav();" href="#">
            <svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: white">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg></a>
          <a class="navbar-brand"  href="http://127.0.0.1:8000"><img class="logo" src="./assets/photos/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000"> الصفحه الرئيسيه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/user/profile">الملف الشخصى</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
              <button class="btn btn-outline-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg></button>
            </form>
          </div>
        </div>
      </nav></div>

<div class="container top">
    <div class="row row-cols-1 row-cols-lg-3">
        <div class="col">
    <div class="card">
       
        <div class="card-body">
          <p class="card-text"> <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">احمد محمد السيد</li>
            <li class="list-group-item">120جنيها</li>
            <li class="list-group-item">الاسكندريه - المندره</li>
            <li class="list-group-item">
            <div class="stars" data-rating="3">
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
                <span class="star">&nbsp;</span>
            </li>
            </div> 
            <li class="list-group-item"> <a href="http://127.0.0.1:8000/worker/profile" class="btn plus btn-primary">المزيد</a></li>
          </ul>
         
        </div>
      </div>
      <div class="col">
        <div class="card">
           
            <div class="card-body">
              <p class="card-text"> <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">احمد محمد السيد</li>
                <li class="list-group-item">120جنيها</li>
                <li class="list-group-item">الاسكندريه - المندره</li>
                <li class="list-group-item">
                <div class="stars" data-rating="3">
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                    <span class="star">&nbsp;</span>
                </li>
                </div>
                <li class="list-group-item"> <a href="#" class="btn plus btn-primary">المزيد</a></li>
              </ul>
             
            </div>
          </div>
          <div class="col">
            <div class="card">
               
                <div class="card-body">
                  <p class="card-text">
                   <img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">احمد محمد السيد</li>
                    <li class="list-group-item">120جنيها</li>
                    <li class="list-group-item">الاسكندريه - المندره</li>

                    <li class="list-group-item">
                    <div class="stars" data-rating="3">
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                        <span class="star">&nbsp;</span>
                    </li>
                    </div>
                    <li class="list-group-item"> <a href="#" class="btn plus btn-primary">المزيد</a></li>


                    
                  </ul>
                 
                </div>
              </div>
</div></div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/homepage.js"></script>
    <script src="/assets/js/sidemenu.js"></script>
    <script src="/assets/js/rate.js"></script>

</body>
</html>