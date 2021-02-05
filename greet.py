import sys

def default():
    print('Hello there')

def main():
    if sys.argv[1] == 'dog':
        print('Woff!')
    else:
        default()

if __name__ == '__main__':
    main()
