@extends('layouts.header_admin')

@section('content')

    <div class="container" style="display: flex; flex-direction: row; justify-content: space-around;">
        @foreach ($Application as $i)
        <div class="card" style="width: 18rem;" >
            <div class="card-body">
                <h5 class="card-title">Запрос на чистку - {{$i -> service_type}}</h5>
                <p class="card-text">Дата - {{$i -> date_time}}</p>
                <p class="card-text">Адрес - {{$i -> address}}</p>
                <p class="card-text">Статус - {{$i -> status}}</p>
                @if($i -> status === 'новая') 
                <div>
                    <form action="{{route('admin_accept', ['id_appl' => $i -> id])}}" method="POST">
                        @csrf
                        <button type = "submit" class="btn btn-success">Одобрена</button>
                    </form>
                    <form action="{{route('admin_reject', ['id_appl' => $i -> id])}}" method="POST">
                        @csrf
                        <button type = "submit" class="btn btn-danger">Отклонена</button>
                    </form>
                </div>
                @else 

                @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection