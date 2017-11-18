@extends('app')
@section('content')

@if (count($data))

  <div class="col">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Content</th>
            <th scope="col">created_at</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($data as $info)
          <tr>
            <th scope="row">{{ $info->id }}</th>
            <td>{{ $info->type}}</td>
            <td>{{ $info->content}}</td>
            <td>{{ $info->created_at}}</td>
          </tr>
          @endforeach

        </tbody>
    </table>
  </div>

@endif

  {{ $data }}

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
