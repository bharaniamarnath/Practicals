def internet(speed,browser='Opera',home='Google',routine='Facebook'):
    print("--My internet speed is",speed )
    print("--I use",browser,"browser")
    print("--My homepage is always",home)
    print("--The site I use often is",routine)

change={"speed":"256Kbps","browser":"Firefox"}
internet(**change)
