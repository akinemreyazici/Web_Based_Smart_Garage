import mysql.connector
from dht11_sensor import sicaklik
from LDR_sensor import lumen
from numpad_exp import seq
from rain_sensor import sensorValue


# MySQL veritabanına bağlan
mydb = mysql.connector.connect(
  host="127.0.0.1",
  user="root",
  password="",
  database="web_project"
)

# Veritabanından belirli bir satırın belirli sütununu çek

mycursor = mydb.cursor()
sql = "INSERT INTO degerler (sıcaklık_degeri, ısık_degeri, yagmur_degeri) VALUES (%s, %s, %s)"
val = (sicaklik,lumen,sensorValue)
mycursor.execute(sql, val)
mydb.commit()
print(mycursor.rowcount, "adet kayıt eklendi.")

mycursor.execute("SELECT * FROM butonlar")
result = mycursor.fetchall()