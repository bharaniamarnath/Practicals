class motorCycle{
	String brand;
	String style;
	boolean engineStatus;
	void startEngine() {
		if(engineStatus == true){
			System.out.println("The engine is already on");
		}
		else{
			engineStatus = true;
			System.out.println("The engine is now on");
		}
	}
	void showAtts() {
		System.out.println("This bike is a " + brand + " brand " + style + " model.");
		if(engineStatus == true){
			System.out.println("The engine is on");
		}
		else{
			System.out.println("The engine is off");
		}
	}
	public static void main(String[] args){
		motorCycle m = new motorCycle();
		m.brand = "Yamaha";
		m.style = "FZ";
		System.out.println("Getting your bike's details...");
		m.showAtts();
		System.out.println("The engine is starting...");
		m.startEngine();
	}
}