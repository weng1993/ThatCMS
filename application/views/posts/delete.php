<h2><?php echo $title; ?></h2>



<p></p>

<?php foreach ($posts as $post_item): ?>
    <li><a href="<?php echo site_url('posts/view/'.$post_item['pid']);?>"><?php echo $post_item['title']; ?> </a>
    <?php echo form_checkbox($post_item['pid'], 'accept', TRUE);?>
    </li>
<?php endforeach; ?>