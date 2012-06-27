<div class="span7">
  <?php echo form_open('control/login', array('id' => 'control-login', 'class' => 'form-horizontal'), 'post'); ?>
  <div class="control-group">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" class="input-xlarge" id="username" name="username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" class="input-xlarge" id="password" name="password">
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary">Login</button>
    <button class="btn">Cancel</button>
  </div>
  <?php echo form_close() ?>
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
  if (resp.status == true) {
    window.location.href = '<?php echo site_url("control/admin") ?>';
  } else {
    setModal('Login Failed', resp.message);
  }
}
</script>