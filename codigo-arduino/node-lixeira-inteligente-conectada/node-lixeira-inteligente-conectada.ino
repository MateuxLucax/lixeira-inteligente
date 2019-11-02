/* Bibliotecas necessárias */
#include <ESP8266WiFi.h>
#include <WiFiClientSecure.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>

/* Configurações para conectar a rede Wi-Fi */
const char *ssid = "Familie Brandt";  // Nome da rede
const char *password = "duarskit";    // Senha da rede

/* Configurações para a requisição */
const char *host = "lixeirainteligente.com";                                                      // Host para realizar as requisições
const int httpsPort = 443;                                                                        // Porta para requisições HTTPS
const char fingerprint[] PROGMEM = "4B C6 C3 4C 13 85 B7 D2 88 8F 4A 7A 20 22 1A 23 C4 99 B5 0C"; // SHA1 fingerprint do host
 
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
    httpsClient.print(String("GET ") + Link + " HTTP/1.1\r\n" +
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