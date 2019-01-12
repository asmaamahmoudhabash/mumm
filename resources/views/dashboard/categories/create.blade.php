@extends('dashboard.partials.dashboard')

@section('content')
    <!-- =============================================== -->

    <!-- form start here -->
    {!! Form::model($model,[
                                    'action'=>'CategoryController@store',
                                    'id'=>'myForm',
                                    'role'=>'form',
                                    'method'=>'POST'
                                    ])!!}



    @include('dashboard.categories.form')

    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close()!!}


@endsection