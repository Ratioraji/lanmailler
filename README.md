# lanmailler
This is an implemetation of a mailing system that can be deployed within a local connection to communicate via mails 
files could be sent over the network and it includes a user managment module

Language : Php 

Framework : Codeigniter 

Database  : Mysql 

Setup :

install your xampp or wamp server ( windows )

install your Mamp ( Mac )

Install php and mysql ( linux ) a quick google search can help you get this done if you new to the linux enviro.

Am sure you have a browser installed ! :)
 
i. create database with desired name 
ii. find lanmailer.sql in the root folder of this project , copy database scheme to the sql of the created databse 
iii. if all goes fine , check the config folder application/config/databse.php  and make changes to these values based on your systems databse configuration 
	 
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'lanmailer',
	'dbdriver' => 'mysqli',
	
	( This is my database configuration  )

iv. check the config file ( application/config/config.php ) in the config folder and make sure your base url is set correctly 
	
	$config['base_url'] = 'http://localhost/lanmailler/public'; 
	where lanmailler is the name of your project folder in the htdocs arena 
 
v. ones all configurations are set , Hit http://locahost/lanmailler or http://127.0.0.1/lanmailler 

