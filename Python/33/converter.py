from tkinter import *
from tkinter import ttk

def calculate(*args):
    try:
        value = float(feet.get())
        meter.set((0.3048 * value * 10000.0 + 0.5)/10000.0)
    except ValueError:
        pass

root = Tk()
root.title("Amarsoft Feet to Meters Converter")

mainframe = ttk.Frame(root, padding="3 3 12 12")
mainframe.grid(row=0, column=0, sticky=(N,W,E,S))
mainframe.columnconfigure(0,weight=1)
mainframe.rowconfigure(0,weight=1)

feet = StringVar()
meter = StringVar()

feet_entry = ttk.Entry(mainframe, width=7, textvariable = feet)
feet_entry.grid(column=2, row=1, sticky=(W,E))

ttk.Label(mainframe, textvariable = meter).grid(column=2, row=2, sticky=(W,E))
ttk.Button(mainframe, text="Convert", command=calculate).grid(column=3, row=3, sticky=W)

ttk.Label(mainframe, text="feet").grid(row=1, column=3, sticky=W)
ttk.Label(mainframe, text="is equivalent to").grid(column=1, row=2, sticky=E)
ttk.Label(mainframe, text="meters").grid(column=3,row=2,sticky=W)

for child in mainframe.winfo_children(): child.grid_configure(padx=5, pady=5)

feet_entry.focus()
root.bind('<Return>',calculate)

root.mainloop()
