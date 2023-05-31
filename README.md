# Web_Based_Smart_Garage
## Project Description

This project is an IoT system built on a Raspberry Pi 4B to manage a garage. The following hardware components are utilized:

- **L9110 Fan Module**: Used for active cooling in the system.
- **TowerPro SG90 Servo Motor**: Utilized for physical actions like opening/closing doors.
- **DHT11 Temperature and Humidity Sensor**: Monitors ambient conditions in the garage.
- **4X3 Numpad**: Allows physical input to the system.
- **Light-Dependent Resistor (LDR)**: Measures light intensity.
- **Rain Sensor**: Detects rain or moisture levels.
- **12V Bulb**: Provides adjustable lighting in the garage.
- **L298N Motor Driver Module Board**: Used for controlling the speed and direction of motors.

The software stack used includes:

- **Python**: The programming language used for scripting on the Raspberry Pi.
- **HTML/CSS/JavaScript**: Used for building the user interface on the website.
- **PHP**: Utilized on the server side for the website.
- **MQTT Protocol**: A lightweight messaging protocol for small sensors and mobile devices.
- **TCP/FTP Protocols**: Used for reliable data transfer between devices.
- **Apache Web Server**: An open-source HTTP server to host the website.
- **cPanel**: A web-based hosting control panel.
- **MySQL**: A relational database management system for storing and retrieving data.

The system maintains a constant flow of data using the MQTT protocol, with a broker set up to facilitate this exchange. As long as the Raspberry Pi is powered and connected to the internet, it sends data, which is displayed on the website. Additionally, the web interface features buttons to trigger specific functions in the Python code, such as opening or closing the garage door, or setting the 12V bulb to one of three brightness levels. This project enables efficient and automated garage management.

## Project Images

<h2 align="center">Web Interface - Normal State</h2>
<p align="center">
  <img src="https://github.com/akinemreyazici/Web_Based_Smart_Garage/assets/116732291/20c71278-1d14-4dc8-9ffc-344cc27d0aeb" width="500">
</p>

In the Normal State:
- As seen on the interface, starting from the far left, we control our L9110 fan by sending data to the relevant topic through buttons, enabling our Python code to receive data from this topic. Thus, when the button is pressed, the fan stops and operates at slow, medium, and fast speeds.
- We display the DHT11 sensor value, which we receive in real-time from our Python code.
- We control our S90 servo motor (used for the tarp) by sending data to the relevant topic, which is then received by the Python code.
- We receive data in real time from our rain sensor in the Python code and display whether it's raining or not on the interface. Depending on the state, our web interface changes.
- We control our 12V bulb by sending data to the relevant topic, allowing us to turn it off and burn it at low, medium, and high levels. This required an additional 12V power supply.
- With the help of the LDR sensor, we measure the light condition of the environment, thus controlling whether the bulb was last left on or off, a feature thought out for energy saving.
- We are able to open and close our S90 servo motor (used for the garage door), which works in harmony with the security code on the right. You can also open and close it by pressing the buttons from here. However, if the current password is entered on the numpad outside the mockup, the door will automatically open if it's closed. Additionally, you can set a new password by entering the old password on the website, thus changing your door password.

<h2 align="center">Web Interface - Rainy State</h2>
<p align="center">
  <img src="https://github.com/akinemreyazici/Web_Based_Smart_Garage/assets/116732291/de67bd61-2095-4496-948a-0b5303f2eae1" width="500">
</p>

In the Rainy State:
- If the data received from our rain sensor indicates rain, our interface background changes, and a rainy image appears. This is designed to draw the user's attention.

<h2 align="center">Hardware Mockup - View 1</h2>
<p align="center">
  <img src="https://github.com/akinemreyazici/Web_Based_Smart_Garage/assets/116732291/7ec5c8ed-a021-49ad-9739-3129b2a99b29" width="500">
</p>

<h2 align="center">Hardware Mockup - View 2</h2>
<p align="center">
  <img src="https://github.com/akinemreyazici/Web_Based_Smart_Garage/assets/116732291/c7dfed81-88f9-45c3-872e-aa51fb2c0971" width="500">
</p>

<h2 align="center">Hardware Mockup Inside - View 3</h2>
<p align="center">
  <img src="https://github.com/akinemreyazici/Web_Based_Smart_Garage/assets/116732291/b0e5aea7-8fe9-423a-b3af-6326713af034" width="500">
</p>








