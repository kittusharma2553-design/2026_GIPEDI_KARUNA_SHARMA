int pins[] = {2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13}; // Added [] here

void setup() {
  for (int i = 0; i < 12; i++) {
    pinMode(pins[i], OUTPUT); // Fixed capital M and capitalized OUTPUT
  }
}

void loop() {
  for (int i = 0; i < 12; i++) {
    digitalWrite(pins[i], HIGH); // Fixed capital W
  }
  delay(1000); // Optional: adds a pause while they are ON
  
  for (int i = 0; i < 12; i++) {
    digitalWrite(pins[i], LOW); // Fixed capital W and capitalized LOW
  }
  delay(1000); // Optional: adds a pause while they are OFF
}
