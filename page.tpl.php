<?php

?>

<div id="header">
 <a href="<?php print $front_page;?>">
      <img src="/<?php print $directory;?>/images/logo.png" alt="<?php print $site_name;?>" height="80" width="150" />
    </a>
 
    <?php if ($main_menu): ?>
      <?php print theme('links', $main_menu); ?>
    <?php endif; ?>
</div>

<div id="wrapper">

  <div id="content">

  </div>
    
  <div id="sidebar">

  </div>

</div>

<div id="footer">
<?php if ($page['footer']): ?>    
  <?php print render($page['footer']); ?>
<?php endif; ?>


</div>
