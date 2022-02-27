import sys
from tkinter import *
from xml.dom import minidom

xmlapp = Tk()
xmlapp.title("XML PARSING")
xmlapp.geometry("600x600+200+200")

xmldoc = minidom.parse("cd_catalog.xml")

cat = xmldoc.getElementsByTagName("CATALOG")[0]
cd = cat.getElementsByTagName("CD")

for cds in cd:
    title = cds.getElementsByTagName("TITLE")[0].firstChild.data
    artist = cds.getElementsByTagName("ARTIST")[0].firstChild.data

    label1 = Label(xmlapp,text=title,fg="red",font="calibri")
    label1.grid(sticky="w",padx=5,pady=5)
    label2 = Label(xmlapp,text=artist,fg="blue",font="calibri")
    label2.grid(sticky="w",padx=5)

xmlapp.mainloop()
    
    
    

