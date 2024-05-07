<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form action="insertdata.php" method="post">
            <div>
                <label class="mt-2" for="firstname">ชื่อ</label>
                <input class="form-control" type="text" name="fname" id="">
            </div>
            <div>
                <label class="mt-2" for="lastname">นามสกุล</label>
                <input class="form-control" type="text" name="lname" id="">
            </div>
            <div>
                <label class="mt-2" for="gender">เพศ</label>
                <br>
                <input class="mt-2" type="radio" name="gender" value="male">ชาย
                <input class="mt-2" type="radio" name="gender" value="female">หญิง
            </div>
            <div>
                <label class="mt-2" for="skill">ทักษะ</label>
                <br>
                <input class="mt-2" type="checkbox" name="skill[]" value="c++">C++
                <br>

                <input class="mt-2" type="checkbox" name="skill[]" value="python">Python
                <br>

                <input class="mt-2" type="checkbox" name="skill[]" value="php">PHP
                <br>

                <input class="mt-2" type="checkbox" name="skill[] " value="java">Java
                <br>

            </div>
            <input class="btn btn-success mt-3" type="submit" value="save">
            <input class="btn btn-danger mt-3" type="reset" value="reset">
            <a href="./showdata.php" class="btn btn-primary mt-3">data</a>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>