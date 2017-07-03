@extends('layouts.app')
@section('title', 'Message | ')
    @section('content')
        <div class="container">
            <!--div id="head" class=" col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-9  col-xs-12">
                <img src="{{ asset('images/dummyUser.jpg') }}" alt="PP" class="userpic img-fluid" width="40px" height="40px">
                <p id="username">Ayush Kumar Varshney</p>
                <div class="status"></div>
                <div class="dropdown">
                    <button class="option btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a>Delete Chat</a></li>
                    </ul>
                </div>
            </div>
            <div id="content"  >

            </div>
            <div id="foot" class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-9  col-xs-12 ">
                <form>
                    <div class="input-group">
                    <div class=" input-group-btn fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-default btn-file"><input type="file" multiple /></span>
                        </div>
                        <input id="message" type="text" class="form-control" name="message" placeholder="Type your message">
                        <div class="input-group-btn"><button class="btn btn-default" class="tooltip" title="Send"><i class="glyphicon glyphicon-menu-right"></i></button></div>
                    </div>
                </form>

            </div-->
            <div class="row">
                <div id="sidemenu" class="col-lg-3">
                    <div id="sidehead">
                    <img src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                    <p id="myname"> Dhananjay Kumar</p>
                        <input id="search" type="text" placeholder="Search">
                    </div>
                    <div id="sidebody">
                        @for ($i=0;$i<8;$i++)
                        <div class="fhead">
                        <img style="vertical-align:middle" src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                        <div style="display:inline-flex"><span id="friendname" style="">Asif Raza</span><span class="fstatus">online</span></div>
                        </div>
                        <div class="fhead">
                            <img style="vertical-align:middle" src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                            <div style="display:inline-flex"><span id="friendname" style="">Fielder</span><span class="fstatus">online</span></div>
                        </div>
                        @endfor
                    </div>
                    </div>


                <div id="wwind" class="col-lg-9">
                <h2 id="empty">Select friend to start Chat</h2>
                </div>
                <div id="mwind" class="col-lg-9">
                    <div id="mhead" >
                        <img  src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px" >
                        <p>Varad Srivastava</p>
                        <span class=" btn btn-default glyphicon glyphicon-cog pull-right"></span>

                    </div>
                    <div id="mbody">
                    </div>
                    <div id="mfoot">
                        <form>
                            <div class="input-group">
                                <input id="message" type="text" class="form-control" name="message" placeholder="Type your message">
                                <div class="input-group-btn"><button class="btn btn-default" class="tooltip" title="Send"><i class="glyphicon glyphicon-menu-right"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>

        </div> <!--ROW-->
        </div> <!--container --->
    @endsection