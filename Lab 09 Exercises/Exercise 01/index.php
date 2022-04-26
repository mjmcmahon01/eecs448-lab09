<html>

<head>
  <style type="text/css">

  body {
    font-size:12px;
  }
  
  td {
    height: 24px;
    text-align: center;
    width: 24px;
  }

  </style>
</head>

<body>
  <table>
  
  <?php
    echo "<tr>";
    for($i=0; $i <= 10; $i++) {
      echo "<td>" . $i . "</td>" ;
    }	
    echo  "</tr>";

    for($i = 1; $i <= 10; $i++) {
      echo "<tr>";
      echo "<td>" . $i . "</td>" ;
      for($j=1; $j <= 10; $j++) {
        echo "<td>" . $i*$j . "</td>" ;
      }	

    echo  "</tr>";
  }        
  ?>
  </table>
</body>
</html>