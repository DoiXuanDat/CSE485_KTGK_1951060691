<?php include("template/header.php"); ?>
    <h1 style="text-align: center;"> Hệ Thống Quản Lý </h1>
    <table class="table" style="">
            <thead>
                <tr>
                    <th scope="col">Mã Môn Học</th>
                    <th scope="col">Tên Môn Học</th>
                    <th scope="col">Số Tín Chỉ</th>
                    <th scope="col">Số Tiết Lý Thuyết</th>
                    <th scope="col">Số Tiết Bài Tập</th>
                    <th scope="col">Số Tiết Thực Hành</th>
                    <th scope="col">Số Giờ Tự Học</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                    <th scope="row"><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['mamh']; ?></a></th>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['ten_mh']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotinchi']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_lt']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_bt']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sotiet_thtn']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['mamh']; ?>"><?php echo $data['sogio_tuhoc']; ?></a></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['mamh']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['mamh']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
    </div>
<?php include("template/footer.php"); ?>