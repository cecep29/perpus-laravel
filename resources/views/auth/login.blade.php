@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                   {!! Form::open(['url' => 'login', 'class' => 'form-horizontal']) !!}
                        <div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}" >
                            
                        </div>
                   {!! Form::close() !!}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
