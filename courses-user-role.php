<?php

$user = wp_get_current_user();
$userrole = $user->roles[0];

//Get a users info and change their role
//If user picked X role then assign X role
 if ($userrole === 'administrator') {
      // Use sensei shortcode to display specific course
      echo do_shortcode( '[featuredcourses]' );
   }

   else if ($userrole === 'vpi_manager') {
      // Use sensei shortcode to display specific course
      echo do_shortcode( '[featuredcourses]' );
   }

   else if ($userrole === 'contractor') {
      // Use sensei shortcode to display specific course
      echo do_shortcode( '[sensei_courses ids="41629,41632" orderby="name" order="asc"]' );
   }

   else if ($userrole === 'site_inductee') {
      // Use sensei shortcode to display specific course
      echo do_shortcode( '[sensei_courses ids="41629,41632" orderby="name" order="asc"]' );
   }

   else if ($userrole === 'driver') {
      // Use sensei shortcode to display specific course
      echo do_shortcode( '[sensei_courses ids="41520" orderby="name" order="asc"]' );
   }

   // Note this is an action, so nothing needs+ to be
   // returned from the function.
   return;
?>
