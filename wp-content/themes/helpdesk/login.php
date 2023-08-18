<?php
/*
Template Name: Login Page
*/
?>

<?php get_header() ?>

<div class="form-container">
    <div class="form" >
    <h2>Login</h2>
    <p>Don't have an account yet?<a href="http://localhost/helpdesk/">Sign Up</a></p>
    <div class="input">
        <label for="email address">Email address</label>
        <div class="icons">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" placeholder="Enter email address">
        </div>
    </div>
    <div class="input">
        <label for="Password">Password</label>
        <div class="icons">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" placeholder="Enter password">
        </div>
    </div>
    <div>
        <a href="">Forgot password?</a> <br>
    </div>
    <button>Login</button>
    </div>
</div>

<?php get_footer() ?>

<style>
    body {
        background-color: #fafafa;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        margin-bottom: 137px;
        margin-left: 525px;
        width: 300px;
        background-color: #fff;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;

    }
</style>