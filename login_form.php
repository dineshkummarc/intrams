  <?php  include('dbcon.php') ?>
    
       <form class="navbar-form navbar-left" action="login.php" method="POST">
       <div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><li class="glyphicon glyphicon-user"></li></span>
  <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required autofocus>
   </div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><li class="glyphicon glyphicon-lock"></li></span>
  <input type="password"  name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required autofocus>
</div>
        <button type="submit" class="btn btn-primary">Log In</button>
      </form>
   
 