@extends('layouts.landing')
@section('title', 'Login | ')
@section('content')
  <div class="container">
    <h1 class="text-center m-b-50">Campus Network</h1>
      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
        <div id="login" class="container-boxed toggle active">
            <h2 class="m-b-30">Login to Your Account</h2>
            <form class="clearfix" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="email" name="email" placeholder="someone@domain.com" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
              </div>
              <div class="checkbox pull-left">
                <label>
                  <input type="checkbox" name="remember" value="1">
                  Remember me
                </label>
              </div>
              <button type="submit" class="btn btn-block btn-primary btn-lg">Login</button>
              <p class="m-t-20">Don't have an acount? <a href="#register" data-rel="toggle-container">Register here</a></p>
            </form>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
          <div id="register" class="container-boxed toggle">
            <div class="toggle-container">
              <h2 class="m-b-30">Create New Account</h2>
              <ul class="nav nav-pills" role="tablist" id="user-type-tabs" style="margin-bottom:15px">
                <li role="presentation" class="active"><a href="#user-form" aria-controls="user-form" role="tab" data-toggle="tab">User</a></li>
                <li role="presentation"><a href="#college-form" aria-controls="college-form" role="tab" data-toggle="tab">College</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="user-form">
                  <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <input type="text" placeholder="First Name" name="f_name" required class="form-control"/>
                      </div>
                      <div class="form-group col-sm-6">
                        <input type="text" placeholder="Last Name"  name="l_name" required class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="Email" name="email" required class="form-control"/>
                    </div>
                    <div class="form-group">
                      <select name="type" required class="form-control">
                        <option selected>-- Tell us who you are? --</option>
                        <option value="s">Student</option>
                        <option value="t">Teacher</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder="Password" name="password" required class="form-control"/>
                      </div>
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required class="form-control"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" class="form-control"/>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="gender" class="label-control">Gender:</label>
                        <br>
                        <label for="" class="radio-inline">
                          <input type="radio" name="gender" value="m" checked>
                          Male
                        </label>
                        <label for="" class="radio-inline">
                          <input type="radio" name="gender" value="f">
                          Female
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                  </form>
                </div>

                <div role="tabpanel" class="tab-pane" id="college-form">
                  <form>
                    <div class="form-group">
                      <input type="text" placeholder="College Name" required class="form-control"/>
                    </div>
                    <div class="form-group">
                      <select placeholder="University" required class="form-control">
                        <option selected>-- Select University --</option>
                        <option value="0">Delhi University</option>
                        <option value="1">Chandigarh University</option>
                        <option value="2">Pune University</option>
                        <option value="3">Central University</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Email" required class="form-control"/>
                    </div>
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder="Password" required class="form-control"/>
                      </div>
                      <div class="form-group col-sm-6">
                        <input type="password" placeholder=" Confirm password" required class="form-control"/>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                  </form>
                </div>
              </div><!--Tab Content-->
              <p class="m-t-20">Already have an account? <a href="#login" data-rel="toggle-container">Login</a></p>

            </div>
          </div>
        </div>
      </div><!--End of Column -->
    </div>
  @endsection
  @section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        $("a[data-rel=toggle-container]").click(function(event) {
          event.preventDefault();
          $("#register").toggleClass('active');
          $("#login").toggleClass('active');
        });
      });
    </script>
  @endsection
