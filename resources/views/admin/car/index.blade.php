@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">All cars</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th>Car ID</th>
                        <th>Name</th>
                        <th>Icon</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td><a href="">{{$car['id']}}</a></td>
                            <td>{{$car['name']}}</td>
                            <td><span class="badge badge-success">ICON</span></td>
                            <td>{{$car['created_at']}}</td>
                            <td>
                                <a href="" class="waves-effect btn btn-warning"><i class="nas fa fa-edit"></i></a>
                                <a href="" class="waves-effect btn btn-danger"><i class="nas fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">New car</a>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    </div>
@endsection
