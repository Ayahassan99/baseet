@include("partials/header")
<div class="container top">
    <div class="row row-cols-1 row-cols-lg-3">
        @foreach($workers as $worker)
        <div class="col">
            <div class="card ">
                <div class="card-body">
                    <p class="card-text"><img src="./assets/photos/sabak.jpg" class="card-img-top" alt="..."></p>
                    <ul class="list-group list-group-flush align-items-center">
                        <li class="list-group-item">{{$worker->name}}</li>
                        <li class="list-group-item">{{$worker->hour}}</li>
                        <li class="list-group-item">الاسكندريه - المندره</li>
                        <li class="list-group-item">
                            <div class="stars" data-rating="3">
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                                <span class="star">&nbsp;</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="worker-profile.html" class="btn plus">المزيد</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include("partials/footer")
