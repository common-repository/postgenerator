<?php
/*
Plugin Name: PostsGenerator
Description: This plugin create a defined number of post during activation(default: 100). You can 
Version: 1.00
Author: KLK1
License: GPLv2
*/

function generation()
{

for($i=0; $i<100; $i++)
{
	// Create post object
  $my_post = array(
     'post_title' => 'PostsGenerator #'.$i,
     'post_content' => uniqid().'Et eodem impetu Domitianum praecipitem per scalas itidem funibus constrinxerunt, eosque coniunctos per ampla spatia civitatis acri raptavere discursu. iamque artuum et membrorum divulsa conpage superscandentes corpora mortuorum ad ultimam truncata deformitatem velut exsaturati mox abiecerunt in flumen.'.uniqid(),
     'post_status' => 'publish',
     'post_author' => 1
  );

// Insert the post into the database
  wp_insert_post( $my_post);
}  

}
register_activation_hook( __FILE__, 'generation' );
?>