<?php
session_start();
header('Content-type:text/html; charset=utf-8');
          include 'include/db.php';	
	  include 'include/head.php';
 	  include 'include/header.php';
	  include 'include/menu.php'; 
 	  include 'include/container.php';
            session_start();
            	if($_GET){  
                        $i=0;
            		if(!$drop_db=$db->query("DROP DATABASE IF EXISTS OWASPTEST")){                                
            			echo "<pre>Could not drop existing database</pre>";
               		}			     	
	            	if(!$create_db=$db->query("CREATE DATABASE OWASPTEST")){
	            		echo "<pre>Could not create database</pre>";  
	            	}
	            	else{
	            	    echo "<pre>"."Database has been created"."</pre>";
                            $i++;
                        }
	            	if(!$db->query('use OWASPTEST')){
	            	    echo "Could not connect database"; 
				    }
	                if(!$db->query("CREATE TABLE users (id int(6) AUTO_INCREMENT,first_name varchar(15),username varchar(15),password varchar(32),PRIMARY KEY (id))"))
            		{
            		    echo "<pre>Table could not be created</pre>";
            		}
            		else {
            		    echo "<pre>'users' table was created.</pre>";
                            $i++;
            		}
                        if(!$db->query("INSERT INTO users VALUES  ('1','admin','admin',MD5('123456')),
                                                                  ('2','Deneme','test',MD5('654321'))"))
                        {
                            echo "<pre>Data could not be inserted into 'users' table</pre>";
                        }
                        else {
                            echo "<pre>Data inserted into 'users' table.</pre>";
                            $i++;
                        }
                        if(!$db->query("CREATE TABLE comment (id int(6),name varchar(15),comment varchar(32))"))
                        {
                            echo "<pre>Table could not be created</pre>";
                        }
                        else{
                            echo "<pre>'comment' table was created.</pre>";
                            $i++;
                        }
                 if($i==4)
                      echo "<pre>Setup successful!</pre>";   
                 else
                     echo "<pre>Setup was not successful</pre>";
                 
                        }
            ?>
          </div>         
        </div>

