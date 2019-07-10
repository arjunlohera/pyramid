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
            <a href="<?=base_url('admin/New_Blog');?>" class="navbar-brand">
                <img src="<?= base_url()?>\assets\img\logo\logo.png" height="50" class="px-2"
                    alt="Pyramid Infotech"> Pyramid Infotech
            </a>
            <button type="button" class="ml-auto navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($this->uri->segment(2) == 'New_Blog'){ echo "active";}?>"><a href="<?=base_url('admin/New_Blog')?>" class="nav-link"><i class="fa fa-edit"></i> New blog</a></li>
                <li class="nav-item <?php if($this->uri->segment(2) == 'All_Blogs'){ echo "active";}?>"><a href="<?=base_url('admin/All_Blogs')?>" class="nav-link"><i class="fa fa-blog"></i> All Posts</a></li>
                <li class="nav-item <?php if($this->uri->segment(2) == 'Insight'){ echo "active";}?>"><a href="<?=base_url('admin/Insight')?>" class="nav-link"><i class="fas fa-chart-line"></i> Insight</a></li>
                <li class="nav-item <?php if($this->uri->segment(2) == 'Logout'){ echo "active";}?>"><a href="<?=base_url('admin/Logout')?>" class="nav-link"><i class="fa fa-sign-out-alt"></i> Log Out</a></li>
            </ul>
            </div>
        </nav>

        