<link type="text/css" rel="stylesheet" href="<?php echo APP_ASSETS; ?>css/colorbox.css" >
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/jquery.colorbox-min.js" ></script>
<script type="text/javascript" src="<?php echo APP_ASSETS; ?>js/tiny_mce/tiny_mce.js" ></script>

<script>
    $(document).ready(function(){
        $('.cms_edit').each(function(){

            var height = $(this).outerHeight();
            if (height < 25) { height = 25; }

            var width = $(this).parent().width();
            $(this).height(height).width(width);

            $(this).find('.cms_edit_link').height(height-2).width(width-2);
        });

        $('#toolbar_edit').click(function(e) {
            e.preventDefault();

            if($(this).text() == 'View'){
                $(this).text(' Edit ');
            } else {
                $(this).text('View');
            }
            $('.cms_edit_link').toggle();
            $('.cms_edit_type').toggle();
        });

        $('.cms_edit_link, .cms_edit_type').click(function(e){
            $(this).colorbox({});
        });

        $('.cms_panel, .cms_password').click(function(e){
            $(this).colorbox({
                iframe: true,
                top: '10px',
                width: '600px',
                height: '500px'
            });

        });

    });

</script>