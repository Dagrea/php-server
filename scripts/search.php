    <?php
    function search($id=1) {
        $conn = mysqli_connect("localhost:3306", "root", "root", "readmag");
        $sql = "SELECT * FROM book WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    ?>