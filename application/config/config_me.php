<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
Developer Config

Config in this file are override config in database. Leave it blank to use
config in database.

|--------------------------------------------------------------------------
| Instansi
|--------------------------------------------------------------------------
*/
$config['instansi']['title'] = '';
$config['instansi']['nama_pendek'] = '';
$config['instansi']['nama_panjang'] = '';
$config['instansi']['alamat'] = '';

/*
|--------------------------------------------------------------------------
| Developer Info
|--------------------------------------------------------------------------
*/
$config['dev']['name'] = '';
$config['dev']['year'] = '';
$config['dev']['version'] = '0.0.0.0';

/*
|--------------------------------------------------------------------------
| Sistem Info
|--------------------------------------------------------------------------
*/
$config['app_id']='AVENXO';
$config['nama_program'] = 'AVENXO';
$config['desc_program'] = '';

/*
|--------------------------------------------------------------------------
| Email
|--------------------------------------------------------------------------
*/
$config['email_protocol']='smtp';
$config['email_smtp_host']='ssl://smtp.gmail.com';
$config['email_smtp_user']=''; // noreply@gmail.com
$config['email_smtp_pass']='';
$config['email_smtp_port']=465;
$config['email_mailtype']='html';
$config['email_charset']='utf-8';
$config['email_newline']="\r\n";

/*
|--------------------------------------------------------------------------
| Multi Directory
|--------------------------------------------------------------------------
*/
$config['cdn'] = "http://".$_SERVER['HTTP_HOST'].
str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
$config['all_account_url'] = "http://".$_SERVER['HTTP_HOST'].'/account/index.php/login/index/';
$config['bkd_no_pp']=$config['cdn']."assets/contents/default/images/no_image.jpg";
$config['icon']['pdf']=$config['cdn'].'assets/apps/img/pdf.png';


?>