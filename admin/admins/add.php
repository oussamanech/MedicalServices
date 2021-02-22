<?php 
    require_once '../../config.php'; 
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';
    //require_once BL.'functions/messages.php';
?>

<?php 
    if( isset($_POST['submit']) )
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $password_hash = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_date_add`)
                            VALUES (NULL, '$name','$email','$password', 'admin', CURRENT_TIMESTAMP);";
        $success_message= db_insert($sql);

        require_once BL.'functions/messages.php';
    }

?>



<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white"> Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>







<?php 

require_once BLA.'inc/footer.php';

?>