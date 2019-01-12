@include('flash::message')
@include('dashboard.partials.validation-errors')


<div class="m-portlet__body">

    <div class="form-group m-form__group row">
        <label for="example-text-input" class="col-2 col-form-label">Name</label>
        <div class="col-10">
            {{Form::text('name',null,[
          'class'=>'form-control',
          'id'=>'name',

      ])}}
        </div>
    </div>

</div>