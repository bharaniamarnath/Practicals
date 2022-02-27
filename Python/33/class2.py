class Bicycle:
    def __init__(self,speed,quality):
        self.s = speed
        self.q = quality

p = Bicycle(30,90)
print(p.s,p.q)

class Bicycle_Model1(Bicycle):
    def model1():
        s1 = p.s*2
        q1 = p.q*2

m1 = Bicycle_Model1(20,30)
print(p.s1,p.q1)

