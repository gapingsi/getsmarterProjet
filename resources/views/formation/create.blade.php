@extends('layout.default')

@section('content')
<div>


    <div class="main-panel" style="width:1250px;">
        <div class="main-content" style="margin-left:300px;">
            <div class="">
                <div class="container" style="width:2250px;">
                    <form action="{{ url('formationcreate') }}" method="post">
                        @csrf
                        @method("POST")
                        <!-- Basic form layout section start -->
                        <section id="basic-form-layouts">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="content-header">Formation-forms</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title-wrap bar-success">
                                                <h4 class="card-title" id="basic-layout-form">formation-form</h4>
                                            </div>
                                            <p class="mb-0">please enter your informations.</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="px-3">
                                                <form action="form">
                                                   
                                                    <div class="form-body">
                                                        <h4 class="form-section">
                                                            <i class="icon-user"></i> Formation Details
                                                        </h4>
                                                        <div class="row">
                                                            <div>
                                                                <div class="form-group"> 
                                                                  
                                                                    <input type="hidden" id="id" class="form-control" name="id" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">formation name</label>
                                                                    <input type="text" id="matricule" class="form-control" name="name" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">Formation period</label>
                                                                    <input placeholder="En jour EX:30 " type="number" id="first name" class="form-control" name="period" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput3">Amount</label> 
                                                                    <input placeholder="En fcfa" type="number" id="projectinput3" class="form-control" name="amount" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">Description</label>
                                                                    <textarea id="last name" class="form-control" name="desc" cols="20" rows="10"></textarea>
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
                                                            </div>
                                                            
                                                            <!-- <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput2">level of studies</label>
                                                                    <input type="text" id="level of studies" class="form-control" name="level_of_studies" value='{{isset($student->level_of_studies)? $student->level_of_studies:""}}'>
                                                                </div>
                                                                <div class="col-md-6">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="projectinput5">formation</label>
                                                                    <select id="projectinput5" name="formation" class="form-control" value='{{isset($student->formation)? $student->formation:""}}'>
                                                                        <option value="none" selected="" disabled="">Interested in</option>
                                                                        <option value="design">Web development</option>
                                                                        <option value="development">Mobile development</option>
                                                                        <option value="illustration">Ethical hacking</option>
                                                                        <option value="branding">Flashing of phones </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> -->

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