while True:
    try:
        x=int(input("Enter an Integer value: "))
        break
    except ValueError:
        print("Invalid Integer")
        
