<!DOCTYPE html>
<html>
<head>
	<title>Exercise 5</title>
</head>

<body>
<h3>EXERCISE 5</h3>
<?php
    $around = "around";
    echo "What goes " . $around . " comes " . $around;
?>

<br>

<h3>EXERCISE 6</h3>

<?php
for ($count = 1; $count < 13; $count++){
  $squared = $count * $count;
  print($count."*".$count."=".$squared. "\n");

}
?>

<br> 

<h3>EXERCISE 7</h3>

<?php
for ($row=1; $row <= 7; $row++){
    print " \n";
    for ($column=1; $column <= 7; $column++){
        $table=$row * $column;
        print $table . "  ";
    }
}

?>


</body>
</html>