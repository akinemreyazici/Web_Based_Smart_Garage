import RPi.GPIO as GPIO
import threading
import Adafruit_DHT

GPIO.setwarnings(False)
#GPIO.setmode(GPIO.BCM)

def showTemperature():
        humidity, temperature = Adafruit_DHT.read(Adafruit_DHT.DHT11, 4)
        sicaklik = "sicaklik: "
        sicaklik += str(temperature)
        sicaklik += "\r\n"
        return sicaklik