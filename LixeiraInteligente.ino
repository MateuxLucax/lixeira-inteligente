// Bibliotecas necessárias para o funcionamento do código
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include <Ultrasonic.h>
#include <Servo.h>

// Definição dos pinos de entrada
#define pinoPapel 8
#define pinoVidro 9
#define pinoMetal 10
#define pinoSensorDistanciaTrigger 4
#define pinoSensorDistanciaEcho 5
#define pinoServoA 11
#define pinoServoB 12
#define pinoServoC 13

// Inicializa o display no endereco 0x27
LiquidCrystal_I2C lcd(0x27,2,1,0,4,5,6,7,3, POSITIVE);

// Inicializa o sensor de distância
Ultrasonic ultrasonic(pinoSensorDistanciaTrigger, pinoSensorDistanciaEcho);

// Definição das variáveis de leitura do sensorVidro
int leituraPapel = 0;
int leituraVidro = 0;
int leituraMetal = 0;

// Definição das variáveis de leitura do sensorVidro
int leituraPapelEstado = LOW;
int leituraVidroEstado = LOW;
int leituraMetalEstado = LOW;

// Definição dos servos
Servo s1;
Servo s2;
Servo s3;

void setup() {
  lcd.begin (20,4);  // Inicializa o monitor do display
  processando();
  // Define os modos dos pinoSensorDistanciaEcho
  pinMode(pinoPapel, INPUT);
  pinMode(pinoMetal, INPUT);
  pinMode(pinoVidro, INPUT);
  // Serial
  Serial.begin(9600); // abre a porta serial a 9600 bp
  // Inicialização dos servos
  s1.attach(pinoServoA);
  s2.attach(pinoServoB);
  s3.attach(pinoServoC);
}

void loop() {
  leituraPapel = digitalRead(pinoPapel);
  leituraVidro = digitalRead(pinoVidro);
  leituraMetal = digitalRead(pinoMetal);

  if (leituraPapel == HIGH) {
    leituraPapelEstado = HIGH;
  }

  if (leituraVidro == HIGH) {
    leituraVidroEstado = HIGH;
  }

  if (leituraMetal == HIGH) {
    leituraMetalEstado = HIGH;
    Serial.println("era pra funcionar");
  }

  String textoPapel = "Estado papel: ";
  String monitoPapel = textoPapel + leituraPapelEstado;
  Serial.println(monitoPapel);

  String textoVidro = "Estado vidro: ";
  String monitorVidro = textoVidro + leituraVidroEstado;
  Serial.println(monitorVidro);

  String textoMetal = "Estado metal: ";
  String monitorMetal = textoMetal + leituraMetalEstado;
  Serial.println(monitorMetal);

  long microsec = ultrasonic.timing();

  if (ultrasonic.convert(microsec, Ultrasonic::CM) < 12) {
    if (leituraMetalEstado == HIGH) {
        executarMetal();
        delay(1000);
        reinicializarValoresEstado();
        delay(5000);
        lcd.clear();
        delay(1000);
        processando();
    } else if (leituraPapelEstado == HIGH && leituraVidroEstado == HIGH && leituraMetalEstado == LOW) {
        executarVidro();
        delay(1000);
        reinicializarValoresEstado();
        delay(5000);
        lcd.clear();
        delay(1000);
        processando();
    } else if (leituraPapelEstado == HIGH && leituraVidroEstado == LOW && leituraMetalEstado == LOW) {
        executarPapel();
        delay(1000);
        reinicializarValoresEstado();
        delay(5000);
        lcd.clear();
        delay(1000);
        processando();
    } else {
      executarPlastico();
      delay(1000);
      reinicializarValoresEstado();
      delay(5000);
      lcd.clear();
      delay(1000);
      processando();
    }
  }

}

// Funções que executam conforme o material detectado
void executarPapel() {
  lcd.clear();
  lcd.setCursor(0,1);
  lcd.print(" MATERIAL DETECTADO");
  lcd.setCursor(0,2);
  lcd.print("       PAPEL");
  Servo1(true);
}

void executarVidro() {
  lcd.clear();
  lcd.setCursor(0,1);
  lcd.print(" MATERIAL DETECTADO");
  lcd.setCursor(0,2);
  lcd.print("       VIDRO");
  Servo2(true);
}

void executarMetal() {
  lcd.clear();
  lcd.setCursor(0,1);
  lcd.print(" MATERIAL DETECTADO");
  lcd.setCursor(0,2);
  lcd.print("       METAL");
  Servo3(true);
}

void executarPlastico() {
  lcd.clear();
  lcd.setCursor(0,1);
  lcd.print(" MATERIAL DETECTADO");
  lcd.setCursor(0,2);
  lcd.print("      PLASTICO");
  Servo4(true);
}

void reinicializarValoresEstado() {
  leituraPapelEstado = LOW;
  leituraVidroEstado = LOW;
  leituraMetalEstado = LOW;
}

// Funções dos servos
void Servo1(bool controle){
  if(controle) {
    s1.write(22);
    Servo2(false);
    Servo3(false);
  }
  if(!controle){
    s1.write(5);
  }
}

void Servo2(bool controle){
  if(controle) {
    s2.write(22);
    Servo1(false);
    Servo3(false);
  }
  if(!controle){
    s2.write(5);
  }
}

void Servo3(bool controle){
  if(controle) {
    s3.write(22);
    Servo2(false);
    Servo1(false);
  }
  if(!controle){
    s3.write(5);
  }
}

void Servo4(bool controle){
  if(controle) {
    Servo2(false);
    Servo1(false);
    Servo3(false);
  }
}

// Funções Úteis

// Função que mostra quando pode ser inserido outro resíduo
void processando() {
  lcd.setCursor(0,1);
  lcd.print("JOGUE O LIXO AQUI :)");
}
