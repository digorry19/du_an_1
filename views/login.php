<div class="main-content-wrapper pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="my_account_area">
                    <h2>Login</h2>
                    <form action="index.php?act=dangnhap" method="POST" class="customer_login">
                        <p class="form-row">
                            <label>Username or email address&nbsp;<span class="required">*</span></label>
                            <input type="text" value="" name="user" class="input-text" />
                        </p>
                        <p class="form-row">
                            <label>Password&nbsp;<span class="required">*</span></label>
                            <input type="password" name="pass" class="input-text" />
                        </p>
                        <p>
                            <input class="submit-button" type="submit" name="dangnhap" value="Đăng nhập"></input>
                            <label class="">
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme" />
                                <span>Remember me</span>
                            </label>
                        </p>
                        
                    </form>
                    <?php
                    if (isset($err) && ($err != "")) {
                        echo $err;
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="my_account_area">
                    <h2>Register</h2>
                    <form action="index.php?act=dangky" method="POST" class="customer_login">
                        <p class="form-row">
                            <label>Username&nbsp;<span class="required">*
                                    <?php
                                    if (isset($userErr) && ($userErr != "")) {
                                        echo $userErr;
                                    }
                                    ?>
                                </span></label>
                            <input type="text" value="<?php if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                                echo isset($_POST['user']) ? htmlspecialchars($_POST['user']) : '';
                            } ?>" name="user" class="input-text" />
                        </p>
                        <p class="form-row">
                            <label>Email address&nbsp;<span class="required">*
                                    <?php
                                    if (isset($emailErr) && ($emailErr != "")) {
                                        echo $emailErr;
                                    }
                                    ?>
                                </span></label>
                            <input type="email" value="<?php if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                                echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
                            } ?>" name="email" class="input-text" />
                        </p>
                        <p class="form-row">
                            <label>Password&nbsp;<span class="required">*
                                    <?php
                                    if (isset($passErr) && ($passErr != "")) {
                                        echo $passErr;
                                    }
                                    ?>
                                </span></label>
                            <input type="password" value="<?php if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                                echo isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';
                            } ?>" name="pass" class="input-text" />
                        </p>
                        <p>
                            <input class="submit-button" type="submit" name="dangky" value="Đăng ký"></input>
                    </form>
                    <?php
                    if (isset($thongBao) && ($thongBao != "")) {
                        echo $thongBao;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>