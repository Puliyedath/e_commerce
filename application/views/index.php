<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mac Hoque">

    <title>Products Listing</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="theme.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class='container theme-showcase' role='main'>
        <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron text-center">
        <h1><span class='text-danger'>FOCUS!</span></h1>
      </div>

      <div class='row'>
        <div class='col-lg-12'>
          
          <div class="page-header">
            <h2>Products <small class='pull-right'>
              <a href="/"><u>Your Cart (3)</u></a>
            </small> </h2>
          </div>

          <table class='table table-bordered table-striped'>
            <thead>
              <tr>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Dojo Shirt</td>
                <td>$19.99</td>
                <td>
                  <form class='form-inline' method='post' action=''>
                    <div class="form-group">
                      <select class='form-control'>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                    <button class='btn btn-success btn-medium' type='submit'>Buy</button>
                  </form>
                </td>
              </tr>              
              <tr>
                <td>Dojo Cups</td>
                <td>$39.99</td>
                <td>
                  <form class='form-inline' method='post' action=''>
                    <div class="form-group">
                      <select class='form-control'>
                        <option>1</option>
                        <option>2</option>
                        <option selected>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                    <button class='btn btn-success btn-medium' type='submit'>Buy</button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <!-- .ccol-lg-12 -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container theme-showcase -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>  
  </body>
  </html>