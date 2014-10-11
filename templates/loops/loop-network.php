<?php
$network_query_posts = network_query_posts( array( 'post_type' => 'posts', 'posts_per_page' => 25 ));

  if( network_have_posts() ) {

    while( network_have_posts()) {
      network_the_post();

      // Get the author id for the current post
      $the_author = network_get_the_author_id();
      $author = get_userdata($id);

      // Get the permalink to the original post on the original blog
      $permalink = network_get_permalink();

      // Get the post title
      $the_title = network_get_the_title();

      // Echo some information and a link
      echo "<a href='" . $permalink . "'>" . $the_title . " by " . $author->user_nicename . "</a>";
    }
  }
?>