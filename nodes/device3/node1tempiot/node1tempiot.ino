#include <WiFi.h>
#include <HTTPClient.h>
#include "SoftwareSerial.h"
#include <ArduinoJson.h>
#include "DHT.h"

SoftwareSerial swSer1;
#ifndef D5
#if defined(ESP8266)
#define D5 (14)
#define D6 (12)
#elif defined(ESP32)
#define DHTPIN 4 
#define D5 (18)
#define D6 (19)
#define D7 (23)
#define D8 (5)
#endif
#endif
#define DHTTYPE DHT22
DHT dht(DHTPIN, DHTTYPE);
const int gassensor= 36;
const int onswitch = 5;
const int offswitch = 23;

// enter your WiFi usernamne and password
const char* ssid = "**********";
const char* password = "**********";
String var1="T",var2="Dublin",var3="0",var4="DCU main buliding",var5="0";
String recvalue;
int str_count;
 String s1;

const char* serverName = "https://iotdatadcu.com/IOTdevice1/iot1_data.php?pass=sudharshini";

const char* serverName1 = "https://iotdatadcu.com/IOTdevice1/iot1_data.php?pass=sudharshini";

// THE DEFAULT TIMER IS SET TO 10 SECONDS FOR TESTING PURPOSES
// For a final application, check the API call limits per hour/minute to avoid getting blocked/banned
unsigned long lastTime = 0;
// Set timer to 10 minutes (600000)
//unsigned long timerDelay = 600000;
// Timer set to 10 seconds (10000)
unsigned long timerDelay = 10000;
unsigned int gas_value;

void setup() {
  Serial.begin(115200);
  pinMode(gassensor,INPUT);
swSer1.begin(9600, SWSERIAL_8N1, D7, D8);
  dht.begin();
  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());
 
  Serial.println("IOT device1");

  // Random seed is a number used to initialize a pseudorandom number generator
 // randomSeed(analogRead(33));
}
void loop() {
  
  

    float h = dht.readHumidity();
  // Read temperature as Celsius (the default)
  float t = dht.readTemperature();
  // Read temperature as Fahrenheit (isFahrenheit = true)
  float f = dht.readTemperature(true);

  // Check if any reads failed and exit early (to try again).
  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println(F("Failed to read from DHT sensor!"));
    return;
  }
  Serial.print(F("Humidity: "));
  Serial.print(h);
  Serial.print(F("%  Temperature: "));
  Serial.print(t);
  var1=t;

  Serial.print(F("°C "));
  Serial.println(f);
  delay(500);

       
  //Send an HTTP POST request every 10 seconds
  if ((millis() - lastTime) > timerDelay) {
    //Check WiFi connection status
    if(WiFi.status()== WL_CONNECTED){
      HTTPClient http;
      
      // Your Domain name with URL path or IP address with path
      http.begin(serverName);
      
      // Specify content-type header
      http.addHeader("Content-Type", "application/x-www-form-urlencoded");
      // Data to send with HTTP POST
      String httpRequestData = "temperature=" + var1 + "&location=" + var2; //+ "&gas=" + var3+ "&location=" + var4;//+ "&e=" + var5;           
      // Send HTTP POST request
      int httpResponseCode = http.POST(httpRequestData);
      
      /*
      // If you need an HTTP request with a content type: application/json, use the following:
      http.addHeader("Content-Type", "application/json");
      // JSON data to send with HTTP POST
      String httpRequestData = "{\"value1\":\"" + String(random(40)) + "\",\"value2\":\"" + String(random(40)) + "\",\"value3\":\"" + String(random(40)) + "\"}";
      // Send HTTP POST request
      int httpResponseCode = http.POST(httpRequestData);
      */
     
      Serial.print("HTTP Response code: ");
      Serial.println(httpResponseCode);
      if (httpResponseCode==200) {
        Serial.print("Upload Success ");
            }
            else
            {
            Serial.print("Try Again ");
            }
        
      // Free resources
      http.end();
    }
 delay(1000);
 
 
 HTTPClient http;
      
      // Your Domain name with URL path or IP address with path
      http.begin(serverName1);
      
     int httpResponseCode = http.GET();
     if (httpResponseCode>0) {
        Serial.println("get data ");
        Serial.println(httpResponseCode);
        String payload = http.getString();
        Serial.println(payload);
 //       int val= payload.toInt();
//int str_len = payload.length() + 1; 
//char char_array[str_len];
//Serial.println(str_len);
//payload.toCharArray(char_array, str_len);
//Serial.println(payload);
DynamicJsonDocument doc(1024);
deserializeJson(doc, payload);
JsonObject obj = doc.as<JsonObject>();
String temp = obj["Temperature"];
String gas = obj["Humidity"];
Serial.println(temp);
Serial.println(gas);


//char json[43]={payload};
//strcpy(json,payload);

//char json[str_len]=payload.toCharArray(char_array, str_len);
//
//       
////String json=payload;
//DynamicJsonDocument doc(1024);
//deserializeJson(doc, json);
// 
//int temp=doc["a"];
//int gas=doc["b"];
//Serial.println(temp);
//Serial.println(gas);

//        if(val==1)
//        {
//          digitalWrite(motor,HIGH);
//        }
//         if(val==0)
//        {
//          digitalWrite(motor,LOW);
//        }
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
      }
       http.end();
//    else{
//      Serial.println("WiFi Disconnected");
//    }
    lastTime = millis();
  //  var3="safe";
  }
}
