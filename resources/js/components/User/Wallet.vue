<template>
    <div class="card">
        <div class="card-body store">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="float-left">
                            Twój portfel
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <div class="float-right">
                            Monety: {{ coins }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        coins: Number,
    }
}
</script>