<?php if ($_SESSION["login"] === 0) {?>
    <!-- form Iniciar Sesion -->
    <div class="form" style="height: 420px;" >
        <div class="title">Iniciar Sesion</div>
            <div class="subtitle"></div>

            <div class="error"><?php  echo($_SESSION["missatge"])?></div>
            <!-- Campos -->
            <form action="login.php" method="POST">
                <div class="input-container ic1">
                    <input name="email" id="email" class="input" type="email" placeholder=" " required/>
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Email</>
                </div>
                <div class="input-container ic2">
                    <input name="pasw" id="pasw" class="input" type="password" placeholder=" " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" required/>
                    <div class="cut"></div>
                    <label for="pasw" class="placeholder">Contrasenya</label>
                </div>
                <!-- submit -->
                <button type="text" class="submit">Iniciar Sesion</button>
            </form>
        </div>

        <!-- Form Registrar -->
        <div class="form form2" style="height: 580px;">
            <div class="title">Registrar</div>
            <div class="subtitle">Creem el teu compte!</div>

            <div class="error"><?php  echo($_SESSION["registrar"])?></div>
            <!-- Campos -->
            <form action="Registrar.php" method="POST">

                <div class="input-container ic1">
                    <input name="nom" class="input" type="text" placeholder=" " minlength="2" required/>
                    <div class="cut cut-short"></div>
                    <label for="nom" class="placeholder">Nom</label>
                </div>

                <div class="input-container ic2">
                    <input name="cognom" class="input" type="text" placeholder=" " minlength="2" required/>
                    <div class="cut"></div>
                    <label for="cognom" class="placeholder">Cognom</label>
                </div>

                <div class="input-container ic2">
                    <input name="email" class="input" type="email" placeholder=" " required/>
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Email</>
                </div>
                <div class="input-container ic2">
                    <input name="pasw" class="input" type="password" placeholder=" " pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" required/>
                    <div class="cut"></div>
                    <label for="pasw" class="placeholder">Contrasenya</label>
                </div>
                <!-- submit -->
                <button type="text" class="submit">Registrar</button>
            </form>
        </div>
    </div>
<?php }?>


