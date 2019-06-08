import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';
import './App.css';
import registerServiceWorker from './registerServiceWorker';
import 'babel-polyfill';
import configureStore from './store/configureStore';
import {Provider} from 'react-redux';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';

const store = configureStore();
// store.dispatch(loadPosts());


ReactDOM.render(
    <Provider store={store}>
        <App/>
    </Provider>, document.getElementById('root'));
registerServiceWorker();