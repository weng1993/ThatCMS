<h2><?php echo $title; ?></h2>

<?php echo form_open('posts/delete'); ?>
<a href="<?php echo site_url('posts/create');?>">Create New </a> &nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" name="submit" value="Delete Selected" />

<p></p>


<?php foreach ($posts as $post_item): ?>
    <li><a href="<?php echo site_url('posts/view/'.$post_item['pid']);?>"><?php echo $post_item['title']; ?> </a>
    <?php echo form_checkbox($post_item['pid'], 'accept', false);?></li>
<?php endforeach; ?>
</form>