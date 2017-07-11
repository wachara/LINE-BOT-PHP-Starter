<?php
 
$strAccessToken = "aynU/imZrRfRRyr4PI+i4Daa2JhPrh9qaD/vhrJeBywOEJH1wHPJzeFamKwdrcqUTro8GTwkJS/X1sjJygmpeuhpVXJrtCX/TiqgNGB/QLjRrLcq/XmWxuRe54diFgLT9qUEJmmfyYHDwao2kzbCngdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "0"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "—————————————————————————\n
พิมพ์ 1 : สอบถามราคาและรายละเอียด Package ล่าสุด
พิมพื 2 : ระยะเวลาสำหรับการดำเนินการทั้งหมด
พิมพ์ 3 : ข้อมูลที่ลูกค้าต้องส่งให้ทีม
พิมพ์ 4 : สามารถทำ Sticker LINE แบบ ดุ้กดิ้ก มีเสียงได้หรือไม่
พิมพ์ 5 : สามารถทำ Sticker LINE แบบให้ ดาวน์โหลดฟรีได้หรือไม่
พิมพ์ 6 : รายได้ยอดจากการซื้อ Sticker LINE ของลูกค้า ใครเป็นคนได้?
พิมพ์ 7 : Sticker LINE พอทำเสร็จแล้ว จะมีวันหมดอายุมั้ย?
พิมม์ 8 : สามารถดูตัวอย่างผลงานได้จากไหนบ้าง
พิมพ์ 9 : ฉันมีคำถามนอกเหนือจากนี้
พิมพ์ ok : OK เข้าใจ Clear ทุกอย่างพร้ออมส่งข้อมูลทำ Sticker LINE แล้วครับ
—————————————————————————\n";
}else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "—————————————————————————
รายละเอียดโปรโมชั่น Package ล่าสุดมีดังนี้ครับ
แบบที่ 1 ทำ Sticker LINE โดยใช้ ภาพถ่าย
8   ตัว ราคา 2000 บาท
16 ตัว ราคา 2500 บาท (Hot !! ขายดี)
24 ตัว ราคา 2900 บาท
32 ตัว ราคา 3200 บาท
40 ตัว ราคา 3500 บาท (Hot !! สุดคุ้ม)

แบบที่ 2 ทำ Stciker LINE แบบตัวการ์ตูน
40 ตัว ราคา 7000 บาท
————————————————————————";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "2"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
ระยะเวลาการทำ Sticker LINE 
แบบที่ 1 ทำ Sticker LINE โดยใช้ ภาพถ่าย
>> ทีมงานใช้เวลาออกแบบ ประมาณ 1 อาทิตย์
พอทำเสร็จ จะส่งให้ลูกค้ารีวิว หากโอเค จะแถม
ทำ Poster coming soon download ให้
และส่งเรื่องไปให้ไลน์ตรวจ ใช้เวลาประมาณ ไม่เกิน 3 อาทิตย์
(หากมีการ Reject เราก็จะแก้ไขจนกว่าจะผ่าน)

แบบที่ 2 Stciker LINE แบบตัวการ์ตูน
>> ทีมงานใช้เวลาออกแบบ 1 เดือน 
ส่งให้ ไลน์ตรวจประมาณ ไม่เกิน 3 อาทิตย์
รายละเอียดอื่นๆ เหมือน แบบที่ 1
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "3"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
สิ่งที่ลูกค้าต้องส่ง ข้อมูลมีดังนี้
1. รูปถ่าย ตามจำนวน Package ที่เลือก
2. คำที่ต้องการ ตามจำนวนรูปถ่าย
3. ชื่อจริง นามสกุล ไทย และ อังกฤษ
4. ชื่อ Sticker LINE ที่ต้องการเป็นภาษาอังกฤษ
5. อีเมล และรหัสผ่านไลน์ เพื่อใช้สำหรับสมัคร บัญชี LINE Creator ให้
6. เอกสารเซ็นยินยอมจากทางไลน์ (ขอจากทีมงาน)
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "4"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
Sticker LINE แบบดุ้กดิ้กและมีเสียงทางทีมไม่ได้รับทำ
เรื่องจากใช้ค่าใช้จ่าย เวลาทำ เวลาไลน์ตรวจ ค่อนข้างเยอะ
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "5"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
ไม่สามารถทำ LINE Sticker แบบ Download Free ได้ครับ
แบบ LINE Creator ต้องตั้งราคาขั้นต่ำ 30 บาท เพื่อให้คนอื่นมา
Download Sticker LINE เรา
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "6"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
รายได้จากยอดซื้อ Sticker LINE ของลูกค้า จะเป็นของลูกค้าทั้งหมด
สมมติ ตั้งราคา 30 บาท หักทุกอย่าง เราจะได้ประมาณ Download 
ครั้งละ 9-11 บาท 
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "7"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
Sticker LINE ของลูกค้า พอทำเสร็จแล้ว จะไม่มีวันหมดอายุ
ใช้ได้ และวางขายบน LINE ตลอดไป
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "8"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
ท่านสามารถเข้าไปดูผลงาน หรือ ดูตัวอย่างคำเพื่อเป็นไอเดียได้ที่
Facebook ค้นว่า Where is my sticker 
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "9"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
หากมีข้อสงสัยอย่างอื่นนอกเหนือจากนี้ ท่านสามารถ แอดไลน์
ที่ Line ID:> pinkspiderubu และสอบถามได้ทันที
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "ok"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
สามารถส่งข้อมูล รูปถ่าย และคำได้ที่ LINE ด้านล่างได้ทันที
แอด Friend ที่ Line ID >> pinkspiderubu
'และสอบถามได้ทันที
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "Ok"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
สามารถส่งข้อมูล รูปถ่าย และคำได้ที่ LINE ด้านล่างได้ทันที
แอด Friend ที่ Line ID >> pinkspiderubu
'และสอบถามได้ทันที
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else if($arrJson['events'][0]['message']['text'] == "OK"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "---------------------------------------------------
สามารถส่งข้อมูล รูปถ่าย และคำได้ที่ LINE ด้านล่างได้ทันที
แอด Friend ที่ Line ID >> pinkspiderubu
'และสอบถามได้ทันที
---------------------------------------------------";
  $arrPostData['messages'][1]['type'] = "text";
 $arrPostData['messages'][1]['text'] = "พิมพ์ 0 เพื่อกลับไปยังชุดคำถามหน้าหลัก";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจที่คุณตอบกลับ กรุณาพิมพ์ 0 แล้วส่งมาเพื่อเข้าสู่่ชุดคำถามหลักอีกครั้ง";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>