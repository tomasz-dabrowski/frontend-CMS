<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/colorbox.css" >
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/jquery.colorbox-min.js" ></script>

<script>

    $(document).ready(function(){
        $.colorbox({
            href: '<?php echo SITE_PATH; ?>app/login.php'
        });
    });

</script>