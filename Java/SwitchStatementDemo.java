public class SwitchStatementDemo {
public static void main(String[] args) {
int a=20, b=20, c=30;
int status = -1;
if (a>b && a>c) {
status = 1;
}
else if (b>c && b>a) {
status = 2; 
}
else {
status = 3;
}
switch (status) {
case 1:
System.out.println("A is the greatest");
break;
case 2:
System.out.println("B is the greatest");
break;
case 3:
System.out.println("C is the greatest");
break;
default:
System.out.println("Cannot be determined");
}
}
}