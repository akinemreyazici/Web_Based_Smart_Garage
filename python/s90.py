import RPi.GPIO as GPIO
import time


# Pin tanımlamaları
PWM_PIN = 33  

# GPIO ayarları

GPIO.setup(PWM_PIN, GPIO.OUT)
pwm = GPIO.PWM(PWM_PIN, 100) # old freq = 50
 # PWM nesnesi oluşturma, frekans=50
    
def open_servo():
    # Motoru 90 derece pozisyonda başlatma
    global pwm
    pwm.start(5)  #old: 7.5 1.5ms duty cycle
    time.sleep(3)
    pwm.ChangeDutyCycle(0)

def close_servo():
    global pwm
    # Motoru -90 derece pozisyonda hareket ettirme
    pwm.start(15)  #old: 12.5  2.5ms duty cycle
    time.sleep(3)
    pwm.ChangeDutyCycle(0)

# Test
#while True:
#    open_servo()
 #   time.sleep(2)
 #   close_servo()
  #  time.sleep(1)
# Motoru durdurma
#pwm.stop()

# GPIO ayarlarını temizleme
#GPIO.cleanup()