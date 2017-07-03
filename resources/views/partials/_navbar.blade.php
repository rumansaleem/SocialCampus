<header>
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Social Campus</a>
        </div>
        @if(Auth::check())
          <ul class="nav navbar-nav">
            <li class="active" ><a href="#"><span class="fa fa-home fa-lg"></span></a></li>
            <li><a href="#"><span class="fa fa-globe fa-lg has-badge"><span class="badge">3</span></span></a></li>
            <li><a href="#"><span class="fa fa-envelope fa-lg has-badge"><span class="badge">6</span></span></a></li>
          </ul>
          <div class="navbar-right">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="fa fa-user fa-lg"></span>
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#"><span class="fa fa-gear"></span> Settings</a></li>
                  <li><a href=""><span class="fa fa-sign-out"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-search-collapse" aria-expanded="false">
              <span class="sr-only">Toggle Search Bar</span>
              <span class="fa fa-search"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-search-collapse">
            <form class="navbar-form navbar-left">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-default"><span class="fa fa-search"></span></button>
                </span>
              </div>
            </form>
          </div>
        @endif
    </div><!-- /.container-fluid -->

  </nav>
</header>
