<?php
$template_dir = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="robots" content="noindex"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="PROJECT_DESCRIPTION">
    <meta name="keywords" content="PROJECT_KEYWORDS"/>
    <meta itemprop="image" content="<?php echo $template_dir ?>/src/img/image-shared.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $template_dir ?>/css/style.css">
    <?php wp_head(); ?>
</head>