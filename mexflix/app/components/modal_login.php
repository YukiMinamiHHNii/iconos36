<div id="modal-login" class="modal">
  <div class="modal-content">
    <div class="row center">
      <form class="col s12" method="POST">
        <div class="row">
          <div class="input-field col s12  red-text">
            <i class="material-icons prefix">account_circle</i>
            <input id="user" name="user" type="text" class="validate">
            <label for="user">Usuario</label>
          </div>
          <div class="input-field col s12  red-text">
            <i class="material-icons prefix">vpn_key</i>
            <input id="pass" name="pass" type="password" class="validate">
            <label for="pass">Contraseña</label>
          </div>
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light red" type="submit" name="action">
              Enviar <i class="material-icons right">send</i>
            </button>
            <input type="hidden" name="send_session">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
