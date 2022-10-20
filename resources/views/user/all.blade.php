@extends('layout.default')

@section('content')
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">

               
                <h1>list of users</h1>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First_name</th>
                            <th scope="col">Last_name</th>
                            <th scope="col">Email</th>
                            <th scope="col">role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->roles}}</td>
                            <td>
                                <a href="/edit/{{$user->id}}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$user->id}}" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <form action="{{url('logout')}}" method="post">
                        @csrf 
                        @method("POST")
                            <input value="déconnexion" type="submit" class="btn btn-primary">
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection