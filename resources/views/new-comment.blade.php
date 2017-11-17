@extends('app')
@section('content')

  <div class="col">
    <form class="" action="/new-comment" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="itemType">Types</label>
        <select class="form-control" name="commentType" required>
          <option value="" disabled selected>Choose the types</option>
          <option>Good</option>
          <option>Bad</option>
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
