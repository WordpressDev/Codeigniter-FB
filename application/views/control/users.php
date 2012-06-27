<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>FBID</th>
    <th>Image</th>
    <th width="300">Name</th>
    <th>Email</th>
    <th width="150">Created</th>
  </thead>
  <tbody>
  <?php if (isset($users)): ?>
  <?php foreach ($users as $key => $value): ?>
  <tr>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['fbid'] ?></td>
    <td><img src="<?php echo site_url('assets/img/ajax-loader.gif') ?>" data-original="https://graph.facebook.com/<?php echo $value['fbid'] ?>/picture?type=square" width="41" height="41"></td>
    <td><?php echo $value['fb_name'] ?></td>
    <td><?php echo $value['fb_email'] ?></td>
    <td><?php echo $value['created'] ?></td>
  </tr>
  <?php endforeach ?>
  <?php else: ?>
  <tr>
    <td colspan="5">ไม่พบข้อมูล</td>
  </tr>
  <?php endif ?>
  </tbody>
</table>
<script type="text/javascript">
$(function() {
  $('table img').lazyload();
})
</script>