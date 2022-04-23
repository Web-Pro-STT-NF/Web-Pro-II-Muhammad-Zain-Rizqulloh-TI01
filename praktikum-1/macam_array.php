<?php

    $tims = ['erwin', 'heru', 'ali', 'zaki'];
    array_pop($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    
    }
    echo '<hr>';
?>

<?php

    $tims = ['erwin', 'heru', 'ali', 'zaki'];
    array_push($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';
?>

<?php

    $tims = ['erwin', 'heru', 'ali', 'zaki'];
    array_shift($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }
    echo '<hr>';
?>

<?php

    $tims = ['erwin', 'heru', 'ali', 'zaki'];
    array_unshift($tims);
    foreach($tims as $person){
        echo $person. '<br/>';
    }

?>