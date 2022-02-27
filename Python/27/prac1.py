print("I have hidden your key in my room !")
print("I will give you some clues where you can search for your key")
print(" 1.My Bag \n 2.Under my pillow \n 3.My Wardrobe \n 4.My book shelf \n\n GOOD LUCK FINDING YOU KEY !")
while True:
    key = int(input("Enter the item number to search in it: "))
    if key == 2:
        print("You have found the key ! \n")
        break
    else:
        print("The key is not here ! \n")
