<?php 
session_start();

$session_username=$_SESSION["username"];
 ?>

<html>  

<html lang="en">  

<head>
<meta name="viewport" content= "width-device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<title>Customer Support</title>
</head>

<body>
<body style = "background-color:#EDD7B2;">
<div class="otherH">
<h1 style = "background-color: #7F1335;" class ="log">SPU Book Finder</h1>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php if($session_username == "administrator"){echo "<a href='index_administrator.php'>Search </a>";}
    else{
      echo "<a href='index_search.php'>Search</a>";
    } ?>
  <a href="add_book_form.php">Post</a>
  <a href="delete_post.php">Delete</a>
  <a href="email_chat.php">Message</a>
  <a href="myAccount.php">My Account</a>
  <a href="support.php">Support</a>
  <?php if($session_username == "administrator"){echo "<a href='add_course_form.php'>Add Courses </a>";} ?>
  <a href="logout.php">Log Out</a>
</div>


<span style="font-size:30px; background-color: #7F1335; cursor:pointer; color:#FFF2CC;" onclick="openNav()">&#9776;</span>
<br>
<br>
<br>
<legend style = "background-color: #7F1335; color: #FFF2CC;">Customer Support</legend>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
} 
</script>

<fieldset>
  <div class="sechalf">
<div id="main">
  <h2 id= "top">What Can We Help You With?</h2>
  <ul>
    <li> <a href="#search">Searching for a Book </a></li>
    <li> <a href="#post">Posting a Book </a></li>
    <li> <a href="#delete">Deleting a Book Post </a></li>
    <li> <a href="#message">Messaging Users </a></li>
    <li> <a href="#account">My Account Page </a></li>
    <li> <a href="#login">Login</a></li>
    <li> <a href="#logout">Logout</a></li>
    <li> <a href="#feedback">Feedback </a></li>
    <li> <a href="#contact">Contact Us </a></li>
  </ul>
  <br>
<!-- search books by selected course  -->
<form>
<fieldset>

<!-- Form Name -->
<legend id = "search">Searching for a Book</legend>
<img src="/imageSupport/search1.png" style="width:500px;height:350px;">
<br>
 <label>There are three options:</label>
 <ul>
    <li> <a href="#searchk">Search by Keyword</a></li>
    <li> <a href="#searchc">Search by Course</a></li>
    <li> <a href="#searcha">Search All </a></li>
 </ul>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>

 <label id = "searchk">To search by keyword:</label>
   <ol>
    <li> Go to the: <a href="index_search.php">Search Page</a></li>
    <li> Scroll down to "Search by Keyword"</li>
    <li> Enter a keyword you would like to search a book by in the textbook provided</li>
    <li> Click on the "Search" button </li>
    <li> Enjoy a list of the current available books in our database matching the keyword!</li>
 </ol>

  <a href="#top"> Return to Top of Page </a>
  <br>
  <br>

 <label id = "searchc">To search by course:</label>
 <ol>
    <li> Go to the: <a href="index_search.php">Search Page</a></li>
    <li> Scroll down to "Search by Course Name"</li>
    <li> Click the drop down arrows</li>
    <li> Select desired course</li>
    <li> Click on the "Search" button </li>
    <li> Enjoy a list of the current available books in our database for that course!</li>
 </ol>

  <a href="#top"> Return to Top of Page </a>
  <br>
  <br>

 <label id = "searcha">To search all books:</label>
  <ol>
    <li> Go to the: <a href="index_search.php">Search Page</a></li>
    <li> Scroll down to "Display All Available Books"</li>
    <li> Click on the "Display" button </li>
    <li> Enjoy a list of all the current available books in our database!</li>
 </ol>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>


<legend id = "post">Posting for a Book</legend>
 <label>There are two options:</label>
 <ul>
    <li> <a href="#postc">Post by Course</a></li>
    <li> <a href="#postm">Post Manually</a></li>
 </ul>

 <a href="#top"> Return to Top of Page </a>
<br>
  <br>

 <label id = "postc">The following will explain how to post a book by course:</label>
 <br>
 <img src="/imageSupport/post1.png" style="width:500px;height:350px;">
<br>
   <ol>
    <li> Go to the: <a href="add_book_form.php">Post Book Page</a></li>
    <li> Scroll down to "Enter Information by Course"</li>
    <li> Click the drop down arrows for the first drop down menu</li>
    <li> Select desired course</li>
    <li> Next, click the drop arrows for the second drow down menu </li>
    <li> Select desired book from course selected</li>
    <li> Enter edition of book </li>
    <li> Optional Step: Enter a description of book you wish to post </li>
    <li> Enter price you wish to sell the book for </li>
    <li> Select condition of book from the drop down menu </li>
    <li> Click "Submit", when you're ready to post the book on our website!</li>
 </ol>

  <a href="#top"> Return to Top of Page </a>
<br>
  <br>

 <label id = "postm">The following will explain how to post a book manually:</label>
 <br>
 <img src="/imageSupport/post2.png" style="width:500px;height:350px;">
<br>
   <ol>
    <li> Go to the: <a href="add_book_form.php">Post Book Page</a></li>
    <li> Scroll down to "Enter Information by Course"</li>
    <li> Click the drop down arrows for the first drop down menu</li>
    <li> Select desired course</li>
    <li> Enter ISBN number of the book </li>
    <li> Enter the Title of the book </li>
    <li> Enter the author(s) of the book </li>
    <li> Enter edition of book </li>
    <li> Optional Step: Enter a description of book you wish to post </li>
    <li> Enter price you wish to sell the book for </li>
    <li> Select condition of book from the drop down menu </li>
    <li> Click "Submit", when you're ready to post the book on our website!</li>
 </ol>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>


<legend id = "delete">Delete a Book Post</legend>
<img src="/imageSupport/delete1.png" style="width:500px;height:350px;">
<br>
<label> A user is able to delete a book post for any reason: whether it is due to unavialbility, no longer interested, sold, etc.</label>
<label>The following will explain how a user can delete a book post: </label>
  <ol>
    <li> Go to the: <a href="delete_post.php">Delete Post Page</a></li>
    <li> Click the drop down arrows</li>
    <li> Select book you wish to delete</li>
    <li> Click on the "Delete" button </li>
    <li> Your book post has been officially deleted from our database!</li>
 </ol>

 <a href="#top"> Return to Top of Page </a>
<br>
  <br>

<legend id = "message">Messaging Users</legend>
<img src="/imageSupport/message1.png" style="width:500px;height:350px;">
<br>
<label>The Message Page, is used for users to contact one another: </label>
<ol>
  <li> Go to the: <a href="email_chat.php">Message Page</a></li>
  <li> Nothing to be done by user for the "From" Textbox. The "From" Textbox, will always be filled with the current user's credentials.</li>
  <li> Enter recipient's credentials. The "To" Textbox, will be filled in by the user, and be filled with the recipient's credentials(the user they wish to contact.)</li>
  <li> Enter in a subject line for the message. The "Subject" Textbox, will be used by the user to send the subject of the message.</li>
  <li> Enter in a message you wish to send. The "Message" Textbox, will be used by the user to enter any information they wish to send to the recipient.</li>
  <li> Click on the "Send" button.</li>
  <li> You're message has been sent to the user!</li>
</ol>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>

<legend id = "account">My Account Page</legend>
<img src="/imageSupport/myAccount1.png" style="width:500px;height:350px;">
<br>
<label>The My Account Page, is used to let the user see their: </label>
<ul>
  <li>Username</li>
  <li>Password</li>
  <li>Change Password</li>
</ul>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>

<label> For a user to change their password, they must</label>
  <ol>
    <li> Go to the: <a href="myAccount.php">My Account Page</a></li>
    <li> Scroll down to "Change Password"</li>
    <li> Enter and confirm their current password </li>
    <li> Enter a new password </li>
    <li> Enter the new password again in the next textbook </li>
    <li> Click on the "Save" button</li>
    <li> Now you're all set to use your new password! </li>
 </ol>

 <a href="#top"> Return to Top of Page </a>
<br>
  <br>

  <legend id = "register">Register</legend>
  <img src="/imageSupport/register1.png" style="width:500px;height:350px;">
<br>
<label>To use SPU Book Finder. You must have an account registered with us. To create an account you must: </label>
<ul>
  <li>Go to our home page: <a href="index.php"> SPU Book Finder</a></li>
  <li>Scroll down to "Sign Up"</li>
  <li>Enter a username, that you would like other users to see</li>
  <li>Enter an e-mail address. Register with a valid SPU e-mail address account</li>
  <li>Enter a password</li>
  <li>Enter the password again to confirm it</li>
  <li>Click on the "Register" button</li>
  <li>Open up a new tab and go to your inbox. </li>
  <li>Confirm account by clicking on a confirmation link sent to your SPU e-mail</li>
  <li>Now you're all set to use SPU Book Finder!</li>
</ul>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>

  <legend id = "login">Login</legend>
  <img src="/imageSupport/login1.png" style="width:500px;height:350px;">
<br>
<label>To use SPU Book Finder. You must have an account registered with us: </label>
<ul>
  <li>Go to our home page: <a href="index.php"> SPU Book Finder</a></li>
  <li>Scroll down to "Log in"</li>
  <li>Enter username and password</li>
  <li>Click on the "Sign In" button</li>
  <li>You've succesfully logged in, and can now use SPU Book Finder!</li>
</ul>

 <a href="#top"> Return to Top of Page </a>
 <br>
  <br>

  <legend id = "login">Log out</legend>
<img src="/imageSupport/menu2.png" style="width:500px;height:350px;">
<br>
<label id ="logout"> To log out of our website, you must follow these steps:</label>
  <ol>
    <li> Go to the left hand corner of each web page.</a></li>
    <li> Click on the three horizontal line image.</li>
    <li> Menu should appear. </li>
    <li> Scroll down to the bottom. </li>
    <li> Click log out</li>
    <li> Now you've successfully logged out! </li>
 </ol>

 <a href="#top"> Return to Top of Page </a>
<br>
  <br>

<legend id = "feedback">Feedback</legend>
 <label>To ensure SPU Book Finder is successful, we need your feedback!</label>
  <p>You can follow this link to take our quick survey. <a href="https://www.surveymonkey.com/r/GPJDVMD">SurveyMonkey </a></p>

  <a href="#top"> Return to Top of Page </a>
<br>
  <br>

<legend id = "contact">Contact Us</legend>
 <label>To contact us for additional support, comments or concerns.</label>
  <p>You can email us at: spubookfinder@gmail.com </p>
 <label>To learn more about our project: Visit Our</label>
 <a href="https://github.com/TeamJakku/SPU-Book-Finder">Github Repository</a>
 <br>

  <a href="#top"> Return to Top of Page </a>
<br>
  <br>



</fieldset>
</form>
</div>
</body>