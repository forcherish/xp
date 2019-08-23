<?php
require_once "TextDao.php";

header("Content-type: text/html; charset=utf-8");
$textDao = new TextDao();
$res = $textDao->findAll();
$res1 = $textDao->findById(1);
$arr = [
    '第一个','胡','述','aaaaaaa'
];
$textDao->insert($arr);
