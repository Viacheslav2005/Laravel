@extends('layouts.header')

@section('content')
    <form action="{{route('application_add')}}" method="POST">
        @csrf
        <select id="" name = "service_type">
            <option value = "Ковры">Ковры</option>
            <option value = "Диваны">Диваны</option>
            <option value = "Кровати">Кровати</option>
        </select>
        <input type="datetime-local" name = "date_time">
        <input type="text" name = "address">

        <input type="submit" value="Создать">
    </form>
@endsection