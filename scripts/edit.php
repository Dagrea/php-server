    <?php
     function edit($id=1,$name="Ключи Пангеи",$author="Джон Голд",$price=322,$description="Фантастика") {
        $conn = mysqli_connect("localhost:3306", "root", "root", "readmag");
        $sql = "UPDATE book SET name='$name', author='$author', price='$price', description='$description' WHERE id=$id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    ?>