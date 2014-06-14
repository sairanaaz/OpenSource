<?php if ( ! comments_open() ) : ?>
    <h4>Comments are closed.</h4>
<?php else: ?>
 
<h4>Leave a Comment</h4> 
<a name="comments"></a>
            <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform"> 
                <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' /> 
                <input type="text" value="Name" name="author" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Name / Alias (required)</label><br /> 
                <input type="text" value="Email" name="email" onfocus="if(this.value == this.defaultValue) this.value = ''"><label>Email Address (required, not shown)</label><br /> 
                <input type="text" value="" name="url"><label>Website (optional)</label><br /> 
                <textarea rows="7" cols="60" name="comment"></textarea><br /> 
                <input type="submit" value="Add Your Comment" /> 
            </form>
 
<?php endif; ?>
