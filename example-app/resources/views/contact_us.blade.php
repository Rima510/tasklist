
<!DOCTYPE html>
<html>
<body>

<h1> Welcome</h1>

@if (isset($name))
<h1> Hello , {{$name}}</h1>
@endif

<form action="store" method = "post" >
    @csrf
    <input type = "text" name="name" id="name">
    <input type = "submit" value="send" >
</form >


<!-- @if (isset($name))
Hello , {{$name}}
@endif -->
</body>
</html>
