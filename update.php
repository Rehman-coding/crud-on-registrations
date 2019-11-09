
<?php


include("connection.php");
 
     $id = $_GET['upd'];

    //  echo $id;

$select ="SELECT * FROM registration_tb WHERE id=$id";
$result = mysqli_query($mysqli, $select);
// echo  $id = $_GET['upd'];
    if (isset($_POST['submit'])) {
     echo $id;
    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $fname = $_POST['fname'];
     $gender = $_POST['gender'];
     $profession = $_POST['pro'];
     $number = $_POST['number'];
     $address = $_POST['address'];
    //  $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
 $query1 = "UPDATE registration_tb SET
                 name = '$name',
                 email = '$email',
                 fname = '$fname',
                 gender = '$gender',
                 profession = '$profession',
                 number = '$number',
                 address = '$address'
                WHERE id=$id";
            mysqli_query($mysqli, $query1);
                echo"Update Successfully";
                header("Location: index.php");
    }

    // mysql_query("UPDATE blogEntry SET content = '".$udcontent."', title = '".$udtitle."' WHERE id = '".$id."'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Registration</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Sign In</a></div>
            </div>  
            <div class="panel-body" >
                <form method="post" >
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                    <form  class="form-horizontal" method="post" >

                    <?php
          while ($row = mysqli_fetch_array($result)) {

         
   
?>
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                       
                        
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField"> Name<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" value="<?php echo $row['name'] ?>" id="id_username" maxlength="30" name="name" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" value="<?php echo $row['email'] ?>" id="id_email" name="email" placeholder="Your current email address" style="margin-bottom: 10px" type="text" />
                            </div>     
                        </div>
                       
                        
                        <div id="div_id_name" class="form-group required"> 
                            <label for="id_name" class="control-label col-md-4  requiredField"> Father Name<span class="asteriskField">*</span> </label> 
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" value="<?php echo $row['fname'] ?>" id="id_name" name="fname" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="div_id_gender" class="form-group required">
                            <label for="id_gender"  class="control-label col-md-4  requiredField"> Gender<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_1" value="M"  style="margin-bottom: 10px">Male</label>
                                 <label class="radio-inline"> <input type="radio" name="gender" id="id_gender_2" value="F"  style="margin-bottom: 10px">Female </label>
                            </div>
                        </div>
                        <div id="div_id_company" class="form-group required"> 
                            <label for="id_company" class="control-label col-md-4  requiredField"> Profession<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                 <input class="input-md textinput textInput form-control" value="<?php echo $row['profession'] ?>" id="id_company" name="pro" placeholder="Your Profession name" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div> 
                         
                        <div id="div_id_number" class="form-group required">
                             <label for="id_number" class="control-label col-md-4  requiredField"> Contact number<span class="asteriskField">*</span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" value="<?php echo $row['number'] ?>" id="id_number" name="number" placeholder="provide your number" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField">Address<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" value="<?php echo $row['address'] ?>" id="id_location" name="address" placeholder="Your Pincode and City" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        <div class="form-group">
                            
                        </div> 
                        <div class="form-group"> 
                           
                            <div class="controls col-md-12 text-center mt-5">
                                
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-large btn-primery" id="submit-id-signup" />
                            </div>
                        </div> 
                            
                    </form>
<?php
}
?>
                </form>
            </div>
        </div>
    </div> 
</div>
    





</div>            
</body>
</html>