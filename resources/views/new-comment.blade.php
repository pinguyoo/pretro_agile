@extends('app')
@section('content')

@if (count($comment))

  <div class="col">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Content</th>
            <th scope="col">Created_at</th>
            <th scope="col">Remove</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($comment as $key=>$info)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $info->type}}</td>
            <td>{{ $info->content}}</td>
            <td>{{ $info->created_at}}</td>
            <td>
              <form class="" action="/new-comment/{{ $info->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <Button type="submit" name="remove" class="btn btn-danger">Remove</Button>
              </form>
            </td>
          </tr>
          @endforeach

        </tbody>
    </table>
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
