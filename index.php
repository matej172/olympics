<?php
require_once "classes/controllers/PersonController.php";

$personController = new PersonController();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
    <script src="./js/script.js"></script>

  <style>
      table, tr, td {
          border: 1px solid black;
          border-collapse: collapse;
      }
  </style>

</head>

<body>
    <h1>OH</h1>

    <pre>
        <?php var_dump($personController->getPerson(1)); ?>
    </pre>


</body>
</html>