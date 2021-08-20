<?php
    function db(){
        return new mysqli('localhost','root','','foodonline');
    }
    
// Crue product
    function getFoodByCategory($category){
        return db()->query("SELECT * FROM products INNER JOIN category ON products.cate_id = category.cate_id WHERE category.cateName = '$category'");
    }

    


    function createProduct($value){
        $proName = $value['proname'];
        $price = $value['price'];
        $proDescript = $value['prodescript'];
        $cateId = $value['cateID'];
        $proCode = $value['code'];
        $chooseFile = $value['image'];
        $imageName = $_FILES['image']['name'];
        $imageTmp_name = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        if($imageSize > 125000){
           
            header("Loation: http://localhost/sopheakvon-php-project/process/user/create_user_html.php");
        }else{
            $ex = pathinfo($imageName,PATHINFO_EXTENSION);
            $exLower = strtolower($ex);
            $allowExtention = array("jpg","png","jpeg");
            if(in_array($exLower,$allowExtention)){
                $newName = uniqid("food-", true).".".$exLower;
                $imagePath = "assets/image/".$newName;
                //echo(dirname(getcwd()));
                move_uploaded_file($imageTmp_name, $imagePath);
                return db()->query("INSERT INTO products(cate_id,proName,price, proDescript,proCode,image) VALUES('$cateId','$proName','$price','$proDescript','$proCode','$chooseFile')");
                
            }else{
                
                header("Loation: http://localhost/sopheakvon-php-project/process/user/create_user_html.php");
            }
        }
        
        
    }

    

    function selectProduct($id){
        return db()->query("SELECT * FROM products WHERE pro_id = $id");
    
        
    }

    function updateProduct($value){
        $proName = $value['proname'];
        $price = $value['price'];
        $proDescript = $value['prodescript'];
        $cateId = $value['cateID'];
        $proCode = $value['code'];
        $chooseFile = $value['image'];
        $id = $value['id'];
       
        
        return db()->query("UPDATE products SET cate_id = '$cateId',proName='$proName', price='$price', proDescript='$proDescript', proCode='$proCode' WHERE pro_id = $id");
        
        
    }
    function delete($id,$table,$tableId){
        return db()->query("DELETE FROM $table WHERE $tableId = $id");
        
    }



// Crud User
    function getUser(){
        return db()->query("SELECT * FROM users");
    }
    function createUser($value){
        
        $userName = $value['username'];
        $password = password_hash($value['password'],PASSWORD_DEFAULT);
        $role = $value['role'];
        $status = $value['status'];
        $imageName = $_FILES['image']['name'];
        $imageTmp_name = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        if($imageSize > 125000){
           
            header("Loation: http://localhost/sopheakvon-php-project/process/user/create_user_html.php");
        }else{
            $ex = pathinfo($imageName,PATHINFO_EXTENSION);
            $exLower = strtolower($ex);
            $allowExtention = array("jpg","png","jpeg");
            if(in_array($exLower,$allowExtention)){
                $newName = uniqid("food-", true).".".$exLower;
                $imagePath = "../assets/image/".$newName;
                //echo(dirname(getcwd()));
                move_uploaded_file($imageTmp_name, $imagePath);
                return db()->query("INSERT INTO users(userName,password,profile,role,status) VALUES('$userName','$password','$newName','$role','$status')");
                
            }else{
                
                header("Loation: http://localhost/sopheakvon-php-project/process/user/create_user_html.php");
            }
        }
        
        
    }
    function selectUser($id){
        return db()->query("SELECT * from users WHERE user_id = $id");
    }
    function updateUser($value){
       
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $status = $_POST['status'];
        $id = $_POST['id'];
        return db()->query("UPDATE users SET userName='$userName', password='$password', role='$role', status='$status' WHERE user_id = $id");
        
    }



    



// Crud Category
    function getCategory(){
        return db()->query("SELECT * FROM category");
    }
    function createCategory(){
        
    }


?>