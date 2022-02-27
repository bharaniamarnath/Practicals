public class myName{

int myAge;

public myName(String name){
System.out.println("My name is : " + name);
}

public void setAge(int age){
myAge = age;
}

public int getAge(){
System.out.println("My age is : " + myAge);
return myAge;
}

public static void main(String[] args){
myName displayName = new myName( "Bharane" );
displayName.setAge( 2 );
displayName.getAge( );
System.out.println("The age variable is : " + displayName.myAge);
}
}