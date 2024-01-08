<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <label for="file">文件名：</label>
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" name="submit" value="提交">
    </form>

    <?php
        if(isset($_POST["submit"])) {
            $target_dir = "./uploads/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // 检查文件是否已经存在
            if (file_exists($target_file)) {
                echo "文件已经存在。";
                $uploadOk = 0;
            }

            // 检查文件大小
            if ($_FILES["file"]["size"] > 50000000) {
                echo "文件过大。";
                $uploadOk = 0;
            }

            // 允许上传的文件格式
            if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "php3" && $imageFileType != "php4" && $imageFileType != "php") {
                echo "只允许上传DOC, DOCX 和 PDF格式的文件。";
                $uploadOk = 0;
            }

            // 检查 $uploadOk 是否为 0
            if ($uploadOk == 0) {
                echo "文件未上传。";
                // 如果一切都符合要求，就尝试上传文件
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "文件 ". htmlspecialchars( basename( $_FILES["file"]["name"])). " 已经上传。";
                } else {
                    echo "上传文件时出现了错误。";
                }
            }
        }
    ?>

</body>
</html>