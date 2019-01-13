@extends('layouts.app')

@section('content')

  {{--content starts here--}}

    <div class="container">


        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>{{$post->title}}</h1></div>
                    <div class="panel-body">

                     
                        <!-- Date/Time -->
                        <p><span class=""></span>{{date("F j,Y ,g:i a",strtotime($post->created_at))}}</p>
                        <!-- Preview Image -->
                      <img class="img-responsive" src="{{url($post->image)}}" alt="" style="height: 400px; width: 800px;">
                        <!-- Post Content -->
                        {{--<p class="lead">{{ strstr($post->body,0,12)}}</p>--}}
                        <p class="lead">{{$post->body}}</p>

                        <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <a href="{{url('post/'.$post->id)}}"> <button type="submit" class="btn btn-primary">
                                        More
                                        </button></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
       @endforeach
    </div>
    {{--content ends here--}}

@stop