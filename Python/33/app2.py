import sys
from tkinter import *
from tkinter import messagebox

def appNew():
    pass
    return

def appOpen():
    pass
    return

def appAbout():
    messagebox.showinfo(title="My App",message="This is a simple application.")
    return

app = Tk()
app.title("My App")
app.geometry("400x300+200+200")

menubar = Menu(app)

#filemenu
filemenu = Menu(menubar,tearoff=0)
filemenu.add_command(label="New",command=appNew)
filemenu.add_command(label="Open",command=appOpen)
menubar.add_cascade(label="File",menu=filemenu)

#helpmenu
helpmenu = Menu(menubar,tearoff=0)
helpmenu.add_command(label="About",command=appAbout)
menubar.add_cascade(label="Help",menu=helpmenu)

app.config(menu=menubar)

app.mainloop()


