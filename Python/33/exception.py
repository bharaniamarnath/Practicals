try:
    raise Exception('bharane','amarnath')
except Exception as inst:
    print(type(inst))
    print(inst.args)
    print(inst)

    x,y=inst.args
    print('x=',x)
    print('y=',y)
