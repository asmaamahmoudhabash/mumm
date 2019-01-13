@include('flash::message')
@include('dashboard.partials.validation-errors')

@inject('category','App\Models\Category')

<?php

$categories = $category->pluck('name', 'id');

?>

<div class="m-portlet__body">

    <div class="form-group m-form__group row">
        <label for="example-text-input" class="col-2 col-form-label">Title</label>
        <div class="col-10">
            {{Form::text('title',null,[
          'class'=>'form-control',
          'id'=>'title',

      ])}}
        </div>
    </div>


    <div class="form-group m-form__group row">
        <label for="exampleTextarea"  class="col-2 col-form-labe">Post Body</label>
        {{--<textarea class="form-control m-input" id="exampleTextarea" rows="3"></textarea>--}}
        <div class="col-10">
            {{Form::textarea('body',null,[
          'class'=>'form-control',
          'id'=>'body',

      ])}}
        </div>
    </div>



    <div class="form-group m-form__group row">
        <label for="example Select"  class="col-2 col-form-labe">Select Category</label>
        <div class="col-10">
            {{

            Form::select('category_id', $categories, null, ['placeholder' => 'Select Category','class'=>'form-control','id'=>'category',])
            }}
        </div>
    </div>

    <div class="form-group m-form__group row">
        <label for="example Select"  class="col-2 col-form-labe">Image</label>
        <div class="col-10">
            {{Form::file('image',null,[
        //  'class'=>'form-control',
          'id'=>'image',

          ])}}
        </div>
    </div>

    <div class="form-group m-form__group row">
        <label for="example Select"  class="col-2 col-form-labe">Is published</label>
        <div class="col-10">
            <label class="radio-inline">
                {{Form::radio('is_published', '1',true) }}Yes
            </label>
            <label class="radio-inline">
                {{Form::radio('is_published', '0') }}No
            </label>
        </div>
    </div>




    <div class="form-group m-form__group row">
        <label for="example Select"  class="col-2 col-form-labe">order</label>
        <div class="col-10">
            {{Form::text('order','0',[
             'class'=>'form-control',
             'id'=>'order',
             'style'=>'width:40px',



             ])}}
        </div>
    </div>


</div>