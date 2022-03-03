import pymysql
import socket

conn = None
cur = None
row = None

server_port = 8090
max_users = 10

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
    cur.execute("SELECT * FROM control ORDER BY ID DESC LIMIT 1")
    row = cur.fetchone()
    if row == None :
      break 

    #커맨드 자릿수 의미 : 첫번째 자리 = 선풍기, 두번째 자리 = 온열기, 세번째 자리 = 조명
    #auto Mode
    if row['Mode'] == 1 :
      cur.execute("SELECT AVG(Temp_D), AVG(Humidity_D), AVG(CO2_D), AVG(illuminance_D) FROM indoor_env WHERE Time >= DATE_FORMAT(DATE_SUB(now(),INTERVAL 10 MINUTE),'%Y-%m-%d %H:%i:%s')")
      AVGrow = cur.fetchone()
      print("Automatic Mode")
      if AVGrow['AVG(CO2_D)'] > 1000 or AVGrow['AVG(Temp_D)'] > 30 :
        send_data = "1"
        print("Fan ON")
      else :
        send_data = "0"
        print("Fan OFF")

      if AVGrow['AVG(Temp_D)'] < 25 or AVGrow["AVG(Humidity_D)"]>70:
        send_data += "0"
        print("Warmer OFF")
      else :
        send_data += "1" 
        print("Warmer ON")

      if AVGrow['AVG(illuminance_D)'] > 100  :
        send_data += "0"
        print("Light OFF")
      else :
        send_data += "1" 
        print("Light ON")

    #manual Mode
    elif row['Mode'] == 0 :
      print("Manual Mode")
      ElectricFan_Data = row['ElectricFan']
      Warmer_Data = row['Warmer']
      Light_Data = row['Light']
      send_data = str(ElectricFan_Data) + str(Warmer_Data) + str(Light_Data)

    #print(send_data)
    b_data = bytes(send_data,'utf-8')

    received_data = client_socket.recv(128)
    if not received_data:
      break
    print('send Data :',send_data)
    send_data = client_socket.send(b_data)
    if send_data == 0:
      print("socket connection broken")
  client_socket.close()
  print("Disconnected")

conn.close()
server_socket.close()
