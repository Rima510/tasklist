<!DOCTYPE html>
<html>
<body>




<ul>
@foreach ( $tasks as $index => $task )
       <li><a href = "about/{{$task->id}}"> {{$task->name}}</a> </li>
       <!-- <li> {{$task->name}} </li> -->
       <!-- <li> {{$task->created_at}} </li> -->
       @endforeach
</ul>


</body>
</html>
