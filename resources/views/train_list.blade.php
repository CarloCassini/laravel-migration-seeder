@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
    <div class="my-3">
      <a href="{{route('select_today')}}">
        <button type="button" class="btn btn-primary">seleziona solo i treni di oggi</button>
      </a>
    </div>

    {{-- visualizzo il bottone per i treni totali solo se sono nel dettaglio dei treni di oggi --}}
    @if (Route::currentRouteName() == 'select_today')
    <div class="my-3">
      <a href="{{route('train_list')}}">
        <button type="button" class="btn btn-primary">seleziona tutti i treni</button>
      </a>
    </div>
    @endif

    <div class="row gap-1 justify-content-between">
      @foreach ($trains as $train)

      <div class="card h-100 col-3 my-3 ">
        <ul class="list-group list-group-flush">
          <li class="d-flex justify-content-between list-group-item">
            <div>brand</div>
            <div>{{$train->brand}}</div>
          </li>
          <li class="d-flex justify-content-between list-group-item">
            <div>stazione di partenza</div>
            <div>{{$train->station_start}}</div>
          </li>
          <li class="d-flex justify-content-between list-group-item">
            <div>orario di partenza</div>
            <div>{{$train->time_start_at}}</div>
          </li>
          <li class="d-flex justify-content-between list-group-item">
            <div>orario di  arrivo</div>
            <div>{{$train->time_arrive_at}}</div>
          </li>
          <li class="d-flex justify-content-between list-group-item">
            <div>codice del treno</div>
            <div>{{$train->train_code}}</div>
          </li> 
          <li class="d-flex justify-content-between list-group-item">
            <div>numero di carrozze</div>
            <div>{{$train->train_carriages_num}}</div>
          </li> 
          <li class="d-flex justify-content-between list-group-item">
            <div>il treno è in orario?</div>
            {{-- verifico se il treno è in orario o no --}}
            <div>
              @if ($train->status_ontime == 0) 
              SI
              @else
              NO   
              @endif
            </div>
          </li> 
          <li class="d-flex justify-content-between list-group-item">
            <div>il treno è cancellato?</div>
            {{-- verifico se il treno è in orario o no --}}
            <div>
              @if ($train->status_deleted == 1) 
              SI
              @else
              NO   
              @endif
            </div>
          </li> 
        </ul>
      </div>
      @endforeach

    </div>

        
  </section>
@endsection
