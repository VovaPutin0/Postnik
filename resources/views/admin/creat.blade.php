@extends('layouts')
@section('name')
    Постник
@endsection

@section('content')
<section>
    <div class="container">
        <form>
            <div class="mb-3">
                <label class="form-label ">Название рецепта
                <input  name="name" type="text" class="form-control">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Краткое описание (15 символов)
                    <input name="description" type="text" class="form-control">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Рецепт
                    <textarea  name="recipe" class="form-control" rows="3" ></textarea>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Белок
                    <input name="protein" type="text" class="form-control">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Жиры
                    <input name="fats" type="text" class="form-control">
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">Углеводы
                    <input name="carbohydrates" type="text" class="form-control">
                </label>
            </div>
            <button type="submit" class="btn btn-outline-light">Отправить</button>
        </form>
    </div>
</section>
@endsection
