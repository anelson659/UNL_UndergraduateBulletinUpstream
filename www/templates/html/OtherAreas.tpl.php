<h3>Other Content Areas</h3>
<ul>
<?php
foreach ($context as $otherarea) {
    echo '<li><a href="'.$otherarea->getURL().'">'.$otherarea->name.'</a></li>';
}
?>
</ul>