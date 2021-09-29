<template>
    <span>
        <footer class="main-footer" v-show="$route.path === '/' ? false : true">
        <strong>Copyright &copy; 2021 <a target="_blank" href="http://webcoderpartha.com">webcoderpartha.com</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
        </footer>
    </span>
</template>

<script>
export default {
    name: "FooterBar"
}
</script>

<style scoped>

</style>
