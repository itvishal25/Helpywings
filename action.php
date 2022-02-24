<?php 
    if(isset($_POST['register']))
    {
        $name = $_POST['name'];
        $email = $_POST['phone'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];


        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","Helpywings");

        $query = "insert into posting (name,phone,image,address) values ('$name','$phone','$image','$address')";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>