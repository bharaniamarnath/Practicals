class Calculate:
    def __init__(self,num1,num2,num3):
        self.n1 = num1
        self.n2 = num2
        self.n3 = num3

class StringClass:
    def __init__(self,str1,str2):
        self.s1 = str1
        self.s2 = str2

def Concat(str1,str2):
    print(len(str1),len(str2))

s = Calculate(40,20,5)
print(s.n1+s.n2+s.n3)
print(s.n1-s.n2-s.n3)

st = StringClass('Bharane','Amarnath')
print(st.s1,st.s2)

Concat('Bruno','Mars')


