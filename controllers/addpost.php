<?php

$auth->requireAuth();

if(isset($_POST['addpost'])){
    $posts->add($_POST['title'], $_POST['content'], $_POST['image'], $_POST['style'], $_POST['categories']); 
    redirect('index.php');
}