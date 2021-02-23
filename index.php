<?php

if($_POST["submit"]) {
  $result='<div class="alert alert-success"> Form submitted </div>';
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
            Please get in touch  I'll get back to you as soon as I can.
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
              <textarea class="form-control" name="comment"> </textarea>
            </div>
            <input
              type="submit"
              name="submit"
              class="btn btn-warning btn-lg"
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
