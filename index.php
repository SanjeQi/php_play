<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Weather Scraper</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
          <h1 class="center white">Weather Forcast</h1>

          <p class="lead center white">
            Enter your city below to get a forecast for the weather.
          </p>

          <form>
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                name="city"
                id="city"
                placeholder="Eg.  London, Paris,  San Francisco..."
              />
            </div>

            <button id="findMyWeather" class="btn btn-success btn-lg">
              Find My Weather
            </button>
          </form>

          <div id="success" class="alert alert-success">Success!</div>

          <div id="fail" class="alert alert-danger">
            Could not find weather data for that city. Please try again.
          </div>

          <div id="noCity" class="alert alert-danger">Please enter a city!</div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
  ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/javascript.js"></script>
</html>
