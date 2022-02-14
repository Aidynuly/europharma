@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">All users</h3>
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
                        <th>IIN</th>
                        <th>Статус</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="">{{$user['id']}}</a></td>
                            <td>{{\App\Models\City::whereId($user['city_id'])->value('name')}}</td>
                            <td><span class="badge badge-success">{{$user['phone']}}</span></td>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['surname']}}</td>
                            <td>{{$user['iin']}}</td>
                            @if($user['actived'])
                                <td>Активирован</td>
                            @else
                                <td>В процессе</td>
                            @endif
                            <td>
                                <a href="{{route('users.show', $user['id'])}}" class="waves-effect btn btn-primary"><i class="nas fa fa-eye"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user['id'])}}" method="post">
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
            <a href="{{route('users.create')}}" class="btn btn-sm btn-info float-left">Добавить пользователя</a>
        </div>
    </div>
{{--    {{$users->links()}}--}}
@endsection
