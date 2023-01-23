<template>
    <div>
        <div class="HeaderBoxes">
            <nav class="d-flex">
                <div class="container d-flex flex-wrap justify-content-around">
                    <div
                        class="card d-flex align-items-center position-relative"
                    >
                        <img
                            class="card-img-top"
                            src="https://picsum.photos/200/314"
                            alt="img"
                        />
                        <div class="litlogo position-absolute">
                            <img
                                class="img-fluid"
                                src="https://assets.msn.com/weathermapdata/1/static/svg/72/v6/card/SunnyDayV3.svg"
                                alt="img2"
                            />
                        </div>

                        <div class="card-body text-center p-1">
                            <span class="card-title">{{ category.name }}</span>
                            <br />
                            <span class="card-text fw-bold">description </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <hr class="m-4" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["category"],
    data() {
        return {};
    },
};
</script>

<style lang="scss" scoped>
.HeaderBoxes {
    .card {
        width: 9rem;
        margin: 10px 0px;
        border-radius: 0px;
        border: 0px;
        transition: transform 0.2s;
        padding: 0px;

        &:hover {
            transform: scale(0.95);
            cursor: pointer;
        }
        span {
            font-size: 0.8rem;
        }

        img {
            padding: 10px;
        }
        .litlogo {
            bottom: 60px;
            right: 0px;
            height: 60px;
            width: 60px;
        }
    }

    .orange-box {
        background-color: rgb(245, 134, 47);
    }
    .yellow-box {
        background-color: rgb(253, 188, 72);
    }
    .gray-box {
        background-color: rgb(244, 244, 244);
    }
}
</style>
