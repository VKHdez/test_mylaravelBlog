@extends ('template')

@section ('content')
<h1>Listado del Blog</h1>
@foreach ($posts as $post)
<p>
    <strong>{{ $post->title }}</strong>    
    <a href=" {{ route('post', $post->slug) }}">
        Read post >
    </a>
    <br>
    <span> {{ $post->user->name }} </span>

</p>
@endforeach

{{ $posts->links() }}

@endsection ('content')
