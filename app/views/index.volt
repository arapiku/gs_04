<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phalcon PHP Framework</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
    </head>
    <body>
        {{ partial("layouts/header") }}
        <div class="container">
            {{ content() }}
        </div>
        {{ partial("layouts/footer") }}
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0ctJg5JPuCr4lRY4Vo8wqBLkyEZBxuV4&callback=initMap"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php if( $_SERVER["REQUEST_URI"] == "/" ) : ?>
        <script type="text/javascript" src="/js/index.js"></script>
        <?php else : ?>
        <script type="text/javascript" src="/js/single.js"></script>
        <?php endif; ?>
    </body>
</html>
