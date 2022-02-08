@extends('layouts.userApp')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{route('employees.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Surname</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputSurname" placeholder="Enter surname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="inputPhone" placeholder="Enter phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="inputPassword" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectBorder">City</label>
                        <select class="custom-select form-control-border" id="exampleSelectBorder" name="inputCity">
                            @foreach($cities as $city)
                                <option value="{{$city['id']}}">{{$city['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Создать</button>
                </div>
            </form>
        </div>
    </section>
@endsection
