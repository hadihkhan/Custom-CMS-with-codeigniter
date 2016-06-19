<?php $this->load->view('admin/components/page_head.php'); ?>
  <body>
    <nav class="navbar navbar-static-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php site_url('admin/dashboard') ?>"><?php echo $meta_title; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php site_url('admin/dashboard') ?>">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><?php echo anchor('admin/pages', 'Pages'); ?></li>
        <li><?php echo anchor('admin/users', 'Users'); ?></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-9">
      <h2>Page Name</h2>
    </div>
    <div class="col-md-3">
      <?php echo mailto('me@hadikhan.com', '<i class="glyphicon glyphicon-user"></i> me@hadikhan.com'); ?><br >
      <?php echo anchor('admin/user/logout', '<i class="glyphicon glyphicon-log-out"></i> Logout'); ?>
    </div>
  </div>
</div>
<?php $this->load->view('admin/components/page_tail.php'); ?>