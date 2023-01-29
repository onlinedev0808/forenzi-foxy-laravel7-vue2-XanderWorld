<template>
    <main class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="h5 mx-4 large font-weight-bold">
                        <h1>SIGN IN</h1>
                    </div>
                </div>
                <div class="col-md-6 d-flex offset-md-3">
                    <div id="details">
                        <form>
                            <div class="form-group">
                                <label class="">E-MAIL ADDRESS</label>
                                <div class="d-flex usify-content-start align-items-center p-2">
                                    <input type="email" value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="">PASSWORD</label>
                                <div class="d-flex usify-content-start align-items-center p-2">
                                    <input type="password" value="" />
                                </div>
                            </div>

                            <div lass="col-md-12 my-4 d-flex justify-content-center w-100">
                                <div type="submit" @click="register" class="btn btn-primary">
                                    SIGN IN
                                </div>
                                <div  class="btn btn-default">
                                    <router-link to="/register">
                                        SIGN UP
                                    </router-link>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {};
</script>
