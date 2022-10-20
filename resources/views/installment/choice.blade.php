@extends('layout.default')

@section('content')
<div>


    <div class="main-panel" style="width:1250px;">
        <div class="main-content" style="margin-left:300px;">
            <div class="">
                <div class="container" style="width:2250px;">
                    <form action="{{ url('create') }}">
                        @csrf
                        @method('GET')
                        <!-- Basic form layout section start -->
                        <section id="basic-form-layouts">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="content-header">FORMATION SECTIONS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title-wrap bar-success">
                                                <h4 class="card-title" id="basic-layout-form">choose your formation</h4>
                                            </div>
                                            <p class="mb-0"></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="px-3">
                                                <form action="form">

                                                    <div class="form-body">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="formation_id" class="col-mr-3 col-form-label">Select Formation</label>
                                                                <select id="formation_id" name="formation_id" class="form-control">
                                                                    @foreach($formations as $formation)

                                                                    <option value="{{ $formation->id }}">{{ $formation->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mr-3">
                                                                    <div>
                                                                        <input type="submit" class="btn btn-primary" value="continue">
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
                        <!-- // Basic form layout section end -->
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