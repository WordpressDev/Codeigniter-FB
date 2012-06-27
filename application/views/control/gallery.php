<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>FBID</th>
    <th>Image</th>
    <th width="200">Created</th>
    <th width="100">Action</th>
  </thead>
  <tbody>
  <?php if (isset($gallery)): ?>
  <?php foreach ($gallery as $key => $value): ?>
  <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['fbid'] ?></td>
    <td><img src="<?php echo site_url('assets/img/ajax-loader.gif') ?>" data-original="<?php echo site_url($value['file']) ?>" width="200" height="200"></td>
    <td><?php echo $value['created'] ?></td>
    <td>
      <?php if ($value['active'] == '1'): ?>
      <input type="button" class="btn btn-danger" value="Hide">
      <?php else: ?>
      <input type="button" class="btn btn-info" value="Show">
      <?php endif ?>
    </td>
  </tr>
  <?php endforeach ?>
  <?php else: ?>
  <tr>
    <td colspan="5"><p style="text-align: center;">ไม่พบข้อมูล</p></td>
  </tr>
  <?php endif ?>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
  $('table img').lazyload();
})
</script>