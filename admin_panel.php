<?php 

session_start();
date_default_timezone_set('Asia/Dhaka');
include 'includes/header.php';

        
?>

<head>
    <link href="css/get.css" rel="stylesheet" >

</head>


<h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold;margin-top: 114px;">Welcome In Admin Panel</h5>
<h6 style="text-align:center;font-family: initial;font-size: 29px;font-weight: bold;">Insert Your Books !</h6>



<form class="login-form" action="insert_book.php" method="POST" enctype="multipart/form-data" >

  <div class="container login-container">
    
        <label><b>Book Name</b></label>
        
        <input class="login-input" type="text" placeholder="Insert Book Name" name="book_name" required>

        <label><b>Writer Name</b></label>

        <input class="login-input" type="text" placeholder="title" name="writer" required>
        
        <label><b>description</b></label>

        <!-- <input class="login-input" type="text" placeholder="details" name="description" required> -->

        <div class="text-area">
              <textarea class="login-input" type="text" placeholder="details" name="description" cols="40" id="text" 
                rows="4" required> </textarea>
        </div>


        <label><b>Date: </b></label>

        <input class="login-input" type="text" name ="date" value="<?php echo  date("Y/m/d") ?> ">  

        <label><b>Time: </b></label>

        <input class="login-input" type="text" name ="time" value="<?php echo  date("h:i:sa") ?> ">                               
        

        <label><b>Insert Image</b></label>

        <!-- <input class="login-input" type="text" placeholder="details" name="image" required> -->
        <input class="login-input" placeholder="image" type="file" name="file">

        
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <button class="login-btn" type="submit"  name="book_post">post</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="log-out">
                <a href="logout.php" class="btn btn-info logout-btn login-btn" >logout</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="log-out">
                <a href="admin_book_list.php" class="btn btn-info logout-btn login-btn" >Book List</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="log-out">
                <a href="user_comment.php" class="btn btn-info logout-btn login-btn" >User Comment</a>
            </div>

        </div>

    
  </div>
       
  
</form>

            

<?php 
    include 'includes/footer.php';
    
?>  