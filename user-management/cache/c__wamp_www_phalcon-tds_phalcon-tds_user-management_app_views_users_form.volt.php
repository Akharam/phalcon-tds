<div class="ui three item menu">
            <?= $this->tag->linkTo(['users/index/', '<button class=\'ui icon button\'>Retour a la liste</button>']) ?>
  </div>
<form class="ui form">

  <div class="field">

    <div class="two fields">
      <div class="field">
         <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" value="<?= $user->getFirstname() ?>">
      </div>
      <div class="field">
        <label>Prenom</label>
        <input type="text" name="prenom" placeholder="Prenom" value="<?= $user->getLastname() ?>">
      </div>
    </div>

    <div class="two fields">
          <div class="field">
             <label>Login *</label>
            <input type="text" name="login" placeholder="Login" value="<?= $user->getLogin() ?>" required >
          </div>
          <div class="field">
            <label>Mot de passe *</label>
            <input type="password" name="password" placeholder="Password" value="<?= $user->getPassword() ?>" required >
          </div>
    </div>

    <div class="field">
                 <label>Email *</label>
                <input type="email" name="mail" placeholder="Mail" value="<?= $user->getEmail() ?>" required>
    </div>

    <div class="field">
              <select class="ui fluid search dropdown" name="role">
                <option value="user">user</option>
                <option value="admin">admin</option>
                <option value="superadmin">superadmin</option>
              </select>
            </div>
  </div>
  <button class="ui green button">Valider</button>
  <button class="ui button">Réinisialiser</button>
</form>
