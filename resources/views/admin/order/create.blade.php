@extends('layouts.userApp')
@section('content')
    <section class="content">
        <form action="{{route('orders.store')}}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Заказ</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputDescription">Описание</label>
                                <textarea id="inputDescription" name="description" class="form-control"
                                          rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Откуда</label>
                                <select id="inputStatus" name="from_city" class="form-control custom-select">
                                    @foreach($cities as $city)
                                        <option value="{{$city['id']}}">{{$city['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Куда</label>
                                <select id="inputStatus" name="to_city" class="form-control custom-select">
                                    @foreach($cities as $city)
                                        <option value="{{$city['id']}}">{{$city['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Статус</label>
                                <select id="inputStatus" name="status" class="form-control custom-select">
                                    <option value="send">Отправлен</option>
                                    <option value="accepted">Принятый</option>
                                    <option value="in_process">В процессе</option>
                                    <option value="declined">Отклонен</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Компания</label>
                                <select id="inputStatus" name="employee" class="form-control custom-select">
                                    @foreach($employees as $employee)
                                        <option
                                            value="{{$employee['id']}}">{{$employee['name']}} {{$employee['surname']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Начало заказа</label>
                                <input id="inputStartDate" name="start_date" type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEndDate">Дедлайн заказа</label>
                                <input id="inputEndDate" name="end_date" type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputEndDate">Фотографии</label>
                                <input id="inputEndDate" name="images[]" type="file" class="form-control" multiple="multiple" required>
                            </div>
                            <div class="form-group">
                                <label for="">Цена</label>
                                <input id="inputStartDate" name="price" type="text" class="form-control" required>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Budget</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" id="inputSpentBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <input type="submit" value="Создать новый заказ" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
@endsection
