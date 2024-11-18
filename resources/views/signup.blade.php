@extends('layouts.header')

@section('content')
 
<form action="{{route('signup')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Полное имя</label>
        <input type="text" class="form-control" name = "full_name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Телефон</label>
        <input type="number" class="form-control" name = "phone" id="exampleInputEmail1" aria-describedby="emailHelp" minlength="10" maxlength="11">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Почта</label>
        <input type="email" class="form-control" name = "email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Логин</label>
        <input type="text" class="form-control" name = "login" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection