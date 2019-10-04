@extends("layout.main-layout")


@section('content')

  <div class="create_link">
    <a href="{{ route("post.create") }}">CREATE NEW POST</a>
  </div>

  <div class="post_list">
    @foreach ($posts as $post)
      <div class="post_items">
        <h3>{{ $post -> title}}</h3>
        <p>{{ $post -> description }}</p>
        <h4>{{ $post -> author }}</h4>
        <a href="{{ route("post.edit", $post -> id) }}">UPDATE</a>
        <a href="#">DESTROY</a>
      </div>
    @endforeach
  </div>

@endsection