    <?php
    function getAll() {
        $conn = mysqli_connect("localhost:3306", "root", "root", "readmag");
        $sql = "SELECT * FROM book";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    ?>