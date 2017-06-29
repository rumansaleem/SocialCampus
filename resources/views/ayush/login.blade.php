@extends('layouts.app')
@section('title', 'Login | ')
@section('content')
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
  </div>
@endsection
