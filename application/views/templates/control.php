<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Back-end</title>
<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap-responsive.min.css'); ?>" />
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/lazyload.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.form.js') ?>"></script>
</head>
<html lang="en">
<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="">Application Back-end</a>
        <div class="nav-collapse collapse">
        <?php echo $menu ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 60px;">
    <div class="row-fluid">
    <?php echo $header ?>
    </div>
    <?php if ($dashboard): ?>
    <div class="well">
    <?php echo $dashboard ?>
    </div>
    <?php endif ?>
    <div class="row-fluid">
    <?php echo $content ?>
    </div>
  </div>

  <!-- bootstrap modal markup -->
  <div class="modal hide fade" id="modal-update">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3></h3>
    </div>
    <div class="modal-body">
      <p></p>
    </div>
    <div class="modal-footer">
      <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
  </div>

<script type="text/javascript">
$(function() {

});

function setModal(title, content) {
  $('#modal-update div.modal-header h3').text(title);
  $('#modal-update div.modal-body').html(content);
  $('#modal-update').modal();
}
</script>
</body>
</html>