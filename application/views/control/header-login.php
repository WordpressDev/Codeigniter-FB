<div class="span12">
  <div class="page-header">
    <h1>Application Back-end <a href="<?php echo site_url('control/logout') ?>" id="logout" class="btn btn-danger" style="float: right;">Logout</a></h1></h1>
  </div>
</div>

<script type="text/javascript">
$(function() {
  $('#control-login').submit(function(e) {
    e.preventDefault();
    $(this).ajaxSubmit({
      dataType     : 'json',
      beforeSubmit : beforeRequest,
      success      : afterRequest
    });
  });
});

function beforeRequest() {

}

function afterRequest(resp) {
  console.log(resp);
}
</script>