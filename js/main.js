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

const app4 = Vue.createApp({
    data() {
        return { count: 4 }
    },
    methods: {
        increment() {
            // `this` указывает на экземпляр компонента
            this.count++
        }
    }
})
const vm4 = app4.mount('#app4')
console.log(vm4.count) // => 4
vm4.increment()
console.log(vm4.count) // => 5

const computedBasics = Vue.createApp({
    data() {
        return {
            author: {
                name: 'John Doe',
                books: [
                    'Vue 2 - Advanced Guide',
                    'Vue 3 - Basic Guide',
                    'Vue 4 - The Mystery'
                ]
            }
        }
    }
}).mount('#computed-basics')

Vue.createApp({
    data() {
        return {
            author: {
                name: 'John Doe John',
                books: [
                    // 'Vue 2 - Advanced Guide',
                    // 'Vue 3 - Basic Guide',
                    // 'Vue 4 - The Mystery'
                ]
            }
        }
    },
    computed: {
        // геттер вычисляемого свойства
        publishedBooksMessage() {
            // `this` указывает на экземпляр vm
            return this.author.books.length > 0 ? 'Да' : 'Нет'
        },
        // НЕ БУДЕТ РАБОТАТЬ
        // Date.now() не является реактивной зависимостью
        // вызов метода будет всегда запускать функцию, когда будет перерисовка
        now() {
            return Date.now()
        },
        fullName: {
            // геттер (для получения значения)
            get() {
                return this.firstName + ' ' + this.lastName
            },
            // сеттер (при присвоении нового значения)
            set(newValue) {
                const names = newValue.split(' ')
                this.firstName = names[0]
                this.lastName = names[names.length - 1]
            }
        }
    }
}).mount('#computed-basics2')

const watchExampleVM = Vue.createApp({
    data() {
        return {
            question: '',
            answer: 'Вопросы обычно заканчиваются вопросительным знаком. ;-)'
        }
    },
    watch: {
        // при каждом изменении `question` эта функция будет запускаться
        question(newQuestion, oldQuestion) {
            if (newQuestion.indexOf('?') > -1) {
                this.getAnswer()
            }
        }
    },
    methods: {
        getAnswer() {
            this.answer = 'Думаю...'
            axios
                .get('https://yesno.wtf/api')
                .then(response => {
                    this.answer = response.data.answer
                })
                .catch(error => {
                    this.answer = 'Ошибка! Нет доступа к API. ' + error
                })
        }
    }
}).mount('#watch-example')

const random2 = Vue.createApp({
    data() {
        return {
            type: 'Cc',
            ok: false
        }
    }
}).mount('#random2');

Vue.createApp({
    data() {
        return {
            ok:true,
            items: [
                { message: 'Foo' },
                { message: 'Bar' }
            ]
        }
    }
}).mount('#array-rendering')

Vue.createApp({
    data() {
        return {
            ok:true,
            parentMessage: 'Родитель',
            items: [
                { message: 'Foo' },
                { message: 'Bar' }
            ]
        }
    }
}).mount('#array-with-index')








