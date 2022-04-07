<!DOCTYPE html>
<html lang='eng'>
<head>
  <title>Date Picker</title>
  <meta charset="utf-8">
  <meta  name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1>Date Picker</h1>
  <?php
    $dob = "1970-01-01";

    if (filter_input(INPUT_POST, "dob")) {
      $dob = filter_input(INPUT_POST, "dob");
    }

    $bday   = strtotime($dob);
    $today  = strtotime("now");
    $age    = date("Y", $today) - date("Y", $bday);
    if (date("z", $today) < date("z", $bday)) {
      $age--;
    }

    echo "<p>If you were born on " . date("l jS F, Y", $bday)
    . " you would be $age years old!</p>";

    echo "\t\t<form method=\"post\" action=\"date-picker.php\">\n"
    . "\t\t\t<p>\n"
    . "\t\t\t\tDate of Birth: \n"
    . "\t\t\t\t<input id=\"dob\" name=\"dob\" type=\"date\"> \n"
    . "\t\t\t\t<input type=\"submit\" value=\"Submit\">\n"
    . "\t\t\t<p>\n"
    . "\t\t</form>\n"
    . "<script>\n"
    . "\t\t\tdocument.getElemenetById(\"dob\").value = \"$dob\";\n"
    . "\t\t</script>\n";
  ?>
  </body>
  </html>
