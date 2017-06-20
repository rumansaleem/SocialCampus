<!DOCTYPE html5>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Ayush Blog</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
  <div class = "container">
    <div class = "row">
      <div class = "col-md-12">
        <div class = "jumbotron">
          <h1 class="text-center">Welcome to Campus Network</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="login-page">
    <div class="row">
      <div class="form col-sm-4">
        <form class="login-form">
          <h2 class="text-center">Login</h2>
          <form>
            <div class="form-group has-feedback">
              <i class="glyphicon glyphicon-user main_color form-control-feedback left"></i>
              <input type="text" class="form-control" placeholder="Username" />
            </div>
            <div class="form-group has-feedback">
              <i class="glyphicon glyphicon-lock main_color form-control-feedback left"></i>
              <input type="password" placeholder="Password" required class="form-control">
            </div>
          <input type = "checkbox" name = "remember" value = "remember me" checked>remember me<br/>
          <div style="text-align:center;">
            <button>login</button>
          </div>
          <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
      </div>

      <!--Sign up block-->

      <div class = "reg-form col-sm-5">

        <div class="form">
          <h2 class="text-center">Sign up</h2>
          <!-- Nav tabs -->

            <ul class="nav nav-tabs" role="tablist" id="myTabs" style="margin-bottom:15px">
              <li role="presentation" class="active"><a href="#Student" aria-controls="Student" role="tab" data-toggle="tab">Student</a></li>
              <li role="presentation"><a href="#Teacher" aria-controls="Teacher" role="tab" data-toggle="tab">Teacher</a></li>
              <li role="presentation"><a href="#College" aria-controls="College" role="tab" data-toggle="tab">College</a></li>
            </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Student">
              <form>
                <div class="col-sm-6">
                  <input type="text" placeholder="FirstName" required class="form-control"/>
                </div>
                <div class = "col-sm-6">
                  <input type="text" placeholder="LastName"  required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="email/phoneNo" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="password" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder=" confirm password" required class="form-control"/>
                </div>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Date of Birth" required class="form-control"/>
                  </div>
                  <div class = "col-sm-6">
                    <input type="text" placeholder="Gender"  required class="form-control"/>
                  </div>
                  <div style="text-align:center;">
                    <button class="">Register</button>
                  </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="Teacher">
              <form>
                <div class="col-sm-6">
                  <input type="text" placeholder="FirstName" required class="form-control"/>
                </div>
                <div class = "col-sm-6">
                  <input type="text" placeholder="LastName"  required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="text" placeholder="email/phoneNo" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="password" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder=" confirm password" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="text" placeholder="Department" required class="form-control"/>
                </div>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Date of Birth" required class="form-control"/>
                  </div>
                  <div class = "col-sm-6">
                    <input type="text" placeholder="Gender"  required class="form-control"/>
                  </div>
                  <div style="text-align:center;">
                    <button class="">Register</button>
                  </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="College">
              <form>
                <div class="col-sm-12">
                  <input type="text" placeholder="CollegeName" required class="form-control"/>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="University" required class="form-control"/>
                </div>
                <div class="col-sm-12">
                  <input type="text" placeholder="email/phoneNo" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder="password" required class="form-control"/>
                </div>
                <div class="col-md-12">
                  <input type="password" placeholder=" confirm password" required class="form-control"/>
                </div>
                <div style="text-align:center;">
                  <button class="">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
  </html>
