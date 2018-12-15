<html>
  <body>
    <?php
    echo "<h1> HELLO WORLD </h1>"; 

    $usersName = Marcy; 
    $streetAddress = Street; 
    $cityAddress = Portland; 

    echo $usersName . '<p></p>';
    echo $streetAddress. '<p></p>';
    echo $cityAddress. '<p></p>';

    $str = <<<EOD
    The coder's name is 
    $usersName and they work 
    at $streetAddress in 
    $cityAddress</br></br>
EOD;

    echo $str;

    date_default_timezone_set('UTC');
    echo date('F jS Y e'); 
    echo "</p>"; 

    define('PI', 3.1215926); 
    echo "The value of PI is " . PI;

    echo "</br></br>5 + 2 = " . (5 + 2);
    echo "</br></br>5 - 2 = " . (5 - 2); 
    echo "</br></br>5 * 2 = " . (5 * 2);

    echo "</br></br>";

    $randNum = 5;
    echo $randNum += 5;
    echo "</br></br>";

    echo "++randNum = " . ++$randNum . "</br>";
    ?>
  </body>
</html>

<style type="text/css">
h1 {
  color: red; 
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
  text-shadow: 1pt 4pt 1pt grey;
}
h1:hover {
  color: blue;
}

body {
  font-size: 25pt;
  color: white; 
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black;
}
</style>