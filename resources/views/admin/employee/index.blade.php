@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">All employees</h3>
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
                        <th>Phone</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td><a href="">{{$employee['id']}}</a></td>
                            <td>{{\App\Models\City::whereId($employee['city_id'])->value('name')}}</td>
                            <td><span class="badge badge-success">{{$employee['phone']}}</span></td>
                            <td>{{$employee['name']}}</td>
                            <td>{{$employee['surname']}}</td>
                            <td>
                                <a href="{{route('employees.show', $employee['id'])}}" class="waves-effect btn btn-primary"><i class="nas fa fa-eye"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('employees.destroy', $employee['id'])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"><i class="nas fa fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer clearfix">
            <a href="{{route('employees.create')}}" class="btn btn-sm btn-info float-left">???????????????? ??????????????????</a>
        </div>
    </div>
    {{--    {{$users->links()}}--}}
@endsection
