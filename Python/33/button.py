import tkinter

top = tkinter.Tk()

butt01 = tkinter.Button(top, text="Hello World", font=('Helvetica', 24,))

custom_font_serif = ('Times', 24, 'bold')
butt02 = tkinter.Button(top, text="Hello World", font=custom_font_serif)

custom_font_sans = ('Helvetica', 36, 'italic')
butt03 = tkinter.Button(top, text="Hello World", font=custom_font_sans)

butt01.pack()
butt02.pack()
butt03.pack()

top.mainloop()
