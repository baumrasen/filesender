<div id="site-name" class="text-right">
<div class="container">
        <div class="col_content">
                ibb house of engineering GmbH
        </div>
</div>
</div>


<div id="page-header-wrapper">
</div>

<div id="page" class="<?php echo GUI::currentPage() ?>_page">
<div class="container">
    <noscript>
        <div class="error message">
            {tr:noscript}
        </div>
    </noscript>

    <?php Template::display(GUI::currentPage().'_page', $vars) ?>
</div>
</div>
