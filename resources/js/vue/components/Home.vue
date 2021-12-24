<!--
1. ràng buộc dữ liệu, building 2 chiều: data trên template thay đổi, dưới script thay đổi và ngược lại
2. scoped in style: dùng scoped thì chỉ áp dụng style cho chính components đó
3. Mounted: khi data được gắn vào html
4. v-bind: thêm thuộc tính vào thẻ
5. v-model: lien ket element vs priority
6. v-on: viet tat @
7. ref : Ánh xạ đến chính element
8. v-show: An/hien 1 element theo dieu kien
9. v-hide: nguoc lai
10. v-if: An/hien. the se bien mat, tao lai
11. v-else, v-else-if:
-->
<template>
    <div class="container">
        <h1>Learn Vuejs ABC</h1>
        <input  type="text" v-model="message">
        <input type="checkbox" v-model="accept">Toi dong y yeu kien
        <Menu></Menu>
        {{ message }}
        <div>=============================================================</div>
        <div v-show="isShow">AN HIEN</div>
        <button @click="isShow = !isShow">AN/HIEN</button>
        <div>=============================================================</div>
        <div v-bind:id="id">Gan id bang V bind (v-bind: thêm thuộc tính vào thẻ)</div>
        <div :disabled="isDisabled">(v-bind: thêm thuộc tính vào thẻ) - viet tat</div>
        <div>=============================================================</div>
        <div :class="{gan_class: selected, gan_class_2: selected_2}">gan class</div>
        <button @click="selected = !selected">Gan Class/Bo Gan Class</button>
        <div>=============================================================</div>
        <input type="text" v-model="channelName">
        <div>{{channelName}}</div>
        <div>=============================================================</div>
        <div>event</div>
        <input type="text" v-model="dataEvent">
        <button @click="dataEvent = 'song vay' ">Click</button>
        <div>=============================================================</div>
        <form action="/">
            <div>ngăn submit form</div>
            <input type="text" v-model="dataEvent">
            <button @click.prevent="">Click</button>
        </form>
        <div>=============================================================</div>
        <div>ref : Ánh xạ đến chính element (this.$ref.dataRef)</div>
        <input ref="dataRef" type="text" v-model="dataRef">
        <div>=============================================================</div>
        <div v-for="(task, index) in tasks" :key="index">
            <input type="checkbox" v-model="task.done" >
            <span :class="{done: task.done}">{{task.content}}</span>
        </div>
        <input type="text" v-model="newTask">
        <button @click="tasks.push({content: newTask, done: false})">Them</button>
    </div>
</template>

<script>
import Menu from './Menu.vue';
export default {
    components: {
        Menu
    },
    computed: {},
    data() {
        return {
            message: 'Hello World',
            accept: true,
            isShow: true,
            id: "id_gan",
            isDisabled: true,
            selected: true,
            selected_2: true,
            channelName: 'Lap Trinh Vien',
            dataEvent: 'lap trinh',
            dataSome: 'data some',
            dataRef: 'data ref',
            tasks: [
                {content: 'an', done: false},
                {content: 'choi', done: false},
                {content: 'ngu', done: true}
            ],
            newTask: '',
        }
    },
};
</script>

<style lang="scss" scoped>
.container {
    h1 {
        color: red;
    }
    .done {
        text-decoration: line-through;
    }
}
</style>
