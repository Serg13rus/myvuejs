<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест Vue.js</title>
    <link rel="stylesheet" href="css/style.css">
    <!--    <script src="https://unpkg.com/vue@next"></script>-->
    <script src="node_modules/vue/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
</head>
<body>
<div id="hello-vue" class="demo">
    {{ message }}
</div>
<hr/>
<br/>
<div id="counter">
    Счётчик: {{ counter }}
    <br/>
    <button v-on:click="restart">Рестарт</button>
    <br/>
    <button v-on:click="stop">Стоп</button>
</div>
<hr/>
<br/>
<div id="bind-attribute">
  <span v-bind:title="message">
    Наведи на меня курсор на пару секунд, чтобы
    увидеть динамически связанное значение title!
  </span>
</div>
<hr/>
<br/>
<div id="event-handling">
    <p>{{ message }}</p>
    <button v-on:click="reverseMessage">Перевернуть сообщение</button>
</div>
<hr/>
<br/>
<div id="two-way-binding">
    <p>{{ message }}</p>
    <input v-model="message"/>
</div>
<hr/>
<br/>
<div id="conditional-rendering">
    <span v-if="seen">Сейчас меня видно</span>
    <br/>
    <br/>
    <button v-on:click="reverseConditionalRendering">{{ message }}</button>
</div>
<hr/>
<br/>
<div id="list-rendering">
    <ol>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ol>
</div>
<hr/>
<br/>
<div id="todo-list-app">
    <ol>
        <!--
          Теперь можно передавать каждому компоненту todo-item объект с информацией
          о задаче, который может динамически изменяться. Также каждому компоненту
          определяем "key", назначение которого разберём далее в руководстве.
        -->
        <todo-item
                v-for="item in groceryList"
                v-bind:todo="item"
                v-bind:key="item.id"
        ></todo-item>
    </ol>
</div>
<hr/>
<br/>
<div id="app2">Счётчик: {{ count }}</div>
<div id="app3">Счётчик: {{ count }}</div>
<div id="app4">
    Счётчик: {{ count }}
    <button @click="increment">Увеличить счётчик</button>
</div>
<hr/>
<br/>
<div id="example1" class="demo">
    <p>Двойные фигурные скобки: {{ rawHtml }}</p>
    <p>Директива v-html: <span v-html="rawHtml"></span></p>
</div>
<hr/>
<br/>
<div id="computed-basics">
    <p>Есть опубликованные книги:</p>
    <p>{{ author.name }}</p>
    <span>{{ author.books.length > 0 ? 'Да' : 'Нет' }}</span>
</div>
<hr/>
<br/>
<div id="computed-basics2">
    <p>Есть опубликованные книги:</p>
    <p>{{ author.name }}</p>
    <span>{{ publishedBooksMessage }}</span><br/>
    <span>{{ now }}</span><br/>
    <span>{{ fullName = 'Sergey Tsvetaev' }}</span>
</div>
<hr/>
<br/>
<div id="watch-example">
    <p>
        Задайте вопрос, на который можно ответить «да» или «нет»:
        <input v-model="question"/>
    </p>
    <p>{{ answer }}</p>
</div>
<hr/>
<br/>
<div id="random2">
    <div v-if="Math.random(0, 1) > 0.5">
        Сейчас меня видно
    </div>
    <div v-else>
        А теперь — нет
    </div>
    <hr/>
    <br/>
    <div v-if="type === 'A'">
        A
    </div>
    <div v-else-if="type === 'B'">
        B
    </div>
    <div v-else-if="type === 'C'">
        C
    </div>
    <div v-else>
        Точно не A, B или C
    </div>
    <h1 v-show="ok">Привет!</h1>
</div>
<hr/>
<br/>
<ul id="array-rendering">
    <h3 v-show="ok">Spisok!</h3>
    <li v-for="item in items">
        {{ item.message }}
    </li>
</ul>
<hr/>
<br/>
<ul id="array-with-index">
    <h3 v-show="ok">Spisok!</h3>
    <li v-for="(item, index) in items">
        {{ parentMessage }} - {{ index }} - {{ item.message }}
    </li>
</ul>
<hr/>
<br/>
<ul id="v-for-object" class="demo">
    <!--    <li v-for="value in myObject">-->
    <!--        {{ value }}-->
    <!--    </li>-->
    <!--    <li v-for="(value, name) in myObject">-->
    <!--        {{ name }}: {{ value }}-->
    <!--    </li>-->
    <li v-for="(value, name, index) in myObject">
        {{ index }}. {{ name }}: {{ value }}
    </li>
</ul>
<hr/>
<br/>
<div id="range" class="demo">
    <span v-for="n in 10" :key="n">{{ n }}</span>
</div>
<hr/>
<br/>
<div id="todo-list-example">
    <form v-on:submit.prevent="addNewTodo">
        <label for="new-todo">Добавить задачу</label>
        <input
                v-model="newTodoText"
                id="new-todo"
                placeholder="Например, покормить кота"
        />
        <button>Добавить</button>
    </form>
    <ul>
        <todo-item
                v-for="(todo, index) in todos"
                :key="todo.id"
                :title="todo.title"
                @remove="todos.splice(index, 1)"
        ></todo-item>
    </ul>
</div>
<hr/>
<br/>
<div id="basic-event">
    <button @click="counter += 1">Добавить 1</button>
    <p>Кнопка выше была нажата {{ counter }} раз</p>
</div>
<hr/>
<br/>
<div id="event-with-method">
    <!-- `greet` — это название метода, объявленного ниже -->
    <button @click="greet">Поприветствовать</button>
</div>
<hr/>
<br/>
<div id="inline-handler">
    <button @click="say('hi')">Скажи hi</button>
    <button @click="say('what')">Скажи what</button>
    <button @click="warn('Форма не может быть отправлена.', $event)">
        Отправить
    </button>
    <button @click="one($event), two($event)">
        ОтправитьOneTwo
    </button>
</div>
<hr/>
<br/>
<div id="v-model-basic" class="demo">
    <div id="v-model-basic" class="demo">
        <input v-model="message" placeholder="отредактируй меня"/>
        <p>Сообщение: {{ message }}</p>
    </div>
</div>
<hr/>
<br/>
<div id="v-model-textarea" class="demo">
    <div id="v-model-textarea" class="demo">
        <span>Многострочное сообщение:</span>
        <p style="white-space: pre-line;">{{ message }}</p>
        <br/>
        <textarea v-model="message" placeholder="введите несколько строчек"></textarea>
        <!--        <textarea v-model.lazy="message" placeholder="введите несколько строчек"></textarea>-->
        <br/><br/><br/>
        <span>Введите текс, который необходимо преобразовать в число:</span>
        <p style="white-space: pre-line;">{{ age }}</p>
        <br/>
        <input v-model.number="age" type="text"/>
        <br/><br/><br/>
        <span>Введите текс, в котором нужно убрать пробелы в начале и в конце:</span>
        <p style="white-space: pre-line;">{{ msg }}</p>
        <br/>
        <input v-model.trim="msg">
    </div>
</div>
<hr/>
<br/>
<div id="v-model-checkbox" class="demo">
    <input type="checkbox" id="checkbox" v-model="checked"/>
    <label for="checkbox">{{ checked }}</label>
</div>
<hr/>
<br/>
<div id="v-model-multiple-checkboxes" class="demo">
    <input type="checkbox" id="jack" value="Джек" v-model="checkedNames"/>
    <label for="jack">Джек</label>
    <input type="checkbox" id="john" value="Джон" v-model="checkedNames"/>
    <label for="john">Джон</label>
    <input type="checkbox" id="mike" value="Майк" v-model="checkedNames"/>
    <label for="mike">Майк</label>
    <br/>
    <span>Отмеченные имена: {{ checkedNames }}</span>
</div>
<hr/>
<br/>
<div id="v-model-radiobutton" class="demo">
    <input type="radio" id="one" value="Один" v-model="picked"/>
    <label for="one">Один</label>
    <br/>
    <input type="radio" id="two" value="Два" v-model="picked"/>
    <label for="two">Два</label>
    <br/>
    <span>Выбрано: {{ picked }}</span>
</div>
<hr/>
<br/>
<div id="v-model-select" class="demo">
    <select v-model="selected">
        <option disabled value="">Выберите один из вариантов</option>
        <option>А</option>
        <option>Б</option>
        <option>В</option>
    </select>
    <span>Выбрано: {{ selected }}</span><br/>
    <select v-model="selected" multiple>
        <option>А</option>
        <option>Б</option>
        <option>В</option>
    </select>
    <br/>
    <span>Выбраны: {{ selected }}</span>
</div>
<hr/>
<br/>
<div id="v-model-select-dynamic" class="demo">
    <select v-model="selected">
        <option disabled value="">Выберите один из вариантов</option>
        <option v-for="option in options" :value="option.value">
            {{ option.text }}
        </option>
    </select>
    <span>Выбрано: {{ selected }}</span>
</div>
<hr/>
<br/>

<hr/>
<br/>

<hr/>
<br/>

<hr/>
<br/>

<hr/>
<br/>

<!--<script src="https://unpkg.com/vue@next"></script>-->
<script src="js/main.js"></script>
</body>
</html>