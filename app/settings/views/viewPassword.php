<?php
    $this->load(APP_PATH . 'core/templates/templatePageHeader.php');
?>
<div class="container">
    <div class="row">
        <div class="form-wrapper">

        <form action="#" method="post" id="edit">

        <h5>Change password</h5>
        <?php
            $alerts = $this->getAlerts();
            if($alerts != '') {
                echo '<div class="alert-danger">' . $alerts . '</div>';
            }
        ?>

        <div class="form-group">
            <label for="oldpass">Old password</label>
            <input type="password" class="form-control" name="oldpass" id="oldpass" value="<?php echo $this->getData('oldpass'); ?>"/>
        </div>

        <div class="form-group">
            <label for="newpass">New password</label>
            <input type="password" class="form-control" name="newpass" id="newpass" value="<?php echo $this->getData('newpass'); ?>"/>
        </div>

        <div class="form-group">
            <label for="newpass2">Repeat new password</label>
            <input type="password" class="form-control" name="newpass2" id="newpass2" value="<?php echo $this->getData('newpass2'); ?>"/>
        </div>

        <input type="submit" name="submit" class="btn btn-outline-success" value="Save"/>

        </form>

        <?php
            $this->load(APP_PATH . 'core/templates/templatePageFooter.php');
        ?>
        </div>
    </div>
</div>
