<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: linear-gradient(#f5f7fa, #fef9e6);
}
.u-header .u-sheet-1 {
  min-height: 103px;
}
.u-header .u-image-1 {
  width: 147px;
  height: 92px;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  filter: brightness(0.6);
  margin: 6px -28px 0 auto;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-search-1 {
  width: 200px;
  min-height: 38px;
  margin: -57px auto 0 -10px;
}
.u-header .u-menu-1 {
  font-family: size-14;
  margin: -38px 241px 24px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-weight: 700;
  text-transform: uppercase;
}
.u-header .u-nav-2 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
.u-header .u-nav-3 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
.u-header .u-nav-4 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
.u-header .u-nav-5 {
  font-size: 1rem;
}
.u-header .u-nav-6 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
.u-header .u-nav-7 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
.u-header .u-nav-8 {
  font-size: 1rem;
  box-shadow: 8px 8px 14px 6px rgba(128,128,128,0.75);
  text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    margin-right: -28px;
  }
  .u-header .u-search-1 {
    height: auto;
    margin-top: -66px;
    margin-left: -10px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -38px;
    margin-right: 220px;
    margin-bottom: 25px;
  }
}
@media (max-width: 991px) {
  .u-header .u-search-1 {
    margin-right: 58px;
  }
  .u-header .u-menu-1 {
    margin-right: 0;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 160px;
  }
  .u-header .u-search-1 {
    margin-right: auto;
  }
  .u-header .u-menu-1 {
    margin-right: auto;
    margin-bottom: 60px;
    margin-left: 158px;
  }
}</style>
