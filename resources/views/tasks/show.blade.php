@extends('layouts.app')

@section('content')

 <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <p>{{ $task->content }}</p>
    
     {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['task.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection