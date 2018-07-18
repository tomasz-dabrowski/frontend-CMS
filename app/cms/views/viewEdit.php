<script>

    $(document).ready(function(){
    
        $('#edit').submit(function(e){
        
            e.preventDefault();
            
            var id = "<?php echo $this->getData('block_id'); ?>";
            var type = $('#type').val();

            <?php if ($this->getData('block_type') == 'wysiwyg') { ?>
                tinyMCE.triggerSave();
            <?php } ?>

            var content = $('#field').val();
            var dataString = 'id=' + id + '&field=' + content + '&type=' + type;

            $.ajax({
                type: "POST",
                url: "<?php echo SITE_PATH; ?>app/cms/editController.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $('#cboxLoadedContent').html(html);
                }
            });
        
        });

    });

</script>

<?php if($this->getData('block_type') == 'wysiwyg') { ?>

<script>

tinyMCE.init({
        // General options, default for textarea
        mode : "none",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options, which buttons to display
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
        width: "800px", // custom width
        height: "300px", // custom height

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});

setTimeout(function() {tinyMCE.execCommand('mceAddControl',false, 'field');}, 0);

///** tiny mce 4 */
//    tinymce.init({
//        selector: 'textarea',
//        height: 500,
//        theme: 'modern',
//        plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
//        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
//        image_advtab: true,
//        templates: [
//            { title: 'Test template 1', content: 'Test 1' },
//            { title: 'Test template 2', content: 'Test 2' }
//        ],
//        content_css: [
//            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
//            '//www.tinymce.com/css/codepen.min.css'
//        ]
//    });
//    /** end tiny mce 4 */

</script>

<?php } ?>

<div class="form-wrapper">

    <form action="" method="post" id="edit" class="well">
        <legend><h4><span style="color: #777;">Edit block:</span> <strong><?php echo $this->getData('block_id') ?></strong></h4></legend>
        <?php echo $this->getData('cms_field') ?>
        <input type="hidden" id="type" value="<?php echo $this->getData('block_type') ?>" />
        <hr />
        <input type="submit" name="submit" class="btn btn-outline-success" value="Save"/>
    </form>

</div>
