<template>
    <div class="login-box offset-md-6">
            <div class="card">
                <div class="card-header text-center h4 text-primary">REGISTRATION</div>
                <div class="card-body text-sm">
                    <form method="POST" action="#">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confrim Password*</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</template>

<script>
export default {

}
</script>

<style>

</style>