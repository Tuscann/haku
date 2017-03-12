<?php
require 'User.php';
$user = unserialize(file_get_contents('user'));
$userInfo = $user->getData();

?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px;
    }
</style>

<table>
    <thead>
    <tr>
        <th>UserID</th>
        <th>Name</th>
        <th>Email</th>
        <th>UserPicture</th>
        <th>UserFirstName</th>
        <th>UserLastName</th>
        <th>UserPassword</th>
    </tr>
    </thead>

<!--    --><?php //foreach($users as $key=>$value): ?>
    <tr>
        <td><?php echo $user->getUserId() ?></td>
        <td><?php echo $user->getUserName() ?></td>
        <td><?php echo $user->getEmail() ?></td>
        <td><?php echo $user->getUserPicture() ?></td>
        <td><?php echo $user->getUserFirstName() ?></td>
        <td><?php echo $user->getUserLastName() ?></td>
        <td><?php echo $user->userPassword() ?></td>
    </tr>
<!--    //--><?php //endforeach; ?>

</table>


<?php var_dump($userInfo); ?>






