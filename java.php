<?php include('include/header.php');?>
<?php 
$fonts="vardana";
$bgcolor="#0BB7C0";
$fontcolor="#ffffff";
?>


<!DOCTYPE html>
<html>
<head>
<title>Java Programming</title>
<style>
body{background:#4FE3C1;}
.tap{background:#E8E3E7;}
p{font-size:1em;}
</style>
<meta charset="utf-8"/>
<lang="en-us"/>
</head>
<body>
<div style="padding-left:75px;padding-right:75px;color:indigo;">

<h1>Java progrmming</h1>
<div style="align:left;font-size:1.25em;"><br /><br />
<!---Programming start--->
----------------------------------------<br />
****<b>Math and Constant</b>***<br />
package local_global_instance;<br />
import java.util.Date;<br />
import static java.lang.Math.*;<br />
public class InstanceVariable {<br />
    public static void main(String[] args) {<br />
        System.out.println(PI);<br />
        System.out.println(E);<br />
        System.out.println(sqrt(25));<br />
        System.out.println("e= "+E);<br />
         System.out.println(Integer.parseInt("30"));<br />
         Date dt=new Date(0);<br />
         System.out.println("Date is="+dt);<br />
    }<br />
}<br /><br />
****<b>Prime number test</b>***<br />
package ArrayDemo;<br />
import java.io.*;<br />
import java.util.Scanner;<br />

public class Array1 {<br />
	public static void main(String[]args){<br />
	Scanner s=new Scanner(System.in);<br />
            System.out.println("Please type any integer= ");<br />
       int a=s.nextInt();<br />
		for(int i=2; i<=a;i++){<br />
			if(i==a){<br />
			System.out.println(a+"is a prime number");	<br />
		}else{<br />
			if(a%i==0){<br />
			System.out.println(a+"is not a prime number");<br />
				break;<br />
			}<br />
		}<br />
	}<br />
	}<br />
}<br /><br />
****<b>Word breaks verticaly</b>***<br />
package ArrayDemo;<br />

import java.util.Scanner;<br />

public class Array1 {<br />
	public static void main(String[]ergs){<br />
            System.out.println("Please type a word=");<br />
	Scanner s=new Scanner(System.in);<br />
String st=s.nextLine();<br />
            for (int i = 0; i <=st.length()-1; i++) {<br />
                System.out.println(st.charAt(i));<br />
            }<br />
	}<br /><br />
}
****<b>Identify Even or Odd number</b>***<br />
package ArrayDemo;<br />
import java.util.Scanner;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
    System.out.println("Please enter an Integer= ");<br />
    Scanner input=new Scanner(System.in);<br />
    int num;<br />
    num=input.nextInt();<br />
    
    if(num%2==0){<br />
        System.out.println("The number is even;");<br />
    }else{<br />
        System.out.println("The number is odd;");<br />
    }<br />
}<br />
}<br /><br />
****<b>Convert lowercase to upper case</b>***<br />
//if user input lowercase word convart uppercase!<br />
package basicjava;<br />

import java.util.Scanner;<br />
public class BioData {<br />
   
public static void main(String[] args) {<br />
    System.out.print("Please type a lowercase word= ");<br />
    Scanner sc=new Scanner(System.in);<br />
String userInput =sc.next();<br />

String uppercased = userInput.toUpperCase();<br />
System.out.println(userInput);<br />
System.out.println(uppercased);<br />
char firstCharacter=userInput.charAt(0);<br />
System.out.println(firstCharacter);<br />
    System.out.println("Contains= "+<br />
            userInput.contains("Enter".toLowerCase()));<br />
}<br />
}<br /><br />

****<b>if user input lowercase word convert uppercase</b>***<br />

//if user input lowercase word convart uppercase!<br />
package basicjava;<br />

import java.util.Scanner;<br />
public class BioData {<br />
   
public static void main(String[] args) {<br />
System.out.print("Please type lowercase word= ");<br />
    Scanner sc=new Scanner(System.in);<br />
String userInput =sc.next();<br />
String uppercased = userInput.toUpperCase();<br />
System.out.println(userInput);<br />
System.out.println(uppercased);<br />
}<br />
}<br />

****<b>Enter any number integer or decimal</b>***<br />
package basicjava;<br />

import java.util.Scanner;<br />
public class BioData {<br />
   
public static void main(String[] args) {<br />
    System.out.print("Please type any number= ");<br />
    Scanner sc=new Scanner(System.in);<br />
    
int userNumber = sc.nextInt();<br />
    System.out.println(userNumber);<br />
    
    double userNumber2=sc.nextDouble();<br />
    System.out.println(userNumber2);<br />
}<br />
}<br /><br />
****<b>While Loop</b>***<br />
package basicjava;<br />

import java.awt.Color;<br />

public class BioData {<br />
  
    public static void main(String[] args) {<br />
       //while loop<br />
        System.out.println("while loop");<br />
        int x=3;<br />
        while(x>=0+1){<br />
            System.out.println("Current x= "+x);<br />
            x=x-1;<br />
        }<br />
        System.out.println("Final x= "+x);<br />
        System.out.println();<br />
   }<br />
}  <br />

****<b>do while loop</b>***<br />
package basicjava;<br />

import java.awt.Color;<br />

public class BioData {<br />
  
public static void main(String[] args) {<br />
//do while loop<br />
System.out.println("while loop");<br />
int y=3;<br />
do{<br />
    System.out.println("Current y= "+y);<br />
y=y-1;<br />
}while(y>=+1);<br />
System.out.println("Final y= "+y);<br />
System.out.println();<br />
}<br />
}<br /><br />
***<b>for loop</b>***<br />

package basicjava;<br />

import java.awt.Color;<br />

public class BioData {<br />
  
public static void main(String[] args) {<br />
//for loop<br />
System.out.println("for loop");<br />
    for (int i = 3; i >= 0+1; i--) {<br />
        System.out.println("Current i= "+i);<br />
    }<br />
    System.out.println();<br />
}<br />
}<br />

****<b>16.Input integer or double(decimal) number</b>***<br />


package basicjava;<br />

import java.util.Scanner;<br />
public class BioData {<br />
   
public static void main(String[] args) {<br />
    System.out.print("Please type any number= ");<br />
    Scanner sc=new Scanner(System.in);<br />
    
int userNumber = sc.nextInt();<br />
    System.out.println(userNumber);<br />
    
    double userNumber2=sc.nextDouble();<br />
    System.out.println(userNumber2);<br />
}<br />
}<br /><br />
****<b>11.Get Users input</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class InputDemo {<br /><br />

public static void main(String[] args) {<br /><br />
Scanner input= new Scanner(System.in);<br />
double num;<br /><br />

System.out.print("Enter any double value: ");<br /><br />
num=input.nextDouble();<br />
System.out.println("Double value is="+num);<br />
}<br />
}<br /><br />
****<b>12. Assignment Operators</b>***<br />

package beginnerjava;<br />
import java.util.Scanner;<br />
public class AssignmentDemo {<br /><br />
 public static void main(String[] args) {<br />
 Scanner input= new Scanner(System.in);<br /><br />
 int x,y;<br />
     System.out.print("Enter first value x= ");<br />
     x=input.nextInt();<br />
     System.out.print("Enter second value y= ");<br />
      y=input.nextInt();<br /><br />
x +=y;<br />
System.out.println("x= "+x);<br /><br />
x -=y;<br />
System.out.println("x= "+x);<br /><br />
x *=y;<br />
System.out.println("x= "+x);<br /><br />
x /=y;<br />
System.out.println("x= "+x);<br /><br />
x %=y;<br />
System.out.println("x= "+x);<br /><br />
}<br />
}<br /><br />
****<b>13. Arithmatic Operators</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class ArithmaticDemo {<br /><br />

public static void main(String[] args) {<br /><br />

Scanner input= new Scanner(System.in);<br /><br />

int num1, num2,sum,sub,mult,redu;<br />
double divi;<br />
System.out.print("Enter first Integer number= ");<br />
num1=input.nextInt();<br />
System.out.print("Enter second Integer number= ");<br />
num2=input.nextInt();<br /><br />

sum=num1+num2;<br />
sub=num1-num2;<br />
mult=num1*num2;<br />
divi=(double)num1/num2;<br />
redu=num1%num2;<br /><br />

System.out.println("Sum is="+sum);<br />
System.out.println("Subtraction is="+sub);<br />
System.out.println("Multiplication is="+mult);<br />
System.out.println("Division is="+divi);<br />
System.out.println("Reduces is="+redu);<br />
}<br />
}<br /><br />
***<b>14. Area of a Circle</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class CircleDemo {<br /><br />

public static void main(String[] args) {<br /><br />

Scanner input= new Scanner(System.in);<br />
double r, A;<br />
System.out.print("Enter radius r= ");<br />
r=input.nextDouble();<br /><br />

A=3.1416*r*r;<br /><br />

System.out.println("Area of circle is="+A);<br />
}<br />
}<br /><br />
***<b>15. Convert temperature Celcius to Ferenhite</b>***<br />
//Convert temperature Celcius to Ferenhite<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class TemperatureDemo {<br /><br />
    public static void main(String[] args) {<br /><br />
       Scanner input= new Scanner(System.in);<br />
        double c,f;<br />
        System.out.print("Enter temperature degree cencius c=");<br />
        c =input.nextDouble();<br />
        f = 9*c/5+32;<br />
        System.out.println("Degree ferenhite is= "+ f);<br />
    }<br />
}<br /><br />
****<b>15. Convert temperature celcius to ferenhite</b>***<br />
//Convert temperature Ferenhite to Celcius<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class TemperatureDemo {<br /><br />

public static void main(String[] args) {<br /><br />

Scanner input= new Scanner(System.in);<br />
double c,f;<br />
System.out.print("Enter temperature degree ferenhite f=");<br />
f =input.nextDouble();<br />
c = 5*(f-32)/9;<br />
System.out.println("Degree celcius is= "+ c);<br />
}<br />
}<br /><br />


****<b>16. Unary Operators</b>***<br />
package beginnerjava;<br />

public class UnaryDemo {<br />
    public static void main(String[] args) {<br />
        int x=10;<br />
        int result;<br /><br />
        
        result=+x;<br />
        System.out.println("result="+result);<br /><br />
        
        result=-x;<br />
        System.out.println("result="+result);<br />
    }<br />
}<br /><br />
****<b>16</b>***<br />
package beginnerjava;<br />

public class UnaryDemo {<br />
    public static void main(String[] args) {<br />
        int x=-10;<br />
        int result;<br /><br />
        
        result=+x;<br />
        System.out.println("result="+result);<br /><br />
        
        result=-x;<br />
        System.out.println("result="+result);<br /><br />
    }<br /><br />
}<br /><br />
****<b>17. Increment and Decrement</b>***<br />
package beginnerjava;<br />

public class IncrementDecrement {<br />
    public static void main(String[] args) {<br />
        int x=25;<br />
        int y;<br /><br />
        
        y=x++;<br />
        System.out.println("y= "+y);<br /><br />
        y=x; <br />
        System.out.println("y= "+y);<br /><br />
        y=++x;<br />
        System.out.println("y= "+y);<br /><br />
        y=x; <br />
        System.out.println("y= "+y);<br /><br />
        y=x--;<br />
        System.out.println("y= "+y);<br /><br />
        y=x; <br />
        System.out.println("y= "+y);<br /><br />
        y=--x; <br />
        System.out.println("y= "+y);<br /><br />
    }<br />
}<br /><br />
****<b>18.Positive number Use (if,condition)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class PositiveDemo {<br />
    public static void main(String[] args) {<br /><br />
        Scanner input=new Scanner(System.in);<br />
        int num;<br />
        System.out.print("Enter any integer number num= ");<br />
        num=input.nextInt();<br />
        if(num>0){<br />
        System.out.println("Positive number");<br />
        }<br />
		}<br />
		}<br /><br />
****<b>18.Positive/Negative number use ( if, else)</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class PositiveDemo {<br /><br />

    public static void main(String[] args) {<br /><br />
	
        Scanner input=new Scanner(System.in);<br />
        int num;<br />
        System.out.print("Enter any integer number num= ");<br /><br />
		
        num=input.nextInt();<br /><br />
		
        if(num>0){<br />
            System.out.println("Positive number");<br />
        }else{<br />
            System.out.println("Negative number or zero");<br />
        }<br />
    }<br />
 
}<br /><br />

****<b>18. Positive/Negative/zero number use(if, else if, esle)</b>***<br />

package beginnerjava; <br />

import java.util.Scanner;<br />

public class PositiveDemo {<br /><br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int num;<br />
        System.out.print("Enter any integer number num= ");<br />
        num=input.nextInt();<br />
        if(num>0){<br />
            System.out.println("Positive number");<br />
        }<br />
        else if(num<0){<br />
            System.out.println("Negative number");<br />
        }else{<br />
                System.out.println("The number is zero.");<br />
                }<br />
    }<br />
 
}<br /><br />

****<b>19. Even and Odd use (if, else)</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class EvenOdd {<br /><br />
    public static void main(String[] args) {<br /><br />
        Scanner input=new Scanner(System.in);<br />
        int num;<br /><br />
        System.out.println("Enter a positive integer num= ");<br />
        num=input.nextInt();<br /><br />
        if(num/2==0){<br />
        System.out.println("The number is Even ");<br />
        
    }else{<br />
         System.out.println("The number is Odd ");<br />
        }   <br />
        }<br />
}<br /><br />


***<b>Vowel/Consonant use (if, else if, else)</b>***<br />

package beginnerjava;<br />

import java.util.Scanner;<br />

public class VowelConsonantDemo {<br />

public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
char ch;<br />
System.out.print("Enter any letter= ");<br />

ch=input.next().charAt(0);<br />
if(ch=='a'){<br />
System.out.println("Vowel");<br />
}else if(ch=='A'){<br />
System.out.println("Vowel");<br />
}else if(ch=='e'){<br />
System.out.println("Vowel");<br />
}else if(ch=='E'){<br />
System.out.println("Vowel");<br />
}else if(ch=='i'){<br />
System.out.println("Vowel");<br />
}else if(ch=='I'){<br />
System.out.println("Vowel");<br />
}else if(ch=='o'){<br />
System.out.println("Vowel");<br />
}else if(ch=='O'){<br />
System.out.println("Vowel");<br />
}else if(ch=='u'){<br />
System.out.println("Vowel");<br />
}else if(ch=='U'){<br />
System.out.println("Vowel");<br />
}else{<br />
System.out.println("Consonant");<br />
}<br />
}<br />
}<br /><br />
****<b>Vowel/Consonant use(if, else if, else, ||) </b>***<br />
package beginnerjava; import java.util.Scanner;<br />
public class VowelConsonant {<br />

public static void main(String[] args) {<br />

Scanner input=new Scanner(System.in);<br />

char ch;<br />
System.out.print("Enter any letter= ");<br /><br />

ch=input.next().charAt(0);<br />

if(ch=='a'||ch=='A'){<br />

System.out.println("Vowel");<br />
}else if(ch=='e'||ch=='E'){<br />
System.out.println("Vowel");<br />
}else if(ch=='i'||ch=='I'){<br />
System.out.println("Vowel");<br />
}else if(ch=='o'||ch=='O'){<br />
System.out.println("Vowel");<br />
}else if(ch=='u'||ch=='U'){<br />
System.out.println("Vowel");<br />
}else{<br />
System.out.println("Vowel");<br />
}<br />
}<br />
}<br /><br />
****<b>Vowel/Consonant use (if, else, ||)</b>***<br />
package beginnerjava;
import java.util.Scanner;<br />
public class VowelConsonant {<br /><br />
    public static void main(String[] args) {<br /><br />
        Scanner input=new Scanner(System.in);<br /><br />
        char ch;<br />
        System.out.print("Enter any letter= ");<br /><br />
        ch=input.next().charAt(0);<br /><br />
        if(ch=='a'||ch=='A'||ch=='e'||ch=='E'||ch=='i'||ch=='I'||ch=='o'||ch=='O'||ch=='u'||ch=='U'){<br /><br />
            System.out.println("Vowel");<br />
        }else{<br />
            System.out.println("Consonant");<br />
        }<br />
    }<br />
}<br /><br />
****<b>21. Small and Capital Letter use(if, else if, else, &&)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class SmallletterCapitalletter {<br />
       public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br /><br />
        char ch;<br />
        System.out.print("Enter any Letter= ");<br /><br />
        ch=input.next().charAt(0);<br /><br />
        if(ch>='a'&& ch<='z'){//a-z<br />
            System.out.println("Small Letter");<br />
        }else if(ch>='A'&& ch<='Z'){//A-Z<br />
            System.out.println("Capital Letter");<br />
        }else{<br />
            System.out.println("Not a Letter");<br />
        }<br />
    }<br />
 
}<br /><br />
****<b>Digit Spelling use (Switch)</b>***<br />

package beginnerjava;<br />

import java.util.Scanner;<br />

public class DigitSpelling {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
                int digit;<br />
        System.out.print("Enter any digit= ");<br />
        digit=input.nextInt();<br /><br />
        switch(digit){<br />
            case 0:<br />
                System.out.println("Zero");<br />
                break;<br /><br />
                  case 1:<br />
                System.out.println("One");<br />
                break;<br /><br />
                  case 2:<br />
                System.out.println("Two");<br />
                break;<br /><br />
                  case 3:<br />
                System.out.println("Three");<br />
                break;<br /><br />
                  case 4:<br />
                System.out.println("Four");<br />
                break;<br /><br />
                  case 5:<br />
                System.out.println("Five");<br />
                break;<br /><br />
                  case 6:<br />
                System.out.println("Six");<br />
                break;<br /><br />
                  case 7:<br />
                System.out.println("Seven");<br />
                break;<br /><br />
                  case 8:<br />
                System.out.println("Eight");<br />
                break;<br /><br />
                  case 9:<br />
                System.out.println("Nine");<br />
                break;<br /><br />
                default:<br />
               System.out.println("Is not any digit!");<br />
        }<br />
    }<br />
   
}<br /><br />

****<b>Identify Large Number use(condition(num1>num1) ? num1 if true : num2 if false;)</b>***<br />

package beginnerjava;<br />

import java.util.Scanner;<br />

public class ConditionalDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int num1,num2,large;<br />
        System.out.print("Enter 1st Number =");<br />
        num1=input.nextInt();<br />
         System.out.print("Enter 2nd Number =");<br />
        num2=input.nextInt();<br />
        large=(num1>num1)?num1:num2;<br />
        System.out.println("Large Number Is= "+large);<br />
    }<br />
}<br /><br />

****<b>Identify small number use use(condition(num1<num1)?num1 if true : num2 if false;)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class ConditionalDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int num1,num2,small;<br />
        System.out.print("Enter 1st Number =");<br />
        num1=input.nextInt();<br />
         System.out.print("Enter 2nd Number =");<br />
        num2=input.nextInt();<br />
        small=(num1<num1)?num1:num2;<br />
        System.out.println("Large Number Is= "+ small);<br />
    }<br />
}<br /><br />
****<b>Bitwize Operator(Bitwize AND,Bitwize OR,Bitwize EXOR</b>***<br />
package beginnerjava;<br />

public class BitwizeOperator {<br />
    public static void main(String[] args) {<br /><br />
        int a=32;<br />
        int b=12;<br />
        int c;<br /><br />
		  
        c=a & b;<br />
        System.out.println("a & b="+c);<br /><br />
        c=a | b;<br />
        System.out.println("a | b= "+c);<br /><br />
        c=a ^ b;<br />
        System.out.println("a ^ b= "+c);<br /><br />
    }<br />
    
}<br /><br />
****<b>BitwizeDemo(Right shift & Left Shift)</b>***<br />

package beginnerjava;<br />
public class BitwiseDemo {<br />
  public static void main(String[] args) {<br />

int a=32;<br />
int b=3;<br />
int c;<br />

c=a >> b;<br />
System.out.println("a >> b="+c);<br />

c=a << b;<br />
System.out.println("a << b = " +c);<br />

}<br />
}<br /><br />
****<b>Math class(Indecate Maximum)</b>***<br />
package beginnerjava;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
        int x=20;<br />
        int y=10;<br />
        System.out.println(Math.max(x, y));<br />
    }<br />
}<br /><br />
****<b>Math class(Indecate Minimum)</b>***<br />
package beginnerjava;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
        int x=20;<br />
        int y=10;<br />
        System.out.println(Math.min(x, y));<br />
    }<br />
   
}<br /><br />
****<b>Math Class</b>***<br />
package beginnerjava;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
        int x=2;<br />
        int y=-3;<br />
        double pi=Math.PI;<br />
        int max=Math.max(x, y);<br />
        int min=Math.min(x, y);<br />
        int absolute=Math.abs(y);<br />
        double power=Math.pow(x, y);<br />
       int round =Math.round(8.5f);<br />
        System.out.println("pi value is= "+pi);<br />
        System.out.println("8.5 round figure is= "+ round);<br />
        System.out.println("x to the Power y value is= "+power);<br />
        System.out.println("Ablolute value of y is= "+absolute);<br />
        System.out.println("Maximum value= "+max);<br />
        System.out.println("Minimum Value= "+min);<br />
    }<br />
   
}<br /><br />
****<b>For Loop:</b>***<br />

package beginnerjava;<br />

public class ForloopDemo {<br />
    public static void main(String[] args) {<br />
        for(int i=1;i<=10;i++){<br />
        System.out.println("Bangladesh");<br />
    }<br />
   
}<br /><br />

****<b>For Loop: Six times print</b>***<br />
package beginnerjava;<br />

public class ForloopDemo {<br />
    public static void main(String[] args) {<br />
        for(int i=5; i<=10; i++){<br />
        System.out.println("Bangladesh");<br />
    }<br />
  }<br />
   
}<br /><br />
****<b>For Loop:(3,4,5,6,7,8,9,10)8times duration 1</b>***<br />
package beginnerjava;<br />

public class ForloopDemo {<br />
    public static void main(String[] args) {<br />
        for(int i=3; i<=10; i++){<br />
        System.out.println("Bangladesh");<br />
    }<br />
  }<br />
}<br /><br />
****<b>For Loop:(3,5,7,9)Four times print duration 2</b>***<br />
package beginnerjava;<br />

public class ForloopDemo {<br />
    public static void main(String[] args) {<br />
        for(int i=3; i<=10; i=i+2){<br />
        System.out.println("Bangladesh");<br />
    }<br />
   
}<br />
}<br /><br />
****<b>For Loop:</b>***<br />
package beginnerjava;<br />

public class ForloopDemo {<br />
    public static void main(String[] args) {<br />
        for(int i=3; i<=10; i=i+2){<br />
        System.out.println(i+"Bangladesh");<br />
    }<br />
   
}<br />
}<br /><br />
****<b>For Loop:</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=3; i<=10; i++){<br />
System.out.println(i+"Bangladesh");<br />
}<br />
}<br />
}<br /><br />
***<b>For Loop:1-100</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=1; i<=100; i++){<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />
****<b>For Loop:(2,4,6...100)</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=2; i<=100; i=i+2){<br />
System.out.println(i);<br />
}<br />
}<br />
}<br />
****<b>For Loop:(1,3,5,7,...,19)</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=1; i<=20; i=i+2){<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />
****<b>For Loop:(10,9,8,...,1)</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=10; i>=1; i--){<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />
****<b>For Loop:(10,8,6,4,2)</b>***<br />
package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=10; i>=1; i=i-2){<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />
****<b>While Loop:</b>***<br />
package beginnerjava;<br />

public class WhileloopDemo {<br />
    public static void main(String[] args) {<br />
        int i=1;<br />
        while(i<=10){<br />
            System.out.println("Bangladesh");<br />
            i++;<br />
        }<br />
    }<br />
}<br /><br />
****<b>While loop</b>***<br />
package beginnerjava;<br />

public class WhileloopDemo {<br />
    public static void main(String[] args) {<br />
        int i=1;<br />
        while(i<=10){<br />
            System.out.println(i+".Bangladesh");<br />
            i++;<br />
        }<br />
    }<br />
}<br /><br />
****<b>While Loop:1-100</b>***<br />
package beginnerjava;<br />

public class WhileloopDemo {<br />
    public static void main(String[] args) {<br />
        int i=1;<br />
        while(i<=100){<br />
            System.out.println(i);<br />
            i++;<br />
        }<br />
    }<br />
}<br /><br />
****<b>While Loop:2,4,6,...,100</b>***<br />
package beginnerjava;<br />

public class WhileloopDemo {<br />
    public static void main(String[] args) {<br />
        int i=2;<br />
        while(i<=100){<br />
            System.out.println(i);<br />
            i=i+2;<br />
        }<br />
    }<br />
}<br /><br />
****<b>While Loop:1,3,5,7,....,99</b>***<br />
package beginnerjava;<br />

public class WhileloopDemo {<br />
    public static void main(String[] args) {<br />
        int i=1;<br />
        while(i<=100){<br />
            System.out.println(i);<br />
            i=i+2;<br />
        }<br />
    }<br />
}<br />
****<b>Do While Loop:</b>***<br />
package beginnerjava;<br />

public class DowhileloopDemo {<br />
    public static void main(String[] args) {<br />
      int i=1;<br />
       do{<br />
           System.out.println("Bangladesh");  <br /> 
           i++;<br />
       }while(i<=10);<br />
    }<br />
}<br /><br />
****<b>Do While Loop:1-100</b>***<br />
package beginnerjava;<br />

public class DowhileloopDemo {<br />
    public static void main(String[] args) {<br />
      int i=1;<br />
       do{<br />
           System.out.println(i);  <br /> 
           i++;<br />
       }while(i<=100);<br />
    }<br />
}<br /><br />
****<b>Do While Loop:2,4,6,...,100</b>***<br />
package beginnerjava;<br />

public class DowhileloopDemo {<br />
    public static void main(String[] args) {<br />
      int i=2;<br />
       do{<br />
           System.out.println(i); <br />  
           i=i+2;<br />
       }while(i<=100);<br />
    }<br />
}<br /><br />
****<b>Do While Loop:1,3,5,7,...,99</b>***<br />
package beginnerjava;<br />

public class DowhileloopDemo {<br />
    public static void main(String[] args) {<br />
      int i=1;<br />
       do{<br />
           System.out.println(i);<br />   
           i=i+2;<br />
       }while(i<=100);<br />
    }<br />
}<br /><br />
****<b>Do While Loop:Wrong condition Print only one times do while loops</b>***<br />
package beginnerjava;<br />

public class DowhileloopDemo {<br />
    public static void main(String[] args) {<br />
      int i=6;<br />
       do{<br />
           System.out.println("Bangladesh");<br />   
           i=i++;<br />
       }while(i<=5);<br />
    }<br />
}<br /><br />

****<b>Use break(For Loop)</b>***<br />

package beginnerjava;<br />
public class ForloopDemo {<br />
public static void main(String[] args) {<br />
for(int i=1; i<=100; i++){<br />
    if(i==10){<br />
        break;<br />
    }<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />

****<b>Use continue: 10 can't print</b>***<br />
package beginnerjava;<br />

public class ContinueDemo {<br />
    public static void main(String[] args) {<br />
for(int i=1; i<=100; i++){<br />
    if(i==10){<br />
        continue;<br />
    }<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />

****<b>Use continue:10 to 90 can't print</b>***<br />
package beginnerjava;<br />

public class ContinueDemo {<br />
    public static void main(String[] args) {<br />
for(int i=1; i<=100; i++){<br />
    if(i>=10 && i<=90){<br />
        continue;<br />
    }<br />
System.out.println(i);<br />
}<br />
}<br />
}<br /><br />

****<b>Continue and break(10 to 60 and after 90 can't print)</b>***<br />
package beginnerjava;<br />

public class ContinueBreak {<br />
     public static void main(String[] args) {<br />
for(int i=1; i<=100; i++){<br />
    if(i>=10 && i<=60){<br />
        continue;<br />
    }<br />
System.out.println(i);<br />
if(i==90){<br />
break;<br />
}<br />
}<br />
}  <br /> 
}<br /><br />

****<b>sum:1-10</b>***<br />
package beginnerjava;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
        int sum=0;<br />
        for (int i = 1; i <= 10; i++) {<br />
            sum=sum+i;<br />
        }<br />
        System.out.println("sum of first ten Natural number is= "+sum);<br />
}<br />
   
}<br /><br />

****<b></b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
       
        int m,n,sum=0;<br />
        Scanner input=new Scanner(System.in);<br />
   System.out.print("Enter initial Number =");<br />
m=input.nextInt();<br />
System.out.print("Enter final Number =");<br />
n=input.nextInt();<br />
        
       for  (int i=m; i<=n; i++){<br />
        sum = sum+i;<br />
        }<br />
        
        System.out.println("sum is= "+sum);<br />
    }<br />
}<br /><br />

****<b>Add even number user defined</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
       
        int m,n,sum=0;<br />
        Scanner input=new Scanner(System.in);<br />
   System.out.print("Enter initial Number =");<br />
m=input.nextInt();<br />
System.out.print("Enter final Number =");<br />
n=input.nextInt();<br />
        
       for  (int i=m; i<=n; i++){<br />
           if(i%2==0){<br />
        sum = sum+i;  <br />
           }  <br />
    }<br />
        System.out.println("sum is= "+sum);<br />
}<br />
}<br /><br />

****<b>Add even number user defined</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
       
        int m,n,sum=0;<br />
        Scanner input=new Scanner(System.in);<br />
   System.out.print("Enter initial Number =");<br />
m=input.nextInt();<br />
System.out.print("Enter final Number =");<br />
n=input.nextInt();<br />
        
       for  (int i=m; i<=n; i++){<br />
           if(i%2==0){<br />
        sum = sum+i;  <br />
        System.out.println("  "+i);<br />
           } <br /> 
    }<br />
        System.out.println("sum is= "+sum);<br />
}<br />
}<br /><br />

****<b>Add odd number user defined</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
       
        int m,n,sum=0;<br />
        Scanner input=new Scanner(System.in);<br />
   System.out.print("Enter initial Number =");<br />
m=input.nextInt();<br />
System.out.print("Enter final Number =");<br />
n=input.nextInt();<br />
        
       for  (int i=m; i<=n; i++){<br />
           if(i%2 !=0){<br />
        sum = sum+i;  <br />
           }  <br />
    }<br />
        System.out.println("sum is= "+sum);<br />
}<br />
}<br /><br />

****<b>Add odd number user defined</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class MathDemo {<br />
    public static void main(String[] args) {<br />
       
        int m,n,sum=0;<br />
        Scanner input=new Scanner(System.in);<br />
   System.out.print("Enter initial Number =");<br />
m=input.nextInt();<br />
System.out.print("Enter final Number =");<br />
n=input.nextInt();<br />
        
       for  (int i=m; i<=n; i++){<br />
           if(i%2 !=0){<br />
        sum = sum+i;  <br />
        System.out.println("  "+i);<br />
           } <br /> 
    }<br />
        System.out.println("sum is= "+sum);<br />
}<br />
}<br /><br />

****<b>Add series:1+2+3+......+n=?</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class SeriesDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int n,sum=0;<br />
        System.out.print("Enter the last number= ");<br />
        n=input.nextInt();<br />
        for (int i = 1; i <=n; i++) {<br />
            sum=sum+i;<br />
            System.out.print(" + "+i);<br />
        }<br />
        System.out.println(" = "+sum);<br />
    }<br />
 
}<br /><br />

****<b>Add series:1+3+5+......+(2n+1)=?</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class SeriesDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int n,sum=0;<br />
        System.out.print("Enter the last number= ");<br />
        n=input.nextInt();<br />
        for (int i = 1; i <=n; i=i+2) {<br />
            sum=sum+i;<br />
            System.out.print(" + "+i);<br />
        }<br />
        System.out.println(" = "+sum);<br />
    }<br />
 
}<br /><br />

****<b>Add series:2+4+6+......+2n=?</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class SeriesDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int n,sum=0;<br />
        System.out.print("Enter the last number= ");<br />
        n=input.nextInt();<br />
        for (int i = 2; i <=n; i=i+2) {<br />
            sum=sum+i;<br />
            System.out.print(" + "+i);<br />
        }<br />
        System.out.println(" = "+sum);<br />
    }<br />
 
}<br /><br />

****<b>1.5+2.5+3.5+... ... ...</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
double n,sum=0;<br />
System.out.print("Enter the last number= ");<br />
n=input.nextDouble();<br />
for (double i = 1.5; i <=n; i=i+1) {<br />
sum=sum+i;<br />
System.out.print(" + "+i);<br />
}<br />
System.out.println(" = "+sum);<br />
}<br />
}<br /><br />

****<b>1^2 +2^2 +3^2+4^2... ... ...+n^2=?</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,sum=0;<br />
System.out.print("Enter the last number= ");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+1) {<br />
sum=sum+i*i;<br />
System.out.print("+"+" "+i+"x"+i+"  ");<br />
}<br />
System.out.println(" = "+sum);<br />
}<br />
}<br /><br />

****<b>1^3+2^3+3^3+4^3+...............+n^3=?</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,sum=0;<br />
System.out.print("Enter the last number= ");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+1) {<br />
sum=sum+i*i*i;<br />
System.out.print("+"+" "+i+"x"+i+"x"+i"  ");<br />
}<br />
System.out.println(" = "+sum);<br />
}<br />
}<br /><br />

****<b>Factorial</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,factorial=1;<br />
System.out.print("Enter the number= ∟");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+1) {<br />
factorial=factorial*i;<br />
System.out.print("x"+i);<br />
}<br />
System.out.println(" = "+factorial);<br />
}<br />
}<br /><br />

****<b>Factorial</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class FactorialDemo {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int num,factorial=1;<br />
        System.out.print("Enter the integer number= ∟");<br />
        num=input.nextInt();<br />
        for (int i = num; i >=1; i--) {<br />
         factorial=factorial*i;<br />
         System.out.print("x"+i);<br />
        }
       System.out.println(" = "+ factorial);<br />
    }<br />
}<br /><br />
****<b>1*3*5*7*...........*(2n+1)=?</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,result=1;<br />
System.out.print("Enter the last odd number =");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+2) {<br />
result=result*i;<br />
System.out.print("x"+i);<br />
}<br />
System.out.println(" = "+result);<br />
}<br />
}<br /><br />

****<b>1^2*3^2*5^2.......(2n+1)^2=</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,result=1;<br />
System.out.print("Enter the last odd number =");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+2) {<br />
result=result*i*i;<br />
System.out.print("x"+"("+i+"x"+i+")");<br />
}<br />
System.out.println(" = "+result);<br />
}<br />
}<br /><br />

****<b>1^3*3^3*5^3*7^3*........*(2n+1)^3=?</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,result=1;<br />
System.out.print("Enter the last odd number =");<br />
n=input.nextInt();<br />
for (int i = 1; i <=n; i=i+2) {<br />
result=result*i*i*i;<br />
System.out.print("x"+"("+i+"x"+i+"x"+i+")");<br />
}<br />
System.out.println(" = "+result);<br />
}<br />
}<br /><br />

****<b>2^2*4^2*6^2.......(2n)^2=</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,result=1;<br />
System.out.print("Enter the last odd number =");<br />
n=input.nextInt();<br />
for (int i = 2; i <=n; i=i+2) {<br />
result=result*i*i;<br />
System.out.print("x"+"("+i+"x"+i+")");<br />
}<br />
System.out.println(" = "+result);<br />
}<br />
}<br /><br />

****<b>37. 2^3*4^3*6^3*8^3*........*(2n)^3=?</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SeriesDemo {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int n,result=1;<br />
System.out.print("Enter the last odd number =");<br />
n=input.nextInt();<br />
for (int i = 2; i <=n; i=i+2) {<br />
result=result*i*i*i;<br />
System.out.print("x"+"("+i+"x"+i+"x"+i+")");<br />
}<br />
System.out.println(" = "+result);<br />
}<br />
}<br /><br />

****<b>38.Namta</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class TimeTable {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        int num;<br />
        System.out.println("Enter an integer number= ");<br />
        num=input.nextInt();<br />
        
        for (int i = 1; i <=10; i++) {<br />
            System.out.println(num+"x"+i+" = "+num*i);<br />
        }<br />
        
    }<br />
 
}<br /><br />

****<b>38.Nested loop</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class TimeTable {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int m,n;<br />
System.out.print("Enter initial  number= ");<br />
m=input.nextInt();<br />

System.out.print("Enter final  number= ");<br />
n=input.nextInt();<br />
for (int i = m; i <=n; i++) {<br />
for (int j = 1; j <=10; j++) {<br />
System.out.println(i+"x"+j+" = "+i*j);<br />
}<br />
    System.out.println("\n");<br />
}<br />
}<br />
}<br /><br />
****<b>39.Identify Prime Number</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class PrimeNumber {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        System.out.print("Enter any positive integer number= ");<br />
        int num;<br />
        num=input.nextInt();<br />
        int count=0;<br />
        for (int i = 2; i < num; i++) {<br />
        if(num%i==0){<br />
            count++;<br />
            break;<br />
           
        } <br /> 
        }<br />
        if(count==0){<br />
             System.out.println("Prime number!");<br />
        }else{<br />
            System.out.println("Is not Prime number");<br />
        }<br />
    }<br />
}<br />
****<b>40.Find Prime number between m & n</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class PrimeNumber {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int m,n,count=1;<br />
System.out.print("Enter initial number= ");<br />
m=input.nextInt();<br />
System.out.print("Enter final number= ");<br />
n=input.nextInt();<br />

for (int i = m; i <=n; i++)<br />
{ 
for (int j = 2; j <=i-1; j++) {<br />
if(i%j==0)<br />
{<br />
    count++;<br />
    break;<br />
}<br />
}<br />
if(count==0)<br />
System.out.print("("+i+")"+",");<br />
count=0; <br /> 
}<br />
System.out.println();
}<br />
}<br /><br />
****<b>41.Fibonakki Numbers(0,1,1,2,3,5,8,13... ....)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />

public class FibonakkiSeries {<br />
    public static void main(String[] args) {<br />
        Scanner input=new Scanner(System.in);<br />
        System.out.print("How many integers you want?= ");<br />
        int n=input.nextInt();<br />
        int first=0;<br />
        int second=1;<br />
        int fibonakki;<br />
        
        System.out.print(first+","+second);<br />
        for (int i = 3; i <=n; i++) {<br />
            fibonakki=first+second;<br />
            System.out.print(","+fibonakki);<br />
            first=second;<br />
            second=fibonakki;<br />
        }<br />
        System.out.println();<br />
    }<br />
 
}<br /><br />
****<b>42.Sum of digits(456->4+5+6=15)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />


public class SumDigits {<br />
    public static void main(String[] args) {<br />
       Scanner input=new Scanner(System.in); <br />
        int sum=0,r,temp,num;<br />
        System.out.print("Enter any number= ");<br />
        num=input.nextInt(); <br />
        
        temp=num;<br />
        while(temp !=0){<br />
            r=temp%10;<br />
            sum=sum+r;<br />
            temp=temp/10; <br /> 
        }<br />
        System.out.println("Sum of digits= "+sum);<br />
    } <br />
}<br /><br />
****<b>45.Reverse an Integer(456->654)</b>***<br />
package beginnerjava;<br />

import java.util.Scanner;<br />


public class SumDigits {<br />
    public static void main(String[] args) {<br />
       Scanner input=new Scanner(System.in);<br /> 
        int sum=0,r,temp,num;<br />
        System.out.print("Enter any number= ");<br />
        num=input.nextInt();<br /> 
        
        temp=num;<br />
        while(temp !=0){<br />
            r=temp%10;<br />
            sum=sum*10+r;<br />
            temp=temp/10; <br />  
        }<br />
        System.out.println("Sum of digits= "+sum);<br />
    } <br />
}<br /><br />
****<b>Palindrom/Not palindrom(12344321)</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int sum=0,r,temp,num;<br />
System.out.print("Enter any number= ");<br />
num=input.nextInt();<br />
temp=num;<br />
while(temp !=0){<br />
r=temp%10;<br />
sum=sum*10+r;<br />
temp=temp/10;<br />
}<br />
System.out.println("Sum of digits= "+sum);<br />
if(num==sum){
    System.out.println("Palindrom number ");<br />
}else{<br />
    System.out.println("Not palindrom number");<br />
}<br />
}<br />
}<br /><br />
****<b>47. Armstrong(153=1^3+5^3+3^3=153)</b>***<br />
package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
int sum=0,r,temp,num;<br />
System.out.print("Enter any number= ");<br />
num=input.nextInt();<br />
temp=num;<br />
while(temp !=0){<br />
r=temp%10;<br />
sum=sum+r*r*r;<br />
temp=temp/10;<br />
}<br />
if(num==sum){<br />
    System.out.println("Armstrong number");<br />
}else{<br />
    System.out.println("Not armstrong number");<br />
}<br />
}<br />
}<br /><br />
****<b>Pattarn</b>***<br />
 package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);
System.out.print("Enter line number= ");<br />
int n=input.nextInt();<br />
  for (int row = 1; row <=n; row++) {<br />
     for (int col= 1; col<= row; col++) {<br />
        System.out.print(" "+col);<br />
     }<br />
        System.out.println();<br />
    }<br />
}<br />
}<br />
****<b></b>***<br />
 package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
System.out.print("Enter line number= ");<br />
int n=input.nextInt();<br />
  for (int row = 1; row <=n; row++) {<br />
    for (int col= 1; col<= row; col++) {<br />
      System.out.print(" "+row);<br />
        }
        System.out.println();<br />
    }<br />
}<br />
}<br /><br />
****<b></b>***<br />
 package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
System.out.print("Enter line number= ");<br />
int n=input.nextInt();<br />
    for (int row = 1; row <=n; row++) {<br />
        for (int col= 1; col<= row; col++) {<br />
            System.out.print("*  ");<br />
        }<br />
        System.out.println();<br />
    }<br />
}<br />
}<br /><br />
****<b>rightangle Triangle</b>***<br />
 package beginnerjava;<br />
import java.util.Scanner;<br />
public class SumDigits {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
System.out.print("Enter line number= ");<br />
int n=input.nextInt();<br />
    for (int row = n ; row >=1; row--) {<br />
        for (int col= 1; col<= row; col++) {<br />
            System.out.print(" "+col);<br />
        }<br />
        System.out.println();<br />
    }<br />
}<br />
}<br /><br />
****<b>Initialization, declerazition and print</b>***<br />
package ArrayDemo;<br />

public class Array1 {<br />
    public static void main(String[] args) {<br />
        int [] number = new int[5];<br />
        number[0]=10;<br />
        number[1]=20;<br />
        number[2]=30;<br />
        number[3]=40;<br />
        number[4]=50;<br />
        
        System.out.println(number[3]);<br />
    }<br />
}<br /><br />
****<b>Size/length of array</b><br />
package ArrayDemo;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
int [] number = new int[5];<br />
number[0]=10;<br />
number[1]=20;<br />
number[2]=30;<br />
number[3]=40;<br />
number[4]=50;<br />

int len=number.length;<br />
System.out.println("Array size= "+len);<br />
}<br />
}<br /><br />
****<b>Sum of numbers using array</b>***<br />
package ArrayDemo;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
int [] number = new int[5];<br />
number[0]=10;<br />
number[1]=20;<br />
number[2]=30;<br />
number[3]=40;<br />
number[4]=50;<br />

int len=number.length;<br />
System.out.println("Array size= "+len);<br />

int sum=number[0]+number[1]+number[2]+number[3]+number[4];<br />
System.out.println("Sum on numbers= "+sum);<br />
}<br />
}<br /><br />
****<b>Get of five decimal numbers from user and sum using array</b>***<br />
package ArrayDemo;<br />
import java.util.Scanner;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
    Scanner input=new Scanner(System.in);<br />
double []number = new double[5];<br />
double sum=0;<br />
 System.out.print("Please Enter five decimal numbers= ");<br />
number[0]=input.nextDouble();<br />
number[1]=input.nextDouble();<br />
number[2]=input.nextDouble();<br />
number[3]=input.nextDouble();<br />
number[4]=input.nextDouble();<br />
    
sum=number[0]+number[1]+number[2]+number[3]+number[4];<br />
System.out.println("Sum is= "+sum);<br />
}<br />
}<br /><br />
****<b>Sum five decimal number using for loop in array</b>***<br />
package ArrayDemo;<br />
import java.util.Scanner;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
    Scanner input=new Scanner(System.in);<br />
double []number = new double[5];<br />
double sum=0;<br />
    System.out.print("Please Enter five decimal numbers= ");<br />
    for (int i = 0; i <=5-1; i++) {<br />
        number[i]=input.nextDouble();<br />    
    } <br />
    sum=number[0]+number[1]+number[2]+number[3]+number[4];<br />
    System.out.println("Sum is= "+sum);<br />
    
    for (int i = 0; i <=5-1; i++) {<br />
       sum = sum + number[i]; <br />
    }<br />
}<br />

}<br /><br />
****<b>Sum five decimal numbers using for loop in arry</b>***<br />
package ArrayDemo;<br />
import java.util.Scanner;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
double []number = new double[5];<br />
double sum=0;<br />
System.out.print("Please Enter five decimal numbers= ");<br />
for (int i = 0; i <=5-1; i++) {<br />
number[i]=input.nextDouble();<br />
}<br />

for (int i = 0; i <=5-1; i++) {<br />
sum = sum + number[i];<br />
}
System.out.println("Sum is= "+sum);<br />
 System.out.println("The avarage is= "+sum/5);<br />
}<br />
}<br /><br />
****<b></b>***<br />
package ArrayDemo;<br />
import java.util.Scanner;<br />
public class Array1 {<br />
public static void main(String[] args) {<br />
Scanner input=new Scanner(System.in);<br />
double []number = new double[10];<br />
double sum=0;<br />
System.out.print("Please Enter ten decimal numbers= ");<br />
for (int i = 0; i <=number.length-1; i++) {<br />
number[i]=input.nextDouble();<br />
}<br />

for (int i = 0; i <=number.length-1; i++) {<br />
sum = sum + number[i];<br />
}<br />
System.out.println("Sum is= "+sum);<br />
double Avg=sum/number.length;<br />
 System.out.println("The avarage is= "+Avg);<br />
}<br />
}<br /><br />

****<b>Multi dimentional Array</b>***<br />
package local_global_instance;<br />

import java.util.*;<br />

public class ArrayDemo {<br />
    public static void main(String[] args) {<br />
        int a[][]=new int[3][];<br />
        a[0]=new int[3]; <br />
        a[1]=new int[3]; <br />
        a[2]=new int[3];<br />
        int arr[][] = {{20,10,30},{5,38,24},{43,77,88}};<br />
       
        for (int i = 0; i <=arr.length-1; i++) {<br />
          
              for (int j = 0; j <= arr[i].length-1; j++) {<br />
       
                  System.out.print(arr[i][j]+" ");<br /> 
        }<br />
           System.out.println(); <br />
        }<br />
    }<br />
}<br /><br />
****<b>Row and Column</b>***<br />
package ArrayDemo;<br />
import java.io.*;<br />


public class Array1 {<br />
	public static void main(String[]args){<br />
	int [][] number = new int [4][5];<br />
        int k=0;<br />
        //Assign value<br />
            for (int i = 0; i <= 4-1; i++) {<br />
                for (int j = 0; j <= 5-1; j++) {<br />
                   number [i][j]= k; <br />
                   k++;<br />
                } <br />
            }<br />
            //print value<br />
            for (int i = 0; i <= 4-1; i++) {<br />
             
                for (int j = 0; j <= 5-1; j++) {<br />
                    System.out.print(" "+number [i][j]);<br />
                }<br />
                   System.out.println("\n");<br />
            }<br />
        }<br />
}<br /><br />
****<b>Rightangle Triangle</b>***<br />
package ArrayDemo;<br />
import java.io.*;<br />
public class Array1 {<br />
public static void main(String[]args){<br />
int [][] number = new int [4][];<br />
number[0]=new int[1];<br />
number[1]=new int[2];<br />
number[2]=new int[3];<br />
number[3]=new int[4];<br />
int k=0;<br />
//Assign value<br />
for (int i = 0; i <=4-1; i++) {<br />
for (int j = 0; j <=i; j++) {<br />
number [i][j]= k;<br />
k++;<br />
}<br />
}<br />
//print value<br />
for (int i = 0; i <= 4-1; i++) {<br />
for (int j = 0; j <=i+1-1; j++) {<br />
System.out.print(" "+number [i][j]);<br />
}<br />
System.out.println("\n");<br />
}<br />
}<br />
}<br />
****<b>Ascending and Descending</b>***<br />
package ArrayDemo;<br />
import java.io.*;<br />
import java.util.Arrays;<br />


public class Array1 {<br />
	public static void main(String[]args){<br />
            int [] number={10,-3,18,5,25};<br />
            Arrays.sort(number);<br />
            System.out.println("Ascending:");<br />
            for (int i = 0; i <=4; i++) {<br />
                
                System.out.print(", "+number[i]);<br />   
            }<br />
            System.out.println("\n");<br />
               System.out.println("Descending:");<br />
            for (int i = 4; i>=0; i--) {<br />
                
                System.out.print(", "+number[i]); <br />  
            }<br />
             System.out.println("\n");<br />
        }<br />
}<br /><br />

****<b>ArrayList</b>***<br />
package ArrayDemo;<br />
import java.util.ArrayList;<br />
public class Array1 {<br />
public static void main(String[]args){<br />
ArrayList<Integer> number=new ArrayList<Integer>();<br />
   
    //Adding element<br />
    number.add(10);<br />
    number.add(10);<br />
    number.add(20);<br />
    number.add(30);<br />
    number.add(40);<br />
    number.add(5, 50);<br />
    number.add(6, 60);<br />
    number.add(7, 70);<br />
    number.add(8, 80);<br />
    System.out.println(number);<br />
     System.out.println("Size="+number.size());<br />
}<br />
}<br />
****<b>Arraylist using Iterator</b>***<br />
package ArrayDemo;<br />
import java.util.ArrayList;<br />
import java.util.Iterator;<br />
public class Array1 {<br />
public static void main(String[]args){<br />
ArrayList number=new ArrayList();<br />
//Adding element<br />
number.add(10);<br />
number.add(10);<br />
number.add(20);<br />
number.add(30);<br />
number.add(40);<br />
number.add(5, 50);<br />
number.add(6, 60);<br />
number.add(7, 70);<br />
number.add(8, 80);<br />
Iterator itr=number.iterator();<br />
while(itr.hasNext()){<br />
    System.out.print(", "+ itr.next());<br />
}<br />
System.out.println();<br />
System.out.println("Size="+number.size());<br />
}<br />
}<br /><br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />
****<b></b>***<br />

------------------------<br />
</p>

</div>
</div>
</body>
</html>
<?php include('include/footer.php');?>