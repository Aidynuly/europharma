@extends('layouts.userApp')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-13">
                    <div class="card w-100 p-3">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Данные</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Эндпойнты</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- Данные -->

                                <div class="active tab-pane" id="activity">
                                    <div class="post clearfix">
                                        <div class="card w-100 p-3">
                                            <div class="card-header">
                                                <h3 class="card-title">Детали заказа</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-4">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <span class="info-box-text text-center text-muted">Цена</span>
                                                                        <span class="info-box-number text-center text-muted mb-0">{{$order['price']}} тг</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <span class="info-box-text text-center text-muted">Способ оплаты</span>
                                                                        <span class="info-box-number text-center text-muted mb-0">
                                                                            @if($order['payment'] == 'cash')
                                                                                Наличными
                                                                            @else
                                                                                Картой
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="info-box bg-light">
                                                                    <div class="info-box-content">
                                                                        <span class="info-box-text text-center text-muted">Дата начало заказа</span>
                                                                        <span class="info-box-number text-center text-muted mb-0">
                                                                            {{$order['start_date']}}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>Фотографии</h4>
                                                                <div class="post">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                                                    </div>

                                                                </div>

                                                                <div class="post">
                                                                    <div class="user-block">
                                                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                                                        <h3 class="text-primary">фыв</h3>
                                                        <p class="text-muted">{{$order['description']}}</p>
                                                        <br>
                                                        <div class="text-muted">
                                                            <p class="text-sm">Client Company
                                                                <b class="d-block">Deveint Inc</b>
                                                            </p>
                                                            <p class="text-sm">Project Leader
                                                                <b class="d-block">Tony Chicken</b>
                                                            </p>
                                                        </div>

                                                        <h5 class="mt-5 text-muted">Project files</h5>
                                                        <ul class="list-unstyled">
                                                            <li>
                                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                                                            </li>
                                                            <li>
                                                                <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                                                            </li>
                                                        </ul>
                                                        <div class="text-center mt-5 mb-3">
                                                            <a href="#" class="btn btn-sm btn-primary">Add files</a>
                                                            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>


                                <!-- Эндпойнты -->
                                <div class="tab-pane" id="timeline">
                                    <div>
                                        <div class="post">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
