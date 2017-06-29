@extends('layouts.app')
@section('title', 'Account Settings | ')
@section('content')
    <h2 class=" text-center">Mananage your Settings</h2>
    <div class="container">
        <!--h2>General Setting</h2-->

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">General Settings</a>
                    <i class=" glyphicon glyphicon-plus"></i>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body table-responsive">
                    <table class="table ">
                        <tr>
                            <td>
                                Username
                            </td>
                            <td class="cent">
                                deekay
                            </td>
                            <td>

                            </td>

                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td class="cent">
                                vyserver@gmail.com
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td class="cent">
                                Dhananjay Kumar
                            </td>
                            <td class="right butt" style="padding-bottom: 2px; padding-top: 2px;">
                                <button class="btn btn-standard" onclick="editname()">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td class="cent">
                                *********
                            </td>
                            <td class="right butt" style="padding-bottom: 2px; padding-top: 2px;">
                                <button class="btn btn-standard" onclick="editpwd()">Edit</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2">Privacy Setting</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body table-responsive">

                    <table class="table ">
                        <tr>
                            <td>
                                Profile Visibility
                            </td>
                            <td class="cent">
                                <input type="radio" name="Profilevisibility" value="Public">Public
                            </td>
                            <td class="right">
                                <input type="radio" name="Profilevisibility" value="Private">Private
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Post Visibility
                            </td>
                            <td class="cent">
                                <input type="radio" name="PostVisibility" value="Public">Public
                            </td>
                            <td class="right">
                                <input type="radio" name="PostVisibility" value="Private">Followers
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Message Privacy
                            </td>
                            <td class="cent">
                                Dhananjay Kumar
                            </td>
                            <td class="right">
                                ....
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion3" href="#collapse3">BlockedUsers
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in ">
                <div class="panel-body table-responsive">
                    <table class="table ">
                        <tr>
                            <td>
                                Username
                            </td>
                            <td></td>
                            <td class="right butt" style="padding-bottom: 2px; padding-top: 2px;">
                                <button class="btn btn-standard" onclick="">Unblock</button>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Username
                            </td>
                            <td>
                            </td>
                            <td class="right butt" style="padding-bottom: 2px; padding-top: 2px;">
                                <button class="btn btn-standard" onclick="editpwd()">Unblock</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="bt-control">
            <button class="btn btn-standard " style="padding-bottom: 2px; padding-top: 2px;">Delete Account</button>
            <button class="btn btn-standard" style="float: right">Save Changes</button>
        </div>
    </div>

@endsection