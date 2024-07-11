@extends('layouts')
@section('name')
    Постник
@endsection
<style>
    .bgPreview {
        background-image: url('{{asset('img/bg.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgContent {
        background-image: url('{{asset('img/bgContent.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bgFood {
        background-image: url('{{asset('img/bgFood.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@section('content')
    <section class="bgPreview">
        <div class="container">
            <h1 class="previewH1 container"> Nikita Postnikov </h1>
            <p class="previewP"> Онлайн ведение и готовые тренировочные планы </p>
            <p class="previewP2">Онлайн-тренер — это специалист, который проводит тренировки и занятия с клиентами
                дистанционно, через интернет. Он помогает людям улучшить физическую форму, сбросить вес, нарастить
                мышечную массу, повысить уровень физической подготовки и достичь других спортивных целей.</p>
            <a href="#vniz" class="btn btn-outline-light plan">Выбрать план тренировок</a>
        </div>
    </section>
    <section class="container">
        <div>
            <a name="vniz"></a>
            <h1 class="planH1">План тренировок</h1>
            <p class="planP">Становись лучше с сегодняшнего дня</p>
        </div>
        <div class="bgPlan">
            <div class="block">
                <img class="planImg" src="{{asset('img/img.png')}}" alt="">
                <ul class="spisok">
                    <p class="pHouse">Домашняя Тренировка №1</p>
                    <li class="sp1">Экономия времени и денег: вам не нужно тратить время на дорогу до спортзала и
                        платить за абонемент.
                    </li>
                    <li class="sp2">Гибкий график: вы можете тренироваться в удобное для вас время.</li>
                    <li class="sp1">Комфорт и удобство: вы занимаетесь в привычной обстановке, что снижает стресс и
                        повышает мотивацию.
                    </li>
                    <li class="sp2">Разнообразие: вы можете выбирать различные виды тренировок и упражнений в
                        зависимости от ваших предпочтений и уровня подготовки.
                    </li>
                    <p class="price">Цена: 10.000 Рублей.</p>
                    <a class="btn btn-outline-light spisokA" href="#">Купить план тренировки</a>
                </ul>
            </div>
        </div>

        <div class="bgPlan bt">
            <div class="block">
                <img class="planImg" src="{{asset('img/img.png')}}" alt="">
                <ul class="spisok">
                    <p class="pHouse">Домашняя Тренировка №2</p>
                    <li class="sp1">Экономия времени и денег: вам не нужно тратить время на дорогу до спортзала и
                        платить за абонемент.
                    </li>
                    <li class="sp2">Гибкий график: вы можете тренироваться в удобное для вас время.</li>
                    <li class="sp1">Комфорт и удобство: вы занимаетесь в привычной обстановке, что снижает стресс и
                        повышает мотивацию.
                    </li>
                    <li class="sp2">Инвентарь: Разборные гантели, упоры для отжимания, резинка, эспандер
                    </li>
                    <p class="price">Цена: 10.000 Рублей.</p>
                    <a class="btn btn-outline-light spisokA" href="#">Купить план тренировки</a>
                </ul>
            </div>
        </div>
    </section>
    <section class="bgContent">
        <div class="container">
            <h1 class="previewH1 adapt">Индивидуальные занятия</h1>
            <p class="previewP">Со мной вы точно увидите результат!</p>
            <p class="previewP2">Индивидуальные занятия с онлайн-тренером предлагают ряд преимуществ: индивидуальный
                подход, гибкость
                графика, свобода от чужого мнения и безопасность. Это отличный способ достичь своих целей в спорте, не
                выходя из дома и в удобное для вас время.</p>
            {{--            <p class="previewP Size">Фитнес по науке в любых условиях с радостью буду делиться своим опытом</p>--}}
            <a class="btn btn-outline-light plan" href="#">Связаться со мной</a>
        </div>
    </section>
    <section class="container">
        <h2 class="previewH1 startSize">Начни менаться в лучшую сторону</h2>
        <p class="previewP">сегодня</p>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <span>Более 100 <br></span> <span class="numSp">покупок моей <br> программы тренировок</span>
                </div>
                <div class="col">
                    <span>Более 10<br></span> <span class="numSp">человек довольны <br> моей работы как тренер</span>
                </div>
                <div class="col">
                    <span>Более 35<br></span> <span class="numSp">спортсменов питаются <br> по моему меню</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bgFood">
        <div class="container">
            <a href="#" name="food"></a>
            <h1 class="previewH1">Готовые планы питания</h1>
            <p class="previewP">Оригинальные и в тоже время простые планы питания</p>
            <p class="previewP2">Правильное питание спортсмену необходимо для поддержания организма в процессе
                физической активности,
                обеспечения энергией, укрепления мышечного тонуса и повышения выносливости. Рациональное питание
                помогает легче достигать поставленных целей и снижает риск травм.</p>
            <a href="#" class="btn btn-outline-light plan">Связаться со мной для составления питания</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <h1 class="previewH1 foo">Связь со мной</h1>
            <div class="socialDiv">
                <a class="social" href="#"> Инстаграмм</a>
            </div>
            <div class="socialDiv">
                <a class="social" href="#"> Телеграм </a>
            </div>
            <p class="meta">Meta* признана экстремистской организацией в России</p>
        </div>
    </footer>
@endsection
