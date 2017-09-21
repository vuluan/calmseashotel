<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <script src="<?= PATH_URL; ?>/assets/contentbuilder/contentbuilder/jquery.min.js" type="text/javascript"></script>
    <script src="<?= PATH_URL; ?>/assets/contentbuilder/contentbuilder/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var root = '<?=PATH_URL?>';
        var csrf_token;
    </script>
</head>
<body>
<?= $content; ?>
</body>
</html>
