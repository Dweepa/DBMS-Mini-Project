<?php
$servername = "localhost";
$username = "root";
$password="dweepacomp";

    $conn = mysqli_connect($servername,$username,$password, "shop");
    
    if($conn)
    {
    
$query ="USE SHOP";
mysqli_query($conn,$query);
$query ="DEFAULT CHARACTER SET = utf8";
mysqli_query($conn,$query);
    $query="CREATE TABLE DEPARTMENT(dname varchar(20),dnum integer primary key)";
mysqli_query($conn,$query);
$query="CREATE TABLE CATEGORY(catname varchar(25),catnum integer primary key)";
mysqli_query($conn,$query);
$query="CREATE TABLE AUTHOR(NAME VARCHAR(20),id varchar(10) primary key)";
mysqli_query($conn,$query);
$query="CREATE TABLE STUDENT(ssn varchar(13) primary key,name varchar(20),sem integer,section varchar(2),gender varchar(6),dob varchar(10),address varchar(15),phno varchar(10),email varchar(30),dnum integer,password varchar(20),foreign key(dnum) references department(dnum))";
mysqli_query($conn,$query);
$query="CREATE TABLE TEACHER(ssn varchar(13) primary key,name varchar(20),gender varchar(6),dob varchar(10),address varchar(15),phno varchar(10),email varchar(30),dnum integer,password varchar(20),foreign key(dnum) references department(dnum))";
mysqli_query($conn,$query);

$query="CREATE TABLE BOOK(pid integer primary key,isbn varchar(20),name varchar(30),authorid varchar(20),edition integer,publication varchar(20),photo varchar(25),catnum integer,foreign key(authorid) references author(id),foreign key(catnum) references category(catnum))";
mysqli_query($conn,$query);
$query="CREATE TABLE ADDLOG(addnum integer,pid integer,productprice integer,sellerid varchar(13),sellertype varchar(7),productpicture varchar(15),productdescription varchar(100),
		foreign key(pid) references book(pid), 
		primary key(addnum,sellerid))";
mysqli_query($conn,$query);

$query="CREATE TABLE CART(buyerid varchar(13), buyertype varchar(1), addnum integer, foreign key (addnum) references addlog(addnum), primary key(buyerid, addnum))";
mysqli_query($conn,$query);

$query="CREATE TABLE TRANSACTION(sellerid varchar(13),buyerid varchar(13),paymentid integer primary key,datetr varchar(10), foreign key (buyerid) references cart(buyerid))";
mysqli_query($conn,$query);


    }
    
    /*

INSERT INTO DEPARTMENT VALUES('ELECTRONICS',2);
INSERT INTO DEPARTMENT VALUES('MECHANICAL',3);
INSERT INTO DEPARTMENT VALUES('ELECTRICAL',4);
INSERT INTO DEPARTMENT VALUES('BIOTECHNOLOGY',5);
INSERT INTO DEPARTMENT VALUES('COMPUTER SCIENCE',1);

insert into category values('TEXTBOOKS',1);
insert into category values('CLASS NOTES',2);
insert into category values('TEACHERS MATERIAL',3);
insert into category values('MISC STUDY MATERIAL',4);

insert into author values('KINSTON',1234);
insert into author values('GLIBERT STRANG',9876);
insert into author values('THOMAS CORMEN',0192);
insert into author values('PEARSON',7284);
insert into author values('ELMASRI',2397);

insert into student values('01FB16ECS123', 'ALBERT',4,'A','M','21-09-1998','BANGALORE',9980934912,'ALBERT@PES.EDU',1,'Pjsu9JNF');
insert into student values('01FB16EEC687', 'RIYA',4,'J','F','1-10-1998','BANGALORE',3838388390,'RIYA@PES.EDU',2,'khjkJHDNEKEN9');
insert into student values('01FB16EBT796', 'MANU',4,'Q','M','16-03-1998','DELHI',2947204792,'MANU@PES.EDU',3,'pJBuN64Vu');
insert into student values('01FB16EME019', 'TANYA',4,'O','F','21-04-1998','BANGALORE',2938492838,'TANYA@PES.EDU',4,'J8na7DN39n');

insert into teacher values('PESU12345', 'ROHAN','M','21-09-1968','BANGALORE',9980934912,'ROHAN@PES.EDU',5,'Pjsu9JNF');
insert into teacher values('PESU89995', 'VANI','F','1-10-1985','BANGALORE',3838388390,'VANI@PES.EDU',1,'khjkJHDNEKEN9');
insert into teacher values('PESU35645', 'MANOJ','M','16-03-1968','DELHI',2947204792,'MANOJ@PES.EDU',2,'pJBuN64Vu');
insert into teacher values('PESU27245', 'TEJAS','M','21-04-1958','BANGALORE',2938492838,'TEJAS@PES.EDU',3,'J8na7DN39n');

insert into book values(1	,'8420210432',	'FUNDAMENTALS OF LINEAR ALGEBRA',	'9876',	5,	'ABC',	'ONE.JPG',	1);
insert into book values(2	,'4351091245',	'DBMS',	'9876',	5,	'ABC',	'ONE.JPG',	1);
insert into book values(3	,'5262134510',	'CONCEPTS FOR DATA STRUCTURES',	'9876'	,5,	'ABC',	'ONE.JPG',	1);

INSERT INTO ADDLOG values(2,1,1000,'01FB16EBT796','S','WOW','TWO.jpg');
INSERT INTO ADDLOG values(3,2,900,'PESU12345','T','GOOD','three.jpg');
INSERT INTO ADDLOG values(1,3,450,'01FB16EEC687','S','Texbook is good','one.jpg');

INSERT INTO CART VALUES('01FB16EME019','S',3);
INSERT INTO CART VALUES('PESU35645','T',2);
INSERT INTO CART VALUES('PESU12345','T',1);

INSERT INTO TRANSACTION VALUES('01FB16EBT796','01FB16EME019',1,'22-3-18');
*/

?>


