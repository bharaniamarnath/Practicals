def ask_ok(prompt,retry=4,warning="yes or no ?"):
    while True:
        ok=input(prompt)
        if ok in ('y','ye','yes'):
            print("Quit success")
            return True
        if ok in ('n','no','nope'):
            print("Not quit yet")
            return False
        retry=retry-1
        if retry<0:
            raise IOError('Dumb User')
        print(warning)

ask_ok("Do you really want to quit ? ")
