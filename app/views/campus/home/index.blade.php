@extends('layouts.campus_master')

@section('title')
    @parent - Grupo Whiteboard S.A
@stop

@section('content')
    <div id="content" class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#" class="btn-primary">Menu de opciones</a></li>
            <li><a href="#">Reports</a></li>
            <li class="active"><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!--h1 class="page-header">Dashboard</h1-->
          <div id="Archivos" class="row">
            <div id="class" class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
             {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
             <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
            <div class="col-6 col-sm-6 col-lg-3" style="text-align:center;">
              <!--h2>Heading</h2-->
              {{HTML::image('img/doc4.png', '', array('class'=>'btn btn-default image img-rounded folder', 'title'=>'Estudiantes'))}}
              <p>Sesión 1</p>
            </div><!--/span-->
          </div>
        </div>
      </div>
    </div>
@stop