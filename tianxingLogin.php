<!DOCTYPE html>

<html>

<head>

	<title>Index Page</title>

	<link rel="stylesheet" href="style.css">

	

<script

src = "check_email.js"> 

	</script>

	

</head>



<body>



<div id="head">

	<h1>SPU Book Finder</h1>

<div class="topnav">

	<a href="edit_account.html">My Account</a>

	<a href="search.html">Search Book</a>

	<a href="add_book_form.html">Add Book</a>

	<a href="edit_posts.html">Edit</a>

</div>

	

<button onclick="document.getElementById('id01').style.display='block'" style="width:40%; height: 80px; font-size:3em; margin: 0 auto">Login</button>



<button onclick="document.getElementById('id02').style.display='block'" style="background-color: maroon; width:40%; height: 80px; font-size:3em; margin: 0 auto">Sign Up</button>



<div id="id01" class="modal">

  

  <form class="modal-content animate" action="/action_page.php">

    <div class="imgcontainer">

      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <img src="img_avatar2.png" alt="Avatar" class="avatar">

    </div>



    <div class="container">

      <label for="uname"><b>Username</b></label>

      <input type="text" placeholder="Enter Username" name="uname" required>



      <label for="psw"><b>Password</b></label>

      <input type="password" placeholder="Enter Password" name="psw" required>

        

      <button type="submit">Login</button>

      <label>

        <input type="checkbox" checked="checked" name="remember"> Remember me

      </label>

    </div>



    <div class="container" style="background-color:#f1f1f1">

      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

      <span class="psw">Forgot <a href="#">password?</a></span>

    </div>

  </form>

</div>



<div id="id02" class="modal">

  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

  <form class="modal-content" name="signupForm" onsubmit="return checkEmail()" action="/action_page.php">

    <div class="container">

      <h1>Sign Up</h1>

      <p>Please fill in this form to create an account.</p>

      <hr>

      <label for="email"><b>Email</b></label>

      <input type="email" placeholder="Enter Email" name="email" required>



      <label for="psw"><b>Password</b></label>

      <input type="password" placeholder="Enter Password" name="psw" required>



      <label for="psw-repeat"><b>Repeat Password</b></label>

      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      

      <label>

        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me

      </label>



      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>



      <div class="clearfix">

        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

        <button type="submit" class="signupbtn" >Sign Up</button>

      </div>

    </div>

  </form>

</div>





</div>

<div id="team">

	<h2>Our Team</h2>

	<div id="member">

		<img src="picture/bulbasaur.png" alt="bulbasaur" class="member">

		<h2>Celena</h2>

	</div>



	<div id="member">

		<img src="picture/squirtle.png" alt="squirtle" class="member">

		<h2>Monica</h2>

	</div>



	<div id="member">

		<img src="picture/pikachu.png" alt="pikachu" class="member">

		<h2>Tianxing</h2>

	</div>



	<div id="member">

		<img src="picture/chamander.png" alt="charmander" class="member">

		<h2>Cesar</h2>

	</div>

</div>

<script>

// Get the modal

var modal = document.getElementById('id01');

var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {

    if (event.target == (modal||modal2)) {

        modal.style.display = "none";

        modal2.style.display = "none";

    }

}

</script>

</body>

</html>