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
    mySocket.connect((host, port))                                 #connects to the host

    #infinite loop
    while True:
        command = input("Enter a command\n1:Read\n 2:New\n 3:Modify\n->")       #essentally the main menu
        if command == '1': 
            mySocket.send(command.encode())                                     #sends response of 1       
            while True:

               

                recive_length = 0                                               #is the ammount of elements that have been sent
                recived_entry = ['','','','','','','','','']                    #is an array that holds a whole row of data - P
                num_recived_entrys = 0                                          #total amount of elements recived out of 8


                while num_recived_entrys != 9:      
                    data = mySocket.recv(1024).decode()                         #decode() necessary in python 3           
                    current_data_load = data.split(",")                         #server sends up to the whole row as a single string, this breaks it at each csv into a list
                    
                    recive_length = len(current_data_load) -1                   #checks the current amount of elements recived and subtracts 1 as .split adds an empty one at the end
                    i = 0                                       
                    for i in range(recive_length):                              #standard for loop i - recive length, loads elements into recived
                        recived_entry[num_recived_entrys+ i] = current_data_load[i]     

                    num_recived_entrys  = num_recived_entrys +recive_length     #checks how many total elemnts have been recieved
                

                print("ID = " + recived_entry[0])                               #prints the recived row, uses for loop to print address
                print("\nName:" + recived_entry[1] + " "+ recived_entry[2] +"\n")
                for x in range(6):
                     print(" " + recived_entry[x+3])


                countinue_loop = input('\nView next record? y/n:')
                if countinue_loop == 'y' or 'Y':
                     mySocket.send(countinue_loop.encode())
                else:
                    if countinue_loop == 'n' or 'N':
                        mySocket.send(countinue_loop.encode())                  #sends a disconnect request
                        break
            

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
                tries = 0
                
                while (tries < 4):
                    
                    # Only accept numbers 
                    Street_Num = input('\nStreet #: ')

                    try:
                       int(Street_Num)
                       mySocket.send(Street_Num.encode()) 
                       data = mySocket.recv(1024).decode()   # 1024 is buffer sizerint('Received from server: ' + data)
                       print('Received from server: ' + data)
                        
                    except ValueError:
                        print('Only Enter Numbers!')
                        tries = tries + 1
                                                      
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
