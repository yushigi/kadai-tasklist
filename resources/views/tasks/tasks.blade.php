<ul class="media-list">
@foreach ($tasks as $task)
    <?php $user = $task->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
           
            <div>
                <p>{!! nl2br(e($task->content)) !!}</p>
                <p>{!! nl2br(e($task->status)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                    
                    {!! link_to_route('tasks.edit', 'Edit', ['id' =>$task->id]) !!}
                @endif
                }
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasks->render() !!}