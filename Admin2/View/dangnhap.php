<!-- <div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h2 class="mt-3" >Sign In</h2>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post" action="index.php?action=dangnhap&act=dangnhap_action" class="login-form">

		<label for="" class="text-uppercase text-sm">Your Username </label>
		<input type="text" placeholder="Username" name="txtusername" class="form-control mb">

		<label for="" class="text-uppercase text-sm">Password</label>
		<input type="password" placeholder="Password" name="txtpassword" class="form-control mb">
		

		<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>

			<p style="margin-top: 4%" align="center"><a href="">Back to Home</a>	</p>
							</div>

						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
	h2 {
  font-size: 50px;
  text-align: center;
  padding-block: 20px;
  padding-inline: 20px;
  border-radius: 10px;
  -webkit-text-stroke: 5px #ffc5c1;
  background: linear-gradient(90deg, #e95d77, #e95d77);
  background-clip: text;
  color: transparent;
}
button {
  transition: color 0.8s ease-in-out, transform 0.8s ease-in-out,
    background-color 0.8s ease-in-out;
  background-color: #ffb9b4;
  font-weight: 10px;
  border: 3px solid #00a5f5;
  align-items: center;
  padding: 0px 20px;
  font-size: 20px;
}
button:hover {
  color: #fee7ed;
  transform: scale(1.2);
  background-color: #00a5f5;
}
	</style> -->

	<div class="login mt-5 mb-5">
		<form method="post" action="index.php?action=dangnhap&act=dangnhap_action" class="login-form">
			<h2>Sign In</h2>
			<div class="inputBox">
				<input type="text" placeholder="Username" name="txtusername" class="form-control mb">
				<i class="fa fa-user"></i>
			</div>
			<div class="inputBox">
				<input type="password" placeholder="Password" name="txtpassword" class="form-control mb">
				<i class="fa fa-lock"></i>
			</div>
			<label for="">
				<input type="checkbox" value="">Keep me logged in 
			</label>
			<div class="inputBox">
				<input name="login" type="submit"></input>
			</div>
		</form>
		<h4>OR</h4>
		<p align="center"><a href="">Back to Home</a></p>
	</div>
	<style>
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}
.login {
    position: relative;
    width: 380px;
    padding:10px 50px;
    box-shadow: 15px 15px 20px rgb(0, 0, 0, 0.1), -15px -15px 20px #ede0cf;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    gap: 20px;
	margin-left:300px;
}

.login form {
    position: relative;
    width: 100%;
}

.login form h2 {
font-size: 50px;
  text-align: center;
  padding-block: 20px;
  padding-inline: 20px;
  border-radius: 10px;
  -webkit-text-stroke: 5px #e0c0a9;
  background: linear-gradient(90deg, #e95d77, #e95d77);
  background-clip: text;
  color: transparent;
}

.login form .inputBox {
    position: relative;
    display: flex;
}

.login form .inputBox input {
    border: none;
    outline: none;
    background: transparent;
    border-radius: 10px;
    font-size: 1em;
}

.login form .inputBox input[type="text"],
.login form .inputBox input[type="password"] {
    width: 100%;
    padding: 15px 20px;
    padding-left: 40px;
    margin-bottom: 20px;
    box-shadow: inset 5px 5px 10px rgb(0, 0, 0, 0.1), inset -5px -5px 10px #fff;
}

.login form .inputBox i {
    position: absolute;
    left: 20px;
    top: 25%;
}

.login form label {
    display: flex;
    align-items: center;
}

.login form input[type="checkbox"] {
    margin-right: 5px;
}

.login form .inputBox input[type="submit"] {
    margin-top: 20px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.1), -5px -5px 10px #fff;
    width: 100%;
    padding: 15px 20px;
    cursor: pointer;
    font-weight: 600;
}
.login form .inputBox input[type="submit"]:focus{
    box-shadow: inset 5px 5px 10px rgba(0,0,0,0.1), inset -5px -5px 10px #fff;
}

	</style>

