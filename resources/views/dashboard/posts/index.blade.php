@extends('dashboard.partials.dashboard')

@section('content')
    @include('flash::message')

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Posts
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{url('Dashboard/posts/create')}}" class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
						<span>
							<i class="la la-plus"></i>
							<span>New record</span>
						</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="m-portlet__body">

            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                <tr>
                    <th>Record ID</th>
                    <th>title</th>
                    <th>image</th>
                    <th>Body</th>
                    <th style="text-align: center">Edit</th>
                    <th style="text-align: center">Delete</th>
                </tr>
                </thead>

                <tbody>

                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>  <img src="{{url($post->image)}}"width="50px"
                               class="img-rounded  img-responsive " alt=""></td>
                    <td>{{$post->body}}</td>
                    <td style="text-align: center">
                        <a href="{{url('Dashboard/posts/'.$post->id.'/edit')}}"> <button type="button" class="btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent"><i class="flaticon-edit"></i></button></a>
                    </td>
                    <td style="text-align: center">
                        {{Form::open(array('method'=>'delete','url'=>'Dashboard/posts/'.$post->id))}}
                        <button type="submit" class="btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning"><i class="flaticon-delete"></i></button>
                        {{Form::close()}}
                    </td>
                </tr>
                @endforeach

                </tbody>

            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{$posts->render()}}
                </ul>
            </nav>
        </div>
    </div>

@stop