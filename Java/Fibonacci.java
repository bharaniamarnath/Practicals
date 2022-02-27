public class Fibonacci {
public static void main (String[] args)
{
double fib1 = 0;
double fib2 = 1;
double temp = 0;
System.out.println(fib1);
System.out.println(fib2);
do {
temp = fib1 + fib2;
System.out.println(temp);
fib1 = fib2;
fib2 = temp;
} while (fib2 < 500);
}
}