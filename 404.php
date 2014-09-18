<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> Error 408</h1>
          <p>The page you were looking for does not exist.</p>
        </div>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
       <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
