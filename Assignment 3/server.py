# server code from: https://shakeelosmani.wordpress.com/2015/04/13/python-3-socket-programming-example/
import time
import socket                                   # import python sockets library
import csv
import pickle



def Main():                                     # define the main function
    host = "127.0.0.1"                          # define host variable as local machine
    port = 5000                                 # define port on local machine (> 1024)
    path = r'C:\Users\Robert\Documents\GitHub\Engineering_Project_6\Assignment 3\Database.csv' #database location
    mySocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)  # define mySocket as an instance of a python socket, socket.socket(AF_INET, SOCK_DGRAM for UDP or SOCK_STREAM for TCP)
    mySocket.bind((host, port))                 # bind take a tuple as input (bind the host and port to the socket created above) 

    mySocket.listen(1)                          # 1 means perpetually listen until the connection is closed
    conn, addr = mySocket.accept() 
                 # conn and addr hold the connection and address of the client
    
    print("Connection from: " + str(addr))  # print the clients 
    while True:
        data = conn.recv(1024).decode()         # decode() necessary in python 3
        if not data:
            break
        
        print("from connected user: " + str(data))
        if data == '1':
            with open(path, 'r') as database:
                data = csv.DictReader(database, delimiter=',')
                         
                for row in data:
                    current_data = row['ID']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                   
                    current_data = row['Name']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                    
                    current_data = row['Last Name']
                    current_data = current_data +','
                    conn.send(current_data.encode())

                    current_data = row['Street#']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                    
                    current_data = row['Street Name']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                    
                    current_data = row['City']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                    
                    current_data = row['Postal']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                    
                    current_data = row['Province']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                  
                    current_data = row['Country']
                    current_data = current_data +','
                    conn.send(current_data.encode())
                   
                    breaker = conn.recv(1024).decode()         # decode() necessary in python 3
                    if breaker != 'y' or 'Y':
                        break
    conn.close()

if __name__ == '__main__':
    Main()
