import sys
from tkinter import *
from tkinter import messagebox
from tkinter import colorchooser
from tkinter import filedialog

def myHello():
    mytext = ment.get()
    mylabel1 = Label(myGUI,text=mytext).pack()
    return

def myNew():
    mylabel2 = Label(myGUI,text="New File").pack()
    return

def myOpen():
    myFile = filedialog.askopenfile()
    mylabel4 = Label(myGUI,text=myFile).pack()
    return

def myAbout():
    messagebox.showwarning(title="About",message="Simple GUI Application")
    return

def myColor():
    myTheme = colorchooser.askcolor()
    mylabel3 = Label(myGUI,text=myTheme).pack()
    return

def myClose():
    myExit = messagebox.askokcancel(title="Quit Application",message="Are you sure?")
    if myExit > 0:
        myGUI.destroy()
    return

myGUI = Tk()
ment = StringVar()
mvar = IntVar()
   
myGUI.geometry("400x400+200+200")
myGUI.title("My APP")

mylabel = Label(myGUI,text="My Label",fg="white",bg="black").pack()

mybutton = Button(myGUI,text="Click Here",command=myHello,fg="red").pack()

myText = Entry(myGUI,textvariable=ment).pack()

#Menu

menubar = Menu(myGUI)

#File Menu
filemenu = Menu(menubar,tearoff=0)
filemenu.add_command(label="New",command=myNew)
filemenu.add_command(label="Open",command=myOpen)
filemenu.add_command(label="Save")
filemenu.add_command(label="Theme",command=myColor)
filemenu.add_command(label="Exit",command=myClose)
menubar.add_cascade(label="File",menu=filemenu)

#setup
setupmenu = Menu(menubar,tearoff=0)
setupmenu.add_checkbutton(label="Auto")
menubar.add_cascade(label="Setup",menu=setupmenu)

#Help Menu
helpmenu = Menu(menubar,tearoff=0)
helpmenu.add_command(label="Help")
helpmenu.add_command(label="About",command=myAbout)
menubar.add_cascade(label="Help",menu=helpmenu)

#radiobutton
radio1 = Radiobutton(myGUI,text="option1",value=1,variable="gr1").pack()
radio2 = Radiobutton(myGUI,text="option2",value=2,variable="gr1").pack()

radio3 = Radiobutton(myGUI,text="option3",value=3,variable="gr2").pack()
radio4 = Radiobutton(myGUI,text="option4",value=4,variable="gr2").pack()

#spinbox
spinbox1 = Spinbox(myGUI,from_=0,to=10).pack()

#listbox
list1 = Listbox(myGUI)
list1.insert(1,"python")
list1.insert(2,"perl")
list1.insert(3,"php")
list1.pack()

#slider
slider1 = Scale(myGUI,orient=HORIZONTAL,length=300,width=20,sliderlength=10,from_=0,to=50,tickinterval=5).pack()

#checkbutton
check1 = Checkbutton(myGUI,state=ACTIVE,variable=mvar,offvalue=0,command=myClose).pack()

myGUI.config(menu=menubar)

myGUI.mainloop()
