import time
import RPi.GPIO as GPIO
from numpad import keypad
 
GPIO.setwarnings(False)
pressed = False
seq = []
kp = keypad(columnCount = 3)
def checkPassword():
    # Initialize
    global seq
    global kp
    global pressed
    cacheSeq = []
    # waiting for a keypress
    digit = kp.getKey()
    if (digit == None):
        pressed = False
        return []
    if(pressed == True):
        return seq
    pressed = True
    # Print result
    #print (digit)
    #time.sleep(0.5)
 
    ###### 4 Digit wait ######
    
    
    seq.append(str(digit))
    #time.sleep(0.4)
 
    # Check digit code
    if (len(seq) == 4):
        cacheSeq = seq
        seq = []
        return cacheSeq
    else:
        return []
    #if seq == [1, 2, 3, '#']:
    #    print ("Code accepted")