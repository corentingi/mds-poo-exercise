<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog posts</title>

        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
        <?php foreach ($posts as $post): ?>
        <div>
            <?php echo $post; ?>
        </div>
        <?php endforeach; ?>
    </body>
</html>
