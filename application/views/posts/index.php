<h2><?php echo $title; ?></h2>

<?php echo form_open('posts/delete'); ?>
<a href="<?php echo site_url('posts/create');?>">Create New </a> &nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="submit" name="delete" value="Delete Selected" />

<p></p>


<?php foreach ($posts as $post_item): ?>
    <li><?php echo form_checkbox($post_item['pid'], 'accept', false);?><a href="<?php echo site_url('posts/view/'.$post_item['pid']);?>"><?php echo $post_item['title']; ?> </a>
    </li>
<?php endforeach; ?>
</form>