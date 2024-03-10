<h1>edit post</h1>

<form action="{{route('posts.update',$post->id)}}" method="post">
@method('put')
    @csrf
    <input type="text" name="name" value="{{$post->name}}">
    <button type="submit">update</button>
</form>
