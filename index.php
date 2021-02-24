<?php

if($_POST["submit"]) {
  $result='<div class="alert alert-success"> Form submitted successfully </div>';

  if(!$_POST["name"]) {
    $error ='<br/>Please enter your name';
  }
   if(!$_POST["email"]) {
    $error =$error.'</br>Please enter your email address';
  }
   if(!$_POST['comment']) {
    $error =$error.'</br>Please enter your comment below';
  } 
   if ($error){
    $result='<div class="alert alert-danger"> <strong>There were errors(s) in your form: </strong>'.$error.' </div>';
  }
   else {
    if(mail(
      "cristi.nord@gmail.com", "Comment from website!", "Name: ".$_POST['name']."Email: ".$_POST['email']."
      Comment: ".$_POST['comment']
      )){
          $result='<div class="alert alert-success"> <strong>Thank you!I will get back to you ASAP </strong>'.$error.' </div>';
 
      } else {
          $result='<div class="alert alert-danger"> <strong>Message not sent. Something went wrong. Please try again later </strong>'.$error.' </div>';
      }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Latest compiled and minified CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 emailForm">
          <h1>Contact</h1>
          <?php echo $result ?>
          <p class="lead para">
            Please get in touch  I'll get back to you asap.
          </p>
          <form class="my_form" method="post">
            <div class="form-group">
              <label for="name">Your Name:</label>
              <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Your Name"
                
              />
            </div>
            <div class="form-group">
              <label for="email">Your Email:</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Your Email"
                
              />
            </div>
            <div class="form-group">
              <label for="comment">Your Comment:</label>
              <textarea type="text" class="form-control" name="comment"></textarea>
            </div>
            <input
              type="submit"
              name="submit"
              class="btn btn-success btn-lg"
              value="Submit"
            />
          </form>
        </div>
      </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

