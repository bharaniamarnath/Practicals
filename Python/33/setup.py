from cx_freeze import setup,Executable
includes=["tkinter","turtle","sys"]
exe=Executable(script="simpleapp1.py",base="Win32GUI")
setup(version="3.0",options={"build_exe":{"includes":includes}},executables=[exe])
