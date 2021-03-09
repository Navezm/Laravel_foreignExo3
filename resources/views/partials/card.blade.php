<div class="row">
    @foreach ($users as $item)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$item->profils->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Age : {{$item->profils->age}}</h6>
                    <p class="card-text">Nickname : {{$item->nickname}}</p>
                    <p class="card-text">Email : {{$item->email}}</p>
                    <p class="card-text">Email : {{$item->profils->phone}}</p>
                </div>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>