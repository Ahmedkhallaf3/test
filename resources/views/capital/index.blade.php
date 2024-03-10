<h1>show all posts capital</h1>


<table>

    <th>id</th>
    <th>country</th>

    @foreach($capitals as $capital)
        <tr>
            <td>{{$capital->id}}</td>
            <td>{{$capital->name}}</td>
            <td>
                <a href="{{route('capital.edit',$capital->id)}}">Edit</a>
                <form action="{{route('capital.destroy',$capital->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>

                </form>

            </td>


        </tr>

    @endforeach
</table>

