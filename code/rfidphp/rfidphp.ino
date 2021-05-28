#include <SPI.h>
#include<MFRC522.h>


#define SS_PIN 10 
#define RST_PIN 9



MFRC522 rfid(SS_PIN,RST_PIN);

int j=0;

void setup() {
  Serial.begin(9600);
  SPI.begin();
  rfid.PCD_Init();  
}
//------------------------------------------------------------------------------


/* Infinite Loop */
void loop()
{
  
  if(!rfid.PICC_IsNewCardPresent())
  return;
  if(!rfid.PICC_ReadCardSerial())
  return;
  
   for(int s=0;s<4;s++)
        {
          Serial.print(rfid.uid.uidByte[s]);
        }
        
      Serial.print(" ");
      Sending_To_db();
      Serial.println("Card detected");
  
     // Halt PICC
  rfid.PICC_HaltA();

  // Stop encryption on PCD
  rfid.PCD_StopCrypto1();
 }

 void Sending_To_db()  
 {
    j++;
      Serial.print(j);
      Serial.print(" ");
   
