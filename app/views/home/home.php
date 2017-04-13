<?php
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <title>A Virtual Campus</title>
  <link rel = "stylesheet" href = "<?php echo $css_path; ?>" />
 </head>
 <body>
  
  <header>
   <h1>Welcome to virtual CAMPUS</h1>
   <p class="tagline">
     A Database for Teachers, Students and Courses.
   </p><!--/.tagline-->
  </header>
  <a href = "<?php echo $student_section; ?>"> Student Section </a>
  <a href = "<?php echo $teacher_section; ?>"> Teacher Section </a>
  <a href = "<?php echo $course_section; ?>">  Course Section </a>
  
  <footer>
   <p class = "copyright">
    &copy 2017 Mubashir Mufti
	</p>
 </body>
</html>