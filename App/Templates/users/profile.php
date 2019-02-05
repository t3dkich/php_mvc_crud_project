<?php /** @var \App\Data\UserDTO $data */ ?>

<h1>Hello, <?= $data->getFirstName()?></h1>
<form method="POST">
    <div>
        Username:<label>
            <input type="text" value="<?=$data->getUsername()?>" name="username">
        </label>
    </div>
    <div>

        password: <label><input required type="text" name="password">
        </label>
    </div>
    <div>

        first_name: <label><input type="text" value="<?=$data->getFirstName()?>" name="firstName">
        </label>
    </div>
    <div>

        last_name:<label> <input type="text" value="<?=$data->getLastName()?>" name="lastName">
        </label>
    </div>
    <div>

        born_on:<label> <input type="text" value="<?=$data->getBornOn()?>" name="bornOn">
        </label>
    </div>
    <div>
        <input type="submit" name="edit" value="Edit User">
    </div>
</form>

You can <a href="logout.php">logout</a> or see <a href="all.php">all users</a>