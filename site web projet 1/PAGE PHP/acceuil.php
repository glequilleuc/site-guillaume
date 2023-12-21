<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGE YAML/aceuil.yaml');
//print_array($data);

echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo '<img src="image/'.$data["photo"].'">';

?>