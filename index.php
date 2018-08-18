<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<h2>test</h2>



<?php



function testfunction ($testvar1,$testvar2)
{
  static $testvar3 = 3;
  $testvar3 ++;
  echo "<p>".($testvar1 + $testvar2 + $testvar3)."</p>";
  var_dump ($testvar1);
}

function myTest() {
    $testarray = array("test");
    echo $testarray;
}

testfunction(2,3);

?>

<br>
<br>
<?php

  /**
   *
   */
  class car
  {

    function car()
    {
      $this->model = "VW";
      $this->year = "1987";
    }
  }

  $herbie = new car();

  echo $herbie->model;
  echo $herbie->year;


  define ("Greeting","Welcome to my test");
  echo Greeting;

  $x = array("Level1" => array(
                "Level2" => array(
                    "level3" => "Prueba"
                )
             )
  );

  //print_r($x + $y); // union of $x and $y

  var_dump($x["Level1"]["Level2"]["level3"]);




 ?>
</body>
</html>
