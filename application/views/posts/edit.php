<h2>Edit  Post</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/edit/'.$post_item['pid']); ?>

    <label for="title">Title</label>
    <input type="input" name="title" value=<?php echo $post_item['title'];?>> <br/>

    <label for="text">Text</label>
    <textarea name="text"   ><?php echo $post_item['text'];?></textarea><br />
    <input type="reset" value="Reset">
    <input type="submit" name="submit" value="Submit" />

</form>