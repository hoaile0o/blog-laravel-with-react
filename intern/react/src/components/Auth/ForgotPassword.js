import React from 'react';

const ForgotPassword = () => {
    return (
        <div>
            <div className="text-center">
                <div className="row">
                    <div className="col-md-8 col-md-offset-2 text-center">
                        <div className="panel panel-success">
                            <div className="panel-footer">
                                <p role="separator" className="divider"/>
                                <div className="button">
                                    <input type="submit" value="Forgot Password" className="wpcf7-form-control wpcf7-submit"/>
                                </div>
                                <p role="separator" className="divider"/>
                            </div>
                            <div className="panel-body">
                                <h4>When you fill in your registered email address, you will be sent instructions on how to
                                    reset your password.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="login-form-1">
                    <form id="forgot-password-form" className="text-left">

                        <div className="login-form-main-message"></div>
                        <div className="main-login-form">
                            <div className="login-group">
                                <div className="form-group">
                                    <label htmlFor="fp_email" className="sr-only">Email address</label>
                                    <input type="text" className="form-control" id="fp_email" name="fp_email"
                                           placeholder="Email address"/>
                                </div>
                            </div>
                            <button type="submit" className="login-button"><i className="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <div className="etc-login-form">
                            <p><span className="glyphicon glyphicon-ok"></span> Already have an account? <a href="/login">login here</a></p>
                            <p><span className="glyphicon glyphicon-ok"></span> New user? <a href="/register">create new account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
}
export default ForgotPassword;

