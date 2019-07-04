# client code from: https://shakeelosmani.wordpress.com/2015/04/13/python-3-socket-programming-example/
# python help https://docs.python.org/3/library/functions.html
# switch help https://www.jquery-az.com/2-python-switch-case-default-statement-alternatives-get-solutions/

import socket

def Main(): 
    host = '127.0.0.1'                                              # IP address of the server to connect to
    port = 5000                                                       # port on server to connect to 
    mySocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)    # define mySocket as an instance of a python socket, socket.socket(AF_INET, SOCK_DGRAM for UDP or SOCK_STREAM for TCP)
    mySocket.connect((host, port))                                    #connects to the host
    if mySocket:
        print("connection established")
    
    

    #infinite loop
    
def recive_data(mySocket):
        command = get_user_querry()                                         #calls Get_user_queery which returns a ID string
        mySocket.send(str(command).encode())                                #sends ID response 

        while True:
            recive_length = 0                                               #is the ammount of elements that have been sent
            recived_entry = ['','','','','','','','','']                    #is an array that holds a whole row of data - P
            num_recived_entrys = 0                                          #total amount of elements recived out of 8
            i =0
           
            while num_recived_entrys != 9:      
                data = mySocket.recv(1024).decode()                         #decode() necessary in python 3           
                current_data_load = data.split(",")                         #server sends up to the whole row as a single string, this breaks it at each csv into a list
                    
                recive_length = len(current_data_load) -1                   #checks the current amount of elements recived and subtracts 1 as .split adds an empty one at the end
                                                   
                while i in range(recive_length):                      
                    recived_entry[num_recived_entrys] = current_data_load[i]     
                    num_recived_entrys = num_recived_entrys +1
                    i = i +1
                i=0
                

            print("ID = " + recived_entry[0])                               #prints the recived row, uses for loop to print address
            print("\nName:" + recived_entry[1] + " "+ recived_entry[2] +"\n")
            for x in range(6):
                    print(" " + recived_entry[x+3])


          
                
                   
        mySocket.close()

def get_user_querry(): #Returns a string with ID requested
        command =0
        while command <1:                                                   #gets user inputted ID number, checks its valid =>1
            command = input("Please enter an ID number to Query->")
            command = int(command)
        return str(command)

def get_user_mode():                                                        #gets user inputted ID number, checks its valid =>1
    x = None
    while True:
        x = input("Select mode:\n view Record = V \nEdit record = E,\n New Record = N\n->,")
        if x == 'V' or 'N' or 'E':
            break
        else:
            return x
        



if __name__ == '__main__':
    Main()
