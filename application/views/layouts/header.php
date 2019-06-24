<!doctype html>
<html>

<head>
    <title><?=$page_title;?></title>
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="<?php foreach($keywords as $keyword) echo $keyword.', ';?>">
    <!-- Loading css files -->
    <link rel="shortcut icon" type="image/png" href="<?=base_url()?>/assets/img/logo/favicon.png" />
    <?php 
        foreach ($css as $c) { ?>
    <link rel="stylesheet" type="text/css" href="<?=$c?>">
    <?php } ?>

</head>

<body class="">
        <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-A_primary">
            <a href="#" class="navbar-brand">
                <img src="<?= base_url()?>\assets\img\logo\logo.png" height="50" class="px-2"
                    alt="Pyramid Infotech"> Pyramid Infotech
            </a>
            <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?=base_url()?>" class="nav-link">Home</a></li>


                    <!-- <li class="nav-item dropdown">
                        <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown" id="navbarDropdown"
                            role="button">Service</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="web.html" class="dropdown-item">Web Development</a>

                            <a href="#" class="dropdown-item">Other service</a>
                            <a href="#" class="dropdown-item">company</a>
                        </div>
                    </li> -->

                    <li class="nav-item"><a href="<?=base_url()?>main/blog" class="nav-link">Blog</a></li>

                    <li class="nav-item"><a href="<?=base_url()?>main/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="<?=base_url()?>main/about" class="nav-link">About Us</a></li>
                </ul>
            </div>
        </nav>