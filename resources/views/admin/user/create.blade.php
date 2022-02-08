@extends('layouts.userApp')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Имя</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputName" placeholder="Введите имя:">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Фамилия</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputSurname" placeholder="Введите фамилию:">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputPhone" placeholder="Введите номер:">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="inputPassword" placeholder="Введите пароль:">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">Город</label>
                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="inputCity">
                            @foreach($cities as $city)
                                <option value="{{$city['id']}}">{{$city['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ИИН</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputIIN" placeholder="Введите ИИН:">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="inputPhoto">
                            <label class="custom-file-label" for="customFile">Аватар</label>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер документа</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="doc_number" placeholder="Введите номер документа:">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Срок документа</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="deadline" placeholder="Срок документа:">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_1">
                            <label class="custom-file-label" for="customFile">Лицевая сторона документа</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image_2">
                            <label class="custom-file-label" for="customFile">Задняя сторона документа</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="person_image">
                            <label class="custom-file-label" for="customFile">Фотография пользователя</label>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите машину</label>
                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="car">
                            @foreach($cars as $car)
                                <option value="{{$car['id']}}">{{$car['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" name="car_date"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Габариты</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="dimensions" placeholder="Габариты">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Номер транспорта</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="number" placeholder="Номер транспорта">
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="car_image">
                            <label class="custom-file-label" for="customFile">Фотография транспорта</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </section>
@endsection
