import React, {Component} from 'react';
import Profile from './components/Pages/User/Profile';
import Register from './components/Auth/Register';
import ForgotPassword from './components/Auth/ForgotPassword';
import Login from './components/Auth/Login';
import Home from './components/Pages/Dashboard/Home';
import NewPost from './components/Pages/User/Posts/NewPost';
import DetailPost from './components/Pages/Dashboard/DetailPost';
import {BrowserRouter as Route} from 'react-router-dom'
import {Router, browserHistory} from 'react-router';
import Layout from "./components/Layouts/Layout";

class App extends Component {
    render() {
        return (
            <Layout>
                <Router history={browserHistory}>
                    <Route path="/" exact={true} component={Home}/>
                    <Route path="/register" exact={true} component={Register}/>
                    <Route path="/forgot-password" exact={true} component={ForgotPassword}/>
                    <Route path="/login" exact={true} component={Login}/>
                    <Route path="/new-post" exact={true} component={NewPost}/>
                    <Route path="/profile" exact={true} component={Profile}/>
                    <Route path="/post/:id" exact={true} component={DetailPost} />
                </Router>
            </Layout>
        );
    }
}

export default App;
