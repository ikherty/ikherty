<?php

$dbhost = "localhost";
$dbname = "ikherty";
$username = "qq";
$userpassword = "1";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $userpassword);

function get_news() {
    global $db;
    $news_post = $db->query("SELECT * FROM news");
    return $news_post;
}

function get_new_by_id($id) {
    global $db;
    $news_post = $db->query("SELECT * FROM news WHERE id=$id");
    foreach ($news_post as $new_post) {
        return $new_post;
    }
}

function get_user_posts($id) {
    global $db;
    $user_posts = $db->query("SELECT * FROM user_posts WHERE id_user=$id");
    return $user_posts;
}

function get_user($id) {
    global $db;
    $users = $db->query("SELECT * FROM users WHERE id=$id");
    foreach ($users as $user) {
        return $user;
    }
}

function get_user_log_pas($login, $password) {
    global $db;
    $user = $db->query("SELECT * FROM users WHERE login='$login' AND password='$password'");
    return $user;
}

function get_all_users() {
    global $db;
    $users = $db->query("SELECT * FROM users");
    return $users;   
}

function search($search_text) {
    global $db;
    $res = $db->query("SELECT * FROM news WHERE header LIKE '%$search_text%' OR descr LIKE '%$search_text%' OR text LIKE '%$search_text%'");
    echo $res;
    return $res;   
}