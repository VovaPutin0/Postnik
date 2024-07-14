@extends('layouts')
@section('name')
    Постник
@endsection

@section('content')
<section>
    <div class="container">
        <h1 class="adminH1">Вы вошли как администратор сайта.</h1>
        <a class="btn btn-outline-light" href="{{route('admin.creat')}}">Написать рецепт</a>
    </div>
</section>
@endsection
