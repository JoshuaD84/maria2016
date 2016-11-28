<?php if ( comments_open() ) : ?>
   <hr class="end-of-content section-divide"  />
   <h1 id="comments-header">Comments</h1>
   <ul id="comments">
      <?php wp_list_comments (); ?>
   </ul>
   <?php 
      comment_form(); 
   ?>
<?php endif; ?>
