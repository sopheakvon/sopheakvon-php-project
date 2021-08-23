<div class="container p-3 mt-3">
<?php require_once('inc/database.php'); ?>
    <div class=" p-4">
        <a href="process/user/create_user_html.php" class="btn btn-primary"> Add User +</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>userId</th>
            <th>UserName</th>
            
            <th>Profile</th>
            <th>role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php 
            $users = getUser();
            foreach($users as $user):
        ?>
        <tr>
            <td><?=$user['user_id']?></td>
            <td><?=$user['userName']?></td>
            
            <td><img src="process/assets/image/<?=$user['profile']?>" width="100" alt=""></td>
            <td><?=$user['role']?></td>
            <td><?=$user['status']?></td>
            <td>
                <a href="process/user/update_user_html.php?id=<?=$user['user_id']?>" class="btn btn-primary btn-sm mr-"><i class="fa fa-pencil"></i></a>
                <a href="process/user/delete_user.php?id=<?=$user['user_id']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>