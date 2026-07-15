
<div align="center">
<div align="center" style="white-space: nowrap; font-size:32px; font-weight:bold;">
INDIAN INSTITUTE OF TECHNOLOGY DELHI
</div>

<div align="center" style="font-size:18px; margin-top:0.5px;">
New Delhi - 110016
</div>

<br>

<img src="iitd_logo.png" width="150">

<br><br>
<div align="center" style="font-size:26px;font-weight:bold; margin-top:0.5px;">
GIPEDI INTERNSHIP REPORT
</div>


 Submitted in fulfillment of the requirements for the Internship Program

<br><br><br><br><br>

<table>
<tr>
<td><b>Name:</b></td>
<td>Karuna Sharma</td>
</tr>

<tr>
<td><b>Internship Period:</b></td>
<td>15.05.2026 – 15.07.2026</td>
</tr>

<tr>
<td><b>Organization:</b></td>
<td>
Department of Electrical Engineering<br>
Indian Institute of Technology Delhi
</td>
</tr>

<tr>
<td><b>Supervisor:</b></td>
<td>Prof. Subrat Kar</td>
</tr>

<tr>
<td><b>Mentor:</b></td>
<td>Mr. Utkarsh Roy</td>
</tr>
</table>

<br><br><br>
July 2026

</div>

<div  style="break-after: page;"></div>

## TABLE OF CONTENTS
| SNO | TABLE OF CONTENT | PAGE NO |
|:---:|------------------|:-------:|
| 1 | Interface with Arduino Uno[] | 2-3 |
| 2 | EXPERIMENT 1. Interfacing with seven segment LED using push button | 4-7 |
| 3 | EXPERIMENT 2. To interface an LED matrix Arduino Uno and different patterns, symbols and design on the matrix | 8-10 |
| 4 | Project on 555 timer IC | 11-12 |
| 5 | Inverting and Non-Inverting Amplifier using OpAmp | 13-14 |
| 6 | Typing Progress Report | 15-16 |
| 7 | HTML code with SQL database | 17-20 |
| 8 | BMS button User Interface | 20-25 |


<div  style="break-after: page;"></div>

# EXPERIMENT 0: ARDUINO BASIC PROGRAM 

## OBJECTIVE:

- Learn the components of an arduino uno circuit .
- Understand how to connect basic electronic components. 
- Write and upload a simple arduino program .
- Verify the circuit through simulation .

## TOOLS REQUIRED
1. Arduino UNO/esp32
2. LED
3. Arduino IDE

## CIRCUIT DIAGRAM


<figure>
  <img src="./experiment_0/experiment0.png" alt="Inverting Amplifier Circuit" width="2900">
  <figcaption>Figure 1: Inverting Amplifier Circuit</figcaption>
</figure>

<div style="break-after:page;"></div>


## ARDUINO CODE

```c
// The digital pin connected to the LED Anode
const int ledPin = 9; 

void setup() {
  // Initialize the digital pin as an output
  pinMode(ledPin, OUTPUT);
}

void loop() {
  digitalWrite(ledPin, HIGH);   // Turn the LED on
  delay(1000);                  // Wait for 1 second (1000 milliseconds)
  digitalWrite(ledPin, LOW);    // Turn the LED off
  delay(1000);                  // Wait for 1 second
}

```

## WORKING
The program turns the LED ON for one second and OFF for one second repeatedly creating a blinking effect.

## LEANING OUTCOME 
Learned how to connect an LED to arduino uno write a basic arduino program, and upload code to the board.
## PROBLEMS FACED AND SOLUTIONS
1.Problem:LED did not blink .
2.solution:checked wiring connections and upload the code again.
## FUTURE SCOPE
This experiment can be extended to control multiple LEDs and other electronic components.


<div style="break-after: page;"></div>


# EXPERIMENT 01 :
Interface with seven segment led to make a counter using a push button as input
## OBJECTIVE 
To interface a seven segment LED display with Arduino and use a push button to increment and display a counter value.
## TOOLS REQUIRED
1. Arduino UNO
2. Seven segment LED display (common cathode)
3. Push button 
4. Arduino IDE

## THEORY
A seven segment display consists of seven LEDS arranged in the shape of the number 8 by turning ON and OFF specific segments ,digits from 0 to 9 can be displayed. A push button is used as an input device. each time the button is pressed, the counter value increases by one and the updated number is displayed on the seven -segment display.

## CIRCUIT DIAGRAM

<figure>
  <img src="./experiment_1/experiment02.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure 1: Interfacing with seven segment led using push button
</figure>

<div style="break-after:page;"></div>

## ARDUINO CODE 
  ```cpp
  ## include <sevseg.h>
  void setup (){
    //put your setup code here ,to run once :
    byte numdigits =1;
    byte digit _pins []={};
    byte seg_pins []={9,8,7,6,5,4,3,2};
    byte dis_type =COMMON_CATHODE;
    bool res_on_segs=true;
    s_seg.begin (dis_type,numdigit _pins ,seg_pins ,res_on_segs );
    s_seg.setbrightness(90);
  }
  void loop(){
    //put your main code here to run repeated:
    for (int i=0 ;i<10; i++)
    {
        s_seg.setnumber(i);
        s_seg.refreshdisplay ();
        delay(1000);
    }
  ```
## PROCEDURE 
  1. Connect the seven -segment display to Arduino digital pins .
  2. Connect the push button to the input pin. 
  3. Upload the program to arduino uno .
  4. Press  the push button repeatedly.
  5. Observe the display number ( 1 to 9 )
## OBSERVATIONS 
  1. The display initially show 0. 
  2. Each button press increments the counter. 
  3. After reaching 9,the counter rests to 0.
## LEARNING OUTCOME 
 1. Learned how to interface a seven -segment display with arduino .
 2. Understood digital input using a push button .
3. Implemented a simple counter system.
## PROBLEM FACED AND SOlution
PROBLEM:
Incorrect digits displayed on the seven-segment display .
SOLUTION:
Checked segment pin connections and corrected the writing according to the circuit diagram .

<div style="break-after:page;"></div>

## FUTURE SCOPE 
1. Two digital and four- digit counters.
2. Visitor counting systems. 
3. Digital scoreboards. 
4. Electronic voting and counting applications .
  


<div  style="break-after: page;"></div>

# EXPERIMENT 03 
Display different patterns on led matrix

## OBJECTIVE 
To interface an LED matrix arduino and display different patterns ,symbols and designs on the matrix .
## TOOLS REQUIRED 
1. Arduino uno
2. 8x8 LED matrix 
 
## THEORY 
An LED matrix is a grid of LED arranged in rows and columns . by controlling the LEDs individually ,different patterns ,symbols, characters, and animations can be displayed the arduino sends data to the LED matrix to illuminate specific LEDs and create the desired pattern .
## CIRCUIT DIAGRAM 
 

<figure>
  <img src="./experiment_3/experiment3.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure To interfacing an led matrix arduino uno </figcaption>
</figure>

<div style="break-after:page;"></div>

 ## ARDUINO CODE 
 ```cpp
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
```

## PROCEDURE 
 1. Connect the LED matrix to the arduino . 
 2. Upload the program using arduino IDE. 
 3. Run the circuit . 
 4. Observe the displayed pattern on the LED matrix .
 5. Modify the pattern data to display  different shapes and symbols.
## OBSERVATIONS 
 1. The led matrix successfully displayed the programmed pattern .
 2. Different patterns can be created by changing the binary values in the code .
 3. The matrix can display symbols ,letters, numbers, and simple animations .
## LEARNING OUTCOME 
 1. Learned how to interface an LED matrix with arduino 
 2. Understood row and columns addressing in LED matrices.
 3. Gained experience in creating visual patterns using programming
## PROBLEMS
 Pattern was not displayed correctly .
 <div style ="break-after:page;"></div>
## SOLUTION 
 Checked wiring connections and verified the binary pattern data in the coe .

## FUTURE SCOPE 
 1. Display scrolling text . 
 2. Create animations and games 
 3. Design digital notice boards

 <div  style="break-after: page;"></div>

 

# PROJECT REPORT ON 555 TIME IC
## TITLE
Design and implementation of a 555 timer circuit
## AIM
TO study the working of the 555 timer IC and generate timing pulses using an astable multivibrator circuit 
## OBJECTIVE 
1. To understand the operation of the 555 time IC 
2. To generate a continuous square wave output 
3. To observe the charging and discharging of a capacitor
##  COMPONENTS REQUIRED 
1. 555timer IC
2. Resistor r1 (1k ohm)
3. Resistor R2(10k ohm)
capacitor c1 (10uf)
connecting wires

## CIRCUIT DIAGRAM 
 

<figure>
  <img src="./N555_exp/ne555_timer.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure 1: 555 timer IC </figcaption>
</figure>
<figure>
  <img src="./N555_exp/project on 555timer ic output.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure Output Waveform</figcaption>
</figure>
<div style="break-after:page;></div>


## PROCEDURE
 1. Place the timer IC on the breadboard 
 2. Connect the power supply.
 3. Turn on the power supply 
 4. Observe the blinking led.
## Observation 
 6. The LED blinking rate depends on the resister and capacitor value 
 7. The LED blinks continuously 
 8. A square wave is obtained at the output pin .
## APPLICATION 
 1. LED flashers 
 2. Pulse generators 
 clock circuit 
 alarm system 
## ADVANTAGES 
 1. Low 
 2. Easy to use 
 3. Reliable operation 
## CONCLUSION 
 The project demonstrated the working principle of the 555 time IC the circuit successfully generated periodic pulses and showed how resistor and capacitor values affect the timing characteristic of the output signal .
 
<div  style="break-after: page;"></div>




# INVERTING AND NON INVERTING AMPLIFIER USING OP AMP


## AIM
 To study and analyze the operation of inverting and non inverting amplifier using an operational amplifier (op amp)
## Objective 
 1. To understand the working principle of inverting and non inverting amplifiers 
 2. To calculate and verify the voltage gain of both amplifier configurations 
 3. To compare their characteristics and applications .
 
## CIRCUIT DIAGRAM INVERTING AND NON-INVERTING 
    


<figure>
  <img src="./Op-Amp/second_2.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure 1: Inverting and non inverting amplifier using op amp</figcaption>
</figure>

<figure>
  <img src="./Op-Amp/3diagram.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure 1: Inverting Amplifier Circuit</figcaption>
</figure>
<figure>
  <img src="./Op-Amp/inverting andnon inverting amplifier output.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure Output Waveform</figcaption>
</figure>

<div style="break-after:page;></div>


## APPLICATION

    INVERTING AMPLIFIER 
    1. Signal conditioning 
    2. Audio amplifiers 
    3. active filters 
    NON INVERTING AMPLIFIER 
    1. Voltage follows 
    2. Sensor signal amplification 
    3. Instrumentation circuits.
   
<div  style="break-after: page;"></div>
    
# TYPING REPORT

| sno | DATE | TYPING SCORE | 
| :--- | :--- | :--- | 
| 1. | 2/6/26| 24 |
| 2. | 3/6/26| 24| 
| 3. | 4/6/26 | 24| 
| 4.| 5/6/26|  22| 
| 5. | 6/6/26 | 23 | 
| 6.| 7/6/26| 26| 
| 7. | 8/6/26 | 30| 
| 8.| 9/6/26|  30| 
| 9. | 10/6/26 | 28| 
| 10 | 11/6/26 | 23 | 
| 11.| 12/6/26| 26| 
| 12. | 13/6/26| 27| 
| 13.| 14/6/26| 27 | 
| 14| 15/6/26 | 26| 
| 15| 16/6/26 | 26| 
| 16| 17/6/26| 25| 
| 17 | 18/6/26| 26| 
| 18.| 19/6/26| 25
19.| 20/6/26| 26| 
| 20. | 21/6/26| 27| 
| 21.| 22/6/26| 27 | 
| 22| 23/6/26 | 26| 
| 23| 24/6/26 | 26| 
| 24| 25/6/26| 25| 
| 25 | 26/6/26| 26| 
| 26.| 27/6/26| 25
| 27. | 28/6/26| 27| 
| 28.| 29/6/26| 27 | 
| 29| 30/6/26 | 30| 
| 30|1 /7/26 | 30| 
| 31| 2/7/26| 29| 
| 32 | 3/7/26| 30| 
| 33.| 4/7/26| 27
| 34| 5/6/26 | 29| 
| 35| 6/6/26 | 29| 
| 36| 7/6/26| 30| 
*Table 1: typing report.*

<figure>
  <img src="./Typing_progress/typing report graph.png" alt="Inverting Amplifier Circuit" width="500">
  <figcaption>Figure Typing progress graph</figcaption>
</figure>

<div  style="break-after: page;"></div>

# HTML CODE WITH SQL DATABASE 
## AIM 
To create a simple web page using HTML and store user information in an SQL database .
## OBJECTIVE 
1. To design a user input form using HTML.
2. To store the entered data in an SQL database .
3. To retrieve and display records from the database .
  ## SOFTWARE REQUIRED 
  1. Notepad 
  2. XAMPP SERVER
  3. MYsql Database
  4. SQL
## INTRODUCTION 
 HTML (hyper text markup language ) is used to create web pages and collect user input through forms .SQL (Structure Query language ) is used to create and manage database .since HTML cannot communicate directly with a database , a server- side language such as PHP is used as an intermediary between HTM Land SQL .this project demonstrates a simple student registration system where student can enter their details ,and the information is stored in a MYSQL database .
## Software and Hardware Requirement 
1. Operating system : windows 10/11
2. Text editor :NOTEPAD 
3. XAMPP server 
4. MySQL database 
## HARDWARE REQUIREMENTS 
1. Computer or laptop 
2. Minimum 4GB RAM 
3. 500 MB free disk space 

<div style="break-after:page;"></div>
   
## THEORY 
### HTML
 HTML is the standard markup language used for creating web pages . it provides various elements such as forms , text boxes, button , and labels for user interaction .
 ### SQL :
   SQL is a language used to manage relational database .It allows user to create databases, table , insert record ,update data , and retrieve information .
   ### PHP :
   PHP is a server -side scripting language that processes from data and interacts with the MYSQL database 
   ### FLOW OF THE SYSTEM 
1. User opens the registration page .
2. User enters details in the html form. 
3. The form sends data to the php file .
4. php establishes a connection with MYSQL . 
5. SQL query inserts the data into the database . 
6. A success message is displayed .

## SQL DATA

<figure>
  <img src="./Student_database/STUDENT_MARKS.png" alt="student _marks " width="500">
  <figcaption>Figure: student marks</figcaption>
</figure>


<div style="break-after:page;"></div>

## HTML CODE 
~~~html
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Welcome to My Website</h1>
    <p>This is a simple HTML page.</p>

    <button onclick="showMessage()">Click Me</button>

    <script>
        function showMessage() {
            alert("Hello! Welcome to my website.");
        }
    </script>

</body>
</html>
~~~
## ADVANTAGE 
1. EASY Data management 
2. Reduces paperwork 
3. Quick retrieval of records 
4. Improves accuracy and efficiency .
## APPLICATION 
1. School management systems
2. College record systems 
3. Employee management systems 
4. Library management systems
 
## OUTPUT 
The user enters the details in the HTML form,and the information is stored in the SQL database table .
## CONCLUSION 
The experiment sucessfully demonstrated how HTML can be used to collect user data and SQL can be used to store and manage that data in a database .

---
<div  style="break-after: page;"></div>

# BMS BUTTON USER INTERFACE
## AIM 
To study the operation of a push button and control an output device using a BMS (Basic Monitoring/Management System).
## OBJECTIVE
To understand the working of push buttons and their application in automation and control systems.
## THEORY
A Button Control is a graphical user interface (GUI) element used to execute a command when clicked by the user. It is one of the most commonly used controls in BMS applications. Button controls help users interact with software easily and efficiently.
## SOFTWARE REQUIRED
1. BMS Software
2. COMPUTER SYSTEM 
## PROCEDURE 
1. Open the BMS software
2. Create a new project.
3. Drag and drop a Button Control onto the form.
4. Change the button text to "Click Me".
5. Write code for the button click event.
6. Run the application.
7. Click the button and observe the result.

<div style="break-after:page;"></div>

## PROGRAM CODE 
~~~ html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMS Dashboard Sketch</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #ffffff;
            padding: 30px;
        }
        .bms-card {
            border: 2px solid #000000;
            padding: 15px;
            width: 320px;
            background: #ffffff;
            margin-bottom: 5px;
        }
        .bms-card h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
            letter-spacing: 1px;
        }
        .info-text {
            margin: 5px 0;
            font-size: 15px;
        }
        .top-btns {
            margin: 10px 0;
        }
        .small-btn {
            border: 1px solid #000;
            background: none;
            padding: 2px 8px;
            margin-right: 5px;
            font-size: 12px;
        }
        .btn-section {
            margin: 15px 0;
        }
        .row {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        .clickable-btn {
            border: 2px solid #000000;
            background: #ffffff;
            padding: 5px 15px;
            margin-right: 8px;
            cursor: pointer;
            font-weight: bold;
            font-family: inherit;
        }
        .clickable-btn:hover {
            background: #f0f0f0;
        }
        .arrow-label {
            font-size: 14px;
        }
        .arrow-down {
            font-size: 24px;
            margin-left: 20px;
            margin-top: -5px;
            margin-bottom: 5px;
        }
        .details-box {
            border: 2px solid #000000;
            padding: 12px;
            width: 200px;
            background: #ffffff;
            margin-left: 10px;
        }
        .details-box p {
            margin: 4px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="bms-card">
        <h3>BMS UI</h3>
        <div class="info-text">Total Volt: 0.8V</div>
        <div class="info-text">Connection: 2S (3.2V - 4.4V)</div>
        
        <div class="top-btns">
            <button class="small-btn">C1</button>
            <button class="small-btn">C2</button>
        </div>x

        <div class="info-text">No. of Cells: 2</div>

        <div class="btn-section">
            <div class="row">
                <button class="clickable-btn">C1</button>
                <button class="clickable-btn">C2</button>
                <span class="arrow-label">&rarr; clickable button</span>
            </div>
            <div class="row">
                <button class="clickable-btn">C3</button>
                <button class="clickable-btn">C4</button>
                <button class="clickable-btn">C5</button>
<button class="clickable-btn">C6</button>
            </div>
        </div>
    </div>

    <div class="arrow-down">&ShortDownArrow;</div>

    <div class="details-box">
        <p><b id="display-name">C1</b></p>
        <p>Battery Volt: <span id="display-volt">---</span></p>
        <p>Temp: <span id="display-temp">---</span></p>
        <p>Current State: <span id="display-state">---</span></p>
    </div>

    <script>
        const dataMap = {
            'C1': { volt: '3.6V', temp: '26°C', state: 'Normal' },
            'C2': { volt: '3.4V', temp: '28°C', state: 'Normal' },
            'C3': { volt: '1.1V', temp: '45°C', state: 'Hot' },
            'C4': { volt: '0.0V', temp: '24°C', state: 'Offline' },
            'C5': { volt: '3.5V', temp: '27°C', state: 'Normal' },
            'C6': { volt: '3.3V', temp: '26°C', state: 'Normal' }
        };



        document.querySelectorAll('.clickable-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const name = this.innerText.trim();
        const info = dataMap[name];

        if (info) {
            document.getElementById('display-name').innerText = name;
            document.getElementById('display-volt').innerText = info.volt;
            document.getElementById('display-temp').innerText = info.temp;
            document.getElementById('display-state').innerText = info.state;
        }
    });
});
</script>
~~~

<div style="break-after:page;"></div>

## SCREENSHORT



<figure>
  <img src="./BMS_Project/BMS_BUTTON2.png" alt="Inverting Amplifier Circuit" width="400">
  <figcaption>Figure bms button interface</figcaption>
</figure>

## OBSERVATION 
1. The button appeared on the form.
Clicking the button 
2. Displayed a message box.
3. The button executed the assigned command correctly.
Result
## RESULT
   The Button Control was created successfully and performed the desired action when clicked.
## CONCLUSION
   The Button Control is an important GUI component used to interact with applications. The experiment demonstrated how a button can be created and programmed to perform specific tasks
   ___
##  REFERENCES
    

1. **Arduino.** *Arduino Uno Rev3.* Arduino Documentation.  
   Available: <https://docs.arduino.cc/hardware/uno-rev3/>  
   **Accessed:** May 26, 2026.

2. **Arduino.** *Arduino IDE Documentation.*  
   Available: <https://docs.arduino.cc/software/ide/>  
   **Accessed:** May 28, 2026.

3. **Arduino.** *Seven Segment Display Tutorials and Examples.*  
   Available: <https://docs.arduino.cc/>  
   **Accessed:** June 01, 2026.

4. **Arduino.** *LED Matrix Display Documentation.*  
   Available: <https://docs.arduino.cc/>  
   **Accessed:** June 05, 2026.

5. **Texas Instruments.** *NE555 Precision Timer Datasheet.*  
   Available: <https://www.ti.com/product/NE555>  
   **Accessed:** June 20, 2026.

6. **Texas Instruments.** *LM741 Operational Amplifier Datasheet.*  
   Available: <https://www.ti.com/product/LM741>  
   **Accessed:** June 28, 2026.

7. **Analog Devices.** *Operational Amplifier Technical Articles.*  
   Available: <https://www.analog.com/en/resources/technical-articles.html>  
   **Accessed:** June 30, 2026.

8. **Oracle Corporation.** *MySQL Documentation.*  
   Available: <https://dev.mysql.com/doc/>  
   **Accessed:** July 03, 2026.

9. **GeeksforGeeks.** *PHP MySQL CRUD Operations.*  
   Available: <https://www.geeksforgeeks.org/php-mysql-crud-operations/>  
   **Accessed:** July 05, 2026.

10. **GeeksforGeeks.** *HTML Button Tag.*  
    Available: <https://www.geeksforgeeks.org/html-button-tag/>  
    **Accessed:** July 08, 2026.

11. **MDN Web Docs.** *JavaScript Guide.*  
    Available: <https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide>  
    **Accessed:** July 09, 2026.

12. **GitHub Repository.** *Source Code Repository for Internship Projects.*  
    Available: <https://github.com/kittusharma2553-design/2026_GIPEDI_KARUNA_SHARMA.git>  
    **Accessed:** July 10, 2026.