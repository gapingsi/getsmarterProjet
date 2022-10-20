@extends('layout.default')

@section('content')
<div class="main-panel" style="width:1250px;">
    <div class="main-content" style="margin-left:300px;">
        <div class="">
            <div class="container" style="width:2250px;">



                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="content-header">InstallmentEdit-forms</h2>
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
                                        <form action="{{ route ('updateInstallment', $installment->id) }}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div>
                                                    <div class="form-group">
                                                        <input type="hidden" id="id" class="form-control" name="formation_id" value='{{$formation_id}}'>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput5">name</label>
                                                        <input type="text" id="level of studies" class="form-control" name="name" value='{{$installment->name}}'>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="projectinput5">price</label>
                                                    <input type="text" id="level of studies" class="form-control" name="price" value='{{$installment->price}}'>

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

                                    </form>

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


</div>
@endsection