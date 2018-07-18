<script>

    $(document).ready(function(){
    
        $('#login').submit(function(e){
        
            e.preventDefault();
            
            
            var username = $('input#username').val();
            var password = $('input#password').val();
            
            var dataString = 'username=' + username + '&password=' + password;
            
            $.ajax({
                type: "POST",
                url: "<?php echo SITE_PATH; ?>app/login.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $('#cboxLoadedContent').html(html);
                }
            });
        
        });

    });

</script>

<form action="" method="post" id="login">
    <h3>Sign In</h3>

    <?php
        $alerts = $this->getAlerts();
        if($alerts != '') {
            echo '<div class="alert-danger">' . $alerts . '</div>';
        }
    ?>

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo $this->getData('input_user'); ?>" />
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo $this->getData('input_pass'); ?>" />
    </div>
        <input type="submit" name="submit" class="submit btn btn-outline-secondary" value="Login"/>
    </div>
</form>
