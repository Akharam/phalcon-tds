
<div class="ui three item menu">
   <?= $this->tag->linkTo(['users/form/', '<i class=\'add user icon\'></i>  Nouvel Utilisateur...']) ?>

</div>
  <table class="ui sortable celled table">
    <thead>
      <tr>
        <th><input type="checkbox" name="example"></th>
        <th class="sorted ascending">Prenom</th>
        <th class="sorted ascending">Nom</th>
        <th class="sorted ascending">Email</th>
        <th class="sorted ascending">Role</th>
        <th></th>
    </tr>
    </thead>
  <tbody>
    <?php foreach ($users as $user) { ?>

        <tr>
            <td>
                <input type="checkbox" name="example">
            </td>
            <td><?= $user->getFirstname() ?></td>
            <td><?= $user->getLastname() ?></td>
            <td><?= $user->getEmail() ?></td>
            <td><?= $user->getRole()->getName() ?></td>
            <td>
            <?= $this->tag->linkTo(['users/form/' . $user->getId(), '<button class=\'ui icon button\'><i class=\'edit icon\'></i></button>']) ?>
            <button class='ui icon button'>
            <i class="ban icon"></i>
            </button>
            </td>
        </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr><th>3 People</th>
    <th>2 Approved</th>
    <th></th>
  </tr></tfoot>
</table>