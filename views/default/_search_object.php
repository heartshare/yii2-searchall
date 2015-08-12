<?php


?>
<div>
    <strong><?=$key?></strong> : <span><?=$opts['class']?></span>
    <ul>
        <?php
        foreach($opts['fields'] as $field)
            echo "<li>$field</li>";
        ?>
    </ul>
    <span>Links to <?=$opts['link']?></span>
</div>
<hr>