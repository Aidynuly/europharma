@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">All cities</h3>
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
                        <th>City</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)
                        <tr>
                            <td><a href="">{{$city['id']}}</a></td>
                            <td>{{$city['name']}}</td>
                            <td>
                                <a href="" class="waves-effect btn btn-warning"><i class="nas fa fa-edit"></i></a>
                                <a href="" class="waves-effect btn btn-danger"><i class="nas fa fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">New city</a>
        </div>
    </div>
    {{--    {{$users->links()}}--}}
@endsection
