<link href="<?= PATH_URL; ?>/assets/contentbuilder/contentbuilder/contentbuilder.css" rel="stylesheet" type="text/css" />
<link href="<?= PATH_URL; ?>/assets/css/frontend/sweetalert.css" rel="stylesheet" type="text/css" />
<script src="<?= PATH_URL; ?>/assets/js/frontend/sweetalert.min.js" type="text/javascript"></script>
<input type="hidden" value="<?=$this->security->get_csrf_hash()?>" id="csrf_token" name="csrf_token" />
<header>
    <h1>Test ne</h1>
</header>
<div id="contentarea" class="is-container container">
    <?= parserContentToHtml($result[0]->content); ?>
</div>

<div id="panelCms">
    <button onclick="save()" class="btn btn-primary"> Save </button>
    <button onclick="javacript:;" class="btn btn-default"> BackEnd </button>
</div>
<script type="text/javascript">
    var count_img_success = 0;
    var base_url = '<?= PATH_URL; ?>';

    function save() {
        count_img_success = 0;
        var img = $("#contentarea img");
        if (img.length > 0) {
            $.each(img, function( index, value ) {
                if (value.src.indexOf(base_url) <= -1) {
                    $.post( base_url + "static_pages/ajaxConvertImage", { 
                        img: value.src,
                        csrf_token: $("#csrf_token").val()
                    })
                    .done(function(data) {
                        value.src = base_url+data;
                        count_img_success ++;
                        saveData();
                    });
                }
                else {
                    count_img_success ++;
                    saveData();
                }
            });
        }
        else {
            saveData();
        }
    }

    function saveData() {
        var sHTML = $('#contentarea').data('contentbuilder').html();
        var img = $("#contentarea img");
        console.log(img.length, count_img_success);
        if(img.length == count_img_success) {
            $.post( base_url + "static_pages/ajaxUpdateContent", { 
                slug: "content-builder", 
                content: sHTML,
                csrf_token: $("#csrf_token").val()
            })
            .done(function( data ) {
                data = data.split(".");
                token_value  = data[1];
                $('#csrf_token').val(token_value);
                swal("Good job!", "You clicked the button!", "success")
            });
        }
    }

    jQuery(document).ready(function ($) {
        var base_url = '<?= PATH_URL; ?>';
        var base_url_content_builder = '<?= PATH_URL; ?>/assets/contentbuilder/';
        $("#contentarea").contentbuilder({
            snippetFile: base_url + 'home/content_snippets',
            snippetOpen: true,
            toolbar: 'left',
            iconselect: base_url_content_builder + 'assets/ionicons/selecticon.html'
        });
    });

    function view() {
        /* This is how to get the HTML (for saving into a database) */
        var sHTML = $('#contentarea').data('contentbuilder').viewHtml();
    }
</script>
