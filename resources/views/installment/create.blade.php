@extends('layout.default')

@section('content')
<div class="main-panel" style="width:1250px;">
    <div class="main-content" style="margin-left:300px;">
        <div class="">
            <div class="container" style="width:2250px;">
                <form action="{{ url('store') }}" method="post">
                    @csrf

                    <!-- Basic form layout section start -->
                    <section id="basic-form-layouts">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="content-header">Installment-forms</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title-wrap bar-success">
                                            <h4 class="card-title" id="basic-layout-form"></h4>
                                        </div>
                                        <p class="mb-0"></p>
                                    </div>
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form action="{{ url ('store') }}" method="post">
                                                <div class="row">
                                                    <div>
                                                        <div class="form-group">
                                                            <input type="hidden" id="id" class="form-control" name="formation_id" value='{{$formation->id}}'>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Amount of formation</label>
                                                            <input type="text" id="level of studies" class="form-control" name="level_of_studies" value="{{$formation->amount}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Amount left</label>
                                                            <input type="text" id="level of studies" class="form-control" name="level_of_studies" value="{{$restAmount}}" readonly>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput5">installments</label>
                                                            <input type="text" id="level of studies" class="form-control" name="name">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Installment Amount</label>
                                                            <input type="text" id="level of studies" class="form-control" name="price">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mr-3">
                                                            <div>
                                                                <input type="submit" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Budget</label>
                                                            <select id="projectinput6" name="budget" class="form-control">
                                                                <option value="0" selected="" disabled="">Budget</option>
                                                                <option value="less than 5000$">less than 5000$</option>
                                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                                <option value="more than 20000$">more than 20000$</option>
                                                            </select>
                                                        </div>
                                                    </div> -->
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>


            </div>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
<div class="main-panel">
    <div class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">


                <h1>list of installment</h1>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name of installment</th>
                            <th scope="col">price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formation->installments as $s)
                        <tr>


                            <td>{{$s->name}}</td>
                            <td>{{$s->price}}</td>
                            <td class="d-flex">
                                <div class="mx-2">
                                    <form action="{{ route('editInstallment', $s->id) }}" post='post'>
                                        <input type="hidden" name="formation_id"  value='{{$formation->id}}'>
                                        <button class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                                <a href="{{ route('deleteInstallment' , $s->id) }}" class="btn btn-danger">Delete</a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <footer class="footer footer-static footer-light">
        <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2018 <a href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
    </footer>

</div>


</form>
</div>
@endsection