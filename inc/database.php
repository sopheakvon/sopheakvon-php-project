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
   
        $imageName = $_FILES['image']['name'];
        $imageTmp_name = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        if($imageSize > 525000){
           
            header("Loation: http://localhost/sopheakvon-php-project/process/create_product_html.php");
        }else{
            $ex = pathinfo($imageName,PATHINFO_EXTENSION);
            $exLower = strtolower($ex);
            $allowExtention = array("jpg","png","jpeg");
            if(in_array($exLower,$allowExtention)){
                $newName = uniqid("food-", true).".".$exLower;
                $imagePath = "assets/image/".$newName;
                
                move_uploaded_file($imageTmp_name, $imagePath);
                return db()->query("INSERT INTO products(cate_id,proName,price, proDescript,proCode,image) VALUES('$cateId','$proName','$price','$proDescript','$proCode','$newName')");
                //echo("INSERT INTO products(cate_id,proName,price, proDescript,proCode,image) VALUES('$cateId','$proName','$price','$proDescript','$proCode','$newName')");
                
            }else{
                
                header("Loation: http://localhost/sopheakvon-php-project/process/create_product_html.php");
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
        if($imageSize > 525000){
           
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
    function createCategory($value){
        $cateName = $value['cateName'];

        return db()->query("INSERT INTO category(cateName) VALUES('$cateName')");

    }
    function selectCate($id){
        return db()->query("SELECT * FROM category WHERE cate_id = $id");
    }
    function updateCategory($value){
        $cateName = $_POST['cateName'];
        $id = $_POST['id'];
        return db()->query("UPDATE category SET cateName = '$cateName' WHERE cate_id = $id");
        
    }



    function getAllProducts(){
        return db()->query("SELECT * FROM products INNER JOIN category ON products.cate_id = category.cate_id ORDER BY pro_id DESC");
    }


    function getDetail($id){    
        return db()->query("SELECT * FROM products INNER JOIN category ON products.cate_id = category.cate_id WHERE pro_id = $id");

    }


    function SearchByTitle($value){
        $title = $value['title'];
        return db()->query("SELECT * FROM products INNER JOIN category ON products.cate_id = category.cate_id WHERE proName LIKE '%$title%' ");
    }

    // Login
    function userLogin($value){
        session_start();
        $userName =trim($value['username']);
        $password = trim($value['password']);
        $users = getUser();
        $isLogin = false;
        foreach($users as $user){
            
            if(password_verify($password,$user['password']) and $user['userName'] == $userName and !$isLogin){

                $isLogin = true;
                $_SESSION['user'] = $userName;
                $_SESSION['role'] = $user['role'];
                $_SESSION['message'] = " Login Success";
              
            }
        }
        if($isLogin){
                           
            header("Location: http://localhost/sopheakvon-php-project/?page=home");
        }else{
            $_SESSION['message'] = " Login Error";              
            header("Location: http://localhost/sopheakvon-php-project/?page=login");
        }
    
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: http://localhost/sopheakvon-php-project/?page=login");
        

    }
    