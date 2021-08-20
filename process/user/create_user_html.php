<?php
    require_once('../../partial/header.php');
    require_once('../../inc/database.php');
?>
<div class="container p-3 mt-3" >
    <form action="create_user_model.php" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username.." name="username">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Password.." name="password">
        </div>
        <div class="form-group">
            <input type="file" class="form-control-file border" name="image">
        </div>
        
        
        <div class="form-group">
            <select name="role" id="" class="form-control">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="unactive">Unactive</option>
            </select>
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary">Create</button>
        </div>
    
    </form>
</div>