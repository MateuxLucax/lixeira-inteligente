/* Bibliotecas necessárias */
#include <ESP8266WiFi.h>
#include <WiFiClientSecure.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

/* Configurações para conectar a rede Wi-Fi */
const char *ssid = "IF_CATARINENSE";  // Nome da rede
const char *password = "ifcatarinense";    // Senha da rede

/* Configurações para a requisição */
const char *host = "lixeirainteligente.com";                                                      // Host para realizar as requisições
const int httpsPort = 443;                                                                        // Porta para requisições HTTPS
const char fingerprint[] PROGMEM = "C3 8F B2 AD 93 BE 69 AE DD 95 20 81 F9 AD 04 CC 71 45 2C BB"; // SHA1 fingerprint do host
 
void setup() {
  pinMode(D1,INPUT);                      // Define o pino 1 como entrada
  delay(1000);
  WiFi.mode(WIFI_OFF);                    // Previne reconexões
  delay(1000);
  WiFi.mode(WIFI_STA);                    // Esconde o ESP de visualização do hostspot Wi-Fi
  WiFi.begin(ssid, password);             // Conecta ao roteador Wi-Fi
  while (WiFi.status() != WL_CONNECTED) { // Aguarda conexão
    delay(500);
  }
}

void loop() {

  if (digitalRead(D1) == HIGH) {
    WiFiClientSecure httpsClient;            // Declara como objeto da classe WiFiClient
    httpsClient.setFingerprint(fingerprint); // Define o fingerprint da requisição
    httpsClient.setTimeout(15000);
    /* Tentativas de reconexão caso a primeira falhe */
    int r = 0;
    while ((!httpsClient.connect(host, httpsPort)) && (r < 30)) {
      delay(100);
      r++;
    }
    String Link = "/adicionar-contador/dados.php?adicionar=true"; // Dados para serem enviados pela requisição GET
    httpsClient.print(String("GET ") + Link + " HTTPx/1.1\r\n" +
                      "Host: " + host + "\r\n" +
                      "Connection: close\r\n\r\n");
    while (httpsClient.connected()) {
      String line = httpsClient.readStringUntil('\n');
      if (line == "\r") {
        break;
      }
    }
    delay(4500);
  } else {
    delay(100);    
  }

}
