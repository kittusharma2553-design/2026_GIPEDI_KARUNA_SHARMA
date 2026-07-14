// 8 Row Pins (Connected to Anodes / Positive pins of the matrix)
int rowPins[] = {2, 3, 4, 5, 6, 7, 8, 9};                 

// 8 Column Pins (Connected to Cathodes / Negative pins of the matrix)
// Using A0-A3 as digital pins to get the required 16 pins total
int colPins[] = {10, 11, 12, 13, A0, A1, A2, A3}; 

// 8x8 Smile Pattern (1 = LED ON, 0 = LED OFF)
const byte smile[8][8] = {
  {0, 0, 1, 1, 1, 1, 0, 0},
  {0, 1, 0, 0, 0, 0, 1, 0},
  {1, 0, 1, 0, 0, 1, 0, 1},
  {1, 0, 0, 0, 0, 0, 0, 1},
  {1, 0, 1, 0, 0, 1, 0, 1},
  {1, 0, 0, 1, 1, 0, 0, 1},
  {0, 1, 0, 0, 0, 0, 1, 0},
  {0, 0, 1, 1, 1, 1, 0, 0}
};

// 8x8 Heart Pattern (1 = LED ON, 0 = LED OFF)
const byte heart[8][8] = {
  {0, 0, 0, 0, 0, 0, 0, 0},
  {0, 1, 1, 0, 0, 1, 1, 0},
  {1, 1, 1, 1, 1, 1, 1, 1},
  {1, 1, 1, 1, 1, 1, 1, 1},
  {0, 1, 1, 1, 1, 1, 1, 0},
  {0, 0, 1, 1, 1, 1, 0, 0},
  {0, 0, 0, 1, 1, 0, 0, 0},
  {0, 0, 0, 0, 0, 0, 0, 0}
};

void setup() {
  // Initialize all 8 row pins as OUTPUT and turn them LOW
  for (int i = 0; i < 8; i++) {
    pinMode(rowPins[i], OUTPUT);
    digitalWrite(rowPins[i], LOW);
  }
  
  // Initialize all 8 column pins as OUTPUT and turn them HIGH
  for (int i = 0; i < 8; i++) {
    pinMode(colPins[i], OUTPUT);
    digitalWrite(colPins[i], HIGH);
  }
}

void loop() {
  // Display Smile pattern for ~1 second (repeating the rapid refresh 150 times)
  for (int t = 0; t < 150; t++) {
    drawPattern(smile);
  }
  
  // Display Heart pattern for ~1 second
  for (int t = 0; t < 150; t++) {
    drawPattern(heart);
  }
}

// Multiplexing engine: Lights up the matrix row-by-row incredibly fast
void drawPattern(const byte pattern[8][8]) {
  for (int r = 0; r < 8; r++) {
    // 1. Activate the current row
    digitalWrite(rowPins[r], HIGH); 
    
    // 2. Set the columns for this row
    for (int c = 0; c < 8; c++) {
      if (pattern[r][c] == 1) {
        digitalWrite(colPins[c], LOW);  // Ground the column to turn LED ON
      } else {
        digitalWrite(colPins[c], HIGH); // Disconnect ground to keep LED OFF
      }
    }
    
    // 3. Small delay to let the LEDs glow noticeably
    delayMicroseconds(600); 
    
    // 4. Reset columns and turn row OFF before moving to the next row (prevents ghosting)
    digitalWrite(rowPins[r], LOW);
    for (int c = 0; c < 8; c++) {
      digitalWrite(colPins[c], HIGH);
    }
  }
}
