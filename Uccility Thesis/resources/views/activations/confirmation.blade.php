@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row activate-row">
        <div class="col-md-5 col-md-offset-4 activate-panel">
            <div class="panel panel-default">
                <div class="panel-heading">Activate Account</div>
                <div class="panel-body">
                @include('_includes.errors')
                    <form class="form-horizontal" method="POST" action="/activate/step3">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2">
                                <h3>You are now Activated!</h3>
                            </div>        
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="container step-indicator">
                        <div class="row bs-wizard" style="border-bottom:0;"> 
                            <div class="col-xs-3 bs-wizard-step complete">
                                <div class="text-center bs-wizard-stepnum">Step 1</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot done"></a>
                                    <div class="bs-wizard-info text-center"> Primary Info</div>
                                </div>
                                    
                                <div class="col-xs-3 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 2</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot done"></a>
                                    <div class="bs-wizard-info text-center">Personal Info</div>
                                </div>
                                    
                                <div class="col-xs-3 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum">Step 3</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot done"></a>
                                    <div class="bs-wizard-info text-center">Credentials</div>
                                </div>

                                <div class="col-xs-3 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum active">Step 4</div>
                                    <div class="progress"><div class="progress-bar"></div></div>
                                    <a href="#" class="bs-wizard-dot active"></a>
                                    <div class="bs-wizard-info text-center active">Complete</div>
                                </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection