class conditionalOperate{
public static int a = 24;
public static int b = 57;

public static void main(String[] args){
if(a != 23 || b != 56){
System.out.println("Either of A or B are not valid");
}
else if(a == 23 || b != 56){
System.out.println("A is valid. But B is not !");
}
else if(a != 23 && b == 56){
System.out.println("A is not valid. But B is !");
}
else{
System.out.println("Both A and B are valid");
}
}
}