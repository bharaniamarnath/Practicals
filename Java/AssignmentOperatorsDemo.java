public class AssignmentOperatorsDemo {
public AssignmentOperatorsDemo() {
int j, k;
j = 10;
j = 5;
k = j;
System.out.println("J is : " +j);
System.out.println("K is : " +k);
Integer i1 = new Integer("1");
Integer i2 = new Integer("2");
System.out.println("i1 is : " +i1);
System.out.println("i2 is : " +i2);
i1 = i2;
System.out.println("i1 is : " +i1);
System.out.println("i2 is : " +i2);
k = j = 10;
System.out.println("J is : " +j);
System.out.println("K is : " +k);
}
public static void main(String[] args) {
new AssignmentOperatorsDemo();
}
}