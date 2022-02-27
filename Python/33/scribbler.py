from tkinter import *
from tkinter import messagebox
import turtle
import sys

root = Tk()

root.title("Scribbler")
root.geometry("500x500+200+200")
root.resizable(0,0)

cv = Canvas(root,width=500,height=500,background="white")
cv.pack(side = LEFT)

t = turtle.RawTurtle(cv)
screen = t.getscreen()
screen.setworldcoordinates(0,0,500,500)
screen.tracer(0)

def scribNew():
    t.clear()
    t.reset()

def scribClose():
    root.destroy()

def scribAbout():
    messagebox.showinfo(title="Scribbler",message="BASOFT Scribbler v1.0 \nDeveloped by Bharane Amarnath")

def scribGuide():
    messagebox.showinfo(title="Scribbler",message="SCRIBBLER USERGUIDE:\n\nClick anywhere inside the drawing screen to draw a line to the clicked point.\nClick and drag the pointer in the screen to draw freehand.\nUse File-->New to reset the screen.\nUse File-->Close to exit the application.\n\nENJOY SCRIBBLING")


def clickHandler(x,y):
    t.goto(x,y)
    screen.update()

screen.onclick(clickHandler)

def dragHandler(x,y):
    t.goto(x,y)
    screen.update()
    
t.ondrag(dragHandler)

menubar = Menu(root)

filemenu = Menu(menubar,tearoff=0)
filemenu.add_command(label="New",command=scribNew)
filemenu.add_command(label="Close",command=scribClose)
menubar.add_cascade(label="File",menu=filemenu)

helpmenu = Menu(menubar,tearoff=0)
helpmenu.add_command(label="Userguide",command=scribGuide)
helpmenu.add_command(label="About",command=scribAbout)
menubar.add_cascade(label="Help",menu=helpmenu)


root.config(menu=menubar)

root.mainloop()
