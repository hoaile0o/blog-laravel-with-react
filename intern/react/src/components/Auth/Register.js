import React, {Component} from 'react';
import '../../App.css';

class Register extends Component {
    render() {
        return (
            <div className="register-form">
                <div className="container">
                    <div className="stepwizard">
                        <div className="stepwizard-row setup-panel">
                            <div className="stepwizard-step">
                                <a href="#step-1" type="button" className="btn btn-primary btn-circle">1</a>
                                <p>About</p>
                            </div>
                            <div className="stepwizard-step">
                                <a href="#step-2" type="button" className="btn btn-default btn-circle"
                                   disabled="disabled">2</a>
                                <p>Login Infomation</p>
                            </div>
                            <div className="stepwizard-step">
                                <a href="#step-3" type="button" className="btn btn-default btn-circle"
                                   disabled="disabled">3</a>
                                <p>Done</p>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div className="row setup-content" id="step-1">
                            <div className="col-xs-12">
                                <div className="col-md-12">
                                    <h3> About</h3>
                                    <div className="form-group">
                                        <label className="control-label">First Name</label>
                                        <input maxLength="100" type="text" required="required" className="form-control"
                                               placeholder="Enter First Name"/>
                                    </div>
                                    <div className="form-group">
                                        <label className="control-label">Last Name</label>
                                        <input maxLength="100" type="text" required="required" className="form-control"
                                               placeholder="Enter Last Name"/>
                                    </div>
                                    <div className="form-group">
                                        <label className="control-label">Age</label>
                                        <input maxLength="100" type="text" required="required" className="form-control"
                                               placeholder="Enter Age"/>
                                    </div>
                                    <div><span className="glyphicon glyphicon-ok"></span> Already have a account? <a href="/login"><code>Login</code></a></div>
                                    <button className="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div className="row setup-content" id="step-2">
                            <div className="col-xs-12">
                                <div className="col-md-12">
                                    <h3> Login Infomation</h3>
                                    <div className="form-group">
                                        <label className="control-label">Email Adress :</label>
                                        <input maxLength="200" type="text" required="required" className="form-control"
                                               placeholder="Enter Email Adress"/>
                                    </div>
                                    <div className="form-group">
                                        <label className="control-label">Password</label>
                                        <input maxLength="200" type="text" required="required" className="form-control"
                                               placeholder="Enter Password"/>
                                    </div>
                                    <div className="form-group">
                                        <label className="control-label">Confirm Password</label>
                                        <input maxLength="200" type="text" required="required" className="form-control"
                                               placeholder="Enter Confirm Password"/>
                                    </div>

                                    <div><span className="glyphicon glyphicon-ok"></span> Already have a account? <a href="/login"><code>Login</code></a></div>
                                    <button className="btn btn-primary nextBtn btn-lg pull-right" type="button">Next
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div className="row setup-content" id="step-3">
                            <div className="col-xs-12">
                                <div className="col-md-12">
                                    <h3> Ok, let's start</h3>
                                    <button className="btn btn-success btn-lg pull-right btn-submit-register" type="submit">Finish!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        );
    }
}

export default Register;
