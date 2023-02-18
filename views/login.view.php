    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Login</h1>
        </div>
      </div>
      <div class="row">
      <!-- Content here -->
        <form action="" method="POST">
            <div class="form-grpup">
                <label for="email">Email:</label>
                <input clas= "form-control" type="text" name="email" id="email"/>
            </div>
            <div class="form-grpup">
                <label for="password">Password:</label>
                <input clas= "form-control" type="text" name="password" id="password"/>
            </div>

            <div class="form-group">
                <input type="submit" name = "login" value="Login" />
            </div>
        </form>
      
      </div>
      <div class="row">
        <?php
         if (isset($view_bag['status'])) {
            echo $view_bag['status'];
          }
        ?>
      </div>
    </div>