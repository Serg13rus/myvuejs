<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест Vue.js</title>
    <link rel="stylesheet" href="css/style.css">
    <!--    <script src="https://unpkg.com/vue@next"></script>-->
    <script src="node_modules/vue/dist/vue.global.js"></script>


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
<div id="app2"></div>
<div id="app3"></div>
<hr/>
<br/>
<div id="example1" class="demo">
    <p>Двойные фигурные скобки: {{ rawHtml }}</p>
    <p>Директива v-html: <span v-html="rawHtml"></span></p>
</div>
<hr/>
<br/>

<hr/>
<br/>

<!--<script src="https://unpkg.com/vue@next"></script>-->
<script src="js/main.js"></script>
</body>
</html>