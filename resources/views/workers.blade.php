@include("partials/header")
<div class="container top">
    <div class="row row-cols-1 row-cols-lg-3">
        <form action="{{route('service-workers','negara')}}" method="get">
            <select name="city" id="">
                <option value="portsaid">
                    Portsaid
                </option>
                <option value="alex">
                    Alex
                </option>
            </select>
            <input type="text" name="name">
            <button type="submit">Filter</button>
        </form>
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
                <a href="{{route('worker.profile')}}" class="btn plus">المزيد</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include("partials/footer")
