<?php
      include_once "pagemenuitem.php"
?>

<div class="box">

    <div id="text-about" title="About">
        {tr:about_text}
    </div>

    <?php 
    if (AggregateStatistic::enabled()) {
        pagelink('aggregate_statistics');
    }
    ?>
</div>
