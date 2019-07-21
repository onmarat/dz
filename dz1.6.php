<table>
<?php

for ($i = 1; $i <=10; $i++) {
    print "<tr>";
  for ($b = 1; $b <= 10; $b++) {
      $n = $i * $b;
      print "<td>";
      if ($n%2 ==0) {
          print "(".$n.")";
      }
      else {
          print "[".$n."]";
      }
      print "</td>";
  }
  print "</tr>";
}

?>
</table>
