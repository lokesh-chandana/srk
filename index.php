<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SRK</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
	<style>
		body {
			background-color: #121212;
			color: white;
		}

		.login_link{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="app" class="container d-flex justify-content-center align-items-center vh-100">
		<div class="card bg-dark text-light p-4" style="width: 22rem;">
			<div class="card-body">
				<div v-if="showLogin" key="login">
					<h5 class="card-title">Login</h5>
					<input type="text" class="form-control mb-2" placeholder="Username" v-model="loginData.username">
					<input type="password" class="form-control mb-2" placeholder="Password" v-model="loginData.password">
					<button class="btn btn-primary w-100" @click="login">Login</button>
					<p class="mt-2 text-center">
						First Login? <a @click="toggleLogin('signUp')" class="text-info btn-link login_link">Sign Up Here</a>
					</p>
				</div>
				<div v-else key="signup">
					<h5 class="card-title">Signup</h5>
					<div v-if="userFound">
						<input type="text" class="form-control mb-2" placeholder="New Username" v-model="signupData.username">
						<input type="email" class="form-control mb-2" placeholder="Email" v-model="signupData.email">
						<input type="password" class="form-control mb-2" placeholder="Password" v-model="signupData.password">
						<button class="btn btn-success w-100" @click="signup">Signup</button>
					</div>
					<div v-else>
						<input type="number" class="form-control mb-2" placeholder="Enter Mobile Number" v-model="signupData.mobile">
						<button class="btn btn-success w-100" @click="search_student">Search Student</button>
					</div>
					<p class="mt-2 text-center">
						Already have an account? <a @click="toggleLogin('Login')" class="text-info btn-link login_link">Login Here</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<script>
		var app = Vue.createApp({
			data() {
				return {
					showLogin: true,
					loginData: {
						username: '',
						password: ''
					},
					userFound: false,
					signupData: {
						username: '',
						email: '',
						password: '',
						mobile:''
					}
				};
			},
			methods: {
				login() {
					console.log("Login function called");
				},
				signup() {
					console.log("Signup function called");
				},
				search_student(){
					console.log(this.signupData['mobile'])

				},
				toggleLogin(vdata){
					if (vdata == 'signUp') {
						this.showLogin = false;
					}else if (vdata == 'Login') {
						this.showLogin = true;
					}
				}
			}
		}).mount("#app");
	</script>
</body>
</html>
