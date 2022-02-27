import array, struct
m=memoryview(array.array('H',[12,21,34]))
m.itemsize
m[0]
struct.calcsize('H')==m.itemsize
