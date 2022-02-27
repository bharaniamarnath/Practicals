import sys
try:
    f=open('test.txt')
    s=f.read()
    print(s)
    print('\nThe file has',len(f.readlines()),'lines')
except IOError as err:
    print('I/O Error: {0}'.format(err))
except ValueError:
    print('Could not convert the file')
except:
    print('Unexpected error in file',sys.exc_info()[0])
    raise
