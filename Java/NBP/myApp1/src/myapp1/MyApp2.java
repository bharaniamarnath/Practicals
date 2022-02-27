/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package myapp1;

/**
 *
 * @author User
 */
public class MyApp2 extends MyApp1 {
    public static String university;
    public static String department;
    public static String regno;
    /**
     *
     * @param regno
     * @param department
     * @param university
     */
    public void myFunction3(String regno, String department, String university){
        MyApp2.regno = regno;
        MyApp2.department = department;
        MyApp2.university = university;
    }
    public void printData1(){
        super.printData();
        System.out.println("Register No: " + regno);
        System.out.println("Department: " + department);
        System.out.println("University: " + university);
    }
    public static void main(String[] args){
        MyApp2 ma2 = new MyApp2();
        ma2.myFunction3("31608205009", "Information Technology", "Madras University");
        ma2.printData1();
    }
}
