#include<SevSeg.h>
SevSeg s_seg;

void setup(){
  //put your setup code here, to run once:
  byte numDigits=1;
  byte digit_pins[]={};
  byte seg_pins[] ={9,8,7,6,5,4,3,2};
  byte dis_type=COMMON_CATHODE;
  bool res_on_segs=true;
  s_seg.begin(dis_type, numDigits,digit_pins,seg_pins,res_on_segs);
  s_seg.setBrightness(90);

}

void loop(){
  //put your main code here,to run repeatedly:
  for(int i=0 ; i<10 ; i++)
  {
    s_seg.setNumber(i);
    s_seg.refreshDisplay();
    delay(1000);

  }

}