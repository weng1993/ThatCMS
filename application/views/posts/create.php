<h2>Create new post</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />
    <input type="reset" value="Reset">
    <input type="submit" name="submit" value="Submit" />

</form>