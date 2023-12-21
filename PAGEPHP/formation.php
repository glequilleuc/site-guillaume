<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGEYAML/formation.yaml');
//print_array($data);

echo "<p>".$data["formation"]."</p>";
echo "<p>".$data["formation1"]."</p>";
echo '<a href="image/'.$data["cv"].'">PDF</a>';
?>