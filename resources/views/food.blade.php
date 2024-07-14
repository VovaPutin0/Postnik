@extends('layouts')
@section('name')
    Рецепты
@endsection

@section('content')
<style>
    .BgFood {
        background-image: url('{{asset('img/bgFood.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
    <section class="BgFood">
        <div class="container">
            <p class="foodP">Питание для спортсмена важно, потому что оно обеспечивает развитие скелетных мышц, их работоспособность и
                быстрое восстановление после интенсивных физических нагрузок. Рациональное питание способствует
                поддержанию здоровья и достижению лучших результатов в спорте.
            </p>
        </div>
    </section>

    <section class="container">
        <div>
            <h1 class="planH1">ПП Рецепты</h1>
            <p class="planP">Готовь с любовью для себя</p>
        </div>
<div class="db">
        <div class="cards">
            <img  class="imgFood" src="{{asset('img/cardFood.png')}}" alt="Тут фотография">
            <h3 class="foodH3">Заголовок блюда</h3>
            <p class="foodPp">Краткое описание</p>
        </div>
</div>
    </section>

@endsection
