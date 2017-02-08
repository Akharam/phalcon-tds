<div class="page-header">
    <h1>Congratulations!</h1>
</div>

<p>You're now flying with Phalcon. Great things are about to happen!</p>

<p>This page is located at <code>views/index/index.volt</code></p>

<table>
<?php foreach ($users as $user) { ?>

    <tr>
        <td><?= $user->getFirstname() ?></td>
        <td><?= $user->getLastname() ?></td>
        <td><?= $user->getEmail() ?></td>
    </tr>
<?php } ?>
</table>