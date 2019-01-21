@extends("layouts.app")
@section("content")
@parent
<div class="container">
      <h1>Edit Todo</h1><br  />
      @section("abc")
      <H2>Hello</h2>
      <p>Worlds</p>
      @endsection
      <form method="post" action="{{action('TaskController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <input type="text" class="form-control" name="task" value="{{$task->task}}">
            {!!$tags!!}

          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@endsection

@alert(['type' => 'danger'])
  You are not allowed to access this resource!
@endalert
