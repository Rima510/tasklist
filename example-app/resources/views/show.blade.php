<!DOCTYPE html>
<html>
<body>


        @foreach ($pro as $index => $task )
        <ul></ul>
            <li><a href = "/control2/{{$task ->id}}">{{$task -> name}}</a></li>
        </ul>
        @endforeach

</body>
</html>
