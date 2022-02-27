public class ArithmeticOperatorsDemo {
public ArithmeticOperatorsDemo() {
int x, y=10, z=5;
x = y + z;
System.out.println("Addition: " +x);
x = y - z;
System.out.println("Subtraction: " +x);
x = y * z;
System.out.println("Multiplication: " +x);
x = y / z;
System.out.println("Division: " +x);
int tooBig = Integer.MAX_VALUE + 1;
int tooSmall = Integer.MIN_VALUE - 1;
System.out.println("MAX_VALUE: " +tooBig);
System.out.println("MIN_VALUE: " +tooSmall);
}
public static void main(String[] args) {
new ArithmeticOperatorsDemo();
}
}