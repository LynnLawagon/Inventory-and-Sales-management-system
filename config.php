<?php
$host='127.0.0.1'; $db='general_sales_db'; $user='root'; $pass='';
try { $pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass,[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]); }
catch(PDOException $e){ http_response_code(500); die('Database connection failed. Start MySQL in Laragon and import database.sql. Details: '.htmlspecialchars($e->getMessage())); }
if(session_status()===PHP_SESSION_NONE) session_start();
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function go($p='dashboard'){header('Location: index.php?page='.$p);exit;}
function flash($m,$type='success'){$_SESSION['flash']=['m'=>$m,'t'=>$type];}
function require_login(){if(empty($_SESSION['user_id']))go('login');}
function is_admin(){return ($_SESSION['role']??'')==='admin';}
function money($n){return '₱'.number_format((float)$n,2);}
?>
