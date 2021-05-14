import serial 
import MySQLdb
import time

#establish connection to MySQL. You'll have to change this for your database.
dbConn = MySQLdb.connect("localhost","root","","rfid_read") or die ("could not connect to database")
#open a cursor to the database
cursor = dbConn.cursor()

device = 'COM3' #this will have to be changed to the serial port you are using
try:
  print ("Trying...",device)
  arduino = serial.Serial(device, 9600) 
except: 
  print ("Failed to connect on",device)
while True:
    time.sleep(1)
    try:
        data=arduino.readline()    
        pieces=data.decode().split(" ")
        print (pieces[0])
        pieces[0].encode()
        pieces[1].encode()
        try:
            cursor=dbConn.cursor()
            cursor.execute("TRUNCATE TABLE rfid_data")
            cursor.execute("""INSERT INTO rfid_data (RTAG_ID,id) VALUES (%s,%s)""", (pieces[0],pieces[1]))
            dbConn.commit()
            print (" inserted data")
            cursor.close()
        except MySQLdb.IntegrityError:
            print ("failed to insert data")
        finally:
            cursor.close()
    except:
        print ("Error in reading")
