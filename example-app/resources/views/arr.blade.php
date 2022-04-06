
<!DOCTYPE html>
<html>
<body>

<h1> Welcome</h1>

<ul>
<?php foreach ( $tasks as $key => $task ):?>
    <li><a href ="{{ 'task/'.$key}}"><?php echo $task ?></a></li>
       <?php endforeach ; ?>
</ul>

</body>
</html>
