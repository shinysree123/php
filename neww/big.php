<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">


<form method="GET">
<table class="table">
<tr>
<td>first number</td>
<td><input type="number" class="form-control" name="firstnumber"></td>
</tr>
<tr>
<td>second number</td>
<td><input type="number" class="form-control" name="secondnumber"></td>
</tr>
<tr>
<td>third number</td>
<td><input type="number" class="form-control" name="thirdnumber"></td>
</tr>

<tr>
<td><button type="largest" class="btn btn-warning" name="largest">largest</button></td></tr>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
</table>
</form>

</div>

</div>
</div>

</body>
</html>
<?php

if(isset($_GET["largest"]))
{
    $a=$_GET["firstnumber"];
    $b=$_GET["secondnumber"];
    $c=$_GET["thirdnumber"];
    if(($a>$b)&&($a>$c))
            echo $a;
   elseif(($b>$a)&&($b>$c))
            echo $b;
    else
            echo $c;
}

?>