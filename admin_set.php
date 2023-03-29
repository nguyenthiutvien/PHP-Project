<?php
class database{
    protected $server = "localhost";
    protected $username = "root";
    protected $password;
    protected $database = "traveldana";
    protected $link;

    public function __construct()
    {
        try {
            $this->link = new mysqli($this->server, $this->username, $this->password, $this->database);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }
    public function fetch($query)
    {
        $row = null;
        if ($sql = $this->link->query($query)) {
            while ($data = mysqli_fetch_assoc($sql)) {
                $row[] = $data;
            }
        }
        return $row;
    }
}

    class tourHot extends database
{
    public function create()
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_hot'];
        $anh = $_POST['img_hot'];
        $price = $_POST['price_hot'];
        $fromto = $_POST['fromto_hot'];
        $detail = $_POST['detail_hot'];
        $anh = $_FILES['img_hot']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_hot']['tmp_name'];
            $anh = $_FILES['img_hot']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "insert into tour_hot(name_hot,img_hot,price_hot,detail_hot,from_to_hot) value ('$name','$anh',$price,'$detail','$fromto')";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
            header("location: admin.php");
        }
    }
    public function edit($id)
    {
        ini_set('display_errors', 0);
        $name = $_POST['name_hot2'];
        $anh = $_POST['img_hot2'];
        $price = $_POST['price_hot2'];
        $fromto = $_POST['fromto_hot2'];
        $detail = $_POST['detail_hot2'];
        $anh = $_FILES['img_hot2']['name'];
        if ($anh != null) {
            $path = "images/";
            $tmp_name = $_FILES['img_hot2']['tmp_name'];
            $anh = $_FILES['img_hot2']['name'];
            move_uploaded_file($tmp_name, $path . $anh);
        }
        $query = "update tour_hot set name_hot='$name',img_hot='$anh',price_hot='$price',detail_hot='$detail',from_to_hot='$fromto' where id_hot='$id'";
        if ($sql = $this->link->query($query)) {
            echo "<script>alert('SUCCESS')</script>";
        }
    }
    public function delete($id)
    {
        $query = "delete from tour_hot where id_hot='$id'";
        if ($sql = $this->link->query($query)) {
            return true;
        } else return false;
    }
}


?>