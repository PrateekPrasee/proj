



<!DOCTYPE html>
<html>

        <head>
           <title>REGISTRATION</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        </head>
        <body>
          <style>

           
            body{
              background-image: linear-gradient(to right, rgba(240, 210, 150, 0.6), rgba(190, 260, 190, 0.8));
              } </style>
                        
            <div class="container">
              
             <br> <h1  style="font-family: Centaur; color: #C34A36; background-image: linear-gradient(to right top, #809771, #92a87e, #a4b98a, #b7ca97, #cadba4); text-align: center"><u><b> LOGIN / SIGNUP </b></u></h1><br>  
             <h1 style="font-family: Centaur ;color: #C34A36; background-image: linear-gradient(to right top, #809771, #92a87e, #a4b98a, #b7ca97, #cadba4); text-align: center"><u><b> FORM </b></u></h1><br>
            
                <div class="row">
                    <div class="col-lg-6">
                      <div class="card">
                        <h2 class="text-center card-header" style="font-family: Centaur; background-color: #E0D9B5;">Login Form</h2>
                       <form action="validation.php" method="post">
                        <form action="/action_page.php">
                        <div class="form-group" >
                            <label><strong>username</strong></label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        
                         <div class="form-group">
                            <label><strong>Password</strong></label>
                            <input type="Password" name="password" class="form-control">
                         </div>
                         <div class="checkbox">
                         <label><input type="checkbox" name="remember"> Remember Username</label>
                        </div>
                         <button type="submit" class='btn btn-success' > Login </button>
                        </form>
                       </form>
                    </div>
                      </div>
                       
                       <div class="col-lg-6">
                        <div class="card">
                        <h2 class="text-center card-header" style="font-family: Centaur; background-color: #E0D9B5" > Signup Form</h2>
                       <form action="registeration.php" method="post">
                        
                        <div class="form-group" >
                            <label><strong>username</strong></label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        
                         <div class="form-group" >
                            <label><strong>Password</strong></label>
                            <input type="Password" name="password" class="form-control">
                         </div>
                         
                         <button type="submit" class='btn btn-success' autofocus onclick="alert('Signup Successful')" > Sigup </button>
                        
                       </form> 
                        </div>
                    </div>
                </div>                       
            </div><br><br><br><br><br><br><br><br>
              <p style="text-align: center; color: orange; font-size: 115%"><i>©Aryabhata_</i><b>2020</b></p>
        </body>
    </html>