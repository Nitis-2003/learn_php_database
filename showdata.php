<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="./index.php" class="btn btn-danger ms-5 me-5 mt-2 mb-2">Back</a>

    <div class="ms-5 me-5 mt-2">
        <table class="table table-bordered">
            <thead>
                <td>รหัสสมาชิก</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>เพศ</td>
                <td>ทักษะ</td>
                <td>ลบข้อมูล</td>
            </thead>
                <?php
        require 'dbconnect.php';
        $showdata = mysqli_query($con,"SELECT * FROM employee");
        $num =1;
        ?>  
        
        
        <?php while($row = mysqli_fetch_row($showdata)){?>
            <tr>
            <td><?php echo $num++; ?></td> 
            <td><?php echo $row[1];?></td>
            <td><?php echo $row[2];?></td>
            <td><?php echo $row[3]=='male'? 'ผู้ชาย':'ผู้หญิง';?></td>
            <td><?php echo $row[4]; ?></td>
            <td><a href="delete.php?idemp=<?php echo $row[0];?>" class="btn btn-danger" onclick="confirmalert(event)">ลบข้อมูล</a></td>
            </tr>
       <?php }?>
        
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmalert(event){
        event.preventDefault();
        const url = event.target.getAttribute('href');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
</html>
