import React, {Component} from 'react';
import '../../../App.css';
import Logo from '../../../logo.svg';

class Navbar extends Component {
    render() {
        return (
            <nav className="navbar navbar-default">
                <div className="container">

                    <div className="navbar-header">
                        <button type="button" className="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-brand-centered">
                            <span className="sr-only">Toggle navigation</span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                            <span className="icon-bar"></span>
                        </button>
                        <a href="/">
                            <div className="navbar-brand-centered"><img
                                className="imgBlog" src={Logo} alt="img-logo"/></div>
                        </a>
                    </div>

                    <div className="collapse navbar-collapse" id="navbar-brand-centered">
                        <ul className="nav navbar-nav navbar-left">
                            <li>
                                <form className="navbar-form navbar-left">
                                    <div className="form-group">
                                        <input type="text" className="form-control search" placeholder="Search"/>
                                    </div>
                                </form>
                            </li>
                            {/*<li className="dropdown navdrop">*/}
                                {/*<button className="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"*/}
                                        {/*data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">*/}
                                    {/*Category*/}
                                    {/*<span className="caret"></span>*/}
                                {/*</button>*/}
                                {/*<ul className="dropdown-menu" aria-labelledby="dropdownMenu1">*/}
                                    {/*<li><a href="/">Category 1</a></li>*/}
                                    {/*<li><a href="/">Category 2</a></li>*/}
                                    {/*<li><a href="/">Category 3</a></li>*/}
                                    {/*<li role="separator" className="divider"></li>*/}
                                    {/*<li><a href="/">Category 4</a></li>*/}
                                {/*</ul>*/}
                            {/*</li>*/}
                        </ul>
                        <ul className="nav navbar-nav navbar-right">

                            <li><a className="nv-icon" href="/new-post"><span
                                className="glyphicon glyphicon-edit"></span></a></li>
                            <li><a className="nv-icon" href="/login"><span
                                className="glyphicon glyphicon-log-in"></span></a></li>
                            <li><a className="nv-icon" href="/register">Register</a></li>
                            <li><a className="nv-icon" href="/profile">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        );
    }
}

export default Navbar;

