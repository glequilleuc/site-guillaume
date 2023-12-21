<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGE YAML/experience.yaml');
//print_array($data);

echo "<p>".$data["experiences"]."</p>";
echo "<p>".$data["experiences2"]."</p>";
echo "<p>".$data["experiences3"]."</p>";
echo "<p>".$data["experiences4"]."</p>";
echo "<p>".$data["experiences5"]."</p>";
echo '<a href="image/'.$data["cv"].'">PDF</a>';


?>