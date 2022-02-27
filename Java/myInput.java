import java.io.*;
public class myInput
{
myInput()
{
String a;
int num;
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
try
{
System.out.println("Enter the input:");
a=br.readLine();
num=Integer.parseInt(a);
System.out.println("Your Output:" +num/2);
}
catch(Exception e)
{
}
}
public class myInput1
{
myInput1()
{
String b;
int num1;
BufferedReader br1=new BufferedReader(new InputStreamReader(System.in));
try
{
System.out.println("Enter the next input:");
b=br.readLine();
num1=Interger.parseInt(b);
System.out.println("Your next output:" +num1*2);
}
catch(Expection e1)
{
}
}
public static void main(String[] args)
{
myInput inputvalue=new myInput();
}
}

