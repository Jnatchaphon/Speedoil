@extends('layouts.app')


@section('maincontent')
<div class="container" style="margin-top: 105px;">
    <div class="row pt-2">
        <div class="col-sm serifont-des">
            <div class="col-sm-3 pl-0">
                <div class="alert alert-warning bgspdo text-white mb-2" role="alert">About Us</div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <img src="{{ url('img/bg-about.png')}}" class="card-img-top" width="100%" alt="...">
        <div class="card-body">
            <div class="card-title">
                <h1 class="serifont">SPEED OIL PERFORMANCE</h1>
                <h3 class="serifont-des">PREMIUM MOTOR OIL</h3>
            </div>
            <p class="card-text serifont-r">P Speed Oil Co.,Ltd เป็นผู้ผลิตและจัดจำหน่ายน้ำมันเครื่อง
                น้ำมันเบนซิล
                ดีเซลที่มีคุณภาพ รวมไปถึงสารหล่อลื่นต่างๆและน้ำยาล้างเครื่องภายในสำหรับลูกค้าทั่วไป
                ในแวดวงยานยนต์ ปัจจุบัน Speed Oil มีการจัดจำหน่ายผ่านตัวแทนมากกว่า 100 ตัวแทนในแถบเอเชีย
                ได้แก่ประเทศไทย พม่า ฟิลิปปิน อินโดนีเซีย ลาว มาเลเซีย เป็นต้น และในอนาคตมีเป้าหมาย
                จะเพิ่มตลาดอื่นๆ
            </p>
            <p class="card-text serifont-r">จัดจำหน่ายน้ำมันสำหรับเครื่องยนต์ นำเข้าจาก USA คุณสายชล ปันพร ผู้บริหาร
                ได้แสดงวิสัยทัศน์อย่างชัดเจนว่าต้องการผลิตภัณฑ์ที่มีคุณภาพ
                ที่นำมาใช้กับเครื่องยนต์ที่มีกำลังแรงม้ามากกว่า 1000 ขึ้นไปโดยเฉพาะ
                เพื่อลดการสึกหรอของเครื่องยนต์ จึงเป็นที่มาของชื่อผลิตภัณฑ์ Speed Oil
            </p>
            <p class="card-text serifont-r">Speed Oil จัดจำหน่ายน้ำมันหล่อลื่นสำหรับใช้ในรถยนต์
                รวมถึงเครื่องยนต์มอเตอร์ไซค์ 2 จังหวะ
                ผลิตภัณฑ์ของเราประกอบด้วย น้ำมันเครื่องเบนซิล น้ำมันเครื่องดีเซล
                สารหล่อลื่นและน้ำยาทำความสะอาดภายในเครื่องยนต์ ผลิตภัณฑ์ของเรา
                ได้ผ่านการตรวจสอบคุณภาพและมาตรฐานการรับของกรมธุรกิจพลังงาน
                จึงมั่นใจได้ว่าน้ำมันเครื่องของเรามีคุณภาพเหมาะสำหรับเครื่องยนต์ของคุณ
            </p>
        </div>
    </div>
</div>
@endsection
