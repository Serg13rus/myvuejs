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
        <input v-model="question" />
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