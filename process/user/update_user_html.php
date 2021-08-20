<?php
    require_once('../../partial/header.php');
    require_once('../../inc/database.php');
    $id  = $_GET['id'];
    $selectUser  = selectUser($id);
    
    foreach ($selectUser as $user):
?>
<div class="container p-3 mt-3" >
    <form action="update_user_model.php" method="post">
        <input type="hidden" name="id" value="<?=$user['user_id']?>">
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username.." name="username" value="<?=$user['userName']?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Password.." name="password" value="<?=$user['password']?>">
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
            <button class="form-control btn btn-primary">UPDATE</button>
        </div>
    
    </form>
    <?php endforeach; ?>
</div>