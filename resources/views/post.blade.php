<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog post</title>

        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <?php echo $post_content ?>
    </body>
</html>
