<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet"
    id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="section"></div>
        <main>
            <center>
                <div class="container">
                    <div class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row"
                        style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px; margin-top: 100px;">
                        <div class="section"></div>
                        <div class="section"></div>

                        <div class="section"><i class="mdi-alert-error red-text"></i></div>

                        <form method="POST" action="login.php" class="col s12">
                            <img src="../VIEW/images/logo.png" alt="">

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type="text" name='username' id='email' required />
                                    <label for='email'>Username</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col m12'>
                                    <input class='validate' type='password' name='password' id='password' required />
                                    <label for='password'>Password</label>
                                </div>
                                <label style='float: right;'>
                                    <a><b style="color: #F5F5F5;">Forgot Password?</b></a>
                                </label>
                            </div>
                            <br />
                            <center>
                                <div class='row'>
                                    <button style="margin-left:65px;" type='submit' name='btn_login'
                                        class='col  s6 btn btn-small white black-text  waves-effect z-depth-1 y-depth-1'>Login</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </center>
        </main>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

    </div>
</div>