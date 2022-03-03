import pymysql
import socket

conn = None
cur = None
row = None

server_port = 8090
max_users = 5

#make socket
server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_socket.bind(("220.69.207.85", server_port))
server_socket.listen(max_users)

print ("Waiting for client on port ",server_port)

while (True) :
    client_socket, client_address = server_socket.accept()
    print ("connection from ", client_address)

    while True:
        #connect DB
        conn = pymysql.connect(host='localhost', user='sensor_admin', password='rZ3Oytpn9lT*-M9.', db='all_sensor_data', charset='utf8')
        cur = conn.cursor(pymysql.cursors.DictCursor)
        cur.execute("SELECT * FROM quality_meter ORDER BY ID DESC LIMIT 1")
        row = cur.fetchone()
        if row == None :
            break
        Temp_data = row['temp_D']
        Humidity_data = row['humidity_D']
        CO2_data = row['CO2_D']
        Dust_data = row['Dust_D']
        send_data = ""
        
        if Temp_data > 40 :
            send_data += "2"
            print("온도 경고")
        else :
            send_data += "3"
            print("온도 정상")

        if Humidity_data > 70:
            send_data += "4"
            print("습도 경고")
        else :
            send_data += "5"
            print("습도 정상")
        
        if CO2_data > 400 :
            send_data += "6"
            print("CO2 경고")
        else :
            send_data += "7"
            print("CO2 정상")

        if Dust_data > 50 :
            send_data += "8"
            print("미세먼지 경고")
        else :
            send_data += "9"
            print("미세먼지 정상")

        b_data = bytes(send_data,'utf-8')

        received_data = client_socket.recv(128)
        if not received_data:
            break
        print('received :',received_data)
        send_data = client_socket.send(b_data)
        if send_data == 0:
            print("socket connection broken")
    client_socket.close()
    print("Disconnected")

conn.close()
server_socket.close()
