<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <!-- ... -->
</head>

<body class="p-3">
  <?php
  $html = $_POST["html_string"];
  $present_elements = [];
  $pairs = array(htmlentities("</div>") =>htmlentities( "<div>"), htmlentities("</em>") => htmlentities("<em>"),htmlentities( "</i>") =>
 htmlentities( "<i>"), htmlentities("</b>") => htmlentities("<b>"), htmlentities("</p>") => htmlentities("<p>"));

  $number_of_elements = preg_match_all("/<.+?>/", $html, $out);
  foreach ($out[0] as $entity) {
    array_push($present_elements, htmlentities($entity));
  }
  print_r($present_elements[1]);
  for ($i = 0; $i < count($present_elements); $i++) {
    if ($present_elements[$i] != 1) {
      for ($j = count($present_elements); $j >= $i; $j--) {
        if ($present_elements[$j] != 1) {
          echo $present_elements[$j];
          if (array_key_exists($present_elements[$j], $pairs)) {
            if ($present_elements[$i] == $pairs[$present_elements[$j]]) {
              $present_elements[$i] = 1;
              $present_elements[$j] = 1;
            }
          }
        }
      }
    }
  }
  foreach($present_elements as $element){
    if($element != 1){
      echo "hiiiiiiiiiiiiii".$element;
      return;
    }
  }

  ?>
</body>

</html>