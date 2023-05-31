import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

rainPin = 16
thresholdValue = 1


GPIO.setup(rainPin, GPIO.IN)


def getRainSensor():
    sensorValue = GPIO.input(rainPin)
    #print(sensorValue)
    if sensorValue == thresholdValue:
        return "0"
    else:
        return "1"

    