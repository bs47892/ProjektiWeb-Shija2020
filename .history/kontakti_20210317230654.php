<?php include("includes/header.php");
$message = '';
if (isset($_POST['submit'])) {
   
  $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
  $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
  $phone_number = mysqli_real_escape_string($dbc, trim($_POST['phone_number']));
  $web = mysqli_real_escape_string($dbc, trim($_POST['web_url']));
  $message = mysqli_real_escape_string($dbc, trim($_POST['message']));

  if (!empty($name) && !empty($email) && !empty($message)) {
    global $dbc;

      $query = "INSERT INTO contacts (name, email, phone_number, web_url, message) VALUES ('$name', '$email', '$phone_number', '$web', '$message')";
      mysqli_query($dbc, $query);
  
      $message = "<h5 class=''>Your message been successfully sent.</h5>";
     
        echo $message;
        
      mysqli_close($dbc);
      exit();
   
  }
  else {
    $message = "You must enter all required data";
  }
}
$_SESSION['message'] = $message;
mysqli_close($dbc);
?>



<section>
  <div class="containerc">
  <?php if(isset($_SESSION['message'])){
  echo $_SESSION['message'];
  } ?>
    <form id="contact"  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

<?php include("includes/footer.php"); ?>