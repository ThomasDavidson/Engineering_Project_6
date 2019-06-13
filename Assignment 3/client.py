# client code from: https://shakeelosmani.wordpress.com/2015/04/13/python-3-socket-programming-example/
# python help https://docs.python.org/3/library/functions.html
# switch help https://www.jquery-az.com/2-python-switch-case-default-statement-alternatives-get-solutions/

import socket

def Main():
    host = '127.0.0.1'          # IP address of the server to connect to
    port = 5000                 # port on server to connect to 
    
    #Name: < Character String>
    #ID: <6 Digit Integer Number>
    #Street Number: <Integer Number>
    #Street Name: <Character String >
    #City: <Character String >
    #Postal Code: <Character String >
    #Province: <Character String >
    #Country: <Character String >

    mySocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  # define mySocket as an instance of a python socket, socket.socket(AF_INET, SOCK_DGRAM for UDP or SOCK_STREAM for TCP)
    mySocket.connect((host, port))

    message = input(" -> ")

    while message != 'q':

        message = input("Enter a menu option from 1 - 3: ")
        

        #define the function blocks
        def Name_Func():
            Name = input('Name: ')
            mySocket.send(Name.encode())
            data = mySocket.recv(1024).decode()   # 1024 is buffer size
            print('Received from server: ' + data)

        def ID_Func():
            ID = input('ID: ') 
            mySocket.send(ID.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def StreetNum_Func():
            Street_Num = input('\nStreet #: ')
            mySocket.send(Street_Num.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def StreetName_Func():
            Street_Name = input('\nStreet Name: ')
            mySocket.send(Street_Name.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def City_Func():
            City = input('\nCity: ')
            mySocket.send(City.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def PostalCode_Func():
            Postal_Code = input('\nPostal Code: ')
            mySocket.send(Postal_Code.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def Province_Func():
            Province = input('\nProvince: ') 
            mySocket.send(Province.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def Country_Func():
            Country = input('\nCountry: ')
            mySocket.send(Country.encode()) 
            data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
            print('Received from server: ' + data)

        def default():
            return "Incorrect option"

        #Dictionary containing all possible 'cases'4
        Menu_Options_Dict = {
                "1": Name_Func,
                "2": ID_Func,
                "3": StreetNum_Func,
                "4": StreetName_Func,
                "5": City_Func,
                "6": PostalCode_Func,
                "7": Province_Func,
                "8": Country_Func,
            }

        Menu_Options_Dict.get(message,default)()

        mySocket.close()

if __name__ == '__main__':
    Main()
