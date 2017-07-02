@extends('layouts.app')
@section('title', 'Account Settings | ')
    @section('content')
        <div class="container">
            <div id="head" class=" col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-9  col-xs-12">
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

            </div>
        </div>

    @endsection