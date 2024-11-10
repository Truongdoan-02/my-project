<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <form action="">
            <label for="">Họ và tên</label> &nbsp
            <input type="text" style="background:lightblue" name="txtHoten" placeholder="họ và tên">
            <br><br>
            <label for="">Mật khẩu</label> &nbsp
            <input type="password" style="background:lightblue" name="txtmatkhau" placeholder="*********">
            <br><br>
            <label for="">Ngày sinh</label> &nbsp
            <input type="date" style="background:lightblue; width:11%;" name="txtngaysinh" placeholder="1/1/2000">
            <br><br>
            <label for="">Phép toán</label> &nbsp
                <input type="radio" name="radpheptoan" style="width:30px; height:26px;">+
                <input type="radio" name="radpheptoan" style="width:30px; height:26px;">-
                <input type="radio" name="radpheptoan" style="width:30px; height:26px;">*
                <input type="radio" name="radpheptoan" style="width:30px; height:26px;">/
                <br><br>
                <input type="submit" name="btnluu" value="Lưu" style="width:100px;height:30px;"> &nbsp
                <button title="submit" name="btntimkiem" style="width:100px;height:30px;">Tìm kiếm</button>

                <br><br>
                <label for="" style="color:blue">Môn học</label> &nbsp
                <select name="dsmonhoc" id="" style="width:100px;height:30px;">
                    <option value="mh001">Tri tue nhan tao</option>
                    <option value="mh002" selected>lap trinh web</option>
                    <option value="mh003">Nhập môn cơ sở dữ liệu</option>
                    <option value="mh004">Cấu trúc dữ liệu và giải thuật</option>
                </select>
                <br><br>
                <label for="" style="color:blue">Mô tả</label> &nbsp
                <textarea name="" id="" style="width:300px;height:100px;"></textarea>
        </form>
    </div>
</body>
</html>