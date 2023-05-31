import RPi.GPIO as GPIO
pinA = 38
pinB = 35
GPIO.setup(pinA,GPIO.OUT)
GPIO.setup(pinB,GPIO.OUT)
GPIO.output(pinA,GPIO.LOW)
#GPIO.output(pinB,GPIO.LOW)
pwm = GPIO.PWM(pinB, 1000)
pwm.start(0)
#pwm.stop()
pwm_mode = True
def open_pwm():
    global pwm_mode
    if(not pwm_mode):
        pwm_mode = True
        pwm.start(0)
    else:
        pass
    
def MoveMotor(mtr_dir,spd):
    global pinA
    global pinB
    open_pwm()
    if(mtr_dir):
        GPIO.output(pinA, GPIO.HIGH)
    else:
        GPIO.output(pinA, GPIO.LOW)
    if (mtr_dir == 1): 
        spd = 100 - spd
    pwm.ChangeDutyCycle(spd)
def fanHigh():
    MoveMotor(0,100)
def fanNormal():
    MoveMotor(0,75)
def fanLow():
    MoveMotor(0,50)
def fanClose():
    pwm.ChangeDutyCycle(0)