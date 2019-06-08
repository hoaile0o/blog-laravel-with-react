import React, {Component} from 'react';

class Footer extends Component {
    render() {
        return (
            <div>
                <div className="footer text-center">
                    <div className="footer-top">
                        <div className="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div className="category_show">
                                <div className="panel-heading" role="tab" id="headingOne">
                                    <h4 className="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4>About us <i className="glyphicon glyphicon-menu-down" /></h4>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" className="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div className="panel-body">
                                            <code>Nguyen Tan Hoai - 51503141</code><br/>
                                            <code>Vuong Khanh Duy Quang - 51503280</code>
                                    </div>
                                </div>
                            </div>
                            <div className="category_show">
                                <div className="panel-heading" role="tab" id="headingTwo">
                                    <h4 className="panel-title">
                                        <a className="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4>Message Us Now <i className="glyphicon glyphicon-menu-down" /></h4>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" className="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div className="panel-body">
                                            <code><i className="glyphicon glyphicon-home" /> Available 24/7</code><br/>
                                            <code><i className="glyphicon glyphicon-envelope" /><a href="mailto:info@example.com"> Email: nguyentanhoai072@gmail.com</a>
                                            </code>
                                    </div>
                                </div>
                            </div>
                            <div className="category_show">
                                <div className="panel-heading" role="tab" id="headingTwo">
                                    <h4 className="panel-title">
                                        <a className="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div className="copy">
                                                <h4>Nashtech Internship</h4>
                                            </div>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
export default Footer;
