@extends("layouts.app")
@section("content")

<div>
@alert(['type' => 'warning'])
  Danger!!!
@endalert
@alert
    You can't access this
@endalert
</div>

<div class="container">
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Done !!! </strong>{{ session()->get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<div class="col-md-6">
<h1>Todo List</h1>
<form method="POST" action={{url('/task')}}>
{{csrf_field()}}
<div class="form-group">
<input type="text" class="form-control" name="task" placeholder="Enter Task">
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Add</button>
</div>
</form>


<hr>
@if (count($tasks) === 1)
    I have a task!
@elseif (count($tasks) > 1)
    I have multiple task!
@else
    I don't have any task!
@endif
<ol>
@foreach($tasks as $task)
<li>Task {{ $task->task }}&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-success" href ={{url('/'.$task->id.'/complete')}}>Mark as complete</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-danger" href ={{url('/'.$task->id.'/delete')}}>Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-primary" href ={{url('/'.$task->id.'/edit')}}>Edit</a></li><br>
@endforeach

@foreach ($tasks as $task)
<p>{{ $task->task }} is task with ID {{ $task->id }}</p>
@endforeach 

@foreach ($tasks as $task)

    @if ($loop->first)
        {{$task->task}} is the first iteration.
    @endif

    @if ($loop->last)
        {{$task->task}} is the last iteration.
    @endif

    <p>It is the task with ID {{ $task->id}}</p>

@endforeach
</ol>


<h4>Completed</h4>
<ol>
@foreach($completed_tasks as $c_task)
<li>Completed {{ $c_task->task }}&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-warning" href ={{url('/'.$c_task->id.'/incomplete')}}>Mark as incomplete</a>&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-danger" href ={{url('/'.$c_task->id.'/delete')}}>Delete</a></li><br>
@endforeach
@foreach($completed_tasks as $c_task)
<p>I have completed task {{ $c_task->task }}
@endforeach
</ol>

<hr>
<h2>Complete task description</h2>
<ol>
@foreach($completed_tasks as $ct)
<li>Task task {{ $ct->task }} was updated at {{ $ct->updated_at }}</li>
@endforeach
@forelse($completed_tasks as $ct)
<li>Task task {{ $ct->task }} was created at {{ $ct->created_at }}</li>
@empty
<p>No complete task</p>
@endforelse
</ol>


</div>
</div>

<div class="container">
<hr>
<h2>Others</h2>
    The current UNIX timestamp is {{ time() }} <br />
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}<br / >
    @endfor
    @endsection
    @isset($tasks)
        $tasks is defined and not null.
    @endisset($tasks)
    @empty($tasks)
        $tasks is empty
    @endempty($tasks)
</div>
