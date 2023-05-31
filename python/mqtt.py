# python 3.6

import random
import time
import ampul as Lamba
import s90 as S90
import s90_branda as Branda
import RPi.GPIO as GPIO
import rain_sensor as Rain

import numpad_exp as password
import fan as Fan
import dht11_sensor as DHT11
import LDR_sensor as LDR
from paho.mqtt import client as mqtt_client

broker = 'broker.hivemq.com'
port = 1883

pb_topic1 = "akillig1/durum/sicaklik"
pb_topic2 = "akillig1/durum/girilensfr" 
pb_topic3 = "akillig1/durum/lamba"
pb_topic4 = "akillig1/durum/branda"
pb_topic5 = "akillig1/durum/fan"

sb_topic1 = "akillig1/fan"
sb_topic2 = "akillig1/branda"
sb_topic3 = "akillig1/garaj"
sb_topic4 = "akillig1/lamba"
sb_topic5 = "akillig1/kapisfrdgstr"

# generate client ID with pub prefix randomly
client_id = f'python-mqtt-{random.randint(0, 1000)}'
# username = 'emqx'
# password = 'public'

fan_durum = "0"
kapi_sifre = "1234"
def connect_mqtt():
    def on_connect(client, userdata, flags, rc):
        if rc == 0:
            print("Connected to MQTT Broker!")
        else:
            print("Failed to connect, return code %d\n", rc)

    client = mqtt_client.Client(client_id)
    # client.username_pw_set(username, password)
    client.on_connect = on_connect
    client.connect(broker, port)
    return client


def publish(client):
    msg_count = 25
    sure = 0
    sifre = []
    global kapi_sifre
    while True:
        sifre = password.checkPassword()
          
        #print(sifre)
        time.sleep(0.1)
        sure += 1
        if(len(sifre) == 4 ):
            client.publish(pb_topic2,"".join(sifre))
            if("".join(sifre) == kapi_sifre):
                S90.open_servo()
            
        if (sure == 10):

            client.publish(pb_topic1, DHT11.showTemperature())
            client.publish(pb_topic3, LDR.checkLight())
            client.publish(pb_topic4, Rain.getRainSensor())
            client.publish(pb_topic5, fan_durum)
            sure = 0

        
def subscribe(client: mqtt_client):
    def on_message(client, userdata, msg):
        global kapi_sifre
        global fan_durum
        print(f"Received `{msg.payload.decode()}` from `{msg.topic}` topic")
        if(msg.topic == sb_topic1):
            if(msg.payload.decode() == "1"):
                Fan.fanLow()
                fan_durum = "1"
            elif(msg.payload.decode() == "2"):
                Fan.fanNormal()
                fan_durum = "2"
            elif(msg.payload.decode() == "3"):
                Fan.fanHigh()
                fan_durum = "3"
            else:
                Fan.fanClose()
                fan_durum = "0"
        if(msg.topic == sb_topic2):
            if(msg.payload.decode() == "1"):
                Branda.branda_open_servo()
            else:
                Branda.branda_close_servo()

        if(msg.topic == sb_topic3):
            if(msg.payload.decode() == "1"):
                S90.open_servo() 
                
            else:
                S90.close_servo()

        if(msg.topic == sb_topic4):
            if(msg.payload.decode() == "0"):
                Lamba.off()
            if(msg.payload.decode() == "1"):
                Lamba.low()
            if(msg.payload.decode() == "2"):
                Lamba.medium()
            if(msg.payload.decode() == "3"):
                Lamba.high()
        if(msg.topic == sb_topic5):
            if(msg.payload.decode().split(":")[0]== kapi_sifre):
               kapi_sifre = msg.payload.decode().split(":")[1]


    client.subscribe(sb_topic1)
    client.subscribe(sb_topic2)
    client.subscribe(sb_topic3)
    client.subscribe(sb_topic4)
    client.subscribe(sb_topic5)

    #Şifreler 1234:4567 şeklinde geliyor onları çekerken split_with(:) şeklinde benzeri bir fonksiyonla parselicem
    client.on_message = on_message

def run():
    client = connect_mqtt()
    client.loop_start()
    subscribe(client)
    publish(client)
    


if __name__ == '__main__':
    run()


    


