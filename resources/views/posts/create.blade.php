<h1>create new post</h1>

<form action="{{route('posts.store')}}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Enter country name">
    <button type="submit">ADD</button>
</form>
