
<div id="nav" class="navbar navbar-primary navbar-fixed-top table" role="navigation">
  <div id="table-cell" class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/" style="font-size: 40px;">Grupo Whiteboard S.A</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li><a id="user-date" href=""><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }}</a></li>
     <li><a id="user-date" href="logout"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
    </ul>
  </div>
</div>