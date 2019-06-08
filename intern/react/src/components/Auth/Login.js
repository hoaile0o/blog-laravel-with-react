import React, {Component} from 'react';
import '../../App.css';

class Login extends Component {
    render() {
        return (
            <div>
                <div className="row">
                    <div className="col-md-12 text-center">

                            <p role="separator" className="divider"/>
                            <div className="button">
                                <input type="submit" value="Welcome Back" className="wpcf7-form-control wpcf7-submit"/>
                            </div>
                            <p role="separator" className="divider"/>
                    </div>
                </div>
                <div className="row login-form">
                    <div className="text-center col-md-10 col-md-offset-7">

                        <div className="login-form-1">
                            <form id="login-form" className="text-left">
                                <div className="login-form-main-message"></div>
                                <div className="main-login-form">
                                    <div className="login-group">
                                        <div className="form-group">
                                            <label htmlFor="lg_username" className="sr-only">Username</label>
                                            <input type="text" className="form-control" id="lg_username"
                                                   name="lg_username"
                                                   placeholder="Username"/>
                                        </div>
                                        <div className="form-group">
                                            <label htmlFor="lg_password" className="sr-only">Password</label>
                                            <input type="password" className="form-control" id="lg_password"
                                                   name="lg_password" placeholder="Password"/>
                                        </div>
                                        <div className="form-group login-group-checkbox">
                                            <input type="checkbox" id="lg_remember" name="lg_remember"/>
                                            <label htmlFor="lg_remember">Remember</label>
                                        </div>
                                    </div>
                                    <button type="submit" className="login-button"><i
                                        className="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                                <div className="etc-login-form">
                                    <p><span className="glyphicon glyphicon-ok"></span> Forgot your password? <a href="forgot-password">Click here</a></p>
                                    <p><span className="glyphicon glyphicon-ok"></span> New user? <a href="/register">Create new account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Login;
