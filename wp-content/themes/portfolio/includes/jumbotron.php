<?php
    $jumbotron_url = wp_get_attachment_url(get_post_thumbnail_id());
    $jumbotron_bg = "style='background-image:url(".$jumbotron_url.");'";
  ?>
<div class="jumbotron" <?php echo $jumbotron_bg; ?>>
</div>