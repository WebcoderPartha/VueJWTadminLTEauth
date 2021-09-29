<template>
    <div>
        <div class="login-box m-auto">
            <div class="login-logo">
                <b>Admin Panel</b>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>

                    <form @submit.prevent="login">
                        <div class="input-group mb-3">
                            <input type="email" v-model="form.email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <br>
                            <div class="text-danger" v-if="errors ? errors.email : ''">
                                <small><b>{{ errors.email[0] }}</b></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" v-model="form.password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <br>
                            <div class="text-danger" v-if="errors ? errors.password : ''">
                                <small><b>{{ errors.password[0] }}</b></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

<!--                    <div class="social-auth-links text-center mb-3">-->
<!--                        <p>- OR -</p>-->
<!--                        <a href="#" class="btn btn-block btn-primary">-->
<!--                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook-->
<!--                        </a>-->
<!--                        <a href="#" class="btn btn-block btn-danger">-->
<!--                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+-->
<!--                        </a>-->
<!--                    </div>-->
                    <!-- /.social-auth-links -->
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",
    created() {
        if(User.loggedIn()){
            this.$router.push({ name: 'Dashboard' });
            Notification.Warning("<b>You already Signed In!</b>");
        }
    },
    data(){
        return {
            form : {
                email   : '',
                password: '',
            },
            errors      : {}
        }
    },
    methods:{
        login(){
            axios.post('/api/auth/login', this.form)
                .then(response => {
                    User.responseAfterLogin(response)
                    this.$router.push({ name: 'Dashboard' });
                    $('.content-wrapper').css('margin-left', '');
                }).catch(error => {
                    this.errors = error.response.data.errors;
                    Notification.Error("Something Went Wrong!");
            })
        }
    }

}
</script>

<style scoped>

</style>
