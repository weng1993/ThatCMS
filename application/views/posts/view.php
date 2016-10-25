

<?php
echo '<h2>'.$post_item['title'].'</h2>';
echo $post_item['text'];

echo '<p><a href="'.site_url('posts/edit/').$post_item['pid'].'">Edit Post</a></p>';