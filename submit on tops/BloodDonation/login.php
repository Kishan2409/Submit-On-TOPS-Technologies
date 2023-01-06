<div class="col-md-12">
    <div class="row">
        <!-- this is main -->
        <div class="col-md-12 mainfile">
            <div class="container"><br>
                <h3>Login</h3>
                <p>According to the American Red Cross, one donation can save as many as three lives, and
                    someone in
                    the world needs blood every two seconds.</p>
                <hr>
                <br>
                <form method="post">
                    <div class="form-group m-2">
                        <input type="text" name="user" class="form-control us" placeholder="Enter Email/Mobile Numer"
                            required>
                    </div>
                    <div class="form-group m-2">
                        <input type="password" name="pass" class="form-control pass" placeholder="Enter password"
                            required>
                        <p class="float-end mt-3"><a href="<?php echo $mainurl; ?>forget password">Forget Password ?</a></p>
                    </div>
                    <div class="form-group mt-5 p-2">
                        By continuing , you agree to Blood Donation <a href="#">Terms of Use and Privacy Policy.</a>
                    </div>
                    <div class="form-group m-2">
                        <input type="submit" name="login" class="bt-red" value="Login">
                    </div>
                    <div class="form-group m-2 ">
                        <p class="text-black">Don't have an account <a href="<?php echo $mainurl; ?>register">
                                Create your account?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>