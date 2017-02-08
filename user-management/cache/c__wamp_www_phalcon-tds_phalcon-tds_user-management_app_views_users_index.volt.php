

<table class="ui sortable celled table">
  <thead>
    <tr>
      <th>Prenom</th>
      <th>Nom</th>
      <th>Login</th>
      <th>Email</th>
      <th>Role</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>

        <tr>
            <td><?= $user->getFirstname() ?></td>
            <td><?= $user->getLastname() ?></td>
            <td><?= $user->getEmail() ?></td>
        </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr><th>3 People</th>
    <th>2 Approved</th>
    <th></th>
  </tr></tfoot>
</table>