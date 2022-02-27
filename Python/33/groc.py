def grocerystore(grocery,*comments,**people):
    print("Do you have any",grocery," ?")
    print("I am sorry we're all out of",grocery)
    for arg in comments:
        print(arg)
    print("-"*40)
    key=sorted(people)
    for ppl in key:
        print(ppl,":",people[ppl])
grocerystore("carrot","These kind of vegetables are more in demand !",client="Bharane",shopkeeper="Amarnath")
