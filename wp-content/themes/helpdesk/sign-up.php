<?php
/*
Template Name: Sign-up Page
*/
?>

<?php get_header() ?>

<div class="form-container">
    <div class="form">
        <h2>Sign Up</h2>
        <div class="input">
            <label for="fullname">Full name</label>
            <div class="icons">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" placeholder="Enter full name">
            </div>
        </div>
        <div class="input">
            <label for="phone number">Phone number</label>
            <div class="icons">
                <ion-icon name="call-outline"></ion-icon>
                <input type="tel" placeholder="Enter phone number">
            </div>
        </div>
        <div class="input">
            <label for="email address">Email address</label>
            <div class="icons">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" placeholder="Enter email address">
            </div>
        </div>
        <div class="input">
            <label for="password">Password</label>
            <div class="icons">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" placeholder="Enter password">
            </div>
        </div>
        <button>Sign Up</button>
        <div>
            <p>Already have an account? <a href="<?php echo site_url('/login') ?>">Login</a> </p>
        </div>
    </div>
</div>

<?php get_footer() ?>

<style>
    body {
        background-color: #fafafa;
    }

    h2 {
        color: #007f5f;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        margin-top: 32px;
        margin-left: 525px;
        width: 300px;
        background-color: #fff;
        border-radius: 10px;
    }

    .form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    button {
        width: 100px;
        padding: 5px;
        border: none;
        background-color: #007f5f;
        color: #fff;
        border-radius: 15px;
    }
    /* input */
/* Style for the input container */
.input {
    display: flex;
    flex-direction: column;
}

/* Style for the label */
.label {
    font-size: 16px;
    margin-bottom: 6px;
}

/* Style for the icons container */
.icons {
    display: flex;
    align-items: center;
    border: 1px solid #f5f5f5;
    border-radius: 4px;
    padding: 8px;
}

/* Style for the ion-icon */
ion-icon {
    font-size: 20px;
    margin-right: 10px;
    color: #007f5f;
}

/* Style for the input */
input {
    border: none;
    outline: none;
    font-size: 16px;
    width: 100%;
}

</style>