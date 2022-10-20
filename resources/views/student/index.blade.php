@extends('layout.default')

@section('content')
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">

               
                <h1>list of students</h1>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Matricule</th>
                            <th scope="col">First_name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">level_of_studies</th>
                            <th scope="col">Formation</th>
                            <th scope="col">role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->matricule}}</td>
                            <td>{{$student->first_name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->contact}}</td>
                            <td>{{$student->level_of_studies}}</td>
                            <td>{{$student->formation}}</td>
                            <td>{{$student->roles}}</td>
                            <td>
                                <a href="/admin/edit/{{$student->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/delete/{{$student->id}}" class="btn btn-danger">Delete</a>

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