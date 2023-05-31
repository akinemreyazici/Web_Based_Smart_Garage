import RPi.GPIO as GPIO
import time

# GPIO pin numaralarını tanımla
ENA = 12 #18
IN1 = 36 #16
IN2 = 37 #26
GPIO.setmode(GPIO.BOARD)
# GPIO ayarlarını yap
#GPIO.setmode(GPIO.BCM)
GPIO.setup(ENA, GPIO.OUT)
GPIO.setup(IN1, GPIO.OUT)
GPIO.setup(IN2, GPIO.OUT)

# PWM sinyalini tanımla
pwm = GPIO.PWM(ENA, 100)
pwm.start(0)
pwm_mode = True
def open_pwm():
    global pwm_mode
    if(not pwm_mode):
        pwm_mode = True
        pwm.start(0)
    else:
        pass
    

def low():
    open_pwm()
    GPIO.output(IN1, GPIO.HIGH)
    GPIO.output(IN2, GPIO.LOW)
    pwm.ChangeDutyCycle(30)

	# Burada buton verisi gelip if koşuluna giricek ona göre ışık sönücek
	# Diğer 2 aşama içinde aynı şeyler yapılacak her birinde gpio ayarları unutma
    
def medium():
    open_pwm()
    GPIO.output(IN1, GPIO.HIGH)
    GPIO.output(IN2, GPIO.LOW)

    pwm.ChangeDutyCycle(60)
    

    
def high():
    open_pwm()
    pwm.ChangeDutyCycle(100)


def off():
    #pwm.stop()
    pwm.ChangeDutyCycle(0)
    global pwm_mode
    #pwm_mode = False