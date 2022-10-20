@extends('layout.default')

@section('content')
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">


                <h1>list of Formation</h1>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Period</th>
                            <th scope="col">Description</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formations as $formation)
                        <tr>
                            
                            <td>{{$formation->id}}</td>
                            <td>{{$formation->name}}</td>
                            <td>{{$formation->period }} jours</td>
                            <td>{{$formation->desc}}</td>
                            <td>{{$formation->amount }} fcfa</td>
      
                           
                            <td>
                                <a href="/edit/{{$formation->id}}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{$formation->id}}" class="btn btn-danger">Delete</a>

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