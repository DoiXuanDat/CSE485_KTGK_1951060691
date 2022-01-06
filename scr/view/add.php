<?php include("template/header.php"); ?>
    <main>
        <form method="post">
            <div class="container">
                <h5 class="text-center text-primary mt-5">Thêm mới</h5>

                <form action="controller.php" method="post">
                    <div class="form-group">
                        <label for="txtMonHoc">Môn Học</label>
                        <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nhập tên môn học">
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="intTinchi">Số Tín Chỉ</label>
                        <input type="text" class="form-control" id="intCredits" name="intCredits" placeholder="Nhập số tín chỉ">
                        
                    </div>

                    <div class="form-group">
                        <label for="intTietLT">Số Tiết Lý Thuyết</label>
                        <input type="text" class="form-control" id="intTheory" name="intTheory" placeholder="Nhập số tiết lý thuyết">
                        
                    </div>
                    <div class="form-group">
                        <label for="intTietBT">Số Tiết Bài Tập</label>
                        <input type="text" class="form-control" id="intExercise" name="intExercise" placeholder="Nhập số tiết bài tập">
                        
                    </div>
                    <div class="form-group">
                        <label for="intTietTH">Số Tiết Thực Hành</label>
                        <input type="text" class="form-control" id="intPractice" name="tintPractice" placeholder="Nhập số tiết thực hành">
                    </div>
                    <div class="form-group">
                        <label for="intTuHoc">Số Giờ Tự Học</label>
                        <input type="text" class="form-control" id="intSelf" name="intSelf" placeholder="Nhập số giờ tự học">
                    
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Lưu</button>
                </form>
            </div>    
        </form>    
    </main>
<?php include("template/footer.php"); ?>