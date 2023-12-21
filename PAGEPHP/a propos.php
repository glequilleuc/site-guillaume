<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGEYAML/a propos.yaml');

echo "<p>".$data["une accroche"]." ".$data["un paragraphe"]."</p>";
echo '<a href="PAGE EXTENSION/pathfinder.php">';
echo '<img class="img-hover-zoom" height="250" width="250" src="image/'.$data["photo"].'">';
echo '</a>';
?>