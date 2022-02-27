import sys
from tkinter import *

myGUI = Tk()

myGUI.title("Simple App 4")
myGUI.geometry("400x400+200+200")

#canvas

canvas1 = Canvas(myGUI,height=300,width=300,bg="white")
coord = 10,50,100,200
arc = canvas1.create_arc(coord,start=0,extent=150,fill="yellow")
canvas1.pack()

myGUI.mainloop()
