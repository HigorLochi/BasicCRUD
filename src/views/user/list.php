<header class="main">
    <h1>User List</h1>
</header>

<div class="row gtr-200">
    <div class="col-12 col-12-medium">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Postal Code</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?= protectedVariableText($user->getName()); ?></td>
                            <td><?= protectedVariableText($user->getAge()); ?></td>
                            <td><?= protectedVariableText($user->getPhone()); ?></td>
                            <td><?= protectedVariableText($user->getEmail()); ?></td>
                            <td><?= protectedVariableText($user->getPostalCode()); ?></td>
                            <td>
                                <a href="<?= "index.php?" . http_build_query(['controller' => 'user', 'action' => 'update', 'id' => protectedVariableText($user->getId())]) ?>" class="icon solid fa-edit">
                                    <span class="label">Edit</span>
                                </a>
                            </td>
                            <td>
                                <a onclick="deleteUser(<?= protectedVariableText($user->getId()); ?>)" class="icon solid fa-trash">
                                    <span class="label">Delete</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="views/js/user/deleteuser.js"></script>