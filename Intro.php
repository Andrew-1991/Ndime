<?php
$marks= 98;
$students= array ("mateyu", "Philipo", "Moses", "John", "jane");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel project</title>
</head>
<body>
    <h1>About User</h1>
    <p>
    <?php
    if ($marks>=80) {echo "distinction <br>";}
     elseif($marks>=70)
      {echo "This is a credit";}
      else {echo "failed";}
    foreach($students as $index =>$name)  
    {echo "students $index: $name <br>";}
    echo "<table border='1'>";
        echo "<tr><th>Index</th><th>Name</th></tr>";
        foreach ($students as $key => $val)
        {
            echo "<tr><td>" . ($key+1) . "</td> <td>. $val .</td></tr>";
        }
        echo "</table>";
        ?>
     
     </p>
</body>
</html>