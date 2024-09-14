<?php

?>
<h1><b>Создание сущности</b></h1>
<form action="/admin?type=UserEdit&user_id=<?= $_GET['user_id'] ?>" method="post" name="form" id="form" enctype="multipart/form-data" style="display:inline-block; min-width:500px;">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Название</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Вагон метро">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Цвет</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="#FFFFFF">
    </div>
    <p>Вводимые переменные</p>
    <div class="alert alert-dark" role="alert">
        Добавляйте и регулируйте поля ввода, которые будут являться шаблонной формой для создания моделей к сущности.
    </div>
    <div class="row" id="entityform">
        <div class="col-md-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Название переменной</label>
                <input name="variablename_1" type="text" class="form-control" id="exampleFormControlInput1" placeholder="#FFFFFF">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input name="variableid_1" type="text" class="form-control" id="exampleFormControlInput1" placeholder="blablabla">
            </div>
        </div>
        <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Тип</label>
            <select name="variabletype_1" class="form-select" aria-label="Default select example">
                <option value="1">Строка</option>
                <option value="2">Число</option>
            </select>
        </div>
        <div class="col-md-3">
        <label for="exampleFormControlInput1" class="form-label">Обязателен?</label>
            <select name="variableimportant_1" class="form-select" aria-label="Default select example">
                <option value="1">Да</option>
                <option value="2">Нет</option>
            </select>
        </div>
    </div>
    <button id="addButton" type="button" class="btn btn-outline-primary">Добавить ещё</button>
    </div>
    

</form>

<script>
       let count = 1; // Начальное значение для номера переменной

document.getElementById('addButton').addEventListener('click', function() {
    count++; // Увеличиваем номер переменной

    // Создаем новый элемент
    const newElement = 
        `<div class="col-md-3">
            <div class="mb-3">
                <label for="exampleFormControlInput${count}" class="form-label">Название переменной</label>
                <input name="variablename_${count}" type="text" class="form-control" id="exampleFormControlInput${count}" placeholder="#FFFFFF">
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <label for="exampleFormControlInput${count}" class="form-label">ID</label>
                <input name="variableid_${count}" type="text" class="form-control" id="exampleFormControlInput${count}" placeholder="blablabla">
            </div>
        </div>
        <div class="col-md-3">
            <label for="exampleFormControlInput${count}" class="form-label">Тип</label>
            <select name="variabletype_${count}" class="form-select" aria-label="Default select example">
                <option value="1">Строка</option>
                <option value="2">Число</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="exampleFormControlInput${count}" class="form-label">Обязателен?</label>
            <select name="variableimportant_${count}" class="form-select" aria-label="Default select example">
                <option value="1">Да</option>
                <option value="2">Нет</option>
            </select>
        </div>`
    ;

    // Добавляем новый элемент в #entityform
    document.getElementById('entityform').insertAdjacentHTML('beforeend', newElement);
});
</script>