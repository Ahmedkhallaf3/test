<h1>edit post capital</h1>

<form action="{{route('capital.update',$capital->id)}}" method="post">
    @method('put')
    @csrf
    <input type="text" name="name" value="{{$capital->name}}">
    <button type="submit">update</button>
</form>
