<?php 
	header ('Content-type: text/css; charset:UTF-8')

?>




/*---------------------------------------Log In-------------------------------------*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image:url(../pictures/bg.png);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 400px;
    min-height: 400px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}

.container .login-text {
    color: #000;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.container .login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}

.container .login-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
}

.container .login-social a i {
    margin-right: 5px;
}

.container .login-social a.facebook {
    background: #4267B2;
}

.container .login-social a.twitter {
    background: #1DA1F2;
}

.container .login-social a.google-plus {
    background: #db4a39;
}

.container .login-social a.linkedin {
    background: #0e76a8;
}

.container .login-social a.facebook:hover {
    background: #3d5fa3;
}

.container .login-social a.twitter:hover {
    background: #1991db;
}

.container .login-social a.google-plus:hover {
    background: #ca4334;
}

.container .login-social a.linkedin:hover {
    background: #0b5c81;
}

.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

.container .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: white;
    outline: none;
    transition: .3s;
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #3270e3;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #3270e3;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #0f56d9;
}

.login-register-text {
    color: #000;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #3270e3;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    .container .login-social {
        display: block;
    }
    .container .login-social a {
        display: block;
    }
}

