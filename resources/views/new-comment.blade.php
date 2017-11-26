@extends('app')

@section('content')

@if (count($comment))

<div class="row row-eq-height">

  @foreach ($comment as $key=>$info)
    <div class="col-3 m-0 t-0">
      <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h4 class="card-title">#{{$key+1}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">{{$info->created_at}}</h6>
          <p class="card-text">{{$info->content}}</p>
          <form class="" action="/new-comment/{{ $info->id }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <Button type="submit" name="remove" class="btn btn-danger">Remove</Button>
          </form>
        </div>
      </div>
    </div>
  @endforeach

</div>

@endif

  <div class="col">
    <form class="" action="/new-comment" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="itemType">Types</label>
        <select class="form-control" name="commentType" required>
          <option value="" disabled selected>Choose the types</option>
          <option value="Good">Good</option>
          <option value="Bad">Bad</option>
        </select>
      </div>
      <div class="form-group">
        <label for="description">Contetn</label>
        <textarea class="form-control" name="commentContent" rows="3" required></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

@endsection
