

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
body{background:#4FE3C1;}
.tap{background:#E8E3E7;}
p{font-size:1.25em;}
</style>
<meta charset="utf-8"/>
<lang="en-us"/>
</head>
<body>
<div style="padding-left:75px;padding-right:75px;color:indigo;">

<h1>C++ progrmming</h1>
<div class="tap">
<!---Programming start--->
C++ Programming

****************************

Formate 1

****************************

#include <iostream>
using namespace std;

int main()
{

cout<<"Hello World!";

return 0;
}

****************************

Formate 2

****************************



#include <iostream>
#include<conio.h>
 using namespace std;
int main()
{
cout<<"Md. Abdul Karim";
getch();
}

***********

for loop

***********

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int a=1;

for(a=1;a<6;a++){

    cout<<"Value of a= "<<a<<endl;

}

getch();

}

**********************************************

**************************************************************************

While loop

**************************************************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

    int a=1;

while(a<6)

    {

    cout<<"Value of a= "<<a<<endl;

    a=a+1;

    }

getch();

}

****************

do while loop

****************

//do while loop

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int a=1;

do{

    cout<<"Value of a= "<<a<<endl;

    a=a+1;

}while(a<6);

getch();

}

**************************************************************************

Check vowel

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

char ch;

cout<<"\nInput a character= ";

cin>>ch;

switch(ch){

case 'a':

case 'A':

case 'e':

case 'E':

case 'i':

case 'I':

case 'o':

case 'O':

case 'u':

case 'U':

cout<<ch<<"is a vowel.\n";

 break;

default:

cout<<ch<<" is not a vowel.\n";

}

getch();

}

*******************

Switch case

******************

#include <iostream>

#include <conio.h>

using namespace std;



int main()

{

char grade='B';

switch(grade){

    case'A':

cout<<"Excellent!"<<endl;

break;

    case'B':

cout<<"Wel done"<<endl;

break;

    case'C':

cout<<"Average"<<endl;

break;

    case'D':

cout<<"You passed"<<endl;

break;

    case'E':

cout<<"Better try again"<<endl;

break;

    default:

cout<<"Invalid grade"<<endl;

}

cout<<"Obtained Grade:"<<grade<<endl;



getch();





}

**************************************************************************

Nested Switch case

**************************************************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

    int a=10;

    int b=20;

switch(a){

    case 10:

cout<<"Outer Switch case"<<endl;

switch(b){

    case 20:

cout<<"Inner Switch case"<<endl;

}

}

cout<<"Value of a is="<<a<<endl;

cout<<"Value of a is="<<b<<endl;

getch();

}



**************************************************************************



**************************************************************************

Nested else if

**************************************************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int marks;

cout<<"Enter your marks= ";

cin>>marks;

if(marks>100){

cout<<"Not valid marks";

}else if(marks>=80){

cout<<"Your grade is= A+";

}else if(marks>=70){

cout<<"Your grade is= A";

}else if(marks>=60){

 cout<<"Your grade is= A-";

}else if(marks>=50){

cout<<"Your grade is= B";

}else if(marks>=40){

cout<<"Your grade is= C";

}else if(marks>=33){

cout<<"Your grade is= D";

}else{

cout<<"Your grade is= F";

}

getch();

}

 *******************************

Even or Odd

********************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int n;

if(n%2==0)

    cout<<"Even\n";

else

    cout<<"Odd\n";

getch();

}



**********************************************

**************************************************************************

Sum of digits of a big integer

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int n,sum=0,remainder;

cout<<"Enter an big integer= ";

cin>>n;

while(n!=0)

{

    remainder=n%10;

    sum=sum+remainder;

    n=n/10;

}

cout<<"Sum of digits of entered number= "<<sum<<endl;

getch();

}



**********************************************

**************************************************************************

Find out greatest number from three integers

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int a,b,c;

cout<<"enter any three numbers= ";

cin>>a>>b>>c;

if(a>b && a>c)

    cout<<"Greatest number is= "<<a;

else if(b>c)

    cout<<"Greatest number is= "<<b;

else

    cout<<"Greatest number is= "<<c;

getch();

}

**********************************************

**************************************************************************

Swapping (alter) two numbers

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int x,y,temp;

cout<<"Enter the value of x and y\n";

cin>>x>>y;

cout<<"Before Swapping\nx="<<x<<"\ny="<<y<<"\n";

temp=x;

x=y;

y=temp;

cout<<"After Swapping\nx="<<x<<"\ny="<<y<<"\n";

getch();

}



**********************************************

**************************************************************************

Calculate Percentage

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int s1,s2,s3,s4,s5,sum,total=500;

float per;

cout<<"\nEnter marks of five subjects= ";

cin>>s1>>s2>>s3>>s4>>s5;

sum=s1+s2+s3+s4+s5;

cout<<"\nSum= "<<sum;

per=(sum*100)/500;

cout<<"\nPercentage= "<<per<<"%";

getch();

}

**********************************************

Calculate gross salary

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int gross_salary,basic,da,ta;

cout<<"\nEnter Basic salary= ";

cin>>basic;

da=(10*basic)/100;

ta=(12*basic)/100;

gross_salary=basic+da+ta;

cout<<"\nGross salary= "<<gross_salary<<endl;

getch();

}

******************

Simple Interest

******************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

float p,n,r,I;

cout<<"\nEnter Principal Amount= ";

cin>>p;

cout<<"\nEnter Rate of Interest= ";

cin>>r;

cout<<"\nEnter Period of time in year= ";

cin>>n;

I=p*n*r/100;

cout<<"\nSimple Interest= "<<I<<endl;

getch();

}



**********************************************

**************************************************************************

18. Program to display numbers from 1 to 50 using while loop

**************************************************************************

  #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int number=1;
while(number<=50){
cout<< number<<",";
    number=number+1;
}
getch();
}





**********************************************

**************************************************************************

18. Program to display numbers from 1 to 50 using while loop

**************************************************************************

  #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int number=1;
while(number<=50){
cout<< number<<",";
    number=number+1;
}
getch();
}





**********************************************

**************************************************************************

Check Leap Year

**************************************************************************

#include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int year;

cout<<"Enter a year to check if it is a leap year\n";

cin>>year;

if(year%400==0)

    cout<<year<<"is a leap year.\n";

else if(year%100==0)

    cout<<year<<"is a leap year.\n";

else if(year%4==0)

    cout<<year<<"is a leap year.\n";

    else

    cout<<year<<"is not a leap year.\n";

getch();

}



**********************************************



#include<iostream>
using namespace std;

int main(){

cout<<"Hello World!";

return 0;
}

********************************

Print Integer

*************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int a;

cout<<"Enter an integer= ";

cin>>a;

cout<<"integer that you have pressed is= "<<a<<"\n";

getch();



}

******************************************

2. Accept a number from user and display it on Screen

******************************************

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

int a;

cout<<"Enter any Number ";

cin>>a;

cout<<"The number entered is "<<a;

getch();

}*****************************************

Use of data type integer and float

*******************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int a,b,c;

float e;

a=5;

b=10;

c=a+b;

cout<<c<<endl;

e=15.0/4.0;

getch();

cout<<e<<endl;

}

**********************

Local and Global Variable

**********************

 #include <iostream>

#include <conio.h>

using namespace std;

    //Global Variable declaration

int a=20;

int main()

{

    //Local variable declaration.

int a=10;

cout<<a;

getch();

}

**************************************************************************

Nested if

**************************************************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int a=10,b=20,c=15;

if(a<c){

    if(b>c){

        cout<<"Value of c is greater than a but less than b"<<endl;

    }

}

cout<<"Value of a is= "<<a<<endl;

cout<<"Value of b is= "<<b<<endl;

cout<<"Value of c is= "<<c<<endl;

getch();

}



Add, Subtract, Multiply,sivide

*******************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int first,second,add,subtract,multiply;

float divide;

cout<<"Enter two  integers= ";

cin>>first>>second;

add=first+second;

subtract=first-second;

multiply=first*second;

divide=first/(float)second;

cout<<"Addition of entered numbers is= "<<add<<"\n";

cout<<"Subtract of entered numbers is= "<<subtract<<"\n";

cout<<"Multiplication of entered numbers is= "<<multiply<<"\n";

cout<<"Division of entered numbers is= "<<divide<<"\n";

getch();

}

******************************************

if Condition

*******************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int time=12;

cout<<"Enter time as integer= ";

cin>>time;

if(time>=12){

cout<<"Good  Afternoon";

}else{

cout<<"Good Morning";

}

getch();

}

******************************************

Sum of natural numbers which you want.

*******************************************

 #include <iostream>

#include <conio.h>

using namespace std;


int main()

{

int n,sum=0;

cout<<"Enter the number if integer you want to add= ";

cin>>n;

for(int i=1;i<=n;i++){


    sum=sum+i;

}


    cout<<"Sum of entered integers="<<sum<<"\n";

getch();

}

******************************************

3. Accept two numbers and display the sum of these

*******************************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
int a,b,c;
cout<<"Enter 1st Number= ";
cin>>a;
cout<<"Enter 2nd Number= ";
cin>>b;
c=a+b;
cout<<"Sum of two number is= "<<c;
getch();
}

**********

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

cout<<"Md."<<" "<<"Abdul"<<" "<<"Karim"<<" "<<"Sarkar";

getch();

}

********Word space*******

#include <iostream>

#include<conio.h>

using namespace std;



int main()

{

cout <<"Md .  ";

cout <<"Abdul  ";

cout<<"Karim  ";

cout <<"Sarkar   ";



getch();

}

**********************

Addition of two numbers.

**********************

 #include <iostream>

#include <conio.h>

using namespace std;



int main()

{

int first,second,sum;

cout<<"Enter two  integers= ";

cin>>first>>second;

sum=first+second;

cout<<"Sum of entered numbers is= "<<sum<<"\n";

getch();

}

  *************************

4. Program to find area of a square

**************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
int s,a;
cout<<"\n Enter the side of a square= ";
cin>>s;
a=s*s;
cout<<"\n Area of the square is= "<<a;
getch();
}

   **********************************************

5. Accept length and breadth of Rectangle and display its area

************************************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
float l,b,a;
cout<<"\n Enter length of rectangle= ";
cin>>l;
cout<<"\n Enter breadth of rectangle= ";
cin>>b;
a=l*b;
cout<<"\n Area of the rectangle is= "<<a;
getch();
}

**************

#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
cout <<" \t Md. Abdul Karim\n";
cout <<"\t Rohanpur\n";
cout <<"\t 01818-830761";

getch();
}

  *********

New line

**********

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

cout <<"\t Md.";

cout<<"\t Abdul";

cout<<"\t Karim";

getch();

}

 **************************************

6. Accept radius of a  circle and display its area

***************************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
float r,a;
cout<<"\n Enter radius of circle= ";
cin>>r;

a=3.1416*r*r;
cout<<"\n Area of the circle is= "<<a;
getch();
}

*********



cout<<"Md.\n Abdul \n Karim \n Sarkar";

getch();

}

*********************************

7. Calculate Average

*********************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
int eng,comp,math;
float avg;
cout<<"\n Enter marks for English= ";
cin>>eng;
cout<<"\n Enter marks for Computer= ";
cin>>comp;
cout<<"\n Enter marks for Math= ";
cin>>math;

avg=(float)(eng+comp+math)/3;
cout<<"\n The Avarage marks of three subject is= "<<avg;
getch();
}

*********

#include <iostream>
using namespace std; 
int main()
{

cout <<"Md." <<endl <<"Abdul" <<endl <<"Karim "<<endl <<"Sarkar";
return 0;
}

***************************

If Else Basic Program(Check Number)

******************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int a;

cout<<"Enter any Number= ";

cin>>a;

if(a>10)

{

    cout<<"\n Number is Grater than 10";

}else{

  cout<<"\n Number is less than 10";

}

getch();

}

******************

******************************************************

8. Accept marks of 5 subject and print Percentage and Grade Point

******************************************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
int eng,beng,maths,comp,social;
float per;
cout<<"\n Please enter marks for English = ";
cin>>eng;
cout<<"\n Please enter marks for Bengoli = ";
cin>>beng;
cout<<"\n Please enter marks for Mathematics = ";
cin>>maths;
cout<<"\n Please enter marks for Computer = ";
cin>>comp;
cout<<"\n Please enter marks for Social = ";
cin>>social;
per=(eng+beng+maths+comp+social)*100/500;
cout<<"\n Your Percentage is = "<<per<<"%";
if(per<33)
    {cout<<"\n You obtained grade = "<<"F";}
else if(per>=33 && per<=39)
    {cout<<"\n You obtained grade = "<<"D";}
else if(per>=40 && per<=49)
    {cout<<"\n You obtained grade = "<<"C";}
else if(per>=50 && per<=59)
    {cout<<"\n You obtained grade = "<<"B";}
else if(per>=60 && per<=69)
    {cout<<"\n You obtained grade = "<<"A-";}
else if(per>=70 && per<=79)
    {cout<<"\n You obtained grade = "<<"A";}
else if(per>=80 && per<=100)
    {cout<<"\n You obtained grade = "<<"A+";}
else if(per>100)
    {cout<<"\n Invalid number";}
getch();
}

********

#include <iostream>

#include <conio.h>
using namespace std; 
int main()
{

cout<<"Md. Abdul Karim "<< "Sarkar";

getch();


}

**********************************

9. Simple Interest

**********************************

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{
int p;
float r,n,I;
cout<<"\n Please enter the Principal amount = ";
cin>>p;
cout<<"\n Please enter the rate = ";
cin>>r;
cout<<"\n Please enter the time(years) = ";
cin>>n;
I=(p*n*r)/100;
cout<<"\n Interest for "<<p<<" will be RS = "<<I;
getch();
}

**************

#include <iostream>

#include <iostream>
using namespace std; 
int main()
{

Cout<<”Md. Abdul Karim ”<<” Sarkar”;
getch();
}

***********************************************************************

10. Accept a character from user and display it.

***********************************************************************

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

char a;

cout<<"\n Please enter any character = ";

cin>>a;

cout<<"\n You have pressed = "<<a;

getch();

}

*********************

\a=(alert) Bell          \b = Back Space

\f = Form Feed       \n = New line

\r = C

 *******New line  endl ********

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

cout <<"Md." <<endl <<"Abdul" <<endl <<"Karim "<<endl <<"Sarkar";

getch();

}

***********************************************************************

12. Accept Sentence (without space using under_score) from user and display it.

***********************************************************************

 #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
char a[100];
cout<<"Enter any Sentence (without space using under_score)= ";
cin>>a;
cout<<"You have pressed = "<<a;
getch();
}

********

#include <iostream>
#include<conio.h>
using namespace std;
int main()
{

cout <<"Md. Abdul Karim" <<endl <<"Rohanpur" <<endl <<"01818-830761";
getch();
}

**********

Tab \t

 ***********

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

cout <<" \t Md. Abdul Karim" <<endl <<"\t Rohanpur" <<endl <<"\t 01818-830761";

getch();

}

*****************************

Print double quotation

*****************************

#include <iostream>

#include<conio.h>

using namespace std;

int main()

{

cout <<"  \" Md. Abdul Karim \"   ";

getch();

}

*********************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1=10,num2=20;



cout<< num1<<endl;

cout<< num2;

getch();

}

*********************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1=10,num2=20;



cout<<"number1= "<< num1<<endl <<"number2= "<<num2;



getch();

}

*********************

String variable:

*********************



#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

char name[16] ="Md. Abdul Karim";

cout<<name;



getch();

}

******************************************

Get an integer number from users:

******************************************

#include <iostream>
#include <conio.h>
using namespace std;
int main()
{

int num;

cout<<"Enter an integer number= ";

cin>>num;

cout<<"You enter integer number is= "<<num;

getch();
}

******************************************

Get an double number from users:

******************************************

#include <iostream>
#include <conio.h>
using namespace std;
int main()
{

double num;

cout<<"Enter an decimal number= ";

cin>>num;

cout<<"You enter decimal number is= "<<num;

getch();
}

*********************

Character

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

char ch;

cout<<"Enter a character= ";

cin>>ch;

cout<<"You press the character is= "<<ch;



getch();

}

*********************



#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

char name[20];

cout<<"Enter your name= ";

cin>>name;

cout<<"Welcome "<<name;  

getch();

}

***********

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

char name[20];

cout<<"Enter your name= ";

cin>>name;

cout<<"Your name is: "<<name;  

getch();

}



Arithmetic Operator

*********************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1,num2,num3,sum;

cout<<"Enter three integers= ";

cin>>num1>>num2>>num3;

sum=num1+num2+num3;

cout<<"Total= "<<sum;   

getch();

}

11.

Operator, Operand, Expression:

a=b+7  ie, Expression

 here a and b Operand

 = and + Operator

Arithmetic Operator: +, -, *, /, %

X=15+6 ie, x=21

X=15-6  ie, x=9

X=15*6  ie, x=90

X=15/6  ie, x=2.5

X=15%6  ie, x=3

Arithmetic Operator

*********************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1,num2,sum;

cout<<"Enter two integers= ";

cin>>num1>>num2;

sum=num1+num2;

cout<<"Total= "<<sum;    



getch();

}

*************************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

double num1,num2,sum;

cout<<"Enter first decimal fraction number= ";

cin>>num1;

cout<<"Enter second decimal fraction number= ";

cin>>num2;

 sum=num1+num2;

cout<<"result is= "<<sum;

getch();

}

*********

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1,num2,sum,sub,mul,divi,redu;

cout<<"Enter first decimal fraction number= ";

cin>>num1;

cout<<"Enter second decimal fraction number= ";

cin>>num2;

 sum=num1+num2;

 sub=num1-num2;

 mul=num1*num2;

 divi=num1/num2;

 redu=num1 % num2;

cout<<"Sum is= "<<sum;

cout<<endl;

cout<<"substruction is= "<<sub;

cout<<endl;

cout<<"Multiplication is= "<<mul;

cout<<endl;

cout<<"Division is= "<<divi;

cout<<endl;

cout<<"Reduces is= "<<redu;

getch();

}

************

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num1,num2,sum,sub,mul,divi,redu;

cout<<"Enter first decimal fraction number= ";

cin>>num1;

cout<<"Enter second decimal fraction number= ";

cin>>num2;



 sum=num1+num2;

cout<<"Sum is= "<<sum;

cout<<endl;



sub=num1-num2;

cout<<"substruction is= "<<sub;

cout<<endl;



mul=num1*num2;

cout<<"Multiplication is= "<<mul;

cout<<endl;



divi=num1/num2;

cout<<"Division is= "<<divi;

cout<<endl;



redu=num1 % num2;

cout<<"Reduces is= "<<redu;

getch();

}

**********

#include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int first,second,add,subtract,multiply;

float divide;


cout<<"Enter two integers\n";

cin>>first>>second;


add=first+second;

subtract=first-second;

multiply=first*second;

divide=first/(float)second;


cout<<"sum="<<add<<"\n";

cout<<"subtract="<<subtract<<"\n";

cout<<"multiply="<<multiply<<"\n";

cout<<"divide="<<divide<<"\n";

getch();



}

************************************************************************

14. Find out which is grater between two integers

*************************************************************************

 #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int a,b,gr_no;
cout<<"Please enter any two Numbers= ";
cin>>a>>b;
if(a>b)
{
   gr_no=a;
}else{
gr_no=b;
}
cout<<"\n Grater number is= "<<gr_no;
getch();
} 

********************************************************************************

15. Accept 5 numbers and check which one is the greatest

*********************************************************************************

 #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int a,b,c,d,e,gr_no;
cout<<"Please enter five Numbers= ";
cin>>a>>b>>c>>d>>e;
gr_no=a;
if(b>gr_no)
{
   gr_no=b;
}
if(c>gr_no)
{
   gr_no=c;
}
if(d>gr_no)
{
   gr_no=d;
}
if(e>gr_no)
{
   gr_no=e;
}
cout<<"\n Grater number is= "<<gr_no;
getch();
} 

*********************************************************************

16. Accept a no and check  whether it is odd or even

*********************************************************************

 #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int number,a;
cout<<"Please enter any Number= ";
cin>>number;
a=number%2;
if(a==0)
{
   cout<<"\n Number is Even";
}
else
{
cout<<"\n Number is Odd";
}
getch();
}

******************* ********************************************************

17. Accept two numbers and Swap(বিনিময় করা ) them

*****************************************************************************

 #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int first,second,temp;
cout<<"\n Please enter 1st Number= ";
cin>>first;
cout<<"\n Please enter 2nd Number= ";
cin>>second;
temp=first;
first=second;
second=temp;
cout<<"\n After Swapping : ";
cout<<"\n First Number: "<<first;
cout<<"\n Second Number: "<<second;
getch();
}

**************************************************************************

18. Program to display numbers from 1 to 50 using while loop

**************************************************************************

  #include <iostream>
#include <conio.h>
using namespace std;
int main()
{
int number=1;
while(number<=50){
cout<< number<<",";
    number=number+1;
}
getch();
}

**********************************************

19. Program to display numbers from 1 to 50 using for loop

***********************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

for(int number=1;number<=50;number++)

{

cout<< number<<",\n";

}

getch();



}

*********************************************

18. Program to display numbers from 1 to 50 using DO WHILE loop

**********************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{


int number=1;

do

{

cout<< number<<endl;

number=number+1;

}

while(number<=50);

getch();



}

********************************************

21.Display all the numbers from 8 to n

*********************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{


int number,n;


cout<<"\n Please enter the value of n= ";

cin>>n;

for(number=8;number<=n;number++)

{

cout<<number<<endl;

}

getch();

}

**************************************************

22.Display even number (if condition into for loop)

*************************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{


int number,n,r;


cout<<"\n Please enter the value of n= ";

cin>>n;

for(number=1;number<=n;number++)

{

    r=number%2;

    if(r==0)

        {cout<<number<<endl;}

}

getch();



}

******************************************

22.Display odd number (if condition into for loop)

*********************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{


int number,n,r;


cout<<"\n Please enter the value of n= ";

cin>>n;

for(number=1;number<=n;number++)

{

    r=number%2;

    if(r==!0)

        {cout<<number<<endl;}

}

getch();



}

**********************************************

24. Sum of natural numbers

************************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

double sum;

int n,i;


cout<<"\n Please enter number till where you want the sum= ";

cin>>n;

for(i=1;i<=n;i++)

{sum=sum+i;}

cout<<"\n Sum is="<<sum;

getch();



}

**************************************************

26. Accept a number and show factorial of it

*****************************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int num;

double fact=1;

cout<<"\n Please enter any positive number= ";

cin>>num;

for(int i=1;i<=num;i++)

{

    fact=fact*i;

}

cout<<"\n Factorial is= "<<fact;

getch();



}

*******************************************************

24. L.C.M of two integer numbers

**********************************************

 #include <iostream>

#include <conio.h>

using namespace std;

int main()

{

int m,n,i,x;

cout<<"Enter 1st Number= ";

cin>>m;

cout<<"Enter 2nd Number= ";

cin>>n;

x=m*n;

cout<<"L.C.M of "<<m<<" and"<<n<<" is= ";

for(i=1;i<=x;i++){

    if(x%i==0 && i%m==0 && i%n==0){

        cout<<i;

        break;

    }

}

getch();

}

*******************************************************

#include <iostream>

#include <conio.h>

using namespace std;

int main(){


int n,sum=0,c,value;


cout<<"Enter the number of integers you want to add\n";


cin>>n;


cout<<"Enter number of these integers="<<"\n";


for(c=1;c<=n;c++){

    cin>>value;

    sum=sum+value;

}

cout<<"sum of entered integers="<<sum<<"\n";

getch();



}

******************************************************<br />

25. Accept a number from user and display table of it<br />

*****************************************************<br />

 #include iostream<br />
#include conio.h<br />
using namespace std;<br />
int main()<br />
{<br />
int n;<br />
cout<<"\n Please enter any number= ";<br />
cin>>n;<br />
for(int i=1;i<=10;i++){cout<<n*i<<endl;}<br />
getch();<br />
}<br />

********************************************************<br /> 

26. Accept a number and display its table if it is even<br />

******************************************************<br />

 #include iostream<br />
#include conio.h<br />
using namespace std;<br />
int main()<br />
{<br />
int n;<br />
cout<<"\n Please enter any number= ";<br />
cin>>n;<br />
for(int i=1;i<=10;i++)<br />
    {<br />
    if(n%2==0)<br />
    {cout<<n*i<<endl;}<br />
    else<br />
    {cout<<"\n Number intered is odd";}<br />
    }<br />
getch();<br />
}<br />

********************************************************** <br />

27. Accept a number and display its table if it is odd<br />

************************************************************<br />

 #include iostream<br />
#include conio.h<br />
using namespace std;<br />
int main()<br />
{<br />
int n;<br />
cout<<"\n Please enter any number= ";<br />
cin>>n;<br />
for(int i=1;i<=10;i++)<br />
    {<br />
    if(n%2==!0)<br />
    {cout<<n*i<<endl;}<br />
    else<br />
    {cout<<"\n Number intered is even";}<br />
    }<br />
getch();<br />
}<br />

****************************************************************************************<br />

28. Palindrome or not.( ie, "12344321" is palindrome and "123456"  is not palindrome)<br />

****************************************************************************************<br />

 #include iostream<br />
#include conio.h<br />
using namespace std;<br />
int main()<br />
{<br />
int n,h,a,p=0;<br />
cout<<"\n Please enter any number= ";<br />
cin>>n;<br />
h=n;<br />
while(h>0)<br />
    {<br />
    a=h%10;<br />
    p=(p%10)+a;<br />
    h=h/10;<br />
    }<br />
if(h==p)<br />
{cout<<"\n Entered number is Palindrome";}<br />
else<br />
    {cout<<"\n Entered number is not Palindrome";}<br />
getch();<br />
}<br />

*********************************************************************<br />








</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>
