def divide(x,y):
    try:
        result=x/y
    except ZeroDivisionError:
        print("division by zero")
    else:
        print("The result is",result)
    finally:
        print("executing finally")

divide(2,1)
divide(2,0)
divide('2','1')
