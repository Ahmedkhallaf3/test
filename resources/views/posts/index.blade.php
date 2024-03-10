<h1>show all posts</h1>


<table>

    <th>id</th>
    <th>country</th>

    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>
                <a href="{{route('posts.edit',$post->id)}}">Edit</a>
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>

                </form>

            </td>


        </tr>

    @endforeach
</table>
