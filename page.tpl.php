<span class="cfest-bg">
    </span>
    <div id="container">
      <div id="top-region"><?php if($page['header']): echo render($page['header']); endif; ?></div>
       <header id="header">
         <?php if ($site_name) { ?>
           <span id="site-name"> 
           <a href="<?php echo $front_page ?>">
             <?php echo $site_name; ?>
           </a>
         </span>
         <?php } ?>
         <?php if ($logo) { ?>
           <a href="<?php echo $front_page ?>">
             <img src="<?php echo $logo; ?>" id="logo">
           </a>
         <?php } ?>
       <nav><?php if ($primary_nav): print $primary_nav; endif; ?></nav>
      </header>
      <div id="wrapper">
        <div id="sidebar-left">
         <?php echo render($page['sidebar_first']) ?>
        </div>
        <div id="main_content">
          <div class="content-inner">
          <h1><?php echo render($title); ?></h1>
          <?php echo render($tabs); ?>
          <?php echo render($page['content']); ?>
	</div>
       </div>
     </div>
    </div>
    <footer id="footer">
     <?php echo render($page['footer']); ?>
    </footer>
