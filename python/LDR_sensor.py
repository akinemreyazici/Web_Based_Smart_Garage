import RPi.GPIO as GPIO
import time
pinA = 11

GPIO.setup(pinA,GPIO.IN)

def checkLight():
    if GPIO.input(pinA):
        return "Işık Kapalı"
    else:
        return "Işık Açık"
    