@extends('layouts.userApp')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="http://127.0.0.1:8000/vendor/dist/img/user4-128x128.jpg"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{$user['name']}} {{$user['surname']}}</h3>

                            <p class="text-muted text-center">{{\App\Models\City::whereId($user['city_id'])->value('name')}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Завершенные заказы:</b> <a class="float-right">{{$finished}}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Принятые заказы:</b> <a class="float-right">{{$accepted}}</a>
                                </li>
                            </ul>

{{--                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
                        </div>
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Про меня</h3>
                        </div>
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i>День рождения</strong>

                            <p class="text-muted">
                                {{$user['date']}}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Локация</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

{{--                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>--}}

{{--                            <p class="text-muted">--}}
{{--                                <span class="tag tag-danger">UI Design</span>--}}
{{--                                <span class="tag tag-success">Coding</span>--}}
{{--                                <span class="tag tag-info">Javascript</span>--}}
{{--                                <span class="tag tag-warning">PHP</span>--}}
{{--                                <span class="tag tag-primary">Node.js</span>--}}
{{--                            </p>--}}

                            <hr>

                            <strong><i class="far fa-file-alt mr-1"></i> ИИН</strong>
                            <p class="text-muted">{{$user['iin']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Данные</a></li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="http://127.0.0.1:8000/vendor/dist/img/user1-128x128.jpg" alt="user image">
                                            <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                            <span class="description">Shared publicly - 7:30 PM today</span>
                                        </div>
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                            <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                                        </p>

                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                    </div>
                                    <div class="post clearfix">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="http://127.0.0.1:8000/vendor/dist/img/user7-128x128.jpg" alt="User Image">
                                            <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                            <span class="description">Sent you a message - 3 days ago</span>
                                        </div>
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>

                                        <form class="form-horizontal">
                                            <div class="input-group input-group-sm mb-0">
                                                <input class="form-control form-control-sm" placeholder="Response">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-danger">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="http://127.0.0.1:8000/vendor/dist/img/user6-128x128.jpg" alt="User Image">
                                            <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                                            <span class="description">Posted 5 photos - 5 days ago</span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="img-fluid" src="http://127.0.0.1:8000/vendor/ist/img/photo1.png" alt="Photo">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="http://127.0.0.1:8000/vendor/dist/img/photo2.png" alt="Photo">
                                                        <img class="img-fluid" src="http://127.0.0.1:8000/vendor/dist/img/photo3.jpg" alt="Photo">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3" src="http://127.0.0.1:8000/vendor/dist/img/photo4.jpg" alt="Photo">
                                                        <img class="img-fluid" src="http://127.0.0.1:8000/vendor/dist/img/photo1.png" alt="Photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                            <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                                        </p>
                                        <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                    </div>
                                </div>

                                <div class="tab-pane" id="timeline">
                                    <div>
                                        <div class="post">
                                            <span class="username">
                                                <a href="#">Номер документа</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$document['doc_number'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Срок документа</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$document['deadline'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Первая фотография</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$document['image_1'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Вторая фотография</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$document['image_2'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Фотография пользователя</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$document['person_image'] ?? 'Пусто'}}
                                                </p>
                                            </span>

                                            <hr>

                                            <span class="username">
                                                <a href="#">Название</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    @if(isset($transport['car_id']))
                                                        {{\App\Models\Car::whereId($transport['car_id'])->value('name')}}
                                                    @else
                                                        Пусто
                                                    @endif
                                                </p>
                                            </span>

                                            <span class="username">
                                                <a href="#">Год транспорта</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$transport['car_date'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Габариты</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$transport['dimensions'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Номер транспорта</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$transport['number'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                            <span class="username">
                                                <a href="#">Фотография транспорта</a>
                                            </span>
                                            <span class="description">
                                                <p>
                                                    {{$transport['image'] ?? 'Пусто'}}
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name" value="{{$user['name']}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Surname</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputSurname" placeholder="Surname" value="{{$user['surname']}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">IIN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputIIN" placeholder="IIN" value="{{$user['iin']}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPhone" placeholder="Phone" value="{{$user['phone']}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection
