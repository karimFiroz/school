<?php include('include/header.php');?>
<?php 
$fonts="vardana";
$bgcolor="#0BB7C0";
$fontcolor="#ffffff";
?>


<!DOCTYPE html>
<html>
<head>
<title>MYSQL Queries</title>
<style>
body{background:#dddddd;}
.tap{background:#E8E3E7;}
p{font-size:1em;}
</style>
</head>
<body>
<div style="padding-left:75px;padding-right:75px;color:indigo;">

<h1>Structured Query Language(SQL)</h1>
<div style="align:left;font-size:1.25em;"><br /><br />
<p>CREATE DATABASE- The new database is created<br />

ALTER DATABASE-Database is executed<br />

CREATE TABLE - New tables are made<br />

ALTER TABLE-The table is executed<br />

CREATE INDEX-INDEX is created<br />

DROP INDEX-INDEX is deleted<br />

DML-Data Manipulation Language<br />

Query (search) and update are made with DML part of SQL .<br />

SELECT- loads data from the database<br />

UPDATE- Data updates (update)<br />

DELETE- Deletes data from the database<br />

INSERT INTO- Inserts data in the database<br />


<h3 align="center"><u><b>Essential</b></u></h3><br />


select id,roll,guide,red_crecent from stdsalary where guide=35 and id order by id asc;<br />
select roll,examFee from stdsalary where examFee=550 order by id asc;<br />
select distinct id,roll from stdsalary id order by id asc;<br /><br />
select id,roll,stdName,phone from stdsalary where ccc=2500 order by id asc;<br /><br />
select id,roll,stdName,guide,red_crecent from stdsalary where guide=35 order by id asc;<br /><br />
select count(others),sum(others),sum(ccc),sum(school),sum(total) from stdsalary;<br /><br />
 update stdsalary set fName='Farid Ahmmad',mName='Lipi Akter',phone='01831-831750',pic='images/ar05.jpg'where id=28;<br /><br />
 SELECT * FROM stdsalary WHERE stdName LIKE"%Das%";<br /><br />
 update stdsalary set stdName='Priya Moni Dash' where SN=125;<br /><br />
SELECT count(others) FROM `stdsalary`where section='Science';<br /><br />
select count(others),sum(others) from stdsalary where section='science';<br />
select count(others),sum(others) from stdsalary where section='arts';<br />
select count(others),sum(others) from stdsalary where section='commerce';<br /><br />
select count(total),sum(total),sum(school),sum(ccc),sum(others) from stdsalary;<br /><br />
select count(others),sum(others),sum(school),sum(ccc),sum(total) from stdsalary where section='science';<br />
select count(others),sum(others),sum(school),sum(ccc),sum(total) from stdsalary where section='arts';<br />
select count(others),sum(others),sum(school),sum(ccc),sum(total) from stdsalary where section='commerce';<br /><br />
update stdsalary set pic='images/sc03.jpg' where SN=1;<br />
SELECT count(receiptNo),sum(total) FROM stdsalary WHERE receiptNo BETWEEN 235651 AND 235700;<br /><br />
SELECT SN, date,COUNT(receiptNo),SUM(current),SUM(dues),SUM(advance),SUM(red_crecent),<br />
SUM(guide),SUM(examFee), SUM(others),SUM(total) FROM stdsalary where date='28/06/2018';<br /><br />
select count(others) from stdsalary where others=30;<br />
select roll,others from stdsalary where others=30;<br />
select roll,others from stdsalary where others=30 AND date='25/06/2018';<br />
select roll,examFee from stdsalary where examFee=500;<br />
select count(examFee) from stdsalary where examFee=500;<br />
select roll,examFee from stdsalary where examFee=500 AND date='25/06/2018';<br />
select count(examFee) from stdsalary where date='27/06/2018';<br />
<p>
update stdsalary<br />
set receiptNo=119834<br />
where SN=432;<br /><br />
<p>বিভিন্ন তারিখে মোট আদায়</p>
SELECT SN, date, SUM(total),COUNT(receiptNo) FROM stdsalary group by date order by date asc;<br /><br />
When admission going on:<br /><br />
<p>ভর্তির সময় নির্দিষ্ট তারিখে বিভিন্ন খাতে মোট আদায়। </p>
SELECT SN, date,COUNT(receiptNo),SUM(current),SUM(ccc),SUM(school),SUM(red_crecent),<br />
SUM(guide), SUM(others),SUM(total) <br />
FROM stdsalary <br />
where date='23/01/2018';<br /><br />
Every salary date:<br /><br />
<p>বেতনের তারিখে বিভিন্ন খাতে মোট আদায়</p>
SELECT SN, date,COUNT(receiptNo),SUM(current),SUM(dues),SUM(advance),SUM(red_crecent),<br />
SUM(guide), SUM(others),SUM(re_admission),SUM(total) FROM stdsalary where date='10/05/2018';<br /><br />

SELECT * FROM stdsalary where others=25;<br /><br />
SELECT COUNT(*),SUM(others) FROM `stdsalary` WHERE others=25;<br /><br />
SELECT * FROM stdsalary where re_admission=350;<br /><br />
SELECT COUNT(*),sum(re_admission) FROM stdsalary where re_admission=350;<br /><br />



SELECT COUNT(*),SUM(current),SUM(ccc),SUM(school),SUM(red_crecent),<br />
SUM(guide), SUM(others),SUM(total) FROM stdsalary;<br /><br />
<p>এ পর্যন্ত মোট আদায়</p>
SELECT COUNT(receiptNo),SUM(current),SUM(ccc),SUM(school),SUM(red_crecent),<br />
SUM(guide), SUM(others),SUM(total) FROM stdsalary;<br /><br />
</p>
CHAR ... ... ... String, length 0 - 255<br />

VARCHAR ... .... String, length 0 - 255  <br />                  

TINYTEXT ... ... String, length 0 - 255	<br />					

TEXT ... ... ... String, length 0 - 65535<br />					

BLOB ... ... ... String, length 0 - 65535	<br />				

MEDIUMTEXT ... . String, length 0 - 16777215<br />

MEDIUMBLOB ... . String, length 0 - 16777215<br />

LONGTEXT ... ... String, length 0 - 4294967295<br />

LONGBLOB ... ... String, length 0 - 4294967295<br />

* TINYINT ... .. Integer, -128 to 127<br />

* SMALLINT ... . Integer, -32768 to 32767<br />

* MEDIUMINT ...  Integer, -8388608 to 8388607<br />

* INT ... ... .. Integer, -2147483648 to 2147483647<br />

* BIGINT ... ... Int, -9223372036854775808 to 9223372036854775807<br />

FLOAT ... ... .. Decimal (precise to 23 digits)<br />

DOUBLE ... ... . Decimal (24 to 53 digits)<br />

DECIMAL ... ...  "DOUBLE" stored as string<br />

DATE ... ... ... YYYY-MM-DD<br />

DATETIME ... ... YYYY-MM-DD HH:MM:SS<br />

TIMESTAMP ... .. YYYYMMDDHHMMSS<br />

TIME ... ... ... HH:MM:SS<br />

ENUM ... ... ... One of preset options<br />

SET ... ... ...  Selection of preset options</p>

<p>* Note: "UNSIGNED" TINYINT, SMALLINT,<br />
MEDIUMINT, INT, BIGINT have the same<br />
range of values but start at 0, e.g. TINYINT<br />
UNSIGNED is between 0 and 255.<br />
</p>

<h2>MYSQL FUNCTIOS</h2>
<p>
mysql_affected_rows	; || mysql_close;|| mysql_connect;||  mysql_data_seek;||  mysql_db_name<br />
mysql_errno;||  mysql_error;|| mysql_fetch_array;||  mysql_fetch_assoc;|| mysql_fetch_field<br />
mysql_fetch_lengths;|| mysql_fetch_object;||  mysql_fetch_row;|| mysql_field_flags;|| mysql_field_len<br />
mysql_field_name;|| mysql_field_seek;|| mysql_field_table;|| mysql_field_type;|| mysql_free_result<br />
mysql_insert_id;||  mysql_list_dbs;||  mysql_list_processes;|| mysql_list_tables;||  mysql_num_fields<br />
mysql_num_rows;||  mysql_pconnect;|| mysql_query;||  mysql_real_escape_string;|| mysql_select_db<br />
</p>
<h2>Mathematical</h2>
<p>
ABS, SIGN,    MOD,     FLOOR,   CEILING,        ROUND,         DIV,         EXP,          LN,
LOG, LOG2,    LOG10,   POW,     POWER,          SQRT,          PI,          COS,          SIN,
TAN, ACOS,    ASIN,    ATAN,    ATAN2,          COT,           RAND,        LEAST,        COUNT
GREATEST,     DEGREES, RADIANS, TRUNCATE,       Date and Time, DAYOFWEEK,   WEEKDAY,      DAYOFMONTH,
DAYOFYEAR,    MONTH,   DAYNAME, MONTHNAME,      QUARTER,       WEEK,        YEAR,         YEARWEEK,
HOUR,         MINUTE,  SECOND,  PERIOD_ADD,     PERIOD_DIFF,   DATE_ADD,    DATE_SUB,     ADDDATE,
SUBDATE,      EXTRACT, TO_DAYS, FROM_DAYS,      DATE_FORMAT,   TIME_FORMAT, CURRENT_DATE, AVG,
CURRENT_TIME, NOW,     SYSDATE, UNIX_TIMESTAMP, FROM_UNIXTIME, SEC_TO_TIME, TIME_TO_SEC,  Group,
MIN,          MAX,     SUM,     GROUP_CONCAT,   VARIANCE,      STD,         STDDEV,       BIT_OR,  BIT_AND,
</p>

<p>
Control Flow,IFNULL,        NULLIF,      IF,              String,         ASCII,       ORD,           CONV,         
CHAR,        CONCAT,        CONCAT_WS,   LENGTH,          CHAR_LENGTH,    BIT_LENGTH,  LOCATE,        INSTR,      
RIGHT,       SUBSTRING,     MID,         SUBSTRING_INDEX, LTRIM,          RTRIM,       TRIM,          SOUNDEX, 
REPLACE,     LEFT,          HEX,         REPEAT,          REVERSE,        INSERT,      ELT,           FIELD,   
LCASE,       OCT,           RPAD,        UCASE,           LOAD_FILE,      QUOTE,       Comparison,    STRCMP,  
CONVERT,     Other,         BIT_COUNT,   DATABASE,        USER,           SYSTEM_USER, SESSION_USER,  CURRENT_USER,
PASSWORD,    OLD_PASSWORD,  DECODE,      MD5,             SHA1            BIN,         LPAD,          SPACE,
AES_ENCRYPT, AES_DECRYPT,   DES_ENCRYPT, DES_DECRYPT,     LAST_INSERT_ID, Cast,        CAST,          FORMAT,
VERSION,     CONNECTION_ID, GET_LOCK,    RELEASE_LOCK,    IS_FREE_LOCK,   BENCHMARK,   INET_NTOA,     INET_ATON,
FOUND_ROWS
</p>
<p>

</p>

							<h3 align="center"><u><b>SHOW</b></u></h3><br />

<p>
show databases; (সকল ডেটাবেজ দেখতে)<br />

							<h3 align="center"><u><b>USE</b></u></h3><br />
USE firozshah;(ফিরোজশাহ্‌ নামক ডেটাবেজ এ ঢুকতে)<br />

show tables; (সকল টেবিল দেখতে)<br />

<h3 align="center">DESCRIBE</h3><br />
describe stdsalary; (টেবিলের ষ্ট্রাকচার দেখতে)<br />

</p>

						<h3 align="center"><u><b>CREATE</b></u></h3>


<p>

নতুন ডেটাবেজ তৈরীতে-<br />
CREATE DATABASE test; (টেষ্ট নামক ডেটাবেজ তৈরীতে)(<br />
কাষ্টমার নামক নতুন টেবিল তৈরীতে<br />
CREATE TABLE customer( <br />
id int(11) not null auto_increment primary key,<br />
firstName varchar(255),<br />
lastName varchar(255),<br />
address varchar(255),<br />
email varchar(255),<br />
city varchar(255),<br />
division varchar(255));<br />,<br /><br /><br />

সেল্‌স নামক নতুন টেবিল তৈরীতে<br />
CREATE TABLE sales(<br />
id int(11) not null auto_increment primary key,<br />
billNumber int(11),<br />
date varchar(15),<br />
item varchar(25),<br />
quantity int(11),<br />
rate double(11,2),<br />
paid varchar(15),<br />
customerId varchar(15));<br />

</p>
						<h3 align="center"><u><b>INSERT</b></u></h3>
<p>

	কাষ্টমার টেবিলে ডেটা ঢুকাতে<br />
	INSERT INTO `customer`<br />
    (`id`, `firstName`, `lastName`, `address`, `email`, `city`, `division`) 
    VALUES <br />
    (1001,'Abdul','Karim','Shekh Para','mdkarim66@yahoo.com','Rohanpur','Rajshahi');<br /><br />
	একই টেবিলে একাধিক ডেটা ঢুকাতে<br />
	INSERT INTO `customer`<br />
(`firstName`, `lastName`, `address`, `email`, `city`, `division`) <br />
VALUES<br />
('Farid','Sarkar','Mollique Pur','farid26@yahoo.com','Sonaichondi','Rajshahi'),<br />
('Abdur','Rahim','Shekh Para','rahim420@gmail.com','Rohanpur','Rajshahi'),<br />
('Rahima','Khatun','Parisho','rahima6@yahoo.com','Tanore','Rajshahi'),<br />
('Ayesha','Pervin','Ghatfarhadbeg','ayesha@yahoo.com','Andarkillah','Chittagong');<br />

সেলস টেবিলে ডেটা ঢুকাতে<br />
insert into sales<br />
(billNumber,date,item,quantity,rate,paid,customerId)<br />
values <br />
('101','11/12/99','HDD','7','5500','Yes','c1003');<br />

<br /><br /><br />

insert into sales<br />
(billNumber,date,item,quantity,rate,paid,customerId)<br />
values <br />
('102','11/12/99','HDD','10','5500','Yes','c1003'),<br />
('103','11/12/99','Monitor','11','8500','Yes','c1003'),<br />
('104','11/12/99','HDD','9','500','No','c1003'),<br />
('105','11/12/99','Loud Speaker','8','1500','Yes','c1003'),<br />
('106','11/12/99','HDD','4','5500','Yes','c1001'),<br />
('107','11/12/99','HDD','6','5500','Yes','c1002'),<br />
('108','11/12/99','Key Board','3','500','Yes','c1006'),<br />
('109','11/12/99','HDD','9','5500','Yes','c1004'),<br />
('110','11/12/99','Monitor','2','8500','No','c1005'),<br />
('111','11/12/99','HDD','1','5500','Yes','c1007'),<br />
('112','11/12/99','CD Rom','5','3500','Yes','c1002'),<br />
('113','11/12/99','Casing','12','2500','No','c1006'),<br />
('114','11/12/99','Mouse','45','300','Yes','c1003'),<br />
('115','11/12/99','HDD','23','5500','Yes','c1004'),<br />
('116','11/12/99','HDD','21','5500','No','c1001'),<br />
('117','11/12/99','CD Romm','14','2500','Yes','c1005'),<br />
('118','11/12/99','HDD','12','5500','Yes','c1008'),<br />
('119','11/12/99','Pendrive','7','500','No','c1007'),<br />
('120','11/12/99','HDD','4','5500','Yes','c1003');<br />
<br /><br />
</p>
						<h3 align="center"><u><b>USE / DESCRIBE</b></u></h3><br />
<p>
SHOW DATABASES; (সকল ডেটাবেজ দেখতে)
USE test; (টেষ্ট নামক ডেটাবেজে ঢুকতে)						
DESCRIBE customer; (কাষ্টমার টেবিলের ষ্ট্রাকচার দেখতে)<br />
SELECT * FROM customer; (কাষ্টমার টেবিলের সকল ডেটা দেখতে)<br />
select * from stdsalary where SN in (1,2); (শুধুমাত্র  টেবিলের প্রথম দুই সারি দেখতে)<br />

</p>
  						<h3 align="center"><u> <b>UPPER & lower Function</b></u></h3><br />
<p>
1. SELECT UPPER('i am md. abdul karim');<br /><br />
2. SELECT UPPER(name)FORM student;<br /><br />
3. select upper(name) as stdName from student;<br /><br />

4. SELECT LOWER('I AM MD. ABDUL KARIM');<br /> 
5. SELECT LOWER(name)FORM student;<br /><br />
6. select lower(name) as stdName from student;<br /><br />
  </p>


  
  
						<h3 align="center"><u><b>WHERE</b></u></h3><br />
<p>
							
SELECT * FROM tablename WHERE condition	<br /># Returns rows that match condition<br /><br />
select * from stdsalary; (টেবিলের সকল কলাম দেখতে)<br />

select * from stdsalary where section in ('science','arts'); (শুধুমাত্র মানবিক ও বিজ্ঞান বিভাগের শিক্ষার্থীদের দেখতে)<br />

select * from stdsalary where SN in (1,2); (শুধুমাত্র  টেবিলের প্রথম দুই সারি দেখতে)<br />

</p>




						<h3 align="center"><u><b>DROP/DELETE</b></u></h3>

<p>

							
1. DROP DATABASE valvee; (ডেটাবেজ মুছতে)<br />
2. DROP TABLE student; (টেবিল মুছতে)<br />
3. delete from student where roll=102; (ষ্টুডেন্ট টেবিলের রোল ১০২ এর সারি মুছতে)<br />
4. DELETE FROM customers where id=1; (কাষ্টমার টেবিলের  আইডি ১ এর সারি মুছতে)<br />
5. DELETE FROM customers where id>3; (কাষ্টমার টেবিলের  আইডি ৩ এর সারি মুছতে)<br />
6. ALTER TABLE student DROP COLUMN city;(ষ্টুডেন্ট টেবিলেভ সিটি কলাম মুছতে)<br />
7. ALTER TABLE student DROP COLUMN gpa; (ষ্টুডেন্ট টেবিলেভ জি,পি,এ  কলাম মুছতে)<br />
</p>

						<h3 align="center"><u><b>TRUNCATE</b></u></h3>

<p>
টেবল রেখে সকল সারি মুছতে-<br />
1. TRUNCATE customer;(customer টেবল থাকবে সকল column থাকবে কিন্তু সকল row মুছে যাবে)<br />

2. TRUNCATE students; (student টেবল থাকবে সকল column থাকবে কিন্তু সকল row মুছে যাবে)<br />

</p>


							<h3 align="center"><u><b>UPDATE / ALTER / MODIFY COLUMN / ADD COLUMN</b></u></h3><br />
	ALTER TABLE table_name <br />
ADD column_name datatype<br />
or<br />

ALTER TABLE table_name <br />
DROP COLUMN column_name<br />
1. alter table student<br />
change dept phone varchar(20);(ষ্টুডেন্ট টেবিলের  dept field কে  phone ফিল্ডে রূপান্তর করতে)<br /><br />	
2. ALTER TABLE student<br />
ADD COLUMN dept varchar(15);<br /><br />						<p>
3. ALTER TABLE customer<br />
change gender phone varchar(20);<br /><br />
4.ALTER TABLE customer<br />
change phone gender varchar(20);<br /><br />
5. ALTER TABLE customer DROP COLUMN newCol; (কাষ্টমার টেবিলের নিউকল কলাম মুছতে)<br /><br />
6. alter TABLE student drop column phone;(ষ্টুডেন্ট টেবিলের ফোন কলাম মুছতে)<br /><br />
  টেবিলে নতুন কলাম যোগ করতে<br />
7. ALTER TABLE customer <br />
ADD COLUMN salary double(11,2);<br /><br />
8. update customers set salary=salary+500 where salary>5000;<br /><br />
9. update customers set salary=salary-500 where salary>5000;<br /><br />
10. update student_view<br />
set name='Rohima',gender='Female'<br />
where roll=101;<br /><br />
11. UPDATE customer SET salary =44000 WHERE id= 1001;<br /><br />
12. UPDATE customer set gender='Male' where id=1001;<br /><br />
13. UPDATE stdsalary set re_admission=350 where SN=420;<br /><br />
MODIFY:-<br />

 (কাষ্টমার টেবিলের salary কলামের ফিল্ড পরিবর্তন করতে-)<br />
14. ALTER TABLE customer <br />
MODIFY COLUMN salary double(11,2);<br /><br />
15.DELETE FROM `customer` WHERE id>1005; (কাষ্টমার টেবিলের আইডি ১০৫ এর উপরের সারি মুছতে)<br /><br />
</p>
<br />
						<h3 align="center"><u><b>SELECT</b></u></h3><br />
<p>							
SELECT * FROM tablename	<br /># Returns all columns<br />
		
SELECT column FROM tablename	<br /># Returns specific column<br />
1. select stdName from stdsalary;<br />
</p><p>
 
2. select SN,stdName,section,roll from stdsalary;<br />
</p><p>
 
SELECT * FROM tablename <br /># Returns all columns<br />
3. select * from stdsalary;<br />
SELECT column FROM tablename <br /># Returns specific column<br /><br />
4. SELECT * FROM stdsalary WHERE SN=5;<br />
</p>



							<h3 align="center"><u><b>order by</b></u></h3><br />

<p>


SELECT * FROM table ORDER BY column	<br /># Return all rows ordering by column<br /><br />
1. select * from stdsalary where others=25 order by roll asc;<br />
2. select * from stdsalary where guide=35 order by roll asc;<br />

</p>




							<h3 align="center"><u> <b>DISTINCT</b></u></h3>
<p>
SELECT DISTINCT column FROM tablename<br /># Returns unique values of column<br /><br />
 টেবিলের কোন কলামের কী, কী ফিল্ড আছে তা জানতে<br />	
1. SELECT DISTINCT column FROM tablename	<br /># Returns unique values of column<br />
2. SELECT DISTINCT section from stdsalary;<br />
3. SELECT DISTINCT stdName,section from stdsalary where 1;<br />
4. SELECT DISTINCT stdName,section,roll from stdsalary where 2;<br />
5. SELECT DISTINCT date,stdName,section,roll from stdsalary where 2;<br />
6. SELECT DISTINCT others FROM stdsalary;
</p>


							<h3 align="center"><u><b>LIMIT</b></u></h3><br />
<p>
SELECT * FROM table LIMIT 10, 20					<br /># Return first 20 rows after row 10<br /><br />
  টেবিলের প্রথম ৫টি সারি দেখতে<br />
  </p><p>
1. SELECT * FROM stdsalary LIMIT 5;<br />
টেবিলে প্রথম ২ সারি বাদ দিয়ে পরবর্তি ৫টি সারি দেখতে<br />
2. SELECT * FROM stdsalary LIMIT 2,5;<br />
3. SELECT * FROM stdsalary where 1 order by rand()LIMIT 10;<br />
</p>

  							<h3 align="center"><u> <b>CONCAT</b></u></h3><br />
<p>
1. SELECT CONCAT('i am md. abdul karim','I am fine');<br /><br />
2. select concat(name,' is',age,' years old.') from student;<br /><br />
3. select concat(name,' is',age,' years old.') as Larners from student;<br /><br />
  </p>
  
    							<h3 align="center"><u> <b>Math(ARITHMAITC OPERATOR/GREATEST/LEAST/POW/LOG/TRUNCATE/RAND/EXP)</b></u></h3><br />
<p>
1. SELECT 5+2;<br />
2. SELECT 5-2;<br />
3. SELECT 5*2;<br />
4. SELECT 5/2;<br />
5. SELECT 9%2;<br />

  </p>
									
<p>
1. SELECT GREATEST(5,50,2,30,75,25,36);<br />
2. SELECT LEAST(5,50,2,30,-75,25,36);<br />
3. select POW(2,3);<br />
4. select LOG(1);<br />
5. select LOG10(10);<br />
6. select TRUNCATE(10.2596542,2);<br />
7. select TRUNCATE(LOG(2),5);<br />
8. select RAND();<br />
9. select EXP(3);<br />
  </p>

						<h3 align="center"><u><b>COUNT</b></u></h3><br />

<p>
SELECT COUNT(*) FROM tablename<br /># Returns number of rows<br /><br />
1. SELECT COUNT(*) FROM stdsalary;<br />
2. SELECT COUNT(*) FROM stdsalary where others=200;<br />
3. SELECT COUNT(*) FROM stdsalary where others=25;<br />
4. SELECT COUNT(*) FROM stdsalary where section in ('science','arts');<br />
5. SELECT COUNT(*) FROM stdsalary where section in ('science','arts','commerce');<br />
6. SELECT COUNT(*) FROM stdsalary where guide=35;
7. SELECT COUNT(*) FROM stdsalary where red_crecent=15;
</p>



							<h3 align="center"><u><b> Maximum and Minimum</b></u></h3><br />
<p>
SELECT max(column) AS alias	<br /># Return maxium value in column as "alias"<br /><br />
1. select max(others) from stdsalary;<br />
2. select max(total) from stdsalary;<br />
3. select min(total) from stdsalary;

</p>




							<h3 align="center"><u> <b>SUM</b></u></h3><br />
<p>
SELECT SUM(column) FROM tablename<br /># Returns sum of column<br /><br />

1. SELECT SUM(guide) FROM stdsalary;<br /> 
2. SELECT SUM(total) FROM stdsalary;<br /> 
3. SELECT SUM(total) FROM stdsalary where date='16/04/2018';<br /> 
4. SELECT SUM(others) FROM stdsalary where others=25;<br /> 
5. SELECT SUM(others) FROM stdsalary where others=200;<br /> 
  </p>
  							<h3 align="center"><u> <b>Sub Querry(Average)</b></u></h3><br />
<p>
SELECT SUM(column) FROM tablename<br /># Returns sum of column<br /><br />

1. SELECT AVG(salary) FROM `teacher`;<br /> 
2. SELECT * FROM `teacher` WHERE salary>33318.181818;<br /> 
3. SELECT * FROM `teacher` WHERE salary<33318.181818;<br /> 
4. SELECT * FROM `teacher` WHERE salary>(select avg(salary)from teacher);<br /> 
5. SELECT * FROM `teacher` WHERE salary<(select avg(salary)from teacher);<br /> 
  </p>
  
							<h3 align="center"><u><b>Ascending and Descending</b></u></h3><br /> 
  
  <p>
  
 
1. select stdName from stdsalary order by stdName asc;<br />
2. select stdName from stdsalary order by stdName desc;<br />
3. select stdName,section, roll from stdsalary order by stdName desc;<br />
4. select stdName,section, roll from stdsalary order by stdName;<br />
5. select SN,stdName,section, roll from stdsalary order by stdName desc limit 2,10;<br />
6. select SN,stdName,section, roll from stdsalary order by stdName asc limit 250,20;<br />
7. select SN,date,stdName,section, roll from stdsalary order by SN;<br />
</p><p><br />

							<h3 align="center"><u> <b>Between</b></u></h3><br />
								SELECT column_name(s)
FROM table_name<br />
WHERE condition<br />
AND|OR condition<br />
</p><p><br /><br />
SELECT column_name(s)<br />
FROM table_name<br />
WHERE column_name<br />
BETWEEN value1 AND value2<br />
1. SELECT * FROM stdsalary WHERE others BETWEEN 20 AND 30;<br />
2. SELECT * FROM stdsalary WHERE others BETWEEN 175 AND 225;<br />
3. SELECT COUNT(*) FROM stdsalary WHERE others BETWEEN 20 AND 30;<br />
4. SELECT COUNT(*) FROM stdsalary WHERE others BETWEEN 175 AND 225;<br />

						<h3 align="center"><u> <b>LIKE (Underscore single or multiple)</b></u></h3><br />
</p><p><br /><br />
1. select * from student where name like '_a%';<br />
2. select * from student where name like '__a%';<br />
3. select * from student where name like '___J%';<br />
4. select * from student where name like '%n_';<br />							
     সেকসন ফিল্ডে যে সকল নাম sc দিয়ে শুরু-<br />
5. SELECT * FROM stdsalary WHERE section LIKE "sc%";<br />
সেকসন ফিল্ডে যে সকল নাম sc দিয়ে শুরু তাদের রোল ক্রমানুসারে সাজাবে-<br />
6. SELECT * FROM stdsalary WHERE section LIKE"sc%" ORDER BY roll ASC;<br />
7. stdName ফিল্ডে যে সব নাম Me দিয়ে শুরু হয়েছে-<br />
8. SELECT * FROM stdsalary WHERE stdName LIKE"Me%";<br />
যে সব নামের বানানে মাঝে kh আছে-<br />
9. SELECT * FROM stdsalary WHERE stdName LIKE"%kh%";<br />
10. SELECT * FROM stdsalary WHERE stdName LIKE"%Akter";<br />
11. SELECT * FROM stdsalary WHERE stdName NOT LIKE"%Gupta%";<br />
12. SELECT * FROM stdsalary WHERE stdName  LIKE"%marma%";<br />
13. select * from student where name like 's%';<br />
14. select * from student where name like '%s';<br />
15. select * from student where name like '%a';<br />
16. select * from student where name like '%hi%';<br />
</p><br /><br />




							<h3 align="center"><u><b>RLIKE</b></u></h3><br /><p>
1. SELECT * FROM `stdsalary`where stdName rlike('kazi');<br />
2. SELECT * FROM `stdsalary`where stdName rlike('kazi') AND stdName rlike('sabrina');<br />
3. SELECT * FROM `stdsalary`where stdName rlike('kazi') or stdName rlike('bibi')and stdName rlike('amena');<br />
4. SELECT * FROM `stdsalary`where stdName rlike('khatun') or (stdName rlike('kazi')and stdName rlike('sabrina'))<br />
5. SELECT * FROM `stdsalary`where stdName rlike('kazi') or (stdName rlike('bibi') and StdName rlike('akter'))<br />
6. SELECT * FROM `stdsalary`where stdName rlike('kazi') and stdName rlike('bibi') or StdName rlike('akter')<br />
7. SELECT * FROM `stdsalary`where stdName rlike('kazi') or stdName rlike('bibi');<br />
8. SELECT count(*) FROM `stdsalary`where stdName rlike ('khatun')<br />
9. SELECT count(*) FROM `stdsalary`where stdName rlike ('khatun') or stdName rlike('begum')<br />
10. SELECT count(*) FROM `stdsalary`where stdName rlike ('khatun') and stdName rlike('begum')<br />
11. SELECT count(*) FROM `stdsalary`where stdName rlike('kazi') or stdName rlike('bibi') and StdName rlike('akter');<br />
12. SELECT count(*) FROM `stdsalary`where stdName rlike('kazi') and stdName rlike('bibi') or StdName rlike('akter');<br />
</p><br /><br />




						<h3 align="center"><u><b> IN</b></u></h3><br />
<p>
1.  SELECT * FROM stdsalary WHERE SN in (1,2);<br />
2.  SELECT * FROM stdsalary WHERE SN in (1,2,3,4,5,6,7,8,9,10)order by SN asc;<br />
3.  SELECT * FROM stdsalary WHERE SN in (1,2,3,4,5,6,7,8,9,10)order by SN desc;<br />
4.  SELECT * FROM stdsalary WHERE section IN('science');<br />
5.  SELECT * FROM stdsalary WHERE section IN('science','Arts');<br />
6.  SELECT * FROM stdsalary WHERE section NOT IN('science','Arts');<br />
7.  SELECT * FROM stdsalary WHERE section NOT IN('commerce');<br />
8.  SELECT * FROM stdsalary WHERE section in ('science','arts');<br />
9.  SELECT * FROM stdsalary WHERE section not in ('science','arts');<br />
10. SELECT * FROM stdsalary WHERE section in ('science','arts','commerce')order by roll asc;<br />

</p>
							<h3 align="center"><u><b> Group by</b></u></h3><br />
<p>
whereএর আগে group,  orderএর পরে group<br />
1. SELECT date,  SUM(total) from stdsalary group by date;<br />
2. SELECT date,  SUM(total) from stdsalary group by date order by sum(total) desc;<br />
3. SELECT date,  SUM(total) from stdsalary group by date order by sum(total) asc;<br />
4. SELECT date,  SUM(total) from stdsalary group by date order by date asc;<br />
5. SELECT date,  SUM(total) from stdsalary group by date order by SN asc;<br />
6. SELECT SN, date,  SUM(total) from stdsalary group by date order by SN asc;<br /><br />

</p>
							<h3 align="center"><u><b>As</b></u></h3><br />

<p>

1. SELECT roll as ID, stdName as 'First Name' from stdsalary;<br />
2. SELECT section as ID, stdName as 'First Name' from stdsalary;<br />
3. SELECT section as ID, stdName as 'First Name' from stdsalary where SN order by SN asc;<br />

</p>
							<h3 align="center"><u><b>JOINING TABLE</b></u></h3>
SELECT table1.* FROM table1 INNER JOIN table2 on table1.id = table2.id	<br /># Only return columns from table1<br /><br />
SELECT LAST_INSERT_ID() as new_id					<br /># Returns ID of last created row<br /><br />
<p>
SELECT * FROM table1 INNER JOIN table2 on table1.id = table2.id			<br /># Join two tables, return all columns<br /><br />
দুই বা ততোধিক টেবলকে একত্র করে রেকর্ড খুজে বের করা।<br />
roll ম্যাচ করে দুইটি টেবল জয়েন করা<br />
1. SELECT student.roll,reg_Number, name, gender,group_Name, gpa<br />
	from student, result<br />
	where student.roll=result.roll;<br /><br />
2.  SELECT result.roll,reg_Number, name, gender,group_Name, gpa<br />
	from student, result<br />
	where student.roll=result.roll;<br /><br />
	
3. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa<br />
	from student as std, result as rslt<br />
	where std.roll=rslt.roll;<br /><br />
	
4. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa<br />
	from student as std JOIN result as rslt<br />
	ON std.roll=rslt.roll;<br /><br />

</p>
							<h3 align="center"><u><b>INNER JOINING</b></u></h3>

<p>
SELECT * FROM tablename WHERE BINARY condition<br /># Condition is case-sensitive<br /><br />
	
1. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa,rslt.group_Name<br />
	from student as std, result as rslt<br />
	where std.roll=rslt.roll;<br /><br />
	
2. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa,rslt.group_Name<br />
	from student as std JOIN result as rslt<br />
	ON std.roll=rslt.roll;<br /><br />
	
3. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa,rslt.group_Name<br />
	from student as std INNER JOIN result as rslt<br />
	ON std.roll=rslt.roll;<br /><br />

</p>
							<h3 align="center"><u><b>LEFT JOINING</b></u></h3>

<p>	
1. SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa,rslt.group_Name<br />
	from student as std LEFT JOIN result as rslt<br />
	ON std.roll=rslt.roll;<br /><br />

</p>
						<h3 align="center"><u><b>RIGHT JOINING</b></u></h3>

<p>
	
1.SELECT std.roll,rslt.reg_Number, std.name, std.gender,rslt.group_Name, rslt.gpa,rslt.group_Name<br />
	from student as std RIGHT JOIN result as rslt<br />
	ON std.roll=rslt.roll;<br /><br />

</p>
</p>
						<h3 align="center"><u><b>UNION</b></u></h3>

<p>
1. SELECT roll,name,gender<br />
FROM sylhet_tour<br />
UNION<br />
SELECT roll,name,gender<br />
FROM Dhaka_tour;<br /><br />

</p>
						<h3 align="center"><u><b>VIRTUAL TABLE(VIEW)</b></u></h3>
CREATE VIEW view_name AS<br />
SELECT column_name(s)<br />
FROM table_name<br />
WHERE condition<br /><br />
SELECT column_name AS column_alias<br />
FROM table_name<br />
or<br />

SELECT column_name<br />
FROM table_name  AS table_alias<br />
<p>
1. CREATE VIEW student_view AS <br />
SELECT roll,name,gender<br />
FROM student;<br />
2. SELECT * FROM student_view;<br />
3. SELECT roll,name FROM `student_view`;<br />
4. UPDATE `student_view` <br />
   SET `name`='Farjana' <br />
   WHERE roll=103;<br />
5. INSERT INTO student_view(roll,name,gender)<br />
	VALUESv
	(019,'Farjana','Female');<br />
6. DELETE FROM student_view where roll=110;<br />
7. DROP VIEW student_view;<br /><br />
  
8. CREATE VIEW stdsalary_view AS <br />
SELECT  `SN`, `date`, `id`, `stdName`, `section`, `receiptNo`, `roll`, `months`, `re_admission`, `school`,<br />
`ccc`, `guide`, `red_crecent`, `current`, `dues`, `advance`, `examFee`, `others`, `total`, `pic` <br />
FROM `stdsalary`;<br />
 	CREATE INDEX index_name<br />
ON table_name (column_name)<br />
or<br />

CREATE UNIQUE INDEX index_name<br />
ON table_name (column_name)<br />

</p>
</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>