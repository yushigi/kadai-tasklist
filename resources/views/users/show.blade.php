@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">TimeLine</a></li>
                <li><a href="#">Followings</a></li>
                <li><a href="#">Followers</a></li>
            </ul>
        </div>
        
        <div class="row">
        <div class="col-xs-12" "col-sm-offset-2 col-sm-8" "col-md-offset-8 col-md-8" "col-lg-offset-3 col-lg-6">

        <div class="row">
        <div class="col-xs-12" "col-sm-offset-2 col-sm-8" "col-md-offset-8 col-md-8" "col-lg-offset-3 col-lg-6">

         {!! Form::open(['route' => 'tasks.store']) !!}
    
         <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
    @if (count($tasks) > 0)
        @include('tasks.tasks', ['tasks' =>$tasks])
    @endif
    


    </div>
@endsection