<h1>create new post capital</h1>

<form action="{{route('capital.store',)}}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Enter capital name">
    <input type="number" name="country_id" >
    <button type="submit">ADD</button>
</form>
