@extends('layouts.app')
@section('title', 'Home Page | ')
@section('content')
  <div class="container">
      <div class="col-xs-12">
        <form class="post-form clearfix" action="#" method="post">
          <div class="form-content">
            <img class="user-img" src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}?s=80" alt="">
              {{ csrf_field() }}
              <textarea id="post-content" rows="1" class="form-control" type="text" name="post" placeholder="Write something..."></textarea>
          </div>
          <div class="form-footer clearfix">
            <input type="file" name="photo" class="pull-left input-sm">
            <button type="submit" class="btn btn-primary btn-sm pull-right">Share</button>
          </div>
        </form>
      </div>
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
      <ul class="posts-list">
        @for($i=0;$i<10;$i++)
          <li class="post-item m-b-20">
            <div class="post-container">
              <div class="post-head clearfix">
                <span class="user-img">
                  <img src="https://www.gravatar.com/avatar/{{ md5('ruman63@gmail.com') }}?s=40" alt="">
                </span>
                <h5 class="users-name"><a href="{{ route('profile.view', ['id'=>0]) }}">Ruman Saleem</a><i class="online-dot"></i></h5>
                <ul class="nav nav-pills pull-right">
                  <li><a href="#"><i class="fa fa-user-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-trash"></i>Delete</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i>Report</a></li>
                    </ul>
                  </li>
                </span>
              </div>
              <div class="post-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, eligendi.
                  <a href="#">alink</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, sunt.
                  <a href="#">#Hashtag</a> Lorem ipsum dolor sit amet. <a href="#">@mention</a>
                </p>
              </div>
              <div class="post-footer p-t-5">
                <div class="clearfix m-b-5">
                  <span class="pull-left"> 9 Likes </span>
                  <span class="pull-left m-l-10"> 12 Comments </span>
                  {{-- Right Aligned --}}
                  <span class="pull-right"> 2 Shares </span>
                </div>
                <ul class="footer-btns">
                  <li><a href="#"><i class="fa fa-heart"></i><span>Like</span></a></li>
                  <li>
                    <a href="#"><i class="fa fa-comment"></i><span>Comment</span></a>

                  </li>
                  <li><a href="#"><i class="fa fa-share"></i><span>Share</span></a></li>
                </ul>
              </div>
            </div>
          </li>
        @endfor
      </ul>
    </div>
  </div>
@endsection
