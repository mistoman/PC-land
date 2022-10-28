<?php get_header(); 

$policies = get_field('private_policy_text');
?>


<h1 class="private-policy-title"><?php the_field('private_policy_page'); ?></h1>

<?php echo nl2br($policies);?>



<?php
get_footer();

?>
