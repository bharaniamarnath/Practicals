import java.lang.*;

public class myClass{
  public static String name;
  public static int age;
  public void myFunction(String name, int age){
    this.name = name;
    this.age = age;
    System.out.println("My name is " + name + " and my age is " + age);
  }
  public static void main(String[] args){
    myClass mc = new myClass();
    mc.myFunction("Bharane", 22);
  }
}