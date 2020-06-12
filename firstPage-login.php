<?php include_once "inc/header_html_loading.php" ?>

    <h1 class="text-center">Welcome to Cute Monsters</h1>
    
    <div class="row">
    
    </div>
    <div class="row">
 
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2 text-right">
        
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">אימייל</label>
                    <input type="email" id="email_conn" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">סיסמא</label>
                    <input type="password" id="password_conn" class="form-control">
            </div>

            <button type="button" id="btn-login" class="btn btn-outline-secondary btn-sm btn-block">התחבר</button>
        </form>
        
         
        </div>
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>

    </div>



    <footer class="footer foFPL">
        by Tal Slilat and Baruch Lebovitz
    </footer>
</body>

</html>




<?php 
// $connect=myspl_connect("localhost","root","");
// $db=mysql_select_db("cute_monster", $connect);

// if(isset($_POST['submit']))
// {
//     $firstName=$_POST['firstName'];
//     $lastName=$_POST['lastName'];
//     $password=$_POST['password'];
    
//     $select=mysql_query("select * from dogowner where name='$firstName' and '$lastName' and '$password'")
//}
?>