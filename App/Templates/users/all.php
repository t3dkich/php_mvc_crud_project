<?php /** @var \App\Data\UserDTO[] $data */ ?>
<h1>All Users</h1>

<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Username</td>
        <td>FullName</td>
        <td>LastName</td>
    </tr>
    </thead>

    <?php foreach ($data as $user): ?>
        <tr>
            <td><?= $user->getId() ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getFirstName() . ' ' . $user->getLastName() ?></td>
            <td><?= $user->getBornOn() ?></td>
        </tr>
    <?php endforeach; ?>

    <tbody>

    </tbody>
</table>

Go back to <a href="profile.php">your profile</a>...