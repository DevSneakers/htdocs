import pymysql
import socket

conn = None
cur = None
row = None

server_port = 8090
max_users = 5

# TCP 통신을 위한 소켓 생성
server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_socket.bind(("220.69.207.85", server_port))
server_socket.listen(max_users)

print ("Waiting for client on port ",server_port)

while (True) :
    client_socket, client_address = server_socket.accept()
    print ("connection from ", client_address)

    while True:
        # DB 연결
        conn = pymysql.connect(host='localhost', user='sensor_admin', password='kApRympaUfsSlA*B', db='all_sensor_data', charset='utf8')
        cur = conn.cursor(pymysql.cursors.DictCursor)
        cur.execute("SELECT * FROM minifarm ORDER BY ID DESC LIMIT 1")
        row = cur.fetchone()
        if row == None :
            break

        # 각 센서의 값을 최신으로 가져옴
        Temp_data = row['Temp_D']
        Humidity_data = row['Humidity_D']
        CO2_data = row['CO2_D']
        waterLevel = row['waterLevel_D']
        moisture = row['moisture_D']
        illuminance = row['illuminance_D']
        send_data = ""
        
        # 센서별로 조건에 따라 0 또는 1로 값을 더해 보냄
        # 온도, 습도, CO2, 수분량, 조도, 수통의 물 잔여량으로 총 6자리의 값을 보냄
        # 0 : 경고, 부족, 낮음 | 1 : 정상, 충분
        if Temp_data > 28 :
            send_data += "0"
            print("온도 경고")
        else :
            send_data += "1"
            print("온도 정상")

        if Humidity_data > 85:
            send_data += "0"
            print("습도 경고")
        else :
            send_data += "1"
            print("습도 정상")
        
        if CO2_data > 1000 :
            send_data += "0"
            print("CO2 경고")
        else :
            send_data += "1"
            print("CO2 정상")

        if moisture < 200 :
            send_data += "0"
            print("배양토 수분 부족")
        else :
            send_data += "1"
            print("배양토 수분 정상")

        if illuminance > 100 :
            send_data += "0"
            print("실내 조명 낮음")
        else :
            send_data += "1"
            print("실내 조명 정상")

        if waterLevel == 0 :
            send_data += "0"
            print("수통 물 부족")
        else :
            send_data += "1"
            print("수통 물 충분")

        # 만들어진 데이터를 보내기위해 byte화 시킴
        b_data = bytes(send_data,'utf-8')

        received_data = client_socket.recv(128)

        # 받은 데이터가 없으면 break
        if not received_data:
            break

        # 받은 데이터 출력
        print('received :',received_data)

        # 데이터 보내기
        send_data = client_socket.send(b_data)

        #보낼 데이터가 없으면 경고 메시지 출력
        if send_data == 0:
            print("socket connection broken")

    client_socket.close()
    print("Disconnected")

conn.close()
server_socket.close()
