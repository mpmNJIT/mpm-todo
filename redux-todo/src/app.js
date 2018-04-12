import React from 'react';
import { render } from 'react-dom';
import { TodoList } from './components';

const dummyTodos = [
    { id: 0, isDone: true,  text: 'test1 strike' }, //test data
    { id: 1, isDone: false, text: 'test2 nostrike' },
    { id: 2, isDone: false, text: 'test3 nostrike' },
    { id: 3, isDone: false, text: 'test4 nostrike' }
];

render(
<TodoList todos={dummyTodos} />,
document.getElementById('app')
);