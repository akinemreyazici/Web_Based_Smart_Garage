import RPi.GPIO as GPIO
import time


# Pin tanımlamaları
PWM_PIN = 32  

# GPIO ayarları
#GPIO.setmode(GPIO.BOARD)
GPIO.setup(PWM_PIN, GPIO.OUT)
pwm = GPIO.PWM(PWM_PIN, 100)
 # PWM nesnesi oluşturma, frekans=50
    
def branda_open_servo():
    # Motoru 90 derece pozisyonda başlatma
    global pwm
    pwm.start(5)  # 1.5ms duty cycle
    time.sleep(3)
    pwm.ChangeDutyCycle(0)

def branda_close_servo():
    global pwm
    # Motoru -90 derece pozisyonda hareket ettirme
    pwm.start(15)  # 2.5ms duty cycle
    time.sleep(3)
    pwm.ChangeDutyCycle(0)

# Test
#open_servo()
#time.sleep(2)
#close_servo()

# Motoru durdurma
#pwm.stop()

# GPIO ayarlarını temizleme
#GPIO.cleanup()