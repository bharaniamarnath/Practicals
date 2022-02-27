import java.lang.*;

public class myClass1 extends myClass{
  int salary;
  String company;
  public void myFunction1(int salary, String company){
    this.salary = salary;
    this.company = company;
    System.out.println("My name is " + name + " and i am working in " + company + " and my salary is Rs." + salary);
  }
  public static void main(String[] args){
    myClass1 mc1 = new myClass1();
    mc1.myFunction1(20000, "Microsoft");
  }
}