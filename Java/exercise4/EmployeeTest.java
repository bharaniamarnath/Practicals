import java.io.*;
public class EmployeeTest{

public static void main(String[] args){
Employee empOne = new Employee("Bharane");
Employee empTwo = new Employee("Amarnath");

empOne.empAge(22);
empOne.empDesignation("Web Developer");
empOne.empSalary(20000);
empOne.printEmployee();

empTwo.empAge(23);
empTwo.empDesignation("Web Designer");
empTwo.empSalary(10000);
empTwo.printEmployee();

}

}