<div class="ui three item menu">
            {{link_to("users/index/", "<button class='ui icon button'>Retour a la liste</button>") }}
  </div>
<form class="ui form"  method="post">

  <div class="field">

    <div class="two fields">
      <div class="field">
         <label>Nom</label>
        <input type="text" name="nom" placeholder="Nom" value="{{user.getFirstname()}}">
      </div>
      <div class="field">
        <label>Prenom</label>
        <input type="text" name="prenom" placeholder="Prenom" value="{{user.getLastname()}}">
      </div>
    </div>

    <div class="two fields">
          <div class="field">
             <label>Login *</label>
            <input type="text" name="login" placeholder="Login" value="{{user.getLogin()}}" required >
          </div>
          <div class="field">
            <label>Mot de passe *</label>
            <input type="password" name="password" placeholder="Password" value="{{user.getPassword()}}" required >
          </div>
    </div>

    <div class="field">
                 <label>Email *</label>
                <input type="email" name="mail" placeholder="Mail" value="{{user.getEmail()}}" required>
    </div>

    <div class="field">
                    <label>Role</label>
                    <select class="ui simple dropdown item">
                        {% for role in roles %}
                            <option value="{{ role.getId() }}" {% if(user.getId()!=null) %}{% if(user.getRole().getId()==role.getId()) %}selected{% endif %} {% endif %}>
                                {{ role.getName() }}
                            </option>
                        {% endfor %}
                    </select>
    </div>
  <input type="submit" class="ui green button" name="val">
  <button class="ui button">Réinisialiser</button>
</form>
