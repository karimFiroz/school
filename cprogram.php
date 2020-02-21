<?php include('include/header.php');?>
<?php 
$fonts="vardana";
$bgcolor="#0BB7C0";
$fontcolor="#ffffff";
?>


<!DOCTYPE html>
<html>
<head>
<title>C program</title>
<style>
body{background:#dddddd;}
.tap{background:#E8E3E7;}
p{font-size:1.25em;}
</style>
<meta charset="utf-8"/>
<lang="en-us"/>
</head>
<body>
<div style="padding-left:75px;padding-right:75px;color:indigo;">

<h2>C progrmming</h2>
<div class="tap">
<!---Programming start--->
<p>
****<b>1.printf</b>***<br />
#include stdio.h <br />
int main()<br />
{<br />
    printf("My Name is Md. Abdul Karim");<br />
    getch();<br />
}<br />
</p>
<p>
****<b>2.Single line Comment</b>***<br />
//Write a program that prints your name.<br />
#include stdio.h<br />
int main()<br />
{<br />
printf("My name is : Md. Abdul Karim");<br />
getch();<br />
}<br />
</p>
<p>
****<b>3.Multiple line comment</b>***<br />
/*<br />
Write your name<br />
Address and Phone Number<br />
*/<br />
#include stdio.h<br />
int main()<br />
{<br />
printf("My name is : Md. Abdul Karim\n");<br />
//Escape sequence used for new line<br />
printf("Firozshah City Corp. Girls'High School.\n");<br />
// You will get a alart sound!<br />
printf("\a Phone Number: 01818830761");<br />
getch();<br />
}<br />
</p>

<p>
****<b>4.print Integer number</b>***<br />
//Print Integer number<br />
#include stdio.h<br />
int main()<br />
{<br />
    int num1=10, num2=20;<br />
    printf("Number one is: %d\n",num1);<br />
    printf("Number two is: %d\n",num2);<br />
    getch();<br />
}<br />
</p>
<p>
****<b>5.print integer number</b>***<br />
//print integer number<br />
#include stdio.h<br />
int main()<br />
{<br />
    int num1=10, num2=20;<br />
    printf("Numbers are:%d, %d\n",num1,num2);<br />
    getch();<br />
}<br />
</p>

<p>
****<b>6.print integer number</b>***<br />
 #include stdio.h<br />
int main()<br />
{<br />
    int num1=20;<br />
    int num2=30;<br />
	printf("Number is:%d\n",num1);<br />
	printf("Number is:%d",num2);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>7.print two integers</b>***<br />
 #include stdio.h<br />
int main()<br />
{<br />
    int num1=20,num2=30;<br />
    
	printf("Number is:%d\n",num1);<br />
	printf("Number is:%d",num2);<br />
	return 0;<br />
}<br />
</p>
<p>
****<b>8.Take two integers</b>***<br />
 #include  stdio.h <br />
int main()<br />
{<br />
	int num1=20,num2=30;<br />

	printf("Number are:%d,%d",num1,num2);<br />
	return 0;<br />
}<br />
</p>
<p>
****<b>9.print decimal number float,double and character</b>***<br />
//print decimal number and character
#include stdio.h<br />
int main()<br />
{<br />
    float num1=10.54568;<br />
    double num2=10.2345678958743;<br />
    char ch='K';<br />
    printf("Float number is=%.1f\n",num1);<br />
    printf("Double number is=%.2f\n",num2);<br />
    printf("character is=%c\n",ch);<br />
    getch();<br />
}<br />
</p>
<h3><u>printf & scanf</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int num;<br />
	printf("Enter number = ");<br />	
	scanf("%d",&num);<br />
	printf("Your number is:%d",num); <br />	
	getch();<br />
}<br />
</p>
<p>
****<b>10.Take integer number from user and print</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int num1,num2;<br />
	printf("Enter two integers:");<br />
	scanf("%d",&num1);<br />
	scanf("%d",&num2);<br />
	printf("Numbers are:%d %d",num1,num2);<br />
	getch();<br />
}<br />
</p>
<p>
<p>
****<b>11.Take integer number from user and print</b>***<br />
//Take and integer and print<br />
#include stdio.h<br />
int main()<br />
{<br />
    int num;<br />
    printf("Please enter an integer number = ");<br />
    scanf("%d",&num);<br />
    printf("You have press=%d",num);<br />
    getch();<br />
}<br />
</p>
<p>
****<b>12.Take two integers from user and print</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
    int num1,num2;<br />
    printf("Please enter 1st integer number = ");<br />
    scanf("%d",&num1);<br />
    printf("Please enter 2nd integer number = ");<br />
    scanf("%d",&num2);<br />
    printf("You have press =%d and %d\n",num1,num2);<br />
    getch();<br />
}<br />
</p>
<p>
****<b>13.Take two integers</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int num1,num2;<br />
	printf("Enter two integers:");<br />
	scanf("%d %d",&num1,&num2);<br />
	printf("Numbers are:%d %d",num1,num2);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>14.Take two integers in one scanf and print</b>***<br />
//Take and integer and print<br />
#include  stdio.h <br />
int main()<br />
{<br />
    int num1,num2;<br />
    printf("Please enter two integer numbers = ");<br />
    scanf("%d %d",&num1,&num2);<br />

    printf("You have press these numbers=%d,%d\n",num1,num2);<br />
    getch();<br />
}<br />
</p>

<p>
****<b>15.Take two float numbers and print</b>***<br />
//Take two float numbers and print<br />
#include stdio.h<br />
int main()<br />
{<br />
    float num1, num2;<br />
    printf("Please enter two float numbers = ");<br />
    scanf("%f %f",&num1,&num2);<br />
    printf("You have pressed numbers are=%.2f, %.3f\n",num1,num2);<br />
    getch();<br />
}<br />
</p>
<p>
****<b>16.Take an integer and a float numbers and print</b>***<br />
//Take an integer and a float numbers and print<br />

#include stdio.h<br />

int main()<br />
{<br />
    int num1;<br />
    float num2;<br />
    printf("Please enter an integer and a float numbers = ");<br />
    scanf("%d %f",&num1,&num2);<br />
    printf("You have pressed numbers are=%d and %.2f\n",num1,num2);<br />
    getch();<br />
}<br />
</p>
<p>
****<b>17.Vowel/Consonant(use if and else if)</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
    char chr;<br />
    printf("Please enter an alphabet:");<br />
    scanf("%c",&chr);<br />
    if(chr=='a')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='e')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='i')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='o')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='u')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='A')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='E')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='I')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='O')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else if(chr=='U')<br />
    {<br />
        printf("vowel\n");<br />
    }<br />
    else<br />
    {<br />
        printf("Consonant\n");<br />
    }<br />
    getch();<br />
}<br />
</p>
<p>
****<b>18.Area of a Triangle</b>***<br />
#include stdio.h<br />
main()<br />
{<br />
	float base;<br />
	float height;<br />
	float area;<br />
	printf("Enter  base: ");<br />	
	scanf("%f",& base);<br />
	printf("Enter  height: ");<br />
	scanf("%f",& height);<br />
	area=(base*height)/2; <br />
	printf("area is:%f",area);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>19.Area of a Circle</b>***<br />
#include stdio.h<br />
main()<br />
{<br />
	float pie=3.1416;<br />
	float radius;<br />
	float area;<br />
	printf("Enter  radius: ");<br />	
	scanf("%f",& radius);<br />
	area=pie*radius*radius; <br />
	printf("area is:%f",area);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>20.Avarage two numbers</b>***<br />
#include stdio.h<br />
main()<br />
{<br />
	float x;<br />
	float y;<br />
	float avg;<br />
	printf("Enter first number: ");<br />	
	scanf("%f",& x);<br />
	printf("Your second number: "); <br />
	scanf("%f",& y);<br />
	avg=(x+y)/2;<br />
	printf("average is:%f",avg);<br />	
	getch();<br />
}<br />
</p>
<p>
****<b>21.Modulus</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int a=5, b=2;<br />
	int c;<br />
	c=a%b;<br />
	printf("%d",c);<br />	
		
	getch();<br />
}<br />
</p>
<p>
****<b>22.Modulus(Mathematical Operators</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int a, b, c;<br />
	printf("Enter first number: ");<br />	
	scanf("%d",& a);<br />
	printf("Enter second number: ");<br />	
	scanf("%d",& b);<br />
	c=a%b;<br />
	printf("%d",c);<br />	
		
	getch();<br />
}<br />
</p>
<p>
****<b>23.Size of int,float,double,char</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
 int i;<br />
 float f;<br />
 double d;<br />
 char c;<br />
  printf("Size of int= %d bytes\n",sizeof(i));<br />
  printf("Size of float= %d bytes\n",sizeof(f));<br />
  printf("Size of double= %d bytes\n",sizeof(d));<br />
  printf("Size of char= %d bytes\n",sizeof(c));<br />
    getch();<br />
}<br />
</p>
 <p>
 ****<b>24.Format specifier %d</b>***<br />
 #include stdio.h<br />
int main()<br />
{<br />
    int num=10;<br />
	printf("Number is:%d",num);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>25.Format specifier</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	char a;<br />
	int b;<br />
	float c;<br />
	double d;<br /><br />
	a='A';<br />
	b=10;<br />
	c=2.25;<br />
	d=3.65988;<br /><br />

	printf("Enter a character:");<br />
	scanf("%c",&a);<br />
	printf("\tChar:%c\n",a);<br /><br />

	printf("Enter an integer number:");<br />
	scanf("%d",&b);<br />
	printf("\tint:%d\n",b);<br /><br />

	printf("Enter a float number:");<br />
	scanf("%f",&c);<br />
	printf("\tfloat:%f\n",c);<br /><br />

	printf("Enter an long float number:");<br />
	scanf("%lf",&d);<br />
	printf("\tdouble:%.3lf\n",d);<br /><br />
	getch();<br />
}<br />
</p>
<p>
****<b>26.float,double,char</b>***<br />
 #include stdio.h<br />
int main()<br />
{<br />
    float num1=10.5;<br />
    double num2=1.7320508;<br />
    char ch='a';<br />

	printf("Float number is:%f\n",num1);<br />
	printf("Double number is:%.2lf\n",num2);<br />
	printf("character is:%c",ch);<br />
	return 0;<br />
}<br />
</p>

<p>
****<b>27.Fenction One kinds of mechine(atar mill)</b>***<br />
#include <stdio.h>
int addFunction(int firstNumber,int secondNumber){<br />
    int result;
    result=firstNumber+secondNumber;<br />
return result;<br />
}<br />

int main()<br />
{<br />

int a,b;<br />
a=10;<br />
b=12;<br />

int resultNumber=addFunction(a,b);<br />

printf("%d+%d=%d\n",a,b,resultNumber);<br />
getch();<br />
}<br />
</p>

<p>
****<b>28.Fenction One kinds of mechine(atar mill)</b>***<br />
#include  stdio.h<br />
int addFunction(int firstNumber,int secondNumber)<br />
{<br />
    int result;<br />
    result=firstNumber+secondNumber;<br />
return result;<br />
}<br />

int main()<br />
{<br />

int a,b;<br />
a=10;<br />
b=12;<br />

int resultNumber=addFunction(a,b);<br />

printf("%d+%d=%d\n",a,b,resultNumber);<br />
getch();<br />
}<br />
</p>

<p>
****<b>29.Prime number</b>***<br />
//Prime number<br />

#include  stdio.h<br />
#include  stdbool.h<br />
#include  math.h<br />
bool isPrime(int num){<br />
int sqroot=(int)sqrt((double)num);<br />
for (int i=2; i<=sqrt; i++){<br />
  if(num%i==0){<br />
   return fasle;<br />

  }<br />
}<br />
return true;<br />
}<br />
void generatePrimes(int num){<br />

printf("Generated prime upto=%d\n",num);<br />
int count=0;<br />
for(int i=2; i<=sqrt; i++){<br />
 if(isPrime(i)){<br />
    count++;<br />
    printf("%d\n"num,count,i);<br />
 }<br />

}<br />
printf("Total prime %d is %d ",num,count);<br />
}<br />
{<br />
int userInp;<br />

printf("Enter an integer= ");<br />
scanf("%d",&userInp);<br />
generatePrimes(userInp);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>30.***Series *** </h2><br />
<p><h3>//1square.2square.3square.-----+n=? </h3></p>
<p>
//Square Number: 1square.2square.3square.-----+n=? using for loop<br />

#include  stdio.h<br />
int main()<br />
{<br />
int i, n, result=1;<br />

printf("Enter last term= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i=i++)<br />
{<br />
    result=result*i*i;<br />

}<br />

printf("%d\n",result);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>31.*** Factorial *** </h2><br />
<p><h3>//Factorial 1.2.3.4.5.6.7.8.9.----.n=? </h3></p>
//Factorial 1.2.3.4.5.6.7.8.9-----+n=? using for loop<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int i, n, result=1;<br />

printf("Enter last term= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i++)<br />
{<br />
    result=result*i;<br />

}<br />

printf("%d\n",result);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>32.*** Cube series *** </h2><br />
<p><h3>//Summation 1cube+2cube+3cube-----+n=?</h3></p>
<p>
//Summation 1cube+2cube+3cube-----+n=? using for loop<br />

#include  stdio.h<br />
int main()<br />
{<br />
int i, n, sum=0;<br />

printf("Enter last term= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i++)<br />
{<br />
    sum=sum+(i*i*i);<br />

}<br />

printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>34.*** Square series *** </h2><br />
<p><h3>//Summation  1square+2square+3square-----+nsquare=? using for loop</h3></p>
//Sumation 1square+2square+3square-----+nsquare=? using for loop<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int i, n, sum=0;<br />

printf("Enter last term= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i++)<br />
{<br />
    sum=sum+i*i;<br />

}<br />

printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>35.***Fractional series*** </h2><br />
<p><h3>//Summation  1.5+2.5+3.5-----+n=? using while loop</h3></p>
//Sumation 1.5+2.5+3.5-----+n=? using for loop<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />
float i, n, sum=0;<br />

printf("Enter last term= ");<br />
scanf("%f",&n);<br />
for (i=1.5;i<=n; i++)<br />
{<br />
    sum=sum+i;<br />

}<br />

printf("%.2f\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>36.***Series *** </h2><br />
<p><h3>//Summation  1+4+7+10-----+n=? using while loop</h3></p>
//Sumation 1+4+7+10-----+n=? using while loop<br />
<p>
#include  stdio.h <br />
int main()<br />
{<br />
int i, n, sum;<br />
i=1;
sum=0;//initial<br />
printf("Enter nth term= ");<br />
scanf("%d",&n);<br />
while (i<=n)//ending point<br />
{
    sum=sum+i;<br />
    i=i+3;//increment<br />
}<br />

printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>37.***Even series *** </h2><br />
<p><h3>//Summation 2+4+6+8-----+n=? using while loop</h3></p>
<p>
//Sumation 2+4+6+8-----+n=? using while loop<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int i, n, sum;<br />
i=2;<br />
sum=0;<br />
printf("Enter last term= ");<br />
scanf("%d",&n);<br />
while (i<=n)<br />
{<br />
    sum=sum+i;<br />
    i=i+2;<br />
}<br />

printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>38.***Natural Number series***</h2><br />
<p><h3>//Summation 1+2+3+4-----+n=? using while loop</h3></p><br /><br />
//Sumation 1+2+3+4-----+n=? using while loop<br />
<p>
#include  stdio.h <br />
int main() <br />
{<br />
int i, n, sum;<br />
i=1;<br />
sum=0;<br />
printf("Enter n= ");<br />
scanf("%d",&n);<br />
while (i<=n)<br />
{<br />
    sum=sum+i;<br />
    i=i++;<br />
}<br />

printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>39.***Natural Number series*** </h2><br />
<p><h3>//Summation 1+2+3+4-----+n=?</h3></p>
//Sum 1+2+3+4-----+n=?<br />
<p>
#include  stdio.h <br />
int main()<br />
{<br />
int i, n, sum=0;<br />
printf("Enter n= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i=i++)<br />
{<br />
    sum=sum+i;<br />
printf("%d\n",i);<br />
}<br />
printf("%d\n",sum);<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>40.***Interval Progression*** </h2><br />
<p><h3>//print 1, 4, 7, 10, 13-----n</h3></p>
//print 1, 4, 7, 10, 13-----n<br />
<p>
#include  stdio.h <br />
int main()<br />
{<br />
int n,i;<br />
printf("Enter n= ");<br />
scanf("%d",&n);<br />
for (i=1; i<=n; i=i+3)<br />
{<br />
printf("%d\n",i);<br />
}<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>41.***Natural number*** </h2><br />
<p><h3>//print 1-----n</h3></p>
//print 1-----n<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />

int n,i;<br />
 printf("Enter n= ");<br />
 scanf("%d",&n);<br />
for (i=1; i<=n; i++)<br />
{<br />
  printf("%d\n",i);<br />
}<br />
getch();<br />
}<br />
</p>
------------------------------------------------

<h2>42.***Even number*** </h2><br />
<p><h3><u>//print 1-----n</u></h3></p>
<p>
//print 2, 4, 6, 8 ---- n<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />

int n,i;<br />
 printf("Enter n= ");<br />
 scanf("%d",&n);<br />
for (i=2; i<=n; i=+2)<br />
{<br />
  printf("%d\n",i);<br />
}<br />
getch();<br />
}<br />
</p>
------------------------------------------------

<h2>43.***Odd number*** </h2><br />
<p><h3><u>//print 1-----n</u></h3></p>
<p>
//print 1, 3, 5, 7 ---- n<br />

#include  stdio.h<br />
int main()<br />
{<br />

int n,i;<br />
 printf("Enter n= ");<br />
 scanf("%d",&n);<br />
for (i=1; i<=n; i=+2)<br />
{<br />
  printf("%d\n",i);<br />
}<br />
getch();<br />
}<br />
</p>
------------------------------------------------

<p><h3>44.GCD and LCM</h3></p>
//GCD and LCM<br />
<p>
#include  stdio.h<br />
int main()<br />
{<br />

int num1, num2,n1,n2,rem,gcd,lcm ;<br />
 printf("Enter two numbers= ");<br />
 scanf("%d %d\n",&num1,&num2);<br />
n1=num1;<br />
n2=num2;<br />
while (n2!=0)<br />
{<br />
   rem=n1%n2;<br />
   n1=n2;<br />
   n2=rem;<br />
}<br />
gcd=n1;<br />
lcm=(num1*num2)/gcd;<br />
printf("Prime number");<br />

printf("gcd=%d\n",gcd);<br />
printf("lcm=%d\n",lcm);<br />

getch();<br />
}<br />
</p>
------------------------------------------------
<h2>46.*** For Loop *** </h2><br />
<p><u>মৌলিক সংখ্যা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.Input num<br />
3.i=2, count=0<br />
4.Is i<=num <br />

i).Yes,is i=0, Go to setp 5<br />
ii).No, Go to step 6<br />
5.<br />
i).Yes, count++, Go to setp 6<br />
ii).No, Go back step 4<br />
	|
6.Is (count==0)<br />
i).Yes,print prime<br />
ii).No, print not prime <br />
	|
7.End<br />
</p>

</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>num</p>
//Parallogram<br />
	|
<p>i=2,count=0</p>
//Rectangular<br />
	| 
<p>Condition</p>
<p>i<=num </p>
<p>False,--------------if count==0;<br />
<p>True, Go to second step </p>
	|
	<p>num%i==0;<br />
//Diamond type<br />
	|
<p>In body fact=fact*i </p>
//Rectangular<br />
	|
<p>Increment</p>
<p>i=i+1</p>
//Rectangular<br />
	|
<p>True, Go to body </p>
<p>False, Print fact and Go to Exit</p>
//Diamond type<br />
	|
<p>END</p>
------------------------------------------------
<p><h3><u>Identify Prime number</u></h3></p>
//Identify Prime number<br />

#include <stdio.h><br />
int main()<br />
{<br />

int i,num, count=0;<br />
 printf("Enter any Positive Integer= ");<br />
 scanf("%d\n",&num);<br />
for (i=2; i<=num-1; i++)<br />
{
    if (num%i==0)<br />
    {<br />
        count++;<br />
        break;<br />
    }<br />
}<br />
if (count==0)<br />
{<br />
printf("Prime number");<br />
}<br />
else<br />
{<br />
printf("Is not Prime number");<br />
}<br />

getch();<br />
}<br />
</p>
<h2>47.*** For Loop *** </h2><br />
<p><u>ধনাত্মক পূর্নসংখ্যার ফ্যাক্টোরিয়াল নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.Input n<br />
3.fact=1, i=1<br />
4.while i<=n <br />
Repeat step 5<br />
5.Update fact=fact*i<br />
i=i+1<br />
6.print fact<br />
7.End<br />
</p>

</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>n</p>
//Parallogram<br />
	|
<p>i=1,fact=1</p>
//Rectangular<br />
	| 
<p>Condition</p>
<p>i<=n </p>
<p>True, Go to body </p>
<p>False, Print fact and Go to Exit</p>
//Diamond type<br />
	|
<p>In body fact=fact*i </p>
//Rectangular<br />
	|
<p>Increment</p>
<p>i=i+1</p>
//Rectangular<br />
	|
<p>True, Go to body </p>
<p>False, Print fact and Go to Exit</p>
//Diamond type<br />
	|
<p>END</p>

<h2>48.*** do while loop *** </h2><br />
<h3><u>Print 1-100 integer do while Loop</u></h2><br />
<p>
//Print 1-100 integer do while Loop<br />

#include  stdio.h<br />
int main()<br />
{<br />

int i;<br />
//declearation;<br />
 i=1;<br />
 //Initialization;<br />
do {<br />
printf("%d\n",i);<br />
i++;<br />
//Increment/Update;<br />
}<br />
while (i<=100);<br />
//Condition;
getch();<br />
}<br />
</p>
<h2>49.*** While loop *** </h2><br />
<h3><u> print 1-100 using while Loop</u></h2><br />
<p>
// print 1-100 using while Loop<br />

#include  stdio.h<br />
int main()<br />
{<br />

    int i;<br />
	//declearation;<br />
    i=1;<br />
	//Initialization;<br />
while(i<=100)<br />
//Condition;<br />
{<br />
 printf("%d\n",i);<br />
 i++;<br />
 //Increment/Update;
}<br />
getch();<br />
}<br />
</p>
<h2>50.*** For loop *** </h2><br />
<h3><u>print 1-100 using For Loop</u></h2><br />
<p>
// print 1-100 using For Loop<br />

#include  stdio.h <br />
int main()<br />
{<br />
    int i;<br />
for(i=1; i<=100; i=i+1)<br />
//Initialization; Condition; Increment/Update<br />
{
 printf("%d\n",i);<br />
}
getch();<br />
}<br />
</p>
<h2>51.*** For Loop *** </h2><br />
<h3><u>  Factiorial of positive integer uning Loop</u></h2><br />
<p>
// Factiorial of positive integer uning Loop<br />

#include  stdio.h<br />
int main()<br />
{<br />

int i, fact=1, n;<br />
printf("Enter a positive integer number= ");<br />
scanf("%d",&n);<br />
for(i=1; i<=n; i++)<br />
{<br />
    fact=fact*i;<br />
}<br />
printf("%d\n",fact);<br />
getch();<br />
}<br />
</p>


<h3><u>print Hello Bangladesh 10 times using For Loop</u></h2><br />
<p>
<h2>52.*** For loop *** </h2><br />
// print Hello Bangladesh 10 times using For Loop<br />

#include  stdio.h <br />
int main()<br />
{<br />
    int i;<br />
for(i=1; i<=10; i++)<br />
{<br />
 printf("Hello Bangladesh!\n");<br />
}<br />
getch();<br />
}<br />
</p>
<h2>53.*** Switch *** </h2><br />
<p><u>0-1 Digit Spelling</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input expression<br />

3.switch(expression)<br />

4.case condition:<br />
5.-------<br />
6.--------<br />
7.break;<br />

i)Yes, print Spelling of digit <br />
ii)No, go to another case:<br />

8.case condition:<br />
9.-------<br />
10.--------<br />
11.break;<br />

i)Yes, print Spelling of digit<br />
ii)No, go to default and print not any Digit<br />

12.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>digit</p>
//Parallogram<br />
	|
<p>case 0:</p>
<p>switch(variable)</p>
<p>is switch(variable)=1st case </p>
<p>Yes, print digit Spelling</p>
<p>No, Go to 2nd case:</p>
//Diamond type<br />
	|
<p>case 1:</p>
<p>switch(variable)</p>
<p>is switch(variable)=2nd case </p>
<p>Yes, print digit Spelling</p>
<p>No, Go to 2nd case:</p>
//Diamond type<br />
	|
<p>case 2:</p>
<p>switch(variable)</p>
<p>is switch(variable)=2nd case </p>
<p>Yes, print digit Spelling</p>
<p>No, Go to 3rd case:</p>
//Diamond type<br />
	|
<p>case 2:</p>
<p>switch(variable)</p>
<p>is switch(variable)=2nd case </p>
<p>Yes, print digit Spelling</p>
//Diamond type<br />
	|
<p>END</p>
<h2>70.*** Switch *** </h2><br />
<h3><u>0-9 Digit Spelling</u></h2><br />
<p>
// 0-9 Digit Spelling<br />

#include stdio.h<br />
int main()<br />
{<br />
int digit;<br />
printf("Enter any digit= ");<br />
scanf("%d",&digit);<br />
switch(digit)<br />
{<br />

case 0:<br />
    printf("Zero\n");<br />
    break;<br />
case 1:<br />
    printf("One\n");<br />
    break;<br />
case 2:<br />
    printf("Two\n");<br />
    break;<br />
case 3:<br />
    printf("Three\n");<br />
    break;<br />
case 4:<br />
    printf("Four\n");<br />
    break;<br />
case 5:<br />
    printf("Five\n");<br />
    break;<br />
case 6:<br />
    printf("Six\n");<br />
    break;<br />
case 7:<br />
    printf("Seven\n");<br />
    break;<br />
case 8:<br />
    printf("Eight\n");<br />
    break;<br />
case 9:<br />
    printf("Nine\n");<br />
    break;<br />

default:<br />
printf("Is not any digit\n");<br />

}<br />
getch();<br />
}<br />
</p>
---------------------------------------------
<h2>54.*** Switch *** </h2><br />
<h3><u>0-9 Digit Spelling</u></h2><br />
<p>
// 0-9 Digit Spelling<br />

#include stdio.h<br />
int main()<br />
{<br />
int digit;<br />
printf("Enter any digit= ");<br />
scanf("%d",&digit);<br />
switch(digit)<br />
{<br />

case 0:<br />
    printf("Zero\n");<br />
    break;<br />
case 1:<br />
    printf("One\n");<br />
    break;<br />
case 2:<br />
    printf("Two\n");<br />
    break;<br />
case 3:<br />
    printf("Three\n");<br />
    break;<br />
case 4:<br />
    printf("Four\n");<br />
    break;<br />
case 5:<br />
    printf("Five\n");<br />
    break;<br />
case 6:<br />
    printf("Six\n");<br />
    break;<br />
case 7:<br />
    printf("Seven\n");<br />
    break;<br />
case 8:<br />
    printf("Eight\n");<br />
    break;<br />
case 9:<br />
    printf("Nine\n");<br />
    break;<br />

default:<br />
printf("Is not any digit\n");<br />

}<br />
getch();<br />
}<br />
</p>
<h2>55.*** Switch *** </h2><br />
<h3><u>Vowel or Consonant using switch</u></h2><br />
<p>
// Vowel or Consonant using switch<br />

#include  stdio.h<br />
int main()<br />
{<br />
char ch;<br />
printf("Enter any alphabet= ");<br />
scanf("%c",&ch);<br />
switch(ch)<br />
{<br />

case'a':<br />
case'e':<br />
case'i':<br />
case'o':<br />
case'u':<br />
case'A':<br />
case'E':<br />
case'I':<br />
case'O':<br />
case'U':<br />

printf("Vowel\n");<br />

break;<br />

default:<br />
printf("Consonant\n");<br />

}<br />
getch();<br />
}<br />
</p>
-------------------------------------------
//<h2>56.Switch</h2>

#include  stdio.h<br />

int main()<br />
{<br />
int counter,usernumber;<br />
printf("Enter any positive number= ");<br />
scanf("%d",&usernumber);<br />
switch(usernumber)<br />
    {<br />
case 1:<br />
    printf("You are 1 years Old");<br />
    break;<br />
    case 2:<br />
    printf("You are 2 years Old");<br />
    break;<br />
    case 3:<br />
    printf("You are 3 years Old");<br />
    break;<br />
    case 4:<br />
    printf("You are 4 years Old");<br />
    break;<br />
    case 5:<br />
    printf("You are 5 years Old");<br />
    break;<br />
    case 6:<br />
    printf("You are 6 years Old");<br />
    break;<br />
    case 7:<br />
    printf("You are 7 years Old");<br />
    break;<br />
    case 8:<br />
    printf("You are 8 years Old");<br />
    break;<br />
    case 9:<br />
    printf("You are 9 years Old");<br />
    break;<br />
    case 10:<br />
    printf("You are 10 years Old");<br />
    break;<br />
    default:
        printf("You are up to 10 years old");<br />
}<br />


getch();<br />
}<br />
-----------------------------------------------
//<h2>57.do while loop</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int counter;<br />
//declearation;<br />
counter=1;<br />
//Initialization;<br />
do <br />
{<br />
printf("counter= %d\n",counter);<br />
counter++;<br />
//Increment/Update;<br />
}<br />
while (counter<=10);<br />
//Condition; getch();<br />
getch();<br />
}<br />
</p>
--------------------------------------
//<h2>58. for loop using break</h2>
<p>
#include <stdio.h><br />

int main()<br />
{<br />
int counter,usernumber;<br />
usernumber=45;<br />
for(counter=0;counter<=200;counter++)<br />
    {<br />
        if(counter==usernumber)<br />
		{<br />
            break;<br />
        }<br />
    printf("counter=%d\n",counter);<br />
}<br />
getch();<br />
}<br />
</p>
---------------------------------
//<h2>59.Logic using for loop</h2>
<p>
#include <stdio.h>

int main()<br />
{<br />
int counter,usernumber;<br />
usernumber=45;<br />
for(counter=1;counter<=20;counter++)<br />
    {<br />
        if(counter==usernumber)<br />
		<br />{
            break;<br />
        }<br />
    printf("counter=%d\n",counter);<br />
}<br />
getch();<br />
}<br />
</p>
---------------------------------
//<h2> 60.for loop using continue</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
int counter;<br />
for(counter=1;counter<=20;counter++)<br />
    {<br />
        if(counter==10)<br />
		{<br />
            continue;<br />
        }<br />
    printf("counter=%d\n",counter);<br />
}<br />
getch();<br />
}<br />
</p>
-------------------------------------
//<h2>61.Logic using for loop</h2>
<p>
#include  stdio.h<br />

int main()<br />
{<br />
int counter;<br />
for(counter=1;counter<=20;counter*=2)<br />
{<br />
    printf("counter=%d\n",counter);<br />
}<br />
getch();
}<br />
</p>
--------------------------------------
//<h2>62.Logic</h2>
<p>
#include  stdio.h<br />

int main()<br />
{<br />
int counter=1;<br />
do{<br />
printf("counter is %d\n",counter);<br />
counter *=2;<br />
}<br />
while(counter<=20);<br />

getch();<br />
}<br />
</p>
---------------------------------------
//<h2>63.Logic</h2>
<p>
#include  stdio.h<br />

int main()<br />
{<br />
int counter=30;<br />
do<br />
{<br />
printf("counter is %d\n",counter);<br />
counter *=2;<br />
}<br />
while(counter<=20);<br />
getch();<br />
}<br />
</p>
------------------------------------
//<h2>64.Logic</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int counter=1;<br />

while(counter<=20)<br />
{<br />
printf("counter is=%d\n",counter);<br />
counter *=2;<br />
}<br />
getch();<br />
}<br />
</p>
---------------------------------
<h2>65.Logic</h2>
<p>
#include  stdio.h<br />

int main()<br />
{<br />
int counter=1;<br />

while(counter<=20)<br />
{<br />
printf("counter is=%d\n",counter*=2);<br />

}<br />
getch();<br />
}<br />
</p>
------------------------------------------------
//<h2>66.Logic</h2>

#include  stdio.h<br />

int main()<br />
{<br />
int counter=5;<br />

while(counter<=10)<br />
{<br />
printf("counter is=%d\n",counter);<br />
counter ++;<br />
}<br />


getch();<br />
}<br />
-----------------------------------------------
//<h2>67.do while loop</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int counter;<br />
//declearation;<br />
counter=0;<br />
//Initialization;<br />
do <br />
{<br />
printf("counter= %d\n",counter);<br />
counter++;<br />
//Increment/Update;<br />
}<br />
while (counter<=10);<br />
//Condition; getch();<br />
getch();<br />
}<br />
</p>
------------------------------------------------
<h2>68.While loop</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int counter;<br />
counter=0;//initial<br />
while(counter<=10)//condition<br />
{<br />
    printf("Counter is less than %d\n",counter);<br />
    counter++;//increment<br />
}<br />

getch();<br />
}<br />
</p>
----------------------------------------------
//<h2>69.Logic</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
int a;<br />
printf("Enter any integer= ");<br />
scanf("%d",&a);<br />
if(a<=50-1)<br />
{<br />
printf("%d is less than 50\n",a);<br />
}<br />
else if(a==50)<br />
{<br />
    printf("%d is eqial to 50\n",a);<br />
}<br />
else<br />
{<br />
printf("%d is Greater than 50\n",a);<br />
}<br />

getch();<br />
}<br />
</p>
------------------------------------------------
<h2>70.Logic</h2>
<p>
#include  stdio.h<br />
int main()<br />
{<br />
	int a=75;<br />
	if(a<=50-1)<br />
	{<br />
    printf("a is less than 50");<br />
	}else{<br />
	if(a==50){
		printf("%d"is eqial to 50):
	}
    printf("a is smaller than 50");<br />
	}<br />
	getch();<br />
}<br />
</p>
-------------------------------------------------------------------
<h2>71.*** OR *** </h2><br />
<p><u>কোন অক্ষর স্বরবর্ণ না ব্যাঞ্জন বর্ণ তা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input ch<br />

3.Is ch=='a' or ch=='A'<br />
3.Is ch=='e' or ch=='E'<br />
3.Is ch=='i' or ch=='I'<br />
3.Is ch=='o' or ch=='O'<br />
3.Is ch=='u' or ch=='U'<br />

i)Yes, print vowel <br />
ii)No, print Consonant<br />

4.Is ch>='a' && ch<='z'<br /><br />
i)Yes, print Small Letter<br />
ii)No, print Not any Letter<br />
5.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>ch</p>
//Parallogram<br />
	|
<p>Is ch>='A' Or ch<='Z'</p>
<p>Is ch=='a' or ch=='A'</p>
<p>Is ch=='e' or ch=='E'</p>
<p>Is ch=='i' or ch=='I'</p>
<p>Is ch=='o' or ch=='O'</p>
<p>Is ch=='u' or ch=='U'</p>
//Diamond type<br />
	|
<p>Yes, Vowel Letter</p>
<p>No, Consonant Letter</p>
//Right corner parallogram and connect end<br />
	|
<p>END</p>

<p><h3><u>Cprogram-C</u></h3></p>
<p>
#include stdio.h<br />
int main()<br />
{<br />
char ch;<br />
printf("Please enter an alphabet:");<br />
scanf("%c",&ch);<br />
if(ch=='a'||ch=='A'||ch=='e'||ch=='E'||ch=='i'||ch=='I'||ch=='o'||ch=='O'||ch=='u'||ch=='U')<br />

printf("%c is vowel\n",ch);<br />

else<br />

printf("%c is Consonant\n",ch);<br />

getch();<br />
}<br />
</p>
<p>
//Identify Vowel or Consonant Letter<br />
#include  stdio.h<br />

int main()<br />
{<br />
char chr;<br />
printf("Please enter an alphabet:");<br />
scanf("%c",&chr);<br />

if(chr=='a')<br />
printf("vowel\n");<br />

else if(chr=='e')<br />
printf("vowel\n");<br />

else if(chr=='i')<br />
printf("vowel\n");<br />

else if(chr=='o')<br />
printf("vowel\n");<br />

else if(chr=='u')<br />
printf("vowel\n");<br />

else if(chr=='A')<br />
printf("vowel\n");<br />

else if(chr=='E')<br />
printf("vowel\n");<br />

else if(chr=='I')<br />
printf("vowel\n");<br />

else if(chr=='O')<br />
printf("vowel\n");<br />

else if(chr=='U')<br />
printf("vowel\n");<br />

else<br />
printf("Consonant\n");<br />

getch();<br />
}<br />
</p>
<h2>72.*** *** *** </h2><br />
<p><u>কোন অক্ষর ছোট হাতের না বড় হাতের  না কোন অক্ষর নয় তা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input ch<br />

3.Is ch>='A' and ch<='Z'<br />
i)Yes, print Capital Letter <br />
ii)No, Go to next step<br />

4.Is ch>='a' && ch<='z'<br /><br />
i)Yes, print Small Letter<br />
ii)No, print Not any Letter<br />
5.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>ch</p>
//Parallogram<br />
	|
<p>Is ch>='A' && ch<='Z'<br /></p>
//Diamond type<br />
	|
<p>Yes, Capital Letter</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Is ch>='a' && ch<='z'<br /></p>
//Diamond type<br />
	|
<p>Yes, print Small letter</p>
//Right corner parallogram and connect end<br />
	 |
<p>No, print Not any Letter</p>
	|
<p>END</p>
<h2>73.*** AND *** </h2><br />
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Identify Small or Capital Letter<br />
#include  stdio.h<br />

int main()<br />
{<br />
char ch ;<br />
printf("Enter any Letter= ");<br />
scanf("%c",&ch );<br />

if(ch>='A' && ch<='Z')<br />

printf("%c is Capital Letter",ch);<br />

else if(ch>='a' && ch<='z')<br />

printf("%c is Small Letter",ch);<br />

else<br />
    printf("%c is not any Letter",ch);<br />

getch();<br />
}<br />
</p>
<h2>73.*** AND *** </h2><br />
<p><u>কোন সন লিপইয়ার কি না তা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input Year<br />

3.Is year%400==0<br />
i)Yes, print leapyear<br />
ii)No, Go to next step<br />

4.Is year%4==0 && year%100!==0<br />
i)Yes, print leapyear<br />
ii)No, print not leapyear<br />
5.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>year</p>
//Parallogram<br />
	|
<p>Is year%400==0<br /></p>
//Diamond type<br />
	|
<p>Yes, print leapyear</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Is year%4==0 && year%100!==0<br /></p>
//Diamond type<br />
	|
<p>Yes, print leapyear</p>
//Right corner parallogram and connect end<br />
	 |
<p>No, print Not leapyear</p>
	|
<p>END</p>

<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Identify leapyear<br />
#include stdio.h<br />

int main()<br />
{<br />
int year;<br />
printf("Enter year= ");<br />
scanf("%d",&year);<br />

if(year%400==0)<br />

printf("%d is leapyear!",year);<br />

else if(year%4==0 && year%100!=0)<br />

printf("%d is leapyear!",year);<br />

else<br />
    printf("%d is not leapyear",year);<br />

getch();<br />
}<br />
</p>
<h2>74.*** > *** </h2><br />
<p><u>দুটি সংখ্যার মধ্যে বড় সংখ্যা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input num1 num2, num3<br />

3.Is num1 > num2 and num1>num3<br />
i)Yes, print num1 is greatest<br />
ii)No, Go to next step<br />

4.Is num2 > num1 and num2>num3<br />
i)Yes, print num2 is greatest<br />
ii)No, Go to next step<br />

5.Is num3 > num1 and num3>num2<br />
i)Yes, print num3 is greatest<br />
ii)No, print These are equal<br />

6.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>num1, num2, num3</p>
//Parallogram<br />
	|
<p>Is num1 > num2 && num1>num3<br /></p>
//Diamond type<br />
	|
<p>Yes, print num1 is Greatest number</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Is num2 > num1 && num2>num3<br /></p>
//Diamond type<br />
	|
<p>Yes, print num2 is Greatest number</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Is num3 > num1 && num3>num2<br /></p>
//Diamond type<br />
	|
<p>Yes, print num3 is Greatest number</p>
//Right corner parallogram and connect end<br />
	|
<p>No, print All are Equal</p>
	|
<p>END</p>

<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Identify greatest number<br />
#include stdio.h<br />

int main()<br />
{<br />
int num1, num2,num3;<br />
printf("Enter 1st number= ");<br />
scanf("%d",&num1);<br />
printf("Enter 2nd number= ");<br />
scanf("%d",&num2);<br />
printf("Enter 3rd number= ");<br />
scanf("%d",&num3);<br />
if(num1>=num2-1&&num1>=num3-1)<br />

printf("Largest=%d",num1);<br />

else if(num3>=num1-1&&num3>=num2-1)<br />

printf("Largest=%d",num3);<br />

else<br />
    printf("All are equal");<br />

getch();<br />
}<br />
</p>
<h2>75.*** > *** </h2><br />
<p><u>দুটি সংখ্যার মধ্যে বড় সংখ্যা নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input num1 num2<br />
3.Is num1 > num2<br />
i)Yes, print num1<br />
ii)No, Go to next step<br />
4.Is num2 < mum1<br />
i)Yes, print num2<br />
ii)No,print Equal<br />
5.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>num1, num2</p>
//Parallogram<br />
	|
<p>Is num1 > num2<br /></p>
//Diamond type<br />
	|
<p>Yes, print num1</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Is num2 > num1<br /></p>
//Diamond type<br />
	|
<p>Yes, print num2</p>
//Right corner parallogram and connect end<br />
	|
<p>No, print Both Equal</p>
//Bottom corner of Diamond and connect end<br />
	|
<p>END</p>

<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Identify greater number between two<br />
#include stdio.h<br />
int main()<br />
{<br />
int num1, num2;<br />
printf("Enter 1st number= ");<br />
scanf("%d",&num1);<br />
printf("Enter 2nd number= ");<br />
scanf("%d",&num2);<br />
if(num1>=num2+1)<br />

printf("1st number is greater than 2nd number");<br />

else if(num2>=num1+1)<br />

printf("2nd number is greater than 1st number");<br />

else<br />
    printf("Both numbers are equal.");<br />

getch();<br />
}<br />
</p>
//Identify greater number<br />
#include  stdio.h<br />

int main()<br />
{<br />
int num1, num2;<br />
printf("Enter 1st number= ");<br />
scanf("%d",&num1);<br />
printf("Enter 2nd number= ");<br />
scanf("%d",&num2);<br />
if(num1>=num2+1)<br />

printf("Large=%d",num1);<br />

else if(num2>=num1+1)<br />

printf("Large=%d",num2);<br />

else<br />
    printf("Both numbers are equal");<br />

getch();<br />
}<br />
<p>
//Identify smaller number<br />
#include  stdio.h<br />

int main()<br />
{<br />
int num1, num2;<br />
printf("Enter 1st number= ");<br />
scanf("%d",&num1);<br />
printf("Enter 2nd number= ");<br />
scanf("%d",&num2);<br />
if(num1 <= num2-1)<br />

printf("Smaller=%d",num1);<br />

else if(num2 <= num1-1)<br />

printf("Smaller=%d",num2);<br />

else<br />
    printf("Both numbers are equal");<br />

getch();<br />
}<br />
</p>
<h2>76.*** *** *** </h2><br />
<p><u>ধনাত্মক, ঋনাত্মক অথবা শুন্য নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input num<br />
3.Is num > 0<br />
i)Yes, print Positive<br />
ii)No, Go to next step<br />
4.Is num < 0<br />
i)Yes, print Negative<br />
ii)No, print Zero<br />
5.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type<br />
	|
<p>input</p>
	|
<p>num</p>
//Parallogram<br />
	|
<p>Is num > 0<br /></p>
//Diamond type<br />
	|
<p>Yes, print Positive number</p>
//Right corner parallogram and connect end<br />
	|
<p>No, connect another Diamond</p>
	|
<p>Yes, print Negative number</p>
//Right corner parallogram and connect end<br />
	|
<p>No, print Zero</p>
//Bottom corner of Diamond and connect end<br />
	|
<p>END</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Condition Positive number,Negative number or zero<br />
#include  stdio.h<br />
int main()<br />
{<br />
int num;<br />
printf("Enter any number= ");<br />
scanf("%d",&num);<br />
if(num >=0+1)<br />

printf("You press positive number\n");<br />

else if(num <= 0-1)<br />

    printf("You press Negative number\n");<br />

else<br />
printf("You press zero\n");<br />

getch();<br />
}<br />
</p>
<h2>70.*** *** *** </h2><br />
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Condition Positive number,Negative number or zero<br />
#include  stdio.h<br />
int main()<br />
{<br />
int num;<br />
printf("Enter any number= ");<br />
scanf("%d",&num);<br />
if(num >= 0-1)<br />
{<br />
printf("You press positive number\n");<br />
}<br />
else if(num <= 0-1)<br />
{<br />
    printf("You press Negative number\n");<br />
}<br />
else<br />
printf("You press zero\n");<br />

getch();<br />
}<br />
</p>
<h2>70.*** *** *** </h2><br />
<h3><u>Condition positive number number</u></h2><br />
<p>
//Condition positive number number<br />
#include  stdio.h<br />
int main()<br />
{<br />
int x;<br />
printf("Enter any number= ");<br />
scanf("%d",&x);<br />
if(x>=0+1)<br />
{<br />
printf("You press positive number\n");<br />
}<br />
else<br />
    printf("You press Negative number\n");<br />
getch();<br />
}<br />
</p>
 <h2>77.*** *** *** </h2><br />
<h3><u>Condition(positive number)</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int x=5;<br />
	if(x>=0)<br />
	{<br />
	printf("x is positive\n");<br />
	}
	getch();<br />
}<br />
</p>
<h2>78.*** *** *** </h2><br />
<p><u>জোড় অথবা বিজোড় নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
1.Start<br />
2.input num<br />
3.Is num % 2== 0<br />
i)Yes, print Even<br />
ii)No, Print Odd<br />
4.End<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
//Oval Type
	|
<p>input</p>
	|
<p>num</p>
//Parallogram<br />
	|
<p>Is num % 2== 0<br /></p>
//Parl type<br />
	|
<p>Yes, print Even connect end</p>
//Right corner parallogram<br />
	|
<p>No, Print Odd and connect end</p>
//Bottom corner parallogram<br />
	|
<p>END</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Condition even or odd number<br />
#include  stdio.h<br />
int main()<br />
{<br />
int num;<br />
printf("Enter any integer= ");<br />
scanf("%d",&num);<br />
if(num%2==0)<br />
{<br />
printf("You press even number.\n");<br />
}<br />
else<br />
{<br />
    printf("You press odd number.\n");<br />
}<br />
getch();<br />
}<br />
</p>
<h2>79.*** *** *** </h2><br />
<h3><u>Condition even or odd number</u></h2><br />
<p>
//Condition even or odd number<br />
#include  stdio.h<br />
int main()<br />
{<br />
int x;<br />
printf("Enter any integer= ");<br />
scanf("%d",&x);<br />
if(x%2==0)<br />
{<br />
printf("You press even number.\n");<br />
}<br />
else<br />
{<br />
    printf("You press odd number.\n");<br />
}<br />
getch();<br />
}<br />
</p>
<h2>80.*** *** *** </h2><br />

<h3><u>Condition(Odd number)</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int x=11;<br />
	int y=x%2;<br />
	if(y==0)<br />
	{<br />
	printf("x is even\n");<br />
	}<br />
	else{<br />
	printf("x is Odd\n");<br />
	}<br />
	getch();<br />
}<br />
</p>

 <h2>81.*** *** *** </h2><br />
<h3><u>Condition(even number)</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int x=10;<br />
	int y=x%2;<br />
	if(y==0)<br />
	{<br />
	printf("x is even\n");<br />
	}<br />
	return 0;<br />
}<br />
</p>

<h2>82.*** *** *** </h2><br />
<h3><u>Condition(even number)</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
int x=2;<br />
if(x%2==0)<br />
{<br />
printf("x is even\n");<br />
}<br />
getch();<br />
}<br />
</p>

<h2>83.*** *** *** </h2><br />
<h3><u>Power value</u></h2><br />
<p>
//Power value<br />
#include  stdio.h <br />
int main()<br />
{<br />
    int x,y;<br />
    printf("Enter x= ");<br />
    scanf("%d",&x);<br />
     printf("Enter y= ");<br />
    scanf("%d",&y);<br />
    double result=pow(x,y);<br />

printf("Power value= %.2lf\n",result);<br />
getch();<br />
}<br />
</p>
<h2>84.*** *** *** </h2><br />
<h3><u>Power value</u></h2><br />
<p>
//Power value<br />
#include  stdio.h<br />
int main()<br />
{<br />
    float base, power,result;<br />
    printf("Enter base= ");<br />
    scanf("%f",&base);<br />
    printf("Enter power= ");<br />
    scanf("%f",&power);<br />
    result=pow(base,power);<br />

	printf("Power value= %.2lf\n",result);<br />
	getch();<br />
}<br />
</p>
<h2>85.*** *** *** </h2><br />
<h3><u>Power value</u></h2><br />
<p>
//Power value<br />
#include <stdio.h><br />
int main()<br />
{<br />
   double result=pow(5,2);<br />

printf("Power value= %.2lf\n",result);<br />
getch();<br />
}<br />
</p>
<h2>86.*** *** *** </h2><br />
<h3><u>Square root value </u></h2><br />
<p>
//Square root value<br />
#include  stdio.h <br />
int main()<br />
{<br />
    int x;<br />
    double result;<br />
printf("Enter a positive number= ");<br />
scanf("%d",&x);<br />
result=sqrt(x);<br />
printf("Squre root value= %.3f\n",result);<br />
getch();<br />
}<br />
</p>
<h2>87.*** *** *** </h2><br />
<h3><u>Square root value </u></h2><br />
<p>
//Square root value<br />
#include  stdio.h <br />
int main()<br />
{<br />
    float value,result;<br />
printf("Enter a positive integer or fraction number= ");<br />
scanf("%f",&value);<br />
result=sqrt(value);<br />
printf("Squre root value= %.3f\n",result);<br />
getch();<br />
}<br />
</p>
<h2>88.*** *** *** </h2><br />
<h3><u>Square root value </u></h2><br />
<p>
//Square root value<br />
#include  stdio.h <br />
int main()<br />
{<br />
    float value,result;<br />
printf("Enter a positive integer or fraction number= ");<br />
scanf("%f",&value);<br />
result=sqrt(value);<br />
printf("Squre root value= %f\n",result);<br />
getch();<br />
}<br />
</p>
<h2>89.*** *** *** </h2><br />
<h3><u>Absolute value </u></h2><br />
<p>
//Absolute value<br />
#include  stdio.h<br />
int main()<br />
{<br />
    int value,result;<br />
printf("Enter a positive or negative number= ");<br />
scanf("%d",&value);<br />
result=abs(value);<br />
printf("Absolute value= %d\n",result);<br />
getch();<br />
}<br />
</p>
<h2>90.*** *** *** </h2><br />
<h3><u>Absolute value </u></h2><br />
<p>
//Absolute value<br />
#include  stdio.h <br />
int main()<br />
{<br />
    int result=abs(-7);<br />

printf("Absolute value= %d\n",result);<br />
getch();<br />
}<br />
</p>
<h2>91.*** *** *** </h2><br />
<p><u>ফারেনহাইট স্কেলের তাপমাত্রা কে সেন্টিগ্রেডে এ রূপান্তর</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২। ফারেনহাইট স্কেলের তাপমাত্রা f নিই।<br />
৩। c=(f - 32)*5/9 । সূত্র ব্যবহার করে সেন্টিগ্রেড স্কেলের তাপমাত্রা c নির্নয় করি।<br />
৪। সেন্টিগ্রেড স্কেলের তাপমাত্রা  প্রদর্শন করি।<br />
৫। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>input</p>
	|
<p>f</p>
	|
<p>c=(f - 32)*5/9</p>
	|
<p>Print c</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
 //Convert Farenhite temperatuer to Centigrade<br />
 #include  stdio.h <br />
int main()<br />
{<br />
float c,f;<br />
printf("Enter temperature in Ferenhite scale= ");<br />
scanf("%f",&f);<br />
c=(f - 32)*5/9;<br />
printf("Tenperature of Centigrade Scale=%.2f",c);<br />
getch();<br />
}<br />
</p>
<h2>97.*** *** *** </h2><br />
<p><u>সেন্টিগ্রেড স্কেলের তাপমাত্রা কে ফারেনহাইট এ রূপান্তর</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২।  সেন্টিগ্রেড স্কেলের তাপমাত্রা c নিই।<br />
৩। f=(c * 1.8)+32 । সূত্র ব্যবহার করে ফারেনহাইট স্কেলের তাপমাত্রা f নির্নয় করি।<br />
৪। ফারেনহাইট স্কেলের তাপমাত্রা  প্রদর্শন করি।<br />
৫। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>input</p>
	|
<p>c</p>
	|
<p>f=(c* 1.8)+32</p>
	|
<p>Print f</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
 //Convert Celcius temperatuer to Ferenhite<br />
 #include  stdio.h <br />
int main()<br />
{<br />
float c,f;<br />
printf("Enter temperature in centigrade scale= ");<br />
scanf("%f",&c);<br />
f = (c * 1.8)+32;<br />
printf("Tenperature of Ferenhite Scale=%.2f",f);<br />
getch();<br />
}<br />
</p>
<h2>92.*** *** *** </h2><br />
<p><u> বৃত্তের পরিধি নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২।  ব্যাসার্ধ  r  নিই।<br />
৩। বৃত্তের পরিধি= ২ * 3.1416 * r । সূত্র ব্যবহার করে বৃত্তের পরিধি  নির্নয় করি।<br />
৪। পরিথি প্রদর্শন করি।<br />
৫। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>input</p>
	|
<p>radius</p>
	|
<p>perimeter= 2 * 3.1416 * radius</p>
	|
<p>Print perimeter</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
 #include stdio.h<br />
 #include math.h<br />
 int main()<br />
 {<br />
 float radius,perimeter;<br />
 printf("Enter radius= ");<br />
 scanf("%f",&radius);<br />

 perimeter = 2 * M_PI * radius;<br />
 printf("Perimeter of Circle=%.2f",perimeter);<br />
 getch();<br />
 }<br />
</p>  
<p><h3><u>Cprogram-C</u></h3></p>
<p>
 //Area of a Circle<br />
 #include  stdio.h <br />
 int main()<br />
 {<br />
 float radius,area;<br />
 printf("Enter radius= ");<br />
 scanf("%f",&radius);<br />

 area=3.1416 * radius * radius;<br />
 printf("Area of Circle=%.2f",area);<br />
 getch();<br />
 }<br />
</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
 //Area of a Circle<br />
 #include  stdio.h <br />
 int main()<br />
 {<br />
 float radius,area,pi=3.1416;<br />
 printf("Enter radius= ");<br />
 scanf("%f",&radius);<br />

 area=pi * radius * radius;<br />
 printf("Area of Circle=%.2f",area);<br />
 getch();<br />
 }<br />
</p>
<h2>95.*** *** *** </h2><br />
<p><u> আয়তক্ষেত্রের ক্ষেত্রফল নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২।  দৈর্ঘ্য  ও প্রস্থ নিই।<br />
৩। ক্ষেত্রফল=দৈর্ঘ্য * প্রস্থ  । সূত্র ব্যবহার করে ক্ষেত্রফল  নির্নয় করি।<br />
৪। ক্ষেত্রফল প্রদর্শন করি।<br />
৫। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>Input</p>
	|
<p>length,width</p>
	|
<p>area=length * width</p>
	|
<p>Print area</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>93.
 //Area of a rectangle<br />
 #include  stdio.h<br />
 int main()<br />
 {<br />
 float length,width,area;<br />
 printf("Enter lingth= ");<br />
 scanf("%f",&length);<br />
  printf("Enter width= ");<br />
 scanf("%f",&width);<br />
 area=length * width;<br />
 printf("Area of rectangale=%.2f\n",area);<br />
 getch();<br />
 }<br />
</p>

--------------------------------------------------
//<h2>94.Triangle area using Function</h2>
<p>
#include <stdio.h><br />
double triangleArea(double b, double h);<br />
int main()<br />
{<br />
double base, height;<br />
printf("Enter base= ");<br />
scanf("%lf",&base);<br />
printf("Enter height= ");<br />
scanf("%lf",&height);<br />
double area=triangleArea(base,height);<br />
printf("area= %.2f\n",area);<br />
}<br />
double triangleArea(double b, double h)<br />
{<br />
return 0.5*b*h;<br />

}<br />
</p>
------------------------------------------------
<h2>95.***Area of a triangle *** </h2><br />
<p><h3>//Area of a triangle </h3></p>
<p>

//Area of a triangle<br />

#include  stdio.h<br />
int main()<br />
{<br />
double base, height;<br />

printf("Enter base= ");<br />
scanf("%lf",&base);<br />
printf("Enter height= ");<br />
scanf("%lf",&height);<br />
double area=0.5*base*height;<br />


printf("area%.2f\n",area);<br />
getch();<br />
}<br />
</p>
---------------------------------------------------
<h2>96.*** *** *** </h2><br />
<p><u>ত্রিভূজের তিনটি বাহুর দৈর্ঘ্য থেকে ক্ষেত্রফল নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২। তিনটি বাহুর দৈর্ঘ্য  নিই।<br />
৩। পরিসীমার অর্ধ s=(a+b+c)/2 নির্নয় করি।<br />
৪। area= sqrt(s(s-a)(s-b)(s-c))  সূত্র ব্যবহার করে ক্ষেত্রফল  নির্নয় করি।<br />
৫। ক্ষেত্রফল প্রদর্শন করি।<br />
৬। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>Input</p>
	|
<p>base,height,area</p>
	|
<p>area=(base*height)/2</p>
	|
<p>Print area</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Area of a triangle given length of three arms<br />
#include stdio.h<br /><br />
main()<br />
{<br />
float a,b,c,s,area;<br />
printf("Enter length of 1st arm: ");<br />
scanf("%f",&a);<br />
printf("Enter length of 2nd arm: ");<br />
scanf("%f",&b);<br />
printf("Enter length of 3rd arm: ");<br />
scanf("%f",&c);<br />
s=(a+b+c)/2;<br />
area=sqrt(s*(s-a)*(s-b)*(s-c));<br />
printf("area is:%.2f",area);<br />
getch();<br />
}<br />
</p>
<h2>97.*** *** *** </h2><br />
<p><u>ত্রিভূজের ক্ষেত্রফল নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২। ভুমি ও উচ্চতা  নিই।<br />
৩। ক্ষেত্রফল=(ভুমি*উচ্চতা)/২ সূত্র ব্যবহার করে ক্ষেত্রফল  নির্নয় করি।<br />
৪। ক্ষেত্রফল প্রদর্শন করি।<br />
৬। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>Input</p>
	|
<p>base,height,area</p>
	|
<p>area=(base*height)/2</p>
	|
<p>Print area</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
//Area of a triangle<br />
#include stdio.h<br />
main()<br />
{<br />
	float base;<br />
	float height;<br />
	float area;<br />
	printf("Enter  base: ");<br />	
	scanf("%f",& base);<br />
	printf("Enter  height: ");<br />
	scanf("%f",& height);<br />
	area=(base*height)/2; <br />
	printf("area is:%.2f",area);<br />
	getch();<br />
}<br />
</p>
<h2>98.*** *** *** </h2><br />
<p><u>তিনটি পূর্ণ সংখ্যার যোগফল ও গড় নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২। সংখ্যা তিনটির ইনপুট নিই।<br />
৩। সংখ্যা তিনটির যোগফল নির্নয় করি।<br />
৪। যোগফলকে তিন দিয়ে ভাগ করে গড় নির্নয় করি।<br />
৫। যোগফল ও গড় প্রদর্শন করি।<br />
৬। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>Input</p>
	|
<p>num2,num2,num3,sum,avg</p>
	|
<p>Sum=num1+num2+num3</p>
	|
<p>avg=sum/3</p>
	|
<p>Print Sum</p>
	|
<p>Print avg</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
// Sum and Average of three integers<br />
#include  stdio.h<br />
int main()<br />
{<br />
int num1,num2,num3,sum;<br />
float avg;<br />
printf("Please enter 1st integer numbers = ");<br />
scanf("%d",&num1);<br />
printf("Please enter 2nd integer numbers = ");<br />
scanf("%d",&num2);
printf("Please enter 3rd integer numbers = ");<br />
scanf("%d",&num3);<br />
sum = num1 + num2+ num3;<br />

printf("The sum of these three numbers=%d\n",sum);<br />
avg=(float)sum/3;<br />
printf("The avarage of these three numbers=%.2f\n",avg);<br />
getch();<br />
}<br />
</p>
<h2>99.*** *** *** </h2><br />
<p><u>দুইটি সংখ্যার যোগফল নির্নয়।</u></p>
<p><h3><u>এলগরিদমঃ-A</u></h3></p>
<p>
১। শুরু<br />
২। দুইটি সংখ্যা ইনপুট নিই।<br />
৩। সংখ্যা দুটি যোগ করি।<br />
৪। যোগফল প্রদর্শন করি।<br />
৫। শেষ।<br />
</p>
<p><h3><u>Flowchart-F</u></h3></p>
<p>Start</p>
	|
<p>Input</p>
	|
<p>num2,num2</p>
	|
<p>Sum=num1+num2</p>
	|
<p>Print Sum</p>
	|
<p>End</p>
<p><h3><u>Cprogram-C</u></h3></p>
<p>
#include  stdio.h <br />
int main()<br />
{<br />
int num1,num2,sum;<br />
printf("Please enter two integer numbers = ");<br />
scanf("%d %d",&num1,&num2);<br />
sum = num1 + num2;<br />
printf("The sum of these numbers are=%d\n",sum);<br />
getch();<br />
}<br />
</p>


------------------------------------
<h2>100.*** *** *** </h2><br />
<h3><u>Assignment Operator a%=2 means a=a%2</u></h2><br />
<p>
//Assignment Operator a%=2 means a=a%2<br />
#include  stdio.h<br />
int main()<br />
{<br />
int a=5;<br />
a%=2;<br />
//ie, a=a%2<br />
printf("a= %d\n",a);<br />
//a=1<br />
getch();<br />
}<br />
</p>
<h2>101.*** *** *** </h2><br />
<h3><u>Assignment Operator a%=2 means a=a%2</u></h2><br />
<p>
//Assignment Operator a%=2 means a=a%2<br />
#include  stdio.h<br />
int main()<br />
{<br />
int a=5;<br />
a%=2;<br />
//ie, a=a%2<br />
printf("a= %d\n",a);<br />
//a=1<br />
getch();<br />
}<br />
</p>
<h2>102.*** *** *** </h2><br />
<h3><u>Assignment Operator a-=2 means a=a-2</u></h2><br />
<p>
//Assignment Operator a-=2 means a=a-2<br />
#include  stdio.h<br />
int main()<br />
{<br />
float a=5;<br />
a-=2;<br />
//ie, a=a-2<br />
printf("a= %.2f\n",a);<br />
//a=3<br />
getch();<br />
}<br />
</p>
<h2>103.*** *** *** </h2><br />
<h3><u>Assignment Operator a/=2 means a=a/2</u></h2><br />
<p>
//Assignment Operator a/=2 means a=a/2<br />
#include  stdio.h<br />
int main()<br />
{<br />
float a=5;<br />
a/=2;<br />
//ie, a=a/2<br />
printf("a= %f\n",a);<br />
//a=2.5<br />
getch();<br />
}<br />
</p>
<h2>104.*** *** *** </h2><br />
<h3><u>Assignment Operator a*=2 means a=a*2</u></h2><br />
<p>
//Assignment Operator a*=2 means a=a*2<br />
#include  stdio.h <br />
int main()<br />
{<br />
  int a=5;<br />
  a*=2;<br />
  //ie, a=a*2<br />
  printf("a= %d\n",a);<br />
  //a=10<br />
    getch();<br />
}<br />
</p>
<h2>105.*** *** *** </h2><br />
<h3><u>Assignment Operator a+=2 means a=a+2</u></h2><br />
<p>
//Assignment Operator a+=2 means a=a+2<br />
#include  stdio.h <br />
int main()<br />
{<br />
  int a=5;<br />
  a+=2;<br />
  //ie, a=a+2<br />
  printf("a= %d\n",a);<br />
  //a=7<br />
    getch();<br />
}<br />
</p>
<h2>106.*** *** *** </h2><br />
<h3><u>Area of a triangle(Type casting)</u></h2><br />
<p>
//Area of a triangle<br />
#include  stdio.h <br />
int main()<br />
{<br />
float base,height,area;<br />
printf("Enter Base = ");<br />
scanf("%f",&base);<br />
printf("Enter Height = ");<br />
scanf("%f",&height);<br />
area=(float)1/2*base*height;<br />
printf("Area of a triangle =%.2f\n",area);<br />
getch();<br />
}<br />
</p>
<h2>107.*** *** *** </h2><br />
<h3><u>Arithmatic operators</u></h2><br />
<p>
//Arithmatic operators<br />
#include  stdio.h <br />
int main()<br />
{<br />
int num1,num2,result;<br />
printf("Please enter 1st integer numbers = ");<br />
scanf("%d",&num1);<br />
printf("Please enter 2nd integer numbers = ");<br />
scanf("%d",&num2);<br />
result= num1+num2;<br />
printf("sum=%d\n",result);<br />

result= num1-num2;<br />
printf("subtract=%d\n",result);<br />

result= num1*num2;<br />
printf("multiplication=%d\n",result);<br />

result= num1/num2;<br />
printf("Division=%d\n",result);<br />

result= num1 % num2;<br />
printf("remainder=%d\n",result);<br />
getch();<br />
}<br />
</p>
<h2>108.*** *** *** </h2><br />
<h3><u>Average between two decimal numbers (Type casting)</u></h2><br />
<p>
//Type casting<br />
#include  stdio.h<br />
int main()<br />
{<br />
float num1,num2,sum;<br />
float avg;<br />
printf("Please enter 1st integer numbers = ");<br />
scanf("%f",&num1);<br />
printf("Please enter 2nd integer numbers = ");<br />
scanf("%f",&num2);<br />
sum= num1+num2;<br />
avg=(float)sum/2;<br />
//Type casting<br />
printf("The average of  two numbers is=%.2f\n",avg);<br />
getch();<br />
}<br />
</p>
<h2>109.*** *** *** </h2><br />
<h3><u>Average between two decimal numbers</u></h2><br />
<p>
//Average between two decimal numbers<br />
#include  stdio.h <br />
int main()<br />
{<br />
float num1,num2,sum,avg;<br />
printf("Please enter 1st integer numbers = ");<br />
scanf("%f",&num1);<br />
printf("Please enter 2nd integer numbers = ");<br />
scanf("%f",&num2);<br />
avg=(num1+num2)/2;<br />
printf("The average of  two numbers is=%.2f\n",avg);<br />
getch();<br />
}<br />
</p>
<h2>110.*** *** *** </h2><br />
<h3><u>Arithmatic operator Sum</u></h2><br />
<p>
//Arithmatic operator Sum<br />
#include  stdio.h <br />
int main()<br />
{<br />
int num1,num2,sum;<br />
printf("Please enter 1st integer numbers = ");<br />
scanf("%d",&num1);<br />
printf("Please enter 2nd integer numbers = ");<br />
scanf("%d",&num2);<br />
sum = num1 + num2;<br />
printf("The sum of these numbers are=%d\n",sum);<br />
getch();<br />
}<br />
</p>
<h2>111.*** *** *** </h2><br />
<h3><u>Arithmatic operator Sum between two integers</u></h2><br />
<p>
//Arithmatic operator Sum between two integers<br />
#include  stdio.h <br />
int main() <br />
{ <br />
int num1,num2,sum; <br />
printf("Please enter 1st integer numbers = "); <br />
scanf("%d",&num1); <br />
printf("Please enter 2nd integer numbers = "); <br />
scanf("%d",&num2); <br />
sum = num1 + num2; <br />
printf("The sum of these two numbers=%d\n",sum); <br />
getch(); <br />
} <br />
</p>
<h2>112.*** *** *** </h2><br />
<h3><u>Alert bel \a</u></h2><br />
<p>
//Escape sequence \n<br />
#include <stdio.h><br />
int main()<br />
{<br />
printf("\a Md. Abdul Karim\n");<br />
printf("Assistant teacher: \n");<br />
printf("Firozshah City Corp. Girls' High School\n");<br />
printf("Akbarshah\n");<br />
printf("Chittagong\n");<br />
getch();<br />
}<br />
</p>
<h2>113.*** *** *** </h2><br />
<h3><u>Escape sequence \n</u></h2><br />
<p>
//Escape sequence \n<br />
#include <stdio.h><br />
int main()<br />
{<br />
printf("Md. Abdul Karim\n");<br />
printf("Assistant teacher: \n");<br />
printf("Firozshah City Corp. Girls' High School\n");<br />
printf("Akbarshah\n");<br />
printf("Chittagong\n");<br />
getch();<br />
}<br />
</p>
<h2>114.*** *** *** </h2><br />
<h3><u>Convert Hexa-Decimal number to Octal</u></h2><br />
<p>
// Convert Hexa-Decimal number to Octal<br />
#include  stdio.h<br />
main()<br />
{<br />
int number;<br />
printf("Hexa-Decimal number= ");<br />
scanf("%x",&number);<br />
printf("Octal number=%o",number);<br />
getch();<br />
}<br />
</p>
<h2>115.*** *** *** </h2><br />
<h3><u>Convert Octal number to Hexa-Decimal</u></h2><br />
<p>
// Convert Octal number to Hexa-Decimal<br />
#include  stdio.h<br />
main()<br />
{<br />
int number;<br />
printf("Octal number= ");<br />
scanf("%o",&number);<br />
printf("Hexa-Decimal number=%x",number);<br />
getch();<br />
}<br />
</p>
<h2>116.*** *** *** </h2><br />
<h3><u>Convert Hexa-Decimal number to Decimal</u></h2><br />
<p>
// Convert Hexa-Decimal number to Decimal<br />
#include  stdio.h<br />
main()<br />
{<br />
int number;<br />
printf("Hexa-Decimal number= ");<br />
scanf("%x",&number);<br />
printf("Decimal number=%d",number);<br />
getch();<br />
}<br />
</p>
<h2>117.*** *** *** </h2><br />
<h3><u> Convert Decimal number to Hexa-Decimal</u></h2><br />
<p>
// Convert Decimal number to Hexa-Decimal<br />
#include  stdio.h <br />
main()<br />
{<br />
int number;<br />
printf("Decimal number= ");<br />
scanf("%d",&number);<br />
printf("Hexa-Decimal number=%x",number);<br />
getch();<br />
}<br />
</p>
<h2>118.*** *** *** </h2><br />
<h3><u> Convert Octal number to Decimal</u></h2><br />
<p>
// Convert Octal number to Decimal<br />
#include  stdio.h <br />
main()<br />
{<br />
int number;<br />
printf("Octal number= ");<br />
scanf("%o",&number);<br />
printf("Decimal number=%d",number);<br />
getch();<br />
}<br />
</p>
<h2>119.*** *** *** </h2><br />
<h3><u>Convert Decimal number to Octal</u></h2><br />
<p>
// Convert Decimal to Octal<br />
#include  stdio.h<br />
main()<br />
{<br />
int number;<br />
printf("Decimal number= ");<br />
scanf("%d",&number);<br />
printf("Octal number=%o",number);<br />
getch();<br />
}<br />
</p>
<h2>120.*** *** *** </h2><br />
<h3><u>Convert   Character to Ascii value</u></h2><br />
<p>
//Convert  to Character Ascii value<br />
#include stdio.h<br />
int main()<br />
{<br />
int n;<br />
char ch;<br />
printf("Enter any ASCII value : ");<br />
//114<br />
scanf("%d",&n);<br />
printf("The Ascii character is:%c",n);<br />
//r<br />
getch();<br />
}<br />
}<br />
</p>
<h2>121.*** *** *** </h2><br />
<h3><u>Convert Ascii value to Character</u></h2><br />
<p>
//Convert Ascii value to Character<br />
#include stdio.h<br />
int main()<br />
{<br />
int n;<br />
char ch;<br />
printf("Enter any ASCII value : ");<br />
//122<br />
scanf("%d",&ch);<br />
printf("The Ascii character is:%c",ch);<br />
//r<br />
getch();<br />
}<br />
</p>
<h2>123.*** *** *** </h2><br />
<h3><u>Area of a triangle</u></h2><br />
<p>
#include stdio.h <br />
int main()<br />
{<br />
	float base,height,area;<br />

	printf("Enter Base = ");<br />
	scanf("%f",&base);<br />

	printf("Enter Height = ");<br />
	scanf("%f",&height);<br />

	area=0.5*base*height;<br />
	printf("Area of a triangle =%.2f\n",area);<br />
	getch();<br />
}<br />
</p>

****<b>124.convert uppercase to lowercase without library function</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
char lower,upper;<br />
printf("Enter any uppercase letter : ");<br />
scanf("%c",&upper);<br />
printf("lowercase letter=%c",upper+32);<br />
getch();<br />
}<br />
</p>
<p>
****<b>125.convert lowercase to uppercase without library function</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
char lower,upper;<br />
printf("Enter any lowercase letter : ");<br />
scanf("%c",&lower);<br />
printf("Uppercase letter=%c",lower-32);<br />
getch();<br />
}<br />
</p>
<p>
****<b>126.convert uppercase to lowercase with library function</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
char lower,upper;<br />
printf("Enter any uppercase letter= ");<br />
scanf("%c",&upper);<br />
lower=tolower(upper);<br />
printf("lowercase letter=%c",lower);<br />
getch();<br />
}<br />
</p>

****<b>127.convert lowercase to uppercase with library function</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
char lower,upper;<br />
printf("Enter any lowercase letter : ");<br />

scanf("%c",&lower);<br />
upper = toupper(lower);<br />
printf("uppercase letter=%c", upper);<br />
getch();<br />
}<br />
</p>

<p>
****<b>128.Convert Decimal number to Octal number</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int number;<br />
	printf("Decimal number = ");<br />	
	scanf("%d",&number );<br />
	printf("Octal number = %o",number); <br />	
	getch();	<br />
}<br />
</p>

<p>
****<b>129.Convert Octal to Decimal number</b>***<br />
//Convert Octal to Decimal number<br />
#include  stdio.h<br />
int main()<br />
{<br />
	int number;<br />
	printf("Octal number = ");<br />
	scanf("%o",&number );<br />
	printf("Decimal number = %d",number);<br />
	getch();<br />
}<br />
</p>

<p>
****<b>130.Convert Decimal to Hexa-Decimal number</b>***<br />
//Convert Decimal to Hexa-Decimal number<br />
#include stdio.h<br />
int main()<br />
{<br />
	int number;<br />
	printf("Decimal number = ");<br />
	scanf("%d",&number );<br />
	printf("Hexa-Decimal number = %x",number);<br />
	getch();<br />
}<br />
</p>
<p>
****<b>131.Convert HexaDecimal to Decimal number</b>***<br />
//Convert HexaDecimal to Decimal number<br />
#include stdio.h<br />
int main()<br />
{<br />
    int number;<br />
    printf("Hexa-Decimal number = ");<br />
    scanf("%x",&number );<br />
    printf("Decimal number = %d",number);<br />
    getch();<br />
}<br />
</p>

<p>
****<b>132.Convert Hexa-Decimal to Octal number</b>***<br />
//Convert Hexa-Decimal to Octal number<br />
#include stdio.h<br />
int main()<br />
{<br />
    int number;<br />
    printf("Hexa-Decimal number = ");<br />
    scanf("%x",&number );<br />
    printf("Octal number = %o",number);<br />
    getch();
}<br />
</p>

<p>
****<b>133.Convert Octal to Hexa-Decimal number</b>***<br />
//Convert Octal to Hexa-Decimal number<br />
#include stdio.h<br />
int main()<br />
{<br />
    int number;<br />
    printf("Octal number = ");<br />
    scanf("%o",&number );<br />
    printf("Hexa-Decimal number = %x",number);<br />
    getch();<br />
}<br />

</p>

 <h3><u>134.array</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int a,b,c;<br />
	int n[3];<br />
	int i;<br />
	for(i=0;i<=3-1;i++)<br />
	{<br />
	 scanf("%d",&n[i]);<br />
	}<br />
	for(i=0;i<=3-1;i++)<br />
	{<br />
	 printf("%d\n",n[i]);<br />
	}<br />

	getch();<br />
}<br />
</p>
 <h2>135.*** *** *** </h2><br />
<h3><u>array</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int a,b,c;<br />
	int n[3];<br />
	int i;<br />
	for(i=0;i<=3-1;++i)<br />
	{<br />
	 scanf("%d",&n[i]);<br />
	}<br />
	for(i=0;i<=3-1;++i)<br />
	{<br />
	 printf("%d\n",n[i]);<br />
	}<br />

	getch();<br />
}<br />
</p>

<h2>136.*** *** *** </h2><br />
<h3><u>array</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int a,b,c;
	int n[3];<br />
	a=2;<br />
	n[0]=2;<br />
	printf("a=%d n[0]=%d\n",a,n[0]);<br />
	a=a+1;<br />
	n[0]=n[0]+1;<br />
	printf("a=%d n[0]=%d\n",a,n[0]);<br />
	getch();<br />
}<br />
</p>

 <h2>137.*** *** *** </h2><br />
<h3><u>array</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int a,b,c;<br />
	int n[3];<br />
	scanf("%d",&n[0]);<br />
	scanf("%d",&n[1]);<br />
	scanf("%d",&n[2]);<br />
	printf("%d\n",n[0]);<br />
	printf("%d\n",n[1]);<br />
	printf("%d\n",n[2]);<br />

	getch();<br />
}<br />
</p>

 <h2>138.*** *** *** </h2><br />
<h3><u>scanf and printf</u></h3><br />
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int a,b,c;<br />
	int n[3];<br />
	scanf("%d",&a);<br />
	scanf("%d",&b);<br />
	scanf("%d",&c);<br />
	printf("%d\n",a);<br />
	printf("%d\n",b);<br />
	printf("%d\n",c);<br />

	getch();<br />
}<br />
</p>

 <h2>139.*** *** *** </h2><br />
<h3><u>print * line by line</u></h3><br />
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int i,j,n;<br />
	for(j=0;j<=5-1;j=j+1){<br />
	for(i=0;i<=j+1-1;i=i+1)<br />

	{<br />
	  printf("*");<br />
	}<br />
	printf("\n");<br />
	getch();<br />
}<br />
</p>

 <h2>140.*** *** *** </h2><br />
<h3><u>print * line by line</u></h3><br />
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int i,j,n;<br />
	for(j=0;j<=5-1;j=j+1){<br />
	for(i=0;i<=j+1-1;i=i+1)<br />

	{<br />
	printf("*");<br />
	}<br />
	printf("\n");<br />
	getch();<br />
}<br />
</p>
---------------------------------------
 <h2>141.print * line by line*** *** *** </h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int i,j,n;<br />
	for(j=0;j<=5-1;j=j++){<br />
	for(i=0;i<=j+1-1;i=i++)<br />

	{<br />
	printf("*");<br />
	}<br />
	printf("\n");<br />
	getch();<br />
}<br />
</p>
-----------------------------------------------------------
 <h2>142.Enter starting number,difference and ending number and get sum</h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n,sum,start,dif,end;<br />

	scanf("%d%d%d",&start,&dif,&end);<br />
	for(n=start,sum=0;n<=end;n=n+dif)<br />
	{<br />
	sum=sum+n;<br />
	}<br />
	printf("Sum is=%d\n",sum);<br />
	getch();<br />
}<br />
</p>
-----------------------------------------------------------
 <h2>143.sum 5+10+15+20+25----990+995+1000*** *** *** </h2>
<p>
#include<stdio.h><br />
int main()<br />
{<br />
	int n,sum=0;<br />
	for(n=5;n<=1000;n=n+5)<br />
	{<br />
	sum=sum+n;<br />
	}<br />
	printf("Sum is=%d\n",sum);<br />
	getch();<br />
}<br />
--------------------------------------------------------
 <h2>144.sum 5+10+15+20+25----990+995+1000*** *** *** </h2>
<p>
#include<stdio.h><br />
int main()<br />
{<br />
	int n,sum;<br />
	for(n=5,sum=0;n<=1000;n=n+5)<br />
	{<br />
	sum=sum+n;<br />
	}<br />
	printf("Sum is=%d\n",sum);<br />
	getch();<br />
}<br />
</p>
--------------------------------------------------------
 <h2>145.print 5,10,15,20,25----990,995,1000*** *** *** </h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	for(n=5;n<=1000;n=n+5)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>
---------------------------------
 <h2>146.continue</h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=1;<br />
	for(n=1;n<=10;n=n+1)<br />
	{<br />
    printf("%d\n",n);<br />
    continue;<br />

	}<br />
	getch();<br />
}<br />
</p>
-----------------------------------
 <h2>147.break </h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=1;<br />
	for(;n<=100;n=n+1)<br />
	{<br />
    printf("%d\n",n);<br />
    if(n>=50)<br />
	{<br />
    break;<br />
    }<br />

	}<br />
	getch();<br />
}<br />
</p>
----------------------------------
 <h2>148.>break</h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=1;<br />
	for(;n<=100;n=n+1)<br />
	{<br />
    printf("%d\n",n);<br />
    if(n>=50+1)<br />
	{<br />
    break;<br />
    }<br />

	}<br />
	getch();<br />
}<br />
</p>
------------------------------------
 <h2>149.break </h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=1;<br />
	for(;n<=100;n=n+1)<br />
	{<br />
	printf("%d\n",n);<br />
	break;<br />
	}<br />
	getch();<br />
}<br />
</p>
---------------------------------------------------
 <h2>150.serial number for loop(1-100)*** *** *** </h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=1;<br />
	for(;n<=100;n=n+1)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>
-----------------------------------------
 <h2>151.even number for loop(1-100)</h2>
<p>
#include stdio.h <br />
int main()<br />
{<br />
	int n=2;<br />
	for(;n<=100;n=n+2)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>
----------------------------------------
 <h2>152.even number for loop(1-100)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	for(n=2;n<=100;)<br />
	{<br />
	printf("%d\n",n);<br />
	n=n+2;<br />
	}<br />
	getch();<br />
}<br />
</p>
-----------------------------------------------
 <h2>153.even number for loop(1-100)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	for(n=2;n<=100;n=n+2)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>
----------------------------------------
 <h2>154.for loop(1-100) </h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	for(n=1;n<=100;n=n+1)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>
-------------------------------------------------------
 <h2>155.even number while loop without if(1-100)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	n=2;<br />
	while (n<=100)<br />
	{<br />
	printf("%d\n",n);<br />

	n=n+2;<br />
	}<br />
	getch();<br />
}<br />
</p>
-------------------------------------------------
 <h2>156.even number while loop(1-100)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	n=1;<br />
	while (n<=100)<br />
	{<br />
	if(n%2==0)<br />
	{<br />
	printf("%d\n",n);<br />
	}<br />

	n=n+1;<br />
	}<br />
	getch();<br />
}<br />
</p>
---------------------------------------
 <h2>157.while loop(1-10)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	n=1;<br />
	while (n<=10)<br />
	{<br />
	printf("%d\n",n);<br />
	n=n+1;<br />
	}<br />
	getch();<br />
}<br />
</p>
--------------------------------------
<h2>158.while loop(1-100)</h2>
<p>
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	n=1;<br />
	while (n<=100)<br />
	{<br />
	printf("%d\n",n);<br />
	n=n+1;<br />
	}<br />
	getch();<br />
}<br />
</p>

<p>
****<b>159.print integer(1-10)</b>***<br />
#include stdio.h<br /><br />
int main()<br />
{<br />
	int n;<br />
	n=1;<br />
	printf("%d\n",n);//1<br />
	n=n+1;<br />
	printf("%d\n",n);//2<br />
	n=n+1;<br />
	printf("%d\n",n);//3<br />
	n=n+1;<br />
	printf("%d\n",n);//4<br />
	n=n+1;<br />
	printf("%d\n",n);//5<br />
	n=n+1;<br />
	printf("%d\n",n);//6<br />
	n=n+1;<br />
	printf("%d\n",n);//7<br />
	n=n+1;<br />
	printf("%d\n",n);//8<br />
	n=n+1;<br />
	printf("%d\n",n);//9<br />
	n=n+1;<br />
	printf("%d\n",n);//10<br />

	getch();<br />
}<br />
</p>

<p>
****<b>160.print integer(1-10)</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	printf("1\n");<br />
	printf("2\n");<br />
	printf("3\n");<br />
	printf("4\n");<br />
	printf("5\n");<br />
	printf("6\n");<br />
	printf("7\n");<br />
	printf("8\n");<br />
	printf("9\n");<br />
	printf("10\n");<br />

	getch();<br />
}<br />
</p>

<p>
****<b>161.Integer Test</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	scanf("%d",&n);<br />
	if(n>=10-1)<br />
	{<br />
	printf("%d is greater than10\n",n);<br />
	}<br />
	else if(n>=5+1)<br />
	
	{<br />
	printf("%d is greater than5\n",n);<br />
	}<br />
	else{<br />
	printf("%d is less than 5\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>

<p>
****<b>162.Inteter Test</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	scanf("%d",&n);<br />
	if(n>=10+1)<br />
	{<br />
	printf("%d is greater than10\n",n);<br />
	}<br />
	else if(n>=5+1)<br />
	{<br />
	printf("%d is greater than5\n",n);<br />
	}<br />
	else{<br />
	printf("%d is less than 5\n",n);<br />
	}<br />
	getch();<br />
}<br />
</p>

<p>
****<b>163.Result</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int marks;<br />
	char grade;<br />
	scanf("%d",&marks);<br />
	if(marks>=80)<br />
	{<br />
	grade='A+';<br />
	printf("Your grade is:%c\n",grade);	<br />
	}<br />
	else if(marks>=70)<br />
	{<br />
	grade='A';<br />
	printf("Your grade is:%c\n",grade);	<br />	
	}<br />
	else if(marks>=60)<br />
	{<br />
	grade='A-';<br />
	printf("Your grade is:%c\n",grade);	<br />	
	}<br />
	else if(marks>=50)<br />
	{<br />
	grade='B';<br />
	printf("Your grade is:%c\n",grade);	<br />	
	}<br />
	else if(marks>=40)<br />
	{<br />
	grade='C';<br />
	printf("Your grade is:%c\n",grade);	<br />	
	}<br />
	else if(marks>=33)<br />
	{<br />
	grade='D';<br />
	printf("Your grade is:%c\n",grade);	<br />	
	}<br />
	else<br />
	{<br />
	printf("Your grade is:F\n");<br />
	}<br />
	getch();<br />
}<br />
</p>

<p>
****<b>164.Condition integer</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
	int n;<br />
	scanf("%d",&n);<br />
	if(n>=10+1)<br />
	{<br />
	printf("%d is greater than10\n",n);<br />	
	}<br />
	else if(n>=5+1)<br />
	{<br />
	printf("%d is greater than10\n",n);<br />	
	}<br />
	getch();<br />
}<br />
</p>

<p>
****<b>165.Convert ASCII value to character</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
    int n;<br />
    printf("Enter any ASCII value= ");<br />
    scanf("%d",&n);<br />
    printf("The ASCII character is=%c",n );<br />
    getch();<br />

}<br />
</p>
<p>
****<b>166.Convert character to ASCII code</b>***<br />
#include stdio.h<br />
int main() {<br />
	char ch;<br />
	printf("Enter any character= ");<br />
	scanf("%c",&ch);<br />
	printf("The ASCII value is= %d\n",ch);<br />
	getch();<br />
}<br />
</p>

<p>
****<b>167.Patern-1(Nested loop)</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />	
}<br />
printf("\n");<br />	
}<br />
getch();<br />
}<br />

</p>
<p>
****<b>168.Patern-2</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d",row);<br />	
}<br />
printf("\n");<br />	
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>169patern-3</b>***<br />
#include<stdio.h><br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d",col%2);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>170patern-4</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d",row%2);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>171.patern-5</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%c",col+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();
}<br />
</p>
<p>
****<b>172.patern-6</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%d ",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("0",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>Paralleogram</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=n;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>rightangle triangle</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>Piramid when n>10</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=10;col<=row;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>Mix-up-Patern</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br /> 
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);
}<br />
printf("\n");<br />
}<br />
for(row=n;row>=1;row--){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>

<p>
****<b>Mix-up-Patern</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br /> 
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
</p>
<p>
****<b>printf</b>***<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col); }<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){ <br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){//number print<br />
printf("%c",row+64); <br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br /> 
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%C",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){//number print<br />
printf("*",row);<br />
}<br />
printf("\n");<br />
}<br />

getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />

for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("*",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />

</p>
<p>
****<b>printf</b>***<br />
  #include <stdio.h><br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){//number print<br />
printf("*",row);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("*",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",row); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",row%2); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col%2); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%c",row+64); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%c",col+64); <br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n ;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("#");<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){//number print<br />
printf("%d",row%2);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",row%2);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){//number print<br />
printf("%d",col%2);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col%2);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){//space pring<br />
printf("*");<br />
}<br />

printf("\n");<br />
}<br />

getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){//space pring<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){//space pring<br />
printf("%c",col+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){//space pring<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>row*column</b>***<br />
  #include stdio.h<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d ",row*col);<br />
}<br />
 
printf("\n");<br />
}<br />

getch();<br />
}<br />
</p>
<p>
****<b>Triangle</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){//Star print<br />
printf("*");<br />
}<br />
printf("\n");<br />
}<br />

getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>

<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%d",row);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%c",col+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;
printf("Enter N= ");
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=n;row>=1;row--){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){//Star print<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){//Star print<br />
printf("%c",row+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("%c",col+64);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){//Star print<br />
printf("%c",col+64);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){<br />
printf("*");<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}<br />
for(col=1;col<=2*row-1;col++){//Star print<br />
printf("*");<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}//end of space print<br />
for(col=1;col<=row;col++){<br />
printf("* ");<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>printf</b>***<br />
  #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){//space pring<br />
printf(" ");<br />
}//end of space print<br />
for(col=1;col<=row;col++){<br />
printf("*");<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>Rectangular</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col; printf("Enter N= "); scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){//<br />
if(row==1||row==n||col==1||col==n){<br />
	printf("*");<br />
}else{<br />
	printf(" ");<br />
}<br />
}//end of space print<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>Rightangle Triangle</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br /> 
printf("Enter N= "); <br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){<br />
if(col==1||row==n||row==col){<br />
printf("*");<br />
}else{<br />
printf(" ");<br />
}<br />
}<br />
printf("\n"); <br />
}<br />
getch();<br />
}<br />
</p>
****<b>X Star Patern</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col;<br />
printf("Enter N= ");<br /> 
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n;col++){<br />
if(row==col||row+col==n+1){<br />
printf("*");<br />
}else{<br />
printf(" ");<br />
}<br />
}<br />
printf("\n");<br /> 
} <br />
getch();<br />
}<br />
</p>
****<b>Floyd's Triangle</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col,count=0;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=row;col++){<br />
printf("%d ",++count);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
****<b>printf</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col,count=0;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
for(col=row-1;col>=1;col--){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />	
getch();<br />
}<br />
</p>
****<b>printf</b>***<br />
   #include stdio.h<br />
int main()<br />
{<br />
int n, row, col,count=0;<br />
printf("Enter N= ");<br />
scanf("%d",&n);<br />
for(row=1;row<=n;row++){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
for(col=row-1;col>=1;col--){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
for(row=n-1;row>=1;row--){<br />
for(col=1;col<=n-row;col++){<br />
printf(" ");<br />
}<br />
for(col=1;col<=row;col++){<br />
printf("%d",col);<br />
}<br />
for(col=row-1;col>=1;col--){<br />
printf("%d",col);<br />
}<br />
printf("\n");<br />
}<br />
getch();<br />
}<br />
</p>
<p>
****<b>One dimentional array</b>***<br />

//declearation and initialization<br />

#include stdio.h<br />
int main(){<br />
	int num1, num2, num3, num4, num5;<br />
	num1=10;<br />
	num2=20;<br />
	num3=30;<br />
	num4=40;<br />
	num5=50;<br />
	
	int sum=num1+num2+num3+num4+num5;<br />
	printf("The sum is= %d\n",sum);<br />
}<br />
</P>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size];<br />
// name[index]=data;<br />
#include stdio.h<br />
int main(){<br />
int num[5];<br />

num[0]=10;<br />
num[1]=20;<br />
num[2]=30;<br />
num[3]=40;<br />
num[4]=50;<br />
printf("The second data is= %d\n",num[1]);<br />
printf("The fouth data is= %d\n",num[3]);<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size];<br />
// name[index]=data;<br />
#include stdio.h<br />
int main(){<br />
int num[5];<br />
num[0]=10;<br />
num[1]=20;<br />
num[2]=30;<br />
num[3]=40;<br />
num[4]=50;<br />
int sum=num[0]+num[1]+num[2]+num[3]+num[4];<br />
printf("The sum is= %d\n",sum);<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />

#include  stdio.h<br />
int main(){<br />
int num[5]={10,20,30,40,50};<br />

int sum=num[0]+num[1]+num[2]+num[3]+num[4];<br />
printf("The sum is= %d\n",sum);<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />

#include stdio.h<br />
int main(){<br />
int num[]={10,20,30,40,50};<br />
printf("Fourth data is= %d\n",num[3]);<br />
getch();<br />
}<br />
</p>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />
//without size<br />
#include  stdio.h<br />
int main(){<br />
int num[]={10,20,30,40,50};<br />

int sum=num[0]+num[1]+num[2]+num[3]+num[4];<br />
printf("The sum is= %d\n",sum);<br />
getch();<br />
}<br />
</p>
<p>
****<b>Loop in array</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />

#include stdio.h<br />
int main(){<br />
int a[10],sum=0,i;<br />
a[0]=10;<br />
a[1]=20;<br />
a[2]=30;<br />
a[3]=40;<br />
a[4]=50;<br />
a[5]=60;<br />
a[6]=70;<br />
a[7]=80;<br />
a[8]=90;<br />
a[9]=100;<br />

for(i=0;i<=10-1;i++){<br />
	sum=sum+a[i];<br />
}<br />

printf("The sum is= %d\n",sum);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>printf</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />

#include stdio.h<br />
int main(){<br />
int a[10]={10,20,30,40,50,60,70,80,90,100};<br />
int sum=0,i;<br />

for(i=0;i<=10-1;i++){<br />
	sum=sum+a[i];<br />
}<br />

printf("The sum is= %d\n",sum);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Sum and Average</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />

#include stdio.h<br />
int main(){<br />
int a[10]={9,20,30,40,50,60,70,80,90,100};<br />
int sum=0,i;<br />
for(i=0;i<=10-1;i++){<br />
	sum=sum+a[i];<br />
}<br />
printf("The sum is= %d\n",sum);<br />
printf("The average is= %.2f\n",(float)sum/10);<br />
getch();<br />
}<br />
</p>
<p>
****<b>Scan five numbers from users</b>***<br />
//declearation and initialization<br />
//datatype name[size]={data,data,data,... ...};<br />
#include <stdio.h><br />
int main(){<br />
int a[5];<br />
int sum=0,i;<br />
printf("Enter five numbers= ");<br />
scanf("%d %d %d %d %d",&a[0],&a[1],&a[2],&a[3],&a[4]);<br />
for(i=0;i<=5-1;i++){<br />
	sum=sum+a[i];<br />
}<br />
printf("The sum is= %d\n",sum);<br />
printf("The average is= %.2f\n",(float)sum/5);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main(){<br />
int sum=0,i;<br />
int a[5];<br />
printf("Enter five numbers= ");<br />
for(i=0;i<=5-1;i++){<br />
	scanf("%d",&a[i]);<br />
}<br />
for(i=0;i<=5-1;i++){<br />
	sum=sum+a[i];<br />
}<br />
printf("The sum is= %d\n",sum);<br />
printf("The average is= %.2f\n",(float)sum/5);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>printf</b>***<br />
#include stdio.h<br />
int main(){<br />
int sum=0,i,n;<br />
int a[100];<br />
printf("How many numbers you enter?= ");<br />
scanf("%d",&n);<br />
for(i=0;i<=n-1;i++){<br />
scanf("%d",&a[i]);<br />
}<br />
for(i=0;i<=n-1;i++){<br />
sum=sum+a[i];<br />
}<br />
printf("The sum is= %d\n",sum);<br />
printf("The average is= %.2f\n",(float)sum/n);<br />
getch();<br />
}<br /><br />
</p>

<p>
****<b>Identify maximum value</b>***<br />
//Display maximumm<br />
#include stdio.h<br />
int main(){<br />
int sum=0,i,n;<br />
int num[100];<br />
printf("How many numbers you enter?= ");
scanf("%d",&n);<br />
for(i=0;i<=n-1;i++){<br />
scanf("%d",&num[i]);<br />
}<br />
int max=num[0];<br />
for(i=0;i<=n-1;i++){<br />
if(max <=num[i]-1){<br />
	max=num[i];<br />
}	<br />
}<br />
printf("Maximum value is=%d\n",max);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Identify Minimum value</b>***<br />
//Display minimum value<br />
#include stdio.h<br />
int main(){<br />
int sum=0,i,n;<br />
int num[100];<br />
printf("How many numbers you enter?= ");<br />
scanf("%d",&n);<br />
for(i=0;i<=n-1;i++){<br />
scanf("%d",&num[i]);<br />
}<br />
int min=num[0];<br />
for(i=0;i<=n-1;i++){<br />
if(min >= num[i]+1){<br />
	min=num[i];<br />
}<br />	
}<br />
printf("Minimum value is=%d\n",min);<br />
getch();<br />
}<br /><br />
</p>

****<b>Array</b>***<br />
#include stdio.h<br />
 
int main(){<br />
	int i;<br />
int num[]={10,20,30,40,50};<br />
for( i=0; i<=5-1; i++){<br />
		printf("%d ",num[i]);<br />
}<br />
 getch();<br />
}<br /><br />
</p>
****<b>Array Pass in a function</b>***<br />
#include stdio.h<br />
 void display(int x[]){<br />
 	int i;<br />
for( i=0; i<=5-1; i++){<br />
	printf("%d ",x[i]);<br />
}<br />
 }<br />
int main(){<br />
	
int num[]={10,20,30,40,50};<br />
display(num);<br />

 getch();<br />
}<br /><br />
</p>
<p>
****<b>Find maximum value in Array</b>***<br />
#include stdio.h<br />

 int maximum(int x[]){<br />
 	int i;<br />
 	int max = x[0];<br />
for( i=1; i<=6-1; i++){<br />
	if(max <= x[i]-1){<br />
		max = x[i];<br />	
	}<br />	
}<br />
return max;<br />
}<br />
int main(){<br />
	
int num[]={10,20,30,40,50,-5};<br />
int maximamValue = maximum(num);<br />
printf("maximum= %d\n",maximamValue);<br />
}<br /><br />
</p>
<p>
****<b>Fibonakki series using array</b>***<br />
// Fibonakki Series
#include stdio.h<br />
int main(){<br />
int a[100],n,i;<br />
printf("Enter the number of items = ");<br />
scanf("%d",&n);<br />
a[0]=0;<br />
a[1]=1;<br />
for(i=2; i<=n-1; i++){<br />
a[i] = a[i-1] + a[i-2];<br />
}<br />
printf("\n");<br />
for(i=0;i<=n-1;i++){<br />
	printf("%d, ",a[i]);<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Linier searching number and position in arry</b>***<br />
 
#include stdio.h<br />
int main(){<br />
int num[]={10,2,30,15,28,5,19};<br />
int value,pos=-1,i;<br />
printf("Enter the value you want to search= ");<br />
scanf("%d",&value);<br />
for(i=0; i<=7-1; i++){<br />
if(value==num[i]){<br />
pos=i+1;<br />
break;<br />	
}<br />
}<br />
if(pos==-1){<br />
printf("Item is not found");<br />
}else{<br />
printf("The value is found at position index= %d\n",pos);<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Replace all items of an arry by another equal item's array</b>***<br />
#include stdio.h<br />
int main(){<br />
int array1[5]={1,2,3,4,5},array2[6]={6,7,8,9,10},i;<br />
printf("Array2={6,7,8,9,10}\n");<br />
printf("Array1's items are= ");<br />
for(i=0; i<=5-1; i++){<br />
printf("%d, ",array1[i]);<br />
}<br />
for(i=0; i<=5-1; i++){<br />
array2[i]=array1[i];<br />
}<br />
printf("and Array2's items are= ");<br />
for(i=0; i<=5-1; i++){<br />
printf("%d, ",array2[i]);<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Two dimentional array</b>***<br />
//2D array <br />
#include stdio.h<br />
int main(){<br />
	int i,j;<br />
int A[3][4]={{1,2,3,4},{5,6,7,8},{9,10,11,12}};<br />
 for(i=0;i<=3-1;i++){<br />
 	for(j=0;j<=4-1;j++){<br />
 	printf("%d ",A[i][j]);<br />
 }<br />
	printf("\n");<br />
 }<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Create a Matrix using 2D array</b>***<br />
//2D array <br />
#include stdio.h<br />
int main(){<br />
	int i,j;<br />
int A[3][4];<br />
 for(i=0;i<=3-1;i++){<br />
 	for(j=0;j<=4-1;j++){<br />
	printf("Enter elements for a matrix\n");<br />
 		printf("A[%d][%d] =",i,j);<br />
 	 scanf("%d",&A[i][j]);<br />
	 }<br />
	 printf("\n ");<br />
 }<br />
 for(i=0;i<=3-1;i++){<br />
 	for(j=0;j<=4-1;j++){<br />
 	 printf("%d ",A[i][j]);<br />
	 }<br />
	  printf("\n ");<br />
 }<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Create two matrix A and B using 2D array</b>***<br />
//2D array <br />
#include stdio.h<br />
int main(){<br />
int i,j;<br />
int A[3][4],B[3][4];<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=3-1;i++){<br />
for(j=0;j<=4-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=3-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=4-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//scaning matrix B<br />
printf("Enter elements of matrix B:\n");<br />
for(i=0;i<=3-1;i++){<br />
for(j=0;j<=4-1;j++){<br />
printf("B[%d][%d] =",i,j);<br />
scanf("%d",&B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix B<br />
printf("B=");<br />
for(i=0;i<=3-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=4-1;j++){<br />
printf("%d ",B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Collect matrix size and elements from user</b>***<br />

//2D array <br />
#include stdio.h<br />
int main(){<br />
int i,j,numberRows,numberCols;<br />
int A[10][10],B[10][10],C[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&numberRows,&numberCols);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//scaning matrix B<br />
printf("Enter elements of matrix B:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("B[%d][%d] =",i,j);<br />
scanf("%d",&B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix B<br />
printf("B=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Collect size and all elements before print</b>***<br />

//2D array <br />
#include stdio.h<br />
int main(){<br />
int i,j,numberRows,numberCols;<br />
int A[10][10],B[10][10],C[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&numberRows,&numberCols);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
}
printf("\n ");<br />
}<br />
//scaning matrix B<br />
printf("Enter elements of matrix B:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("B[%d][%d] =",i,j);<br />
scanf("%d",&B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
//printing matrix B<br />
printf("B=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br />

</p>
<p>
****<b>Adding two matrix C = A + B</b>***<br />

//2D array <br />
#include stdio.h<br />
int main(){<br />
int i,j,numberRows,numberCols;<br />
int A[10][10],B[10][10],C[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&numberRows,&numberCols);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//scaning matrix B<br />
printf("Enter elements of matrix B:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("B[%d][%d] =",i,j);<br />
scanf("%d",&B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
//printing matrix B<br />
printf("B=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//Adding matrix C<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
	C[i][j] = A[i][j] + B[i][j];<br />
}	<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
//printing matrix C<br />
printf("C=A+B");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",C[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />

</p>
<p>
****<b>Substraction between two matrix C = A - B</b>***<br />

//Subtruction of two matrix<br />
#include stdio.h<br />
int main(){<br />
int i,j,numberRows,numberCols;<br />
int A[10][10],B[10][10],C[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&numberRows,&numberCols);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//scaning matrix B<br />
printf("Enter elements of matrix B:\n");<br />
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("B[%d][%d] =",i,j);<br />
scanf("%d",&B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
//printing matrix B<br />
printf("B=");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",B[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//Substracting matrix C
for(i=0;i<=numberRows-1;i++){<br />
for(j=0;j<=numberCols-1;j++){<br />
	C[i][j] = A[i][j] - B[i][j];<br />
}<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
//printing matrix C<br />
printf("C=A-B");<br />
for(i=0;i<=numberRows-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=numberCols-1;j++){<br />
printf("%d ",C[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />

</p>
<p>
****<b>Multiply between two matrix A(ixj)*B(jxk)=C(ixk)</b>***<br />

//multiplication of two matrix<br />
#include stdio.h<br />
int main(){<br />
int r1,r2,c1,c2,i,j,k,sum=0;<br />
int first[10][10],second[10][10],multiplied[10][10];<br />

printf("Enter row and column of first matrix: ");<br />
scanf("%d %d",&r1,&c1);<br />
printf("Enter row and column of second matrix: ");<br />
scanf("%d %d",&r2,&c2);<br />

while(c1 != r2){<br />
printf("Error! must be c1=r2!");<br />
printf("\n");<br />
	printf("Enter row and column of first matrix: ");<br />
scanf("%d %d",&r1,&c1);<br />
printf("Enter row and column of second matrix: ");<br />
scanf("%d %d",&r2,&c2);<br />
printf("OK Fine!\n");<br />
}<br />

printf("\n ");<br />
printf("\n ");<br />

//scaning first matrix<br />
printf("Enter elements of first matrix:\n");<br />
for(i=0;i<=r1-1;i++){<br />
for(j=0;j<=c1-1;j++){
printf("first[%d][%d] =",i,j);<br />
scanf("%d",&first[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />

printf("\n ");<br />
printf("\n ");<br />

//scaning second matrix<br />
printf("Enter elements of second matrix:\n");<br />
for(i=0;i<=r2-1;i++){<br />
for(j=0;j<=c2-1;j++){<br />
printf("second[%d][%d] =",i,j);<br />
scanf("%d",&second[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />

printf("\n ");<br />
printf("\n ");<br />

//multiplay metrix<br />
for(i=0;i<=r1-1;i++){<br />
	for(j=0;j<=c2-1;j++){<br />
	for(k=0;k<=c1-1;k++){<br />
	
        sum=sum+first[i][k]*second[k][j];<br />
	}<br />
	 multiplied[i][j]=sum;<br />
        sum=0;<br />	 
	}<br />
}<br />

printf("\n ");<br />
printf("\n ");<br />

//printing first matrix<br />
printf("First=");<br />
printf("\n ");<br />
for(i=0;i<=r1-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=c1-1;j++){<br />
printf("%d ",first[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />


printf("\n ");<br />
printf("\n ");<br />

//printing second matrix<br />
printf("Second=");<br />
printf("\n ");<br />
for(i=0;i<=r2-1;i++){
	printf("\t");<br />
for(j=0;j<=c2-1;j++){<br />
printf("%d ",second[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />


printf("\n ");<br />
printf("\n ");<br />

//print multiplied matrix<br />
printf("\n ");<br />
printf("Multiplied =");<br />
printf("\n ");<br />

for(i=0;i<=r1-1;i++){<br />
	printf("\t");<br />
for(j=0;j<=c2-1;j++){<br />
printf("%d ",multiplied[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Transpose matrix</b>***<br />
//multiplication of two matrix<br />
#include <stdio.h><br />
int main(){<br />
int i,j,row,col;<br />
int A[10][10],transposeA[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&row,&col);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
} printf("\n ");<br />
}<br />

//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=row-1;i++){<br />
printf("\t");<br />
for(j=0;j<=col-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />

for(i=0;i<row;i++){<br />
	for(j=0;j<col;j++){<br />
		transposeA[j][i]=A[i][j];<br />	
	}<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
printf("\n ");<br />

//printing matrix transposeA<br />
printf("At=");<br />
for(i=0;i<=col-1;i++){<br />
printf("\t");<br />
for(j=0;j<=row-1;j++){<br />
printf("%d ",transposeA[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Sum of diagonal elements of a matrix</b>***<br />
//Sum of first diagonal of A<br />
#include stdio.h<br />
int main(){<br />
int i,j,row,col,sum=0;<br />
int A[10][10],diagonalSumA;<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&row,&col);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
} printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=row-1;i++){<br />
printf("\t");<br />
for(j=0;j<=col-1;j++){<br />
printf("%d ",A[i][j]);<br />
} <br />
printf("\n ");<br />
} <br />
//sum of diagonal<br />
printf("Diagonal elements are= ");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
if(i==j){<br />
printf("%d ",A[i][j]);<br />
sum=sum+A[i][j];<br />
}<br />
}<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
printf("\n ");<br />
//printing diagonalSumA<br />
printf("diagonalSumA= %d",sum);<br />
getch();<br />
}<br /><br />
</p>
<p>
****<b>Sum elements of upper triangles of matrix</b>***<br />
#include stdio.h<br />
int main(){<br />
int i,j,row,col,upperSum=0;<br />
int A[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&row,&col);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
} printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=row-1;i++){
printf("\t");
for(j=0;j<=col-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//sum of diagonal<br />
printf("Elements of upperSum are= ");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
if(i<=j-1){<br />
printf("%d ",A[i][j]);<br />
upperSum=upperSum+A[i][j];<br />
}<br />
}<br />
}<br />
printf("\n ");<br />
printf("Sum elements of upper triangle is= %d",upperSum);<br />
printf("\n ");<br />
//printing diagonalSumA<br />

getch();<br />
}<br /><br />
</p>
<p>
****<b>Sum elements of lower triangles of matrix</b>***<br />
#include stdio.h<br />
int main(){<br />
int i,j,row,col,lowerSum=0;<br />
int A[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&row,&col);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
} printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=row-1;i++){<br />
printf("\t");<br />
for(j=0;j<=col-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
//sum of diagonal<br />
printf("Elements of lowerSum are= ");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
if(i>=j+1){<br />
printf("%d ",A[i][j]);<br />
lowerSum=lowerSum+A[i][j];<br />
}<br />
}<br />
}<br />
printf("\n ");<br />
printf("Sum elements of low triangle is= %d",lowerSum);<br />
printf("\n ");<br />
//printing diagonalSumA<br />

getch();<br />
}<br /><br />
</p>
<p>
****<b>Sum elements of upper and lower triangles of matrix</b>***<br />
#include stdio.h<br />
int main(){<br />
int i,j,row,col,lowerSum=0,upperSum=0;<br />
int A[10][10];<br />
printf("Enter the number of rows and columns: ");<br />
scanf("%d %d",&row,&col);<br />
//scaning matrix A<br />
printf("Enter elements of matrix A:\n");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
printf("A[%d][%d] =",i,j);<br />
scanf("%d",&A[i][j]);<br />
} printf("\n ");<br />
}<br />
//printing matrix A<br />
printf("A=");<br />
for(i=0;i<=row-1;i++){<br />
printf("\t");<br />
for(j=0;j<=col-1;j++){<br />
printf("%d ",A[i][j]);<br />
}<br />
printf("\n ");<br />
}<br />
printf("\n ");<br />
printf("\n ");<br />
printf("\n ");<br />
printf("Elements of upperSum are= ");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
if(i<=j-1){<br />
printf("%d ",A[i][j]);<br />
upperSum=upperSum+A[i][j];<br />
}<br />
}<br />
}<br />
printf("\n ");<br />
printf("Sum elements of upper triangle is= %d",upperSum);<br />
printf("\n ");<br />
printf("\n ");<br />
printf("\n ");<br />
printf("\n ");<br />
//Elements of lower triangle<br />
printf("Elements of lowerSum are= ");<br />
for(i=0;i<=row-1;i++){<br />
for(j=0;j<=col-1;j++){<br />
if(i>=j+1){<br />
printf("%d ",A[i][j]);<br />
lowerSum=lowerSum+A[i][j];<br />
}<br />
}<br />
}<br />
printf("\n ");<br />
printf("Sum elements of low triangle is= %d",lowerSum);<br />
printf("\n ");<br />
//printing diagonalSumA<br />

getch();<br />
}<br />
</p>
<p>
****<b>Conditional Program</b>***<br />
#include stdio.h<br />
int main()<br />
{<br />
int A,B;<br />

printf("Enter the value of A= ");<br />
scanf("%d",&A);<br />
printf("Enter the value of B= ");<br />
scanf("%d",&B);<br />
if(A>B)<br />
printf("A is greater than B");<br />
else if(B>A)<br />
    printf("B is greater than A");<br />
else<br />
    printf("A and B are equal");<br />
getch();<br />
}<br />

</p>
<p>
****<b>Check Leap year</b>***<br />
#include  stdio.h<br />
int main()<br />
{<br />
int year;<br />
printf("Enter a year to check\n= ");<br />
scanf("%d",&year);<br />
if(year%400==0)<br />
printf("%d is a leap year.\n",year);<br />
else if(year%100==0)<br />
printf("%d is a leap year.\n",year);<br />
else if(year%4==0)<br />
printf("%d is a leap year.\n",year);<br />
else<br />
printf("%d is not a leap year.\n",year);<br />
getch();<br />
}<br />

</p>
<p>
****<b>Check number is Even or Odd</b>***<br />
#include  stdio.h<br />
int main()<br />
{<br />
int n;<br />
printf("Enter a Number\n= ");<br />
scanf("%d",&n);<br />
if(n%2==0)<br />
printf("%d is Even.\n",n);<br />
else<br />
printf("%d is Odd.\n",n);<br />
getch();<br />
}<br />
</p>
<p>
****<b>Check the character is vowel or not</b>***<br />
#include  stdio.h<br />
int main()<br />
{<br />
char c;<br />
printf("Enter an alphabet\n= ");<br />
scanf("%c",&c);<br />
if(c=='a'||c=='A'||c=='e'||c=='E'||c=='i'||c=='I'||c=='o'||c=='O'||c=='u'||c=='U')<br />
printf("This is a Vowel.\n");<br />
else<br />
printf("This is not  Vowel.\n");<br />
getch();<br />
}<br />
</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>

<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>
<p>
****<b>Heading</b>***<br />

</p>








</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>