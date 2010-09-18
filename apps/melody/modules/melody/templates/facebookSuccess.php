<?php echo link_to('Home', '@homepage')?>
<h3>Your profile</h3>
<?php echo image_tag($me->picture) ?>
Hello <?php echo link_to($me->first_name, $me->link) ?>

<h3>My feed</h3>
<?php echo form_tag('@melody_facebook_feed')?>
  <?php echo $form ?>
  <input type="submit" value="publish"/>
</form>

<h3>Your friends</h3>
<?php foreach($friends->data as $friend): ?>
  <?php echo link_to(image_tag($friend->picture), 'http://www.facebook.com/profile.php?id='.$friend->id)?>
<?php endforeach ?>