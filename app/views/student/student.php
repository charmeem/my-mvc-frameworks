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
   <h1>Welcome to the Student section of virtual CAMPUS</h1>
    <section>
	    <form id="add_student" method="post" action="<?php echo $add; ?>">
		<h3>Add Student data</h3>
		    <div class = "form-field">	
				<label>Roll Number:</label>
				<input type="text" name="roll_number" />
			</div>
            <div class = "form-field">	
				<label>First Name:</label>
				<input type="text" name="first_name" />
			</div>
			<div class = "form-field">	
				<label>Last Name:</label>
			    <input type="text" name="last_name" />
			</div>
			<div class = "form-field">	
				<label>Current Semester:</label>
			    <input type="text" name="semester" />
			</div>
			<div class = "form-field">	
				<label>Major:</label>
			    <input type="text" name="major" />
			</div>
			<div class = "form-field">	
				<label>Grade:</label>
			    <input type="text" name="grade" />
			</div>
			<div class = "form-field">	
				<input id = "submit" type="submit" Value="Enter" />
			</div>
		</form>				
    </section>
	<br><br>
	<!--Adding listAll action -->
	<form id = "list" method = "post" action = "<?php echo $listAll ?>" >
        <label>
		  <input type = "submit" name = "listAll" value = "List All Records">
        </label>
    </form>	
    <br>
	
	<!--Adding Search action -->
	<section>
	  <form id = "search" method = "post" action = "<?php echo $search ?>" >
        <label>
		  Search Student :
		  <input type = "text" name = "student_search" >
		  <input type = "submit" name = "search" value = "SEARCH">
        </label>
      </form>		
	</section>
  </header>
  <br><br>

<a href = "http://localhost/webapp/">
    <button>Back to Main page</button>
</a>

<br><br><br><br><br><br><br><br>
  
  
  <footer>
   <p class = "copyright">
    &copy 2017 Mubashir Mufti
	</p>
 </body>
</html>