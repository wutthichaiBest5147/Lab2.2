<!DOCTYPE html>
<html>

<body>

    <h1>แบบสอบถาม</h1>
    <form action="show.php" method="get" style="margin-left: 80px;">
    ชื่อ:<input type="text" name="name"><br>
        กรุณาระบุเพศ:
        <select name="gender">
            <option value="male">ชาย</option>
            <option value="female">หญิง</option>
        </select><br>
        กรุณาใส่อายุ:
        <input type="number" name="num" style="width: 40px;"><br>
        สถานะ:
        <select name="status">
            <option value="single">โสด</option>
            <option value="marry">แต่งงานแล้ว</option>
        </select><br>
        <input type="submit" value="ส่ง">
    </form>
</body>
</html>