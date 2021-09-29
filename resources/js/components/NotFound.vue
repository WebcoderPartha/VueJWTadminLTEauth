<template>

</template>

<script>
export default {
    name: "NotFound",
    created() {
        if (!User.loggedIn()){
            this.$router.push({ name: 'Login' });
            Notification.Error("<b>Unauthorized! Sign In First!</b>");
        }else{
            this.$router.push({ name: 'Dashboard' });
            Notification.Error("<b>Page not found!</b>");
        }
    }
}
</script>

<style scoped>

</style>
