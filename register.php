<?php 
 require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
           International Conference 
        </title>
        

        <link rel="stylesheet" type="text/css" href="css/main.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        

        <script type="text/javascript">
          function val(){
	         
          
          var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
          
          if (reg.test(frm.email.value) == false) 
          {
            alert('Invalid email address');
            frm.email.focus();	
            return false;
          }

          if(isNaN(frm.phone.value))
          {
            alert("Invalid phone number");
            frm.phone.focus(); 
            return false;
          }
          if((frm.phone.value).length != 10)
          {
            alert("Phone number should be only 10 digits");
            frm.phone.focus(); 
            return false;
          }

            var genderM=frm.male.value;
            var genderF=frm.female.value;

           if(genderM.checked==false && genderF.checked==false )
             {
              alert("You must select male or female");
              return false;
             } 
            
          if( frm.country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
            }
          
          return true;
          }
          </script>

    </head>
    <body>

      <!--Header Section-->

      <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" height="75px" width="150px"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#"  role="button" >
                    ABOUT
                  </a>
                  <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">COMMITTEE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="speakers.html">SPEAKER</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">PROGRAME</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">VENUE</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#"  role="button" >
                    ATTENDING
                  </a>
                  <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">Action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#"  role="button" >
                    AGENDA
                  </a>
                  <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#">Action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid ">
            <div class="row">
           <img src="images/banner2.jpg " class="banner img-responsive"/> 
            </div>
          </div>
         </header>

         <!--Header Section Ends-->

        <!-- Registeration Form -->
      <section>
          <div> 
            <div class=form-heading><b>Register Here</b></div> 
            <div class=container>
           <form name="frm" method="post" action="#" class="myform" >
              <div class="form-group row">
                  <div class="col-sm-1"> </div>
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-9 col-right">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required> 
                  </div>
                </div>
              <div class="form-group row">
                  <div class="col-sm-1"> </div>
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-9 col-right">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
                </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-1"> </div>
                  <label for="inputNo3" class="col-sm-2 col-form-label">Phone No</label>
                  <div class="col-sm-9 col-right">
                    <input type="number" class="form-control" id="inputNo3" placeholder="Mobile" name="phone" required>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="dob" class="col-sm-2 col-form-label">D.O.B</label>
                    <div class="col-sm-9 col-right">
                      <input type="date" class="form-control" id="dob" placeholder="" name="dob" required>
                    </div>
                  </div>
              <fieldset class="form-group">
                <div class="row">
                    <div class="col-sm-1"> </div>
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                   <div class="col-sm-1 col-right">
                    <div class="form-check gender">
                      <input class="form-check-input" type="radio" name="gender" id="male" value="m" checked>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                   </div>
                   <div class=col-sm-1 >
                    <div class="form-check gender">
                      <input class="form-check-input" type="radio" name="gender" id="female" value="f" >
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-7"></div>
                </div>
              </fieldset>
              <div class="form-group row">
                  <div class="col-sm-1"> </div>
                  <label for="country" class="col-sm-2 col-form-label">Country</label>
                  <div class="col-sm-9 col-right">
                    <select name = "country" id="country"> 
                     <option value = "-1" selected>Select Country</option>
                     <option value = "1">USA</option>
                     <option value = "2">UK</option>
                     <option value = "3">INDIA</option>
                  </select>
                  </div>
                </div>
              <div class="form-group row">
                  <div class="col-sm-1"> </div>
                <div class="col-sm-2 col-form-label">T&C</div>
                <div class="col-sm-9 col-right">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="tnc" name="tnc" value="yes">
                    <label class="form-check-label" for="tnc">
                      I agree that I will be present in the Conference.
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                  <button type="submit" name="submit-btn" class="btn btn-primary" onclick="return val();">Register</button>
                </div>
                <div class="col-sm-4"></div>
              </div>
            </form> 

            <?php 
		           if(isset($_POST['submit-btn']))
		             {
                  
                   $name = $_POST['name'];
			             $email = $_POST['email'];
                   $phone = $_POST['phone'];
                   $dob = $_POST['dob'];
                   $gender = $_POST['gender'];
                   $country = $_POST['country'];
                  

				           $query="select * from register where email='$email'";
                   $query_run=mysqli_query($con,$query);
				 
				            if((mysqli_num_rows($query_run))>0)
				              {
					              //email id already exists.
                          echo '<script type="text/javascript">alert("email id already exists, please try other email id")</script>';
				               }
				            else
				              {
					               $query="insert into register values('$name','$email','$phone','$dob','$gender','$country')";
                         $query_run=mysqli_query($con,$query);
					 
					                if($query_run)
				                    {
					 
					                 echo '<script type="text/javascript">alert("Registration Successful!")</script>';
				                    }
				                  else
				                   {
						                echo '<script type="text/javascript">alert("Error!")</script>';
					                  }
					
				                }
				 
                  }
                 
		          ?>

          </div>    
  
          </div>
         </section> 

         
          
         <!--Footer Section Ends-->

               
                <footer class="my-footer page-footer font-small grey">

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© Copyright:
                      <a href="dhairya.lodha@gmail.com"> dhairya.lodha@gmail.com </a> - All rights reserved.
                    </div>
                    <!-- Copyright -->
                  
                  </footer>


         <!--Footer Section Ends-->
    </body>
</html>