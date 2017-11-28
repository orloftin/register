<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>แบบฟอร์มการลงทะเบียน</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/css/uikit.css">
    <link rel="stylesheet" href="assets/dist/jquery.Thailand.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">



    <style>
        a, h1, h2, .h3{
            font-family: 'Kanit', sans-serif !important;
            line-height: 1.6em;
        }
        a{
            font-size: 1.4em;
        }
        label{
            font-size: 1.6em;
            display: block;
        }
    </style>

</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <a href="http://www.foodpackthailand.com" target="_blank" >
                <img class="" src="<? echo base_url(); ?>assets/img/header.jpg" alt="Thailandindustrial food" style=" border-radius: 6px; padding-top: 4px; width:100%" >
            </a>
        </div>
      </div>
    </div>


    <div class="container">

        <h1>แบบฟอร์มการลงทะเบียน</h1>

        <div class="row">
            <div class="col-md-6"> 
                
            </div>
        </div>


        <div id="loader">
            <div></div> รอสักครู่ กำลังโหลดฐานข้อมูล...
        </div>

        <form id="demo1" class="demo" style="display:none;" autocomplete="on" method="post" action="" >

        <div class="container">
            <div class="col-md-12">
                <div class="row">

            <div class="col-md-6">
                <label class="h3">ชื่อ </label>
                <input name="name" class="form-control" required="" placeholder="ชื่อจริง" type="text">
            </div>

            <div class="col-md-6">
                <label class="h3">นามสกุล </label>
                <input name="lastname" class="form-control" required="" placeholder="นามสกุล" type="text">
            </div>

            <div class="col-md-6">
                <label class="h3">เพศ </label>
                <label class="h4">
                    <input type="radio" name="gender" value="male" checked> Male<br>
                </label>
                <label class="h4">
                    <input type="radio" name="gender" value="female"> Female<br>
                </label>
            </div>

            <div class="col-md-6">
                <label class="h3"> เบอร์มือถือ </label>
                <input name="phone" class="form-control" required="" placeholder="Mobile Thailand Only" type="text" maxlength="10" minlength="10">
            </div>          

            <div class="col-md-6">
                <label class="h3"> อีเมล์ </label>
                <input name="email" class="form-control" required="" placeholder="อีเมลล์" type="text">
            </div>
            
            <div class="col-md-6">
                <label class="h3"> ชื่อบริษัท </label>
                <input name="company" class="form-control" placeholder="ชื่อบริษัท"  type="text">
            </div>

             <div class="col-md-6">
                <label class="h3"> โทรศัพท์ </label>
                <input name="tel" class="form-control" placeholder="Telephone Company" type="text">
            </div>   

            <div class="col-md-6">
                <label class="h3"> ประเทศ </label>
                <input name="country" class="form-control" placeholder="
Country of Company"  type="text">
            </div>              

            <div class="col-md-6">
                <label class="h3"> บ้านเลขที่ </label>
                <input name="addno" class="form-control" placeholder="บ้านเลขที่" type="text">
            </div>   

            <div class="col-md-6">
                <label class="h3">ตำบล / แขวง </label>
                <input name="district" class="form-control" placeholder="ตำบล"  type="text">
            </div>

            <div class="col-md-6">
                <label class="h3">อำเภอ / เขต </label>
                <input name="amphoe" class="form-control" placeholder="อำเภอ"  type="text">
            </div>

            <div class="col-md-6">
                <label class="h3">จังหวัด</label>
                <input name="province" class="form-control" placeholder="จังหวัด"  type="text">
            </div>

            <div class="col-md-6">
                <label class="h3">รหัสไปรษณีย์</label>
                <input name="zipcode" class="form-control" placeholder="รหัสไปรษณีย์"  type="text">
            </div>


                </div>
             </div>
        </div>

      <br/>
        
        <div class="container">
            <div class="row">
        <h4><strong> กรุณาเลือกข้อมูลที่เกี่ยวข้อง </strong></h4>
        <br/> 
        
        <div class="row">

        <div class="col-md-6"> 
            <p class="h5"><strong>กรุณาระบุงานหลักของท่าน (ระบุเพียงข้อเดียว)</strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data1" value="การตรวจวัดขนาดและน้ำหนัก"> ประธานกรรมการบริหาร / เจ้าของกิจการ / ผู้อำนวยการ / ประธานบริหาร / ผู้จัดการทั่วไป
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ข้าราชการระดับอาวุโส"> ข้าราชการระดับอาวุโส
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ผู้จัดการฝ่ายกระบวนการผลิต / ผู้จัดการโรงงาน"> ผู้จัดการฝ่ายกระบวนการผลิต / ผู้จัดการโรงงาน
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ผู้จัดการฝ่ายช่าง / วิศวกร"> ผู้จัดการฝ่ายช่าง / วิศวกร
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ฝ่ายตรวจสอบและควบคุมคุณภาพสินค้า"> ฝ่ายตรวจสอบและควบคุมคุณภาพสินค้า
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ฝ่ายการตลาด / ฝ่ายขาย"> ฝ่ายการตลาด / ฝ่ายขาย
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ฝ่ายจัดซื้อ – จัดจ้าง"> ฝ่ายจัดซื้อ – จัดจ้าง
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ฝ่ายวิจัยและพัฒนา"> ฝ่ายวิจัยและพัฒนา
            </label>
            <label class="h5">
                <input type="radio" name="data1" value="ฝ่ายวิชาการและฝึกอบรม"> ฝ่ายวิชาการและฝึกอบรม
            </label>
            <br/>

      
            <p class="h5"><strong> กรุณาระบุประเภทสินค้าที่ท่านสนใจ </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data2" value="การควบคุมมลพิษ / งานบำบัดน้ำเสีย"> การควบคุมมลพิษ / งานบำบัดน้ำเสีย
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="การตรวจวัดขนาดและน้ำหนัก"> การตรวจวัดขนาดและน้ำหนัก
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="การพิมพ์บรรจุภัณฑ์"> การพิมพ์บรรจุภัณฑ์
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องเป่าขวด PET "> เครื่องเป่าขวด PET
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องจักรแปรรูปอาหารและสินค้าสำเร็จรูปประเภทต่างๆ"> เครื่องจักรแปรรูปอาหารและสินค้าสำเร็จรูปประเภทต่างๆ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องจักรสำหรับควบคุม"> เครื่องจักรสำหรับควบคุม
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องชงกาแฟ"> เครื่องชงกาแฟ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องมือตรวจสอบและควบคุมคุณภาพ"> เครื่องมือตรวจสอบและควบคุมคุณภาพ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องจักรสำหรับห่อหุ้มและเครื่องจักรบรรจุภัณฑ์ประเภทต่างๆ"> เครื่องจักรสำหรับห่อหุ้มและเครื่องจักรบรรจุภัณฑ์ประเภทต่างๆ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องทำขนมและอุปกรณ์เบเกอรี่"> เครื่องทำขนมและอุปกรณ์เบเกอรี่
            </label>
            <label class="h5">
                <input type="radio" name="data2" value=" งานบาร์โค้ด / ฉลาก / งานพิมพ์"> งานบาร์โค้ด / ฉลาก / งานพิมพ์
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องบรรจุประเภทต่างๆ"> เครื่องบรรจุประเภทต่างๆ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องครัว เครื่องใช้ในโรงแรม ร้านอาหาร"> เครื่องครัว เครื่องใช้ในโรงแรม ร้านอาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="งานระบบรักษาความปลอดภัย / ระบบป้องกันอัคคีภัย / ระบบการควบคุมการเข้าออก"> งานระบบรักษาความปลอดภัย / ระบบป้องกันอัคคีภัย / ระบบการควบคุมการเข้าออก
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="แฟรนไชส์อาหาร เครื่องดื่ม"> แฟรนไชส์อาหาร เครื่องดื่ม
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เทคโนโลยีการประหยัดพลังงาน"> เทคโนโลยีการประหยัดพลังงาน
            </label>
            <label class="h5">
                <input type="radio" name="data2" value=" เทคโนโลยีสำหรับเครื่องดื่ม / เบียร์"> เทคโนโลยีสำหรับเครื่องดื่ม / เบียร์
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เทคโนโลยีสำหรับอาหาร"> เทคโนโลยีสำหรับอาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="ระบบการจัดเก็บและพาหนะสำหรับเคลื่อนย้าย"> ระบบการจัดเก็บและพาหนะสำหรับเคลื่อนย้าย
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="ระบบสายพาน / การลำเลียง"> ระบบสายพาน / การลำเลียง
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="วัสดุบรรจุภัณฑ์ประเภทต่างๆ / บรรจุภัณฑ์พลาสติก / บรรจุภัณฑ์สำเร็จรูป"> วัสดุบรรจุภัณฑ์ประเภทต่างๆ / บรรจุภัณฑ์พลาสติก / บรรจุภัณฑ์สำเร็จรูป
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เทคโนโลยีควบคุมการผลิต"> เทคโนโลยีควบคุมการผลิต
            </label>
            <label class="h5">
                <input type="radio" name="data2" value=" ส่วนประกอบ / เครื่องปรุงอาหาร"> ส่วนประกอบ / เครื่องปรุงอาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="อุปกรณ์เครื่องมือช่าง"> อุปกรณ์เครื่องมือช่าง
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="อุปกรณ์ห้องเย็น / ห้องแช่แข็ง / การปรับอากาศ"> อุปกรณ์ห้องเย็น / ห้องแช่แข็ง / การปรับอากาศ
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องจักรผลิตยา / เครื่องแพ็คยา / เครื่องบรรจุแคปซูล / อุปกรณ์ที่เกี่ยวข้อง"> เครื่องจักรผลิตยา / เครื่องแพ็คยา / เครื่องบรรจุแคปซูล / อุปกรณ์ที่เกี่ยวข้อง
            </label>
            <label class="h5">
                <input type="radio" name="data2" value="เครื่องมือวิเคราะห์จุลชีวะวิทยาทางอาหาร"> เครื่องมือวิเคราะห์จุลชีวะวิทยาทางอาหาร
            </label>
            <br/>  

            <p class="h5"><strong> ท่านทราบข่าวงานนี้ได้อย่างไร </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data3" value="โทรทัศน์ / วิทยุ"> โทรทัศน์ / วิทยุ 
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="นิตยสาร"> นิตยสาร 
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="หนังสือพิมพ์"> หนังสือพิมพ์
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="เอกสารบัตรเชิญ / จดหมายจากผู้จัดงานแสดงสินค้า"> เอกสารบัตรเชิญ / จดหมายจากผู้จัดงานแสดงสินค้า  
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="ป้ายโฆษณา"> ป้ายโฆษณา  
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="อีเมล์จากผู้จัดงาน"> อีเมล์จากผู้จัดงาน  
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="เว็บไซต์ฟู้ดแพ็คไทยแลนด์"> เว็บไซต์ฟู้ดแพ็คไทยแลนด์
            </label>
            <label class="h5">
               <input type="radio" name="data3" value="ผู้ร่วมงาน / เพื่อน"> ผู้ร่วมงาน / เพื่อน  
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="ผู้แสดงสินค้า"> ผู้แสดงสินค้า 
            </label>
            <label class="h5">
                <input type="radio" name="data3" value="สมาคม / สถาบัน"> สมาคม / สถาบัน 
            </label>
            <label class="h5">
                <input type="radio" name="data3" value=" โทรเชิญโดยผู้จัดงาน "> โทรเชิญโดยผู้จัดงาน
            </label>
            <br/>
        
            <p class="h5"><strong>ปัจจุบันธุรกิจของท่านได้ใช้บริการชุมชนออนไลน์หรือไม่</strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data4" value="ใช่"> ใช่
            </label>
            <label class="h5">
                <input type="radio" name="data4" value="ไม่"> ไม่
            </label>
            <label class="h5">
                <input type="radio" name="data4" value="กำลังตัดสินใจ"> กำลังตัดสินใจ
            </label>
            <br/>
        </div>

        <div class="col-md-6"> 
            <p class="h5"><strong> ประเภทเครื่องดื่ม </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data5" value="การบรรจุขวดและฉลาก / Bottling / Labeling"> การบรรจุขวดและฉลาก / Bottling / Labeling
            </label>
            <label class="h5">
                <input type="radio" name="data5" value="ธุรกิจผลิตภัณฑ์จากนม"> ธุรกิจผลิตภัณฑ์จากนม
            </label>
            <label class="h5">
                <input type="radio" name="data5" value="ผู้ผลิตเครื่องดื่ม"> ผู้ผลิตเครื่องดื่ม
            </label>
            <label class="h5">
                <input type="radio" name="data5" value="น้ำอัดลม"> น้ำอัดลม
            </label>
            <label class="h5">
                <input type="radio" name="data5" value="บรรจุภัณฑ์"> บรรจุภัณฑ์
            </label>
            <label class="h5">
                <input type="radio" name="data5" value="อาหารเหลว"> อาหารเหลว
            </label>
            <br/>
            
            <p class="h5"><strong> ประเภทธุรกิจอาหาร </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data6" value="บรรจุภัณฑ์อาหาร"> บรรจุภัณฑ์อาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผู้จัดจำหน่ายผลิตภัณฑ์ทางการเกษตร"> ผู้จัดจำหน่ายผลิตภัณฑ์ทางการเกษตร
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผลไม้และผัก"> ผลไม้และผัก
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผลิตภัณฑ์ขนมหวาน"> ผลิตภัณฑ์ขนมหวาน
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผู้ผลิตเนื้อ"> ผู้ผลิตเนื้อ
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผู้ผลิตอาหารสำเร็จรูป"> ผู้ผลิตอาหารสำเร็จรูป
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ผู้ค้าปลีก / ผู้จัดจำหน่าย / ผู้ส่งสินค้าประเภทอาหาร"> ผู้ค้าปลีก / ผู้จัดจำหน่าย / ผู้ส่งสินค้าประเภทอาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="แฟรนไชส์อาหาร เครื่องดื่ม"> แฟรนไชส์อาหาร เครื่องดื่ม
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ภัตตาคาร ร้านอาหาร"> ภัตตาคาร ร้านอาหาร
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="ร้านกาแฟ เบเกอรี่"> ร้านกาแฟ เบเกอรี่
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="อาหารขบเคี้ยว"> อาหารขบเคี้ยว
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="อาหารแช่แข็ง"> อาหารแช่แข็ง
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="อาหารทะเล"> อาหารทะเล
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="อาหารสัตว์"> อาหารสัตว์
            </label>
            <label class="h5">
                <input type="radio" name="data6" value="อาหารฮาลาล"> อาหารฮาลาล
            </label>
          <br/>

            <p class="h5"><strong> ประเภทเวชภัณฑ์และเครื่องสำอาง </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data7" value="เครื่องสำอาง"> เครื่องสำอาง
            </label>
            <label class="h5">
                <input type="radio" name="data7" value="ผลิตภัณฑ์ดูแลสุขภาพและเสริมความงาม"> ผลิตภัณฑ์ดูแลสุขภาพและเสริมความงาม
            </label>
            <label class="h5">
                <input type="radio" name="data7" value="ผู้ผลิตยา / ผู้ผลิตยาสมุนไพร"> ผู้ผลิตยา / ผู้ผลิตยาสมุนไพร
            </label>
            <br/>

             <p class="h5"><strong> ประเภทสินค้าอุตสาหกรรม, อุปโภค - บริโภค และงานบริการ </strong></p><hr/>
             <label class="h5">
                <input type="radio" name="data8" value="การขนส่ง / การลำเลียงสินค้า">  การขนส่ง / การลำเลียงสินค้า 
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="การพิมพ์"> การพิมพ์
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="ตู้แช่ / ห้องเย็น"> ตู้แช่ / ห้องเย็น
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="ตัวแทนผู้ผลิตและผู้ประกอบการ"> ตัวแทนผู้ผลิตและผู้ประกอบการ
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="นักออกแบบ / ผู้รับเหมา"> นักออกแบบ / ผู้รับเหมา
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="บริษัทที่ปรึกษา / บริษัทพัฒนาและวิจัย / หน่วยงานการศึกษา"> บริษัทที่ปรึกษา / บริษัทพัฒนาและวิจัย / หน่วยงานการศึกษา
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="ผู้ผลิตสินค้าอุปโภคบริโภค"> ผู้ผลิตสินค้าอุปโภคบริโภค
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="ผู้นำเข้า / ตัวแทนจำหน่าย / ผู้กระจายสินค้า"> ผู้นำเข้า / ตัวแทนจำหน่าย / ผู้กระจายสินค้า
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="โรงแรม / รีสอร์ท"> โรงแรม / รีสอร์ท
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="สินค้าอิเล็กทรอนิกส์"> สินค้าอิเล็กทรอนิกส์
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="สินค้าอุตสาหกรรมประเภทต่างๆ"> สินค้าอุตสาหกรรมประเภทต่างๆ
            </label>
            <label class="h5">
                <input type="radio" name="data8" value="หน่วยงานของรัฐ"> หน่วยงานของรัฐ
            </label>
            <br/>

            <p class="h5"><strong> ท่านเกี่ยวข้องกับการจัดซื้อหรือแนะนำสินค้าภายในบริษัทหรือไม่ </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data9" value="เกี่ยวข้อง"> เกี่ยวข้อง
            </label>
            <label class="h5">
                <input type="radio" name="data9" value="ม่เกี่ยวข้อง"> ไม่เกี่ยวข้อง
            </label>
            <br/>

            <p class="h5"><strong> หากเกี่ยวข้องท่านมีงบประมาณเท่าไร (ระบุเพียงข้อเดียว) </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data10" value="น้อยกว่า 500,000 - 1,000,000 บาท"> น้อยกว่า 500,000 - 1,000,000 บาท
            </label>
            <label class="h5">
                <input type="radio" name="data10" value="ระหว่าง 1,000,000 – 5,000,000 บาท"> ระหว่าง 1,000,000 – 5,000,000 บาท
            </label>
            <label class="h5">
                <input type="radio" name="data10" value="ระหว่าง 5,000,000 - 10,000,000 บาท"> ระหว่าง 5,000,000 - 10,000,000 บาท
            </label>
            <label class="h5">
                <input type="radio" name="data10" value="มากกว่า 10,000,000 บาท"> มากกว่า 10,000,000 บาท
            </label>
            <br/>

            <p class="h5"><strong> กรุณาระบุวัตถุประสงค์ของการเข้าชมงาน </strong></p><hr/>
            <label class="h5">
                <input type="radio" name="data11" value="สั่งซื้อสินค้า"> สั่งซื้อสินค้า
            </label>
            <label class="h5">
                <input type="radio" name="data11" value="หาตัวแทน"> หาตัวแทน
            </label>
            <label class="h5">
                <input type="radio" name="data11" value="อศึกษาข้อมูลสินค้า"> ศึกษาข้อมูลสินค้า
            </label>
            <label class="h5">
                <input type="radio" name="data11" value="รวบรวมข้อมูลสินค้าเบื้องต้น"> รวบรวมข้อมูลสินค้าเบื้องต้น
            </label>
            <label class="h5">
                <input type="radio" name="data11" value="พบปะ / เยี่ยมตัวแทน"> พบปะ / เยี่ยมตัวแทน
            </label>
            <label class="h5">
                <input type="radio" name="data11" value="ศึกษาข้อมูลเพื่อเข้าร่วมงานในครั้งต่อไป"> ศึกษาข้อมูลเพื่อเข้าร่วมงานในครั้งต่อไป
            </label>
            <br/>

        </div>   
        </div> 

            </div>
        </div>

        <div class="container">    
                <div align="center">
                    <br/>
                <button class="btn btn-danger btn-md col-12"> ส่งข้อมูลการลงทะเบียน </button>
                </div>
            </div>

            </form>
</div>
<br/>  
    
    <div class="container">   
    <footer>
        <hr color="#CC00CC">
        <div class="col-12">
            <p align="center">Copyright ? Your Website 2017 บริษัท ที.บี.พี.พับลิชเคชั่น จำกัด</p>
        </div>
    </footer></div>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>
    
    <!-- dependencies for zip mode -->
    <script type="text/javascript" src="assets/dependencies/zip.js/zip.js"></script>
    <!-- / dependencies for zip mode -->

    <script type="text/javascript" src="assets/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="assets/dependencies/typeahead.bundle.js"></script>
    
    <script type="text/javascript" src="assets/dist/jquery.Thailand.min.js"></script>
    
    <script type="text/javascript">


        $('input').on('keyup keypress', function(e) {
          var keyCode = e.keyCode || e.which;
          if (keyCode === 13) { 
            e.preventDefault();
            return false;
          }
        });

        $.Thailand({
            database: 'assets/database/db.json', 

            $district: $('#demo1 [name="district"]'),
            $amphoe: $('#demo1 [name="amphoe"]'),
            $province: $('#demo1 [name="province"]'),
            $zipcode: $('#demo1 [name="zipcode"]'),

            onDataFill: function(data){
                console.info('Data Filled', data);
            },

            onLoad: function(){
                console.info('Autocomplete is ready!');
                $('#loader, .demo').toggle();
            }
        });
    </script>
    
</body>
</html>