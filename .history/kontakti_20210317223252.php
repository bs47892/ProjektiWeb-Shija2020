<?php include("includes/header.php"); 
if(isset($_POST['submit'])){

  $first_name=mysqli_real_escape_string($dbc,trim($_POST['lastname']));
  $last_name=mysqli_real_escape_string($dbc,trim($_POST['firstname']));
  $email=mysqli_real_escape_string($dbc,trim($_POST['email']));
  $password1=mysqli_real_escape_string($dbc,trim($_POST['password1']));
  $password2=mysqli_real_escape_string($dbc,trim($_POST['password2']));

  if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($password1)&&!empty($password2)&&($password1==$password2)){
  global $dbc;
  $query ="SELECT * FROM users WHERE email ='$email'"; //kontrollon ne db per user ekzistues
  $data=mysqli_query($dbc, $query);
  if(mysqli_num_row($data)==0){ //nese nuk ka
     $query="INSERT INTO `shijarestaurant_db`.`users` (firstname, lastname, email, password) VALUES ('$first_name', '$last_name','$email', '$password1')";
     mysqli_query($dbc,$query);

  //Confirm succes with the user
  echo '<p> Your account has been successfully created. You\'re now ready to <a href="login.php">log in</a>.</p>';
  echo $first_name.'TEST';
  mysqli_close($dbc);
  exit();
  }
  else{
      echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
      $username="";
  }
}
  else{
      //An account already exists for this username, so display an error message
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';

  }
}
mysqli_close($dbc);
?>

<section>
  <div class="containerc">
    <form id="contact" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <h3>CONTACT</h3>
      <h4>Contact me down below!</h4>
      <fieldset>
        <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number (optional)" name="phone_number" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Web Site (optional)" name="web_url" type="url" tabindex="4" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Type your message here...." name="message" tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
      <p class="copyright">Designed by <a href="https://www.instagram.com/fitorexhafa_" class="aboutlink" target="_blank"><strong>Fitore</strong></a></p>
    </form>
  </div>
</section>
<?php include("includes/footer.php");?>