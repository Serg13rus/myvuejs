// import Vue from 'https://unpkg.com/vue@next';

const HelloVueApp = {
    data() {
        return {
            message: 'Hello Vue!!'
        }
    }
}
Vue.createApp(HelloVueApp).mount('#hello-vue');

const Counter = {
    data() {
        return {
            counter: 0,
            interval: null
        }
    },
    methods: {
        restart() {
            this.counter = 0
            this.interval = setInterval(() => {
                this.counter++
            }, 1000)
        },
        stop() {
            clearInterval(this.interval);        }
    },
    mounted() {
        this.interval = setInterval(() => {
            this.counter++
        }, 1000)
    },
}
Vue.createApp(Counter).mount('#counter');

const AttributeBinding = {
    data() {
        return {
            message: 'Страница загружена ' + new Date().toLocaleString() + '!'
        }
    }
}
Vue.createApp(AttributeBinding).mount('#bind-attribute');

const EventHandling = {
    data() {
        return {
            message: 'Привет, Vue.js!'
        }
    },
    methods: {
        reverseMessage() {
            this.message = this.message
                .split('')
                .reverse()
                .join('')
        }
    }
}
Vue.createApp(EventHandling).mount('#event-handling')

const TwoWayBinding = {
    data() {
        return {
            message: 'Привет, Vue!'
        }
    }
}
Vue.createApp(TwoWayBinding).mount('#two-way-binding')

const ConditionalRendering = {
    data() {
        return {
            seen: true,
            message: 'Невидно'
        }
    },
    methods: {
        reverseConditionalRendering() {
            this.message = this.message
                .split('')
                .reverse()
                .join('')
        }
    }
}
Vue.createApp(ConditionalRendering).mount('#conditional-rendering')

const ListRendering = {
    data() {
        return {
            todos: [
                { text: 'Learn JavaScript' },
                { text: 'Learn Vue' },
                { text: 'Build something awesome' }
            ]
        }
    }
}
Vue.createApp(ListRendering).mount('#list-rendering')

const TodoItem = {
    props: ['todo'],
    template: `<li>{{ todo.text }}</li>`
}
const TodoList = {
    data() {
        return {
            groceryList: [
                { id: 0, text: 'Vegetables' },
                { id: 1, text: 'Cheese' },
                { id: 2, text: 'Whatever else humans are supposed to eat' }
            ]
        }
    },
    components: {
        TodoItem
    }
}
const app = Vue.createApp(TodoList)
app.mount('#todo-list-app')

const app2 = Vue.createApp({
    data() {
        return { count: 4 }
    },
    created() {
        // `this` указывает на экземпляр vm2
        console.log('счётчик: ' + this.count) // => "счётчик: 4"
    }
})
const vm2 = app2.mount('#app2')
console.log(vm2.count)

const RenderHtmlApp = {
    data() {
        return {
            rawHtml: '<span style="color: red">This should be red.</span>'
        }
    }
}
Vue.createApp(RenderHtmlApp).mount('#example1')

const app3 = Vue.createApp({
    data() {
        return { count: 4 }
    }
})

const vm3 = app3.mount('#app3')

console.log(vm3.$data.count) // => 4
console.log(vm3.count)       // => 4

// Присвоение значения в vm.count также обновит $data.count
vm3.count = 5
console.log(vm3.$data.count) // => 5

// ... и наоборот
vm3.$data.count = 6
console.log(vm3.count) // => 6









