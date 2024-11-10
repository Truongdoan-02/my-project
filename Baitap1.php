<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1 style="color:#66FFCC">Phiếu đăng ký tham gia chương trình khuyến mãi</h1>
        <table border="1" cellspacing="0" style="background-color:#66FFCC;width:70%">
            <tr>
                <th align="left">Họ và tên</th>
                <td>
                    <form action="">
                        <input type="text" name="ten" style="width:350px;height:25px" placeholder="Nguyễn Ngọc Quỳnh Nga">
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Địa chỉ</th>
                <td>
                    <form action="">
                        <input type="text" name="diachi" style="width:350px;height:25px" placeholder="2Bia Hùng Vương. Q10">
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Điện thoại</th>
                <td>
                    <form action="">
                        <input type="tel" name="dienthoai" style="width:350px;height:25px" placeholder="0909097506">
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Phái</th>
                <td>
                    <form action="">
                        <input type="radio" name="check">Nam
                        <input type="radio" name="check">Nữ
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Nghề nghiệp</th>
                <td>
                    <form action="">
                        <select name="dsnghenghiep" id="" style="width:100px;height:25px">
                            <option value="mn1">Bác sĩ</option>
                            <option value="mn2">Kỹ sư</option>
                            <option value="mn3" selected>giáo viên</option>
                            <option value="mn4">Khác</option>
                        </select>
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Chọn sản phẩm tham gia</th>
                <td>
                    <form action="">
                        <select name="dssanpham" id="" style="width:150px;height:80px;" multiple>
                            <option value="m1" style="background-color:#0000EE;color:white">Kem đánh răng</option>
                            <option value="m2">Bột giặt</option>
                            <option value="m3" style="background-color:#0000EE;color:white">Dầu gội đầu</option>
                            <option value="m4">Sữa tắm</option>
                        </select>
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Số người dự đoán tham gia</th>
                <td>
                    <form action="">
                        <input type="number" name="soluong" style="width:130px;height:25px;" placeholder="250000">
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <form action="">
                        <input type="submit" name="dongy" value="Đồng ý">
                    </form>
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <p style="color:red;">Bạn đã dăng ký thành công!!!</p>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>