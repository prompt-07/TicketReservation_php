import sys

def default():
    print('Hello there')

def main():
    if sys.argv[1]== 'hi' :
        default()
    else :
        print('Bot offline')

if __name__ == '__main__':
    main()
