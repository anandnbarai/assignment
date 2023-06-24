<?php

//! Database Connection
class Model
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'phpcrud';
    private $conn;

    function __construct()
    {

        $chk = $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($chk->connect_error) {
            echo 'Connection Failed.';
        } else {
            echo "";
            //return $this->conn;
        }
    }

    //! function for insert records

    public function insertRecord($post)
    {
        $name = $post['name'];
        $email = $post['email'];
        $sql = "insert into users(name,email) values('$name','$email')";
        $result = $this->conn->query($sql);

        if ($result) {

            //? location will divert to index.php page
            //? this string will use in index page or where we need to display alert when GET['msg'] variable is set

            header('location:index.php?msg=insert');

        } else {
            echo 'error' . $sql . '<br>' . $this->conn->error;
        }

        //? below if statement is also right to display message but it'll display message at top. 
        //? above if statement is used to display message whereever we want by using if(isset) condition

        // if ($result) {
        //     // The query was successful.
        //     echo 'Record inserted successfully.';
        // } else {
        //     // The query failed.
        //     echo 'Error inserting record: ' . $this->conn->error;
        // }
    }

    //! Function for Update Record

    public function updateRecord($post)
    {
        $name = $post['name'];
        $email = $post['email'];
        $updateid = $post['upd'];
        $sql = "update users set name ='$name', email = '$email' where id = '$updateid'";
        $result = $this->conn->query($sql);

        if ($result) {

            //? location will divert to index.php page
            //? this string will use in index page or where we need to display alert when GET['msg'] variable is set

            header('location:index.php?msg=update');

        } else {
            echo 'error' . $sql . '<br>' . $this->conn->error;
        }
    }

    //! Function for delete record

    public function deleteRecord($did)
    {
        $sql = "delete from users where id = '$did'";
        $result = $this->conn->query($sql);

        if ($result) {
            header('location:index.php?msg=delete');
        } else {
            echo "Error " . $sql . "<br>" . $this->conn->error;
        }
    }

    //! Function for  Display records

    public function displayRecord()
    {
        $sql = "select * from users";
        $result = $this->conn->query($sql);
        // $result = mysqli_query($this->conn,$sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            } //* while loop closev
            return $data;
        } //* if loop close

        //? we can also write same code in different way

        // $result = mysqli_query($this->conn,$sql);
        // $num_rows = mysqli_num_rows($result);

        // if($num_rows>0){
        //     while($fetch = mysqli_fetch_assoc($result)){
        //         $data[] = $fetch;
        //     }
        //     return $data;
        // }
    }

    //! funtion for editid
    
    public function displayRecordById($editid)
    {
        $sql = "select * from users where id = '$editid'";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row;
        }
    }
}

?>