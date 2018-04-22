<!DOCTYPE html>
<html class="no-js" lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo $title ?></title>

    <link href="<?php echo PATH ?>/assets/css/Bootstrap/bootstrap.min.css" rel="stylesheet">

    <?php
    if(!empty($css)){
        foreach($css as $row){
            if(file_exists('app/assets/css/site/' . $row)){
                $caminho = PATH . '/assets/css/site/' . $row;
                echo '<link href="'.$caminho.'" rel="stylesheet">';
            }
        }
    }
    ?>
</head>
<body>