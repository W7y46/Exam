<html>
<head>
<title>แบบทดสอบวิชาชีพครู</title>
</head>
<center><h1>แบบทดสอบวิชาพื้นฐานและวิชาชีพครู</h1></center> 

<style>
        body {
            background-color: 	#F0F8FF; /* กำหนดสีพื้นหลังของหน้าเว็บ */
            font-family: 'TH Kodchasal', sans-serif; /* กำหนดแบบอักษร */
			font-size: 22px;
        }

        .content {
            text-align: center;
            padding: 2px;
        }
		h1 {
            background-color: #99CCFF; /* กำหนดสีพื้นหลังของตัวหนังสือ */
            color: #000000; /* กำหนดสีข้อความ */
            padding: 2px; /* กำหนดการเพิ่มพื้นที่รอบข้อความ */
			border-radius: 60px;
			border: 6px solid #3366FF;
        }
		
		 br {
            line-height: 0.5; /* กำหนดระยะห่างระหว่างบรรทัด */
        }	

		 h2 {
		    background-color: #66FF66;
            border: 6px solid #339900; /* กำหนดขอบของกรอบ */
            padding: 6px; /* กำหนดการเพิ่มพื้นที่รอบข้อความ */
            margin: 20px auto; /* กำหนดระยะห่างระหว่างกรอบกับเนื้อหา */
            max-width: 200px; /* กำหนดความกว้างสูงสุดของกรอบ */
			text-align: center;
			border-radius: 60px;
         }
    
    </style>
<?php


//กำหนดคะเเนนเริ่มต้น
$score=0;
echo "<center><b>ชื่อ : </b>".$_POST["name"]."<br></center>";
echo "<center><b>Email : </b>".$_POST["email"]."<br></center>";



//ข้อ1
echo "<strong>ข้อที่ 1 <br></strong>";
if ($_POST["book1"]=="การทำให้นักเรียนมีโอกาสเรียนรู้ได้ตลอดเวลา")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ2
echo "<strong>ข้อที่ 2 <br></strong>";
if ($_POST["book2"]=="Virtual Reality")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ3
echo "<strong>ข้อที่ 3 <br></strong>";
if ($_POST["book3"]=="เพิ่มความน่าสนใจในการเรียน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ4
echo "<strong>ข้อที่ 4 <br></strong>";
if ($_POST["book4"]=="ช่วยให้นักเรียนเข้าใจเนื้อหาได้ง่ายขึ้น")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ5
echo "<strong>ข้อที่ 5 <br></strong>";
if ($_POST["book5"]=="ลดความซับซ้อนในการตรวจสอบและประเมินผล")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ6
echo "<strong>ข้อที่ 6 <br></strong>";
if ($_POST["book6"]=="การแชร์ข้อมูลส่วนตัวระหว่างนักเรียนและอาจารย์จ")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ7
echo "<strong>ข้อที่ 7 <br></strong>";
if ($_POST["book7"]=="เพิ่มความน่าสนใจในการเรียน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ8
echo "<strong>ข้อที่ 8 <br></strong>";
if ($_POST["book8"]=="ประวัติศาสตร์")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ9
echo "<strong>ข้อที่ 9 <br></strong>";
if ($_POST["book9"]=="ใช้เทคโนโลยีในการปรับปรุงการสอนตามความต้องการของนักเรียน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ10
echo "<strong>ข้อที่ 10 <br></strong>";
if ($_POST["book10"]=="ทำให้การเรียนรู้เป็นเรื่องน่าสนใจและมีความท้าทาย")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ11
echo "<strong>ข้อที่ 11 <br></strong>";
if ($_POST["book11"]=="ช่วยในการพัฒนาทักษะและความรู้ตลอดชีวิต")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ12
echo "<strong>ข้อที่ 12 <br></strong>";
if ($_POST["book12"]=="Language Translation")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ13
echo "<strong>ข้อที่ 13 <br></strong>";
if ($_POST["book13"]=="ใช้เทคโนโลยีในการปรับปรุงการสอนตามความต้องการของนักเรียน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ14
echo "<strong>ข้อที่ 14 <br></strong>";
if ($_POST["book14"]=="ช่วยให้นักเรียนเข้าใจเนื้อหาได้ง่ายขึ้น")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ15
echo "<strong>ข้อที่ 15 <br></strong>";
if ($_POST["book15"]=="ลดความซับซ้อนในการตรวจสอบและประเมินผล")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ16
echo "<strong>ข้อที่ 16 <br></strong>";
if ($_POST["book16"]=="เพิ่มความน่าสนใจในการเรียน")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ17
echo "<strong>ข้อที่ 17 <br></strong>";
if ($_POST["book17"]=="ประวัติศาสตร์")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ18
echo "<strong>ข้อที่ 18 <br></strong>";
if ($_POST["book18"]=="ส่งเสริมการทดลองและการคิดเชิงสร้างสรรค์")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ19
echo "<strong>ข้อที่ 19 <br></strong>";
if ($_POST["book19"]=="สร้างสถานการณ์ที่ต้องการการคิดเชิงสร้างสรรค์")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ20
echo "<strong>ข้อที่ 20 <br></strong>";
if ($_POST["book20"]=="Adaptive Learning Platforms")
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ21
echo "<strong>ข้อที่ 21 <br></strong>";
if ($_POST["q21"] == "Mobile Learning") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ22
echo "<strong>ข้อที่ 22 <br></strong>";
if ($_POST["q22"] == "ให้ประสบการณ์การเรียนรู้ที่ตรงจุด") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ23
echo "<strong>ข้อที่ 23 <br></strong>";
if ($_POST["q23"] == "เพิ่มความสนใจในการเรียน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}////ข้อ24
echo "<strong>ข้อที่ 24 <br></strong>";
if ($_POST["q24"] == "ลดความซับซ้อนในการตรวจสอบและประเมินผล") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ25
echo "<strong>ข้อที่ 25 <br></strong>";
if ($_POST["q25"] == "เพิ่มความสนใจในการเรียน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ26
echo "<strong>ข้อที่ 26 <br></strong>";
if ($_POST["q26"] == "Video Conferencing") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ27
echo "<strong>ข้อที่ 27 <br></strong>";
if ($_POST["q27"] == "เพิ่มความสนใจและการมีส่วนร่วมของนักเรียน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ28
echo "<strong>ข้อที่ 28 <br></strong>";
if ($_POST["q28"] == "Learning Management Systems (LMS)") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ29
echo "<strong>ข้อที่ 29 <br></strong>";
if ($_POST["q29"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ30
echo "<strong>ข้อที่ 30 <br></strong>";
if ($_POST["q30"] == "การสนับสนุนการเรียนรู้ตลอดชีพ") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ31
echo "<strong>ข้อที่ 31 <br></strong>";
if ($_POST["q31"] == "Social Media Platforms") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ32
echo "<strong>ข้อที่ 32 <br></strong>";
if ($_POST["q32"] == "การสร้างและการคิดเชิงสร้างสรรค์") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ33
echo "<strong>ข้อที่ 33 <br></strong>";
if ($_POST["q33"] == "Augmented Reality") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ34
echo "<strong>ข้อที่ 34 <br></strong>";
if ($_POST["q334"] == "Video Conferencing") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ35
echo "<strong>ข้อที่ 35 <br></strong>";
if ($_POST["q35"] == "ส่งเสริมการทดลองและการคิดเชิงสร้างสรรค์") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ36
echo "<strong>ข้อที่ 36 <br></strong>";
if ($_POST["q36"] == "ช่วยให้การเรียนรู้มีการปรับปรุงตามความคาดหวังของนักเรียน") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ37
echo "<strong>ข้อที่ 37 <br></strong>";
if ($_POST["q37"] == "การพัฒนาทักษะการเรียนรู้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ38
echo "<strong>ข้อที่ 38 <br></strong>";
if ($_POST["q38"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ39
echo "<strong>ข้อที่ 39 <br></strong>";
if ($_POST["q39"] == "Learning Management Systems (LMS)") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ40
echo "<strong>ข้อที่ 40 <br></strong>";
if ($_POST["q40"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ41
echo "<strong>ข้อที่ 41 <br></strong>";
if ($_POST["q41"] == "Social Media Platforms") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ42
echo "<strong>ข้อที่ 42 <br></strong>";
if ($_POST["q42"] == "ส่งเสริมการทดลองและการคิดเชิงสร้างสรรค์") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ43
echo "<strong>ข้อที่ 43 <br></strong>";
if ($_POST["q43"] == "การพัฒนาทักษะการเรียนรู้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ44
echo "<strong>ข้อที่ 44 <br></strong>";
if ($_POST["q44"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ45
echo "<strong>ข้อที่ 45 <br></strong>";
if ($_POST["q45"] == "Learning Management Systems (LMS)") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ46
echo "<strong>ข้อที่ 46 <br></strong>";
if ($_POST["q46"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ47
echo "<strong>ข้อที่ 47 <br></strong>";
if ($_POST["q47"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ48
echo "<strong>ข้อที่ 48 <br></strong>";
if ($_POST["q48"] == "Learning Management Systems (LMS)") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ49
echo "<strong>ข้อที่ 49 <br></strong>";
if ($_POST["q49"] == "การทดลองและการสังเกต") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}
////ข้อ50
echo "<strong>ข้อที่ 50<br></strong>";
if ($_POST["q50"] == "การพัฒนาทักษะการเรียนรู้") 
{ 
  echo "<span style='color: green;'>ถูกต้อง</span><br>";
  $score++;
} else {
  echo "<span style='color: red;'>ยังไม่ถูกต้อง</span><br>";
}




////////////////////////////////////////////////////////////////////////////////////////////////
//รายงานคะเเนน
echo "<h2>คะแนนที่ได้ : "."$score</h2>";
?>




</body>
</body>
</html>