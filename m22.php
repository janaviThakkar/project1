<?php
$age = array("a"=>"5", "b"=>"3", "c"=>"4");
ksort($age);

foreach($age as $x => $x_value) {
    echo "Name=" . $x . ", Age=" . $x_value;
    echo "<br>";
}
?>