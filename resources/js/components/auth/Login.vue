<template>
<div class="login-box offset-md-6">
    <!-- /.login-logo -->
    <div class="card">
    <div class="card-body login-card-body">
        <div class="justify-content-center text-center my-3 mb-4">
            <p class="text-primary h4">Login as USER</p>
        </div>

        <form action="#" method="POST">
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control" placeholder="Email" name="email" required autocomplete="email" autofocus >
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                Remember Me
                </label>
            </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
            </div>
            <button type="submit" class="btn btn-primary btn-block my-3 text-white">Sign In</button>
            <!-- /.col -->
        </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
</div>
</template>

<script>
export default {

}
</script>

<style>

</style>