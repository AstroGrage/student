<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management system</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
   
  </head>
  
  <body>
    <section class="header">
        <nav>
        <a href="index.php">
            <img src="image/red_logo.png" /> </a>
        <div class="nav-links">
          <i class="fa fa-window-close"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars"></i>
      </nav>
    <!--Student form-->
   <div class="form">
    <form action="register.php" method="post" name="contact" onsubmit = "return(validate());">
      <h3>Student registration form</h3><hr><br>
       <label for="fullname">fullname</label>
       <input type="text" name="fullname" id="fullname" 
       placeholder="enter fullname" maxlength="50"><br />

       <label for="surname">Surname</label>
       <input type="text" name="surname" id="surname" 
       placeholder="enter surname" maxlength="50"><br />

  
       <label for="gender">gender</label>
       <select name="gender" id="gender">
       <option value="">--Select gender--</option>
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       </select><br />

       <label for="address">Address:</label>
       <textarea id="address" name="address" 
       placeholder="enter your address" class="form-control" rows="5"></textarea><br/>


       <label for="phone">Phone</label>
       <input type="number" name="phone" id="phone" 
       placeholder="please enter phone number"><br />

       <label for="id">Student ID</label>
       <input type="text" name="id" id="id" 
       placeholder="please enter student ID"><br />

       <label for="username">Username</label>
       <input type="text" name="username" id="username" 
       placeholder="please enter Username"><br />

      <label for="Password">New Password: </label>
       <input type="text" name="password" id="password"
       placeholder="Enter new* password"><br />
       <!--<label for="Password">Confirm Password: </label>
       <input type="text" name="Confirm Password" id="password"
       placeholder="Confirm* new password"><br />-->
      
       <button type="submit" class="btn btn-outline-secondary" id="insert" name="insert" value="insert">Submit Now!</button>
    </form>
  </div>
</section>
  </body>
</html>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student";
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($servername,$username,$password,$database);
 
if(!$conn){
    echo("Database connection failed");
}

$fullname = "";
$surname = "";
$gender = "";
$address = "";
$phone = "";
$id = "";
$user = "";
$password = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//get values from the form
function getPosts()
{
    $posts = array();

    $posts[0] = $_POST['fullname'];
    $posts[1] = $_POST['surname'];
    $posts[2] = $_POST['gender'];
    $posts[3] = $_POST['address'];
    $posts[4] = $_POST['phone'];
    $posts[5] = $_POST['id'];
    $posts[6] = $_POST['username'];
    $posts[7] = $_POST['password'];
    
    return $posts;
}
// Insert
if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO student_m VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
    try{
        $insert_Result = mysqli_query($conn,$insert_Query);
        
        if($insert_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
                echo '<script>alert("1 record has been inserted successfully.")</script>';

            }else{
                echo '<script>alert("Error, could not insert record. Please try try again!")</script>';
            }
        }
    } catch (Exception $ex) {
        echo '<script>alert("Error, Please restart the process")</script>';
    }
}

?>
<!--Computer Validation-->

<script type="text/javascript">

      function validate() {

        if( document.contact.fullname.value == "" ) {
            alert( "Please enter your fullname" );
            document.contact.fullname.focus() ;
            return false;
         }
         if( document.contact.surname.value == "" ) {
            alert( "Please enter surname" );
            document.contact.surname.focus() ;
            return false;
         }
      
         if( document.contact.gender.value == "" ) {
            alert( "Please enter gender" );
            document.contact.gender.focus() ;
            return false;
         }
         if( document.contact.address.value == "" ) {
            alert( "Please enter address" );
            document.contact.address.focus() ;
            return false;
         }
         if( document.contact.phone.value == "" ) {
            alert( "Please enter contact" );
            document.contact.phone.focus() ;
            return false;
         }
         if( document.contact.id.value == "" ) {
            alert( "Please enter studid" );
            document.contact.id.focus() ;
            return false;
         }

         if( document.contact.username.value == "" ) {
            alert( "Please enter username" );
            document.contact.username.focus() ;
            return false;
         }
         if( document.contact.password.value == "" ) {
            alert( "Please enter password" );
            document.contact.password.focus() ;
            return false;
         }
         return( true );

      }
      
</script>