<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center" style="color:#336699;">
        <h1 style="font-size:40px;color:#3366FF">Đăng ký du lịch</h1>
        <table border="1" cellspacing="0" style="background:#FFFF99;border-color:#3366FF" width="100%";>
            <tr style="height:40px">
                <th align="left">Họ và tên</th>
                <td>
                    <form action="">
                        <input type="text" name="hovaten" style="width:500px;height:25px" placeholder="Phạm Ngọc Cẩm Đào">
                    </form>
                </td>
            </tr>
            <tr style="height:40px">
                <th align="left">Địa chỉ</th>
                <td>
                    <form action="">
                        <input type="text" name="diachi" style="width:420px;height:25px" placeholder="227 Nguyễn Văn Cừ">
                    </form>
                </td>
            </tr>
            <tr style="height:40px">
                <th align="left">Điện thoại</th>
                <td>
                    <form action="">
                        <input type="tel" name="sodt" style="width:350px;height:25px" placeholder="8351056">
                    </form>
                </td>
            </tr>
            <tr style="height:40px">
                <th align="left">Khách Việt Nam</th>
                <td>
                    <form action="">
                        <input type="checkbox" name="chk" style="width:350px;height:25px;">
                    </form>
                </td>
            </tr>
            <tr style="height:40px">
                <th align="left">Chọn tour</th>
                <td>
                    <select name="dsdiadiem" id="" style="width:350px;height:25px">
                        <optgroup label="Miền Bắc">
                            <option value="mn1">Hà Nội-Hạ Long-Sapa</option>
                            <option value="mn2">Hà Nội-Chùa Hương-Ninh Bình</option>
                            <option value="mn3">Hà Nội-Cát Bà-Tuần Châu</option>
                        </optgroup>
                        <optgroup label="Miền Trung">
                            <option value="mn4">Huế-Bạch Mã-Đà Nẵng</option>
                            <option value="mn5">Nha Trang-Đà Lạt</option>
                            <option value="mn6" selected>Buôn Mê Thuột-Gia Lai-Kontum</option>
                        </optgroup>
                        <optgroup label="Miền Nam">
                            <option value="mn7">TP HCM-Cà Mau</option>
                            <option value="mn8">TP HCM-Mỹ Tho</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr style="height:40px">
                <th align="left">Phương tiện</th>
                <td>
                    <form action="">
                        <input type="radio" name="chkphgtien" >Máy bay
                        <input type="radio" name="chkphgtien" >Xe ô tô
                    </form>
                </td>
            </tr>
            <tr height="80px">
                <td colspan="2" align="center">
                    <form action="">
                        <label for="">Người lớn</label> &nbsp
                        <input type="number" name="songuoilon" style="width:70px;height:20px">
                        <label for="">Trẻ em</label> &nbsp
                        <input type="number" name="sotreem" style="width:70px;height:20px">
                    </form>
                </td>
            </tr>
            <tr>
                <th align="left">Ghi chu thêm</th>
                <td>
                    <textarea name="ghichu" id="" rows="10" style="width:350px;height:30px" placeholder="Có 2 trẻ em dưới 6 tuổi 
Có 2 người ăn chay"></textarea>
                </td>
            </tr>
            <tr style="height:40px">
                <td colspan="2" align="center">
                    <form action="">
                        <input type="submit" value="Đồng ý" style="width:60px;height:30px;">
                    </form>
                </td>
            </tr> 
            <tr style="height:40px">
                <th colspan="2" style="color:red;">Bạn đã đăng ký thành công!!!</th>
            </tr>
        </table>
    </div>
</body>
</html>