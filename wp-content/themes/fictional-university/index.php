<?php  
    $myName = 'Sayed Mobin';
    $ourNames = ['Sayed', 'Bella', 'John', 'Jannet']
?>
<p> Hi my name is <?php echo $myName ?></p>
<p> Hi our names are <?php for($i = 0; $i < sizeof($ourNames); $i++) {

    if ($i == sizeof($ourNames) -1) {
     echo "$ourNames[$i].";   
    } else {
     echo "$ourNames[$i], ";
    }      
} ?></p>

<ul> 
    <?php 
    $myNumber = 0;
    while ($myNumber <= 100) {
        echo "<li> $myNumber </li>";
        $myNumber++;
    }
    ?>
</ul>
