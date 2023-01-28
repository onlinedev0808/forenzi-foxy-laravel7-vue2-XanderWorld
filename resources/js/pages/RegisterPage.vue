<template>
    <main class="page">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="background-color: aqua;">
                    <div class="h5 mx-4 large font-weight-bold">
                        <h1>SIGN UP</h1>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <!-- <div id="details"> -->
                        <form style="background-color: blue;">
                            <div class="form-group">
                                <label class="">NAME</label>
                                <div class="d-flex jusify-content-start align-items-center p-2">
                                    <input type="text" value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="">E-MAIL ADDRESS</label>
                                <div class="d-flex jusify-content-start align-items-center p-2">
                                    <input type="email" value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="">PASSWORD</label>
                                <div class="d-flex jusify-content-start align-items-center p-2">
                                    <input type="password" value="" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="">CONFIRM PASSWORD</label>
                                <div class="d-flex jusify-content-start align-items-center p-2">
                                    <input type="password" value="" />
                                </div>
                            </div>

                            <div lass="col-md-12 my-4 d-flex justify-content-center w-100">
                                <div class="btn btn-primary">
                                    <router-link to="/register">
                                        REGISTER
                                    </router-link>
                                </div>
                                <div class="btn btn-default">
                                    CANCEL
                                </div>
                            </div>
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </main>
</template>