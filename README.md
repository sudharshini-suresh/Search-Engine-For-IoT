# Seacrh engine for IoT:  .[Check this out](https://iotdatadcu.com/iotsearch/index.php)
## This project aims at designing and building a search engine that is dedicated to IoT devices. 
### Quick Start
To begin with this project, following requirements must be available in order to set-up the IoT device .
* Sensors (preferabbly [DHT22](https://www.waveshare.com/wiki/DHT22_Temperature-Humidity_Sensor) or [MQ2](https://wiki.seeedstudio.com/Grove-Gas_Sensor-MQ2/) sensors)
* [Esp32 WiFi and Bluetooth MCU](https://en.wikipedia.org/wiki/ESP32)
* [Arduino IDE](https://randomnerdtutorials.com/installing-the-esp32-board-in-arduino-ide-windows-instructions/)
* User Interface (https://iotdatadcu.com/iotsearch/index.php)

### Languages Used
* C
* javascript
* php
* sql

###  Set-UP
The deatils to connect the sensors to ESP32 can be found in [Circuit Connection](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/connection.pdf)

### Implementation
Once the connections are made and arduino IDE is set-up
node1tempiot.ino is executed from the following folders on the Arduino IDE.
##### _Note: the ssid and password is based on the local WiFi username and password_
* [Device 1](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/nodes/device1/node1tempiot/node1tempiot.ino)
* [Device 2](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/nodes/device2/node1tempiot/node1tempiot.ino)
* [Device 3](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/nodes/device3/node1tempiot/node1tempiot.ino)
* [Device 4](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/nodes/device4/node1tempiot/node1tempiot.ino)
##### When the program is complied the entry will be uploaded to the server
#### At server end
[iot_data.php](https://github.com/sudharshini-suresh/Search-Engine-For-IoT/blob/44120c0a770143a58faeb597308112301018c1ca/IOTdevice/iot_data.php) collects the relevant indexing terms (location,type) of the sensing devices.
idex.php invokes search mechanism once the submit button is pressed. 
###### The search.php file consists of conditions for the index values.
if the matching keyword is obtained in the database, it collectes the live data of the sensors.

##### Finally a viewgraph.php file can be used to plot a graph to display recent updates in the sensor data 
