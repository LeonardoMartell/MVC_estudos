<!DOCTYPE html>
<html>
<head>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/Assets/Css/style.css">
</head>
<body>
    <h1>Topo Do Site</h1>
    <hr>

    <?php $this->loadView($viewName, $viewData); ?>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>/Assets/Js/script.js"></script>
</body>
</html>