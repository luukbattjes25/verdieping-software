<script>
export default {
    data() {
        return {
            priority: 0
        }
    },
    methods: {
        changePriority() {
            this.priority = 2
            console.log(this.priority);
        }   
    }
}
</script>