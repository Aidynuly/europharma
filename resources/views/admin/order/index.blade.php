@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">All orders</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td><a href="">{{$order['id']}}</a></td>
                            <td>{{\App\Models\Employee::whereId($order['employee_id'])->value('name')}}</td>
                            <td>{{$order['from']}}</span></td>
                            <td>{{$order['to']}}</td>
                            <td>{{$order['description']}}</td>
                            <td>{{$order['price']}}</td>
                            <td>
                                <a href="" class="waves-effect btn btn-primary"><i class="nas fa fa-eye"></i></a>
                                <a href="" class="waves-effect btn btn-danger"><i class="nas fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">New user</a>
        </div>
    </div>
    {{--    {{$users->links()}}--}}
@endsection
