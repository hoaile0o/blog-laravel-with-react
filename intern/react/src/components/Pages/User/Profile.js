import React, {Component} from 'react';

import '../../../App.css';
import Avt from '../../../images/avt.jpg';

class Profile extends Component {


    render() {
        return (
            <div className="content">
                <div className="row">
                    {/*User's info*/}
                    <div className="col-md-4">
                        <div className="card">
                            <div className="firstinfo"><img
                                src={Avt} alt="img-user"/>
                                <div className="profileinfo">
                                    <h1>Hoai Nguyen</h1>
                                    <blockquote>
                                        <p>HCMC Viet NAM</p>
                                        <small><cite title="Source Title">District 7, HCMC Viet Nam<i
                                            className="glyphicon glyphicon-map-marker"></i></cite></small>
                                    </blockquote>
                                    <p>
                                        <p><i className="glyphicon glyphicon-envelope"></i> Nguyentanhoai072@gmail.com
                                            <br/> <i className="glyphicon glyphicon-globe"></i> <a
                                                href="https://www.facebook.com/hoai2110">https://www.facebook.com/hoai2110</a>
                                            <br/> <i className="glyphicon glyphicon-gift"></i> Oct 21, 1997</p></p>
                                </div>
                            </div>
                        </div>
                        <div className="badgescard"><span className="devicons devicons-django"></span><span
                            className="devicons devicons-python"> </span><span
                            className="devicons devicons-codepen"></span><span
                            className="devicons devicons-javascript_badge"></span><span
                            className="devicons devicons-gulp"></span><span
                            className="devicons devicons-angular"></span><span
                            className="devicons devicons-sass"> </span>
                        </div>
                    </div>

                    {/*User's Quote*/}
                    <div className="col-md-7 col-md-offset-1">
                        <h1>
                            <p href="" className="typewrite bio" data-period="2000"
                               data-type='[ "I am selfish impatient and a little insecure. I make mistakes, I am
                                    out of control and at times hard to handle. But if you can not handle me at my worst,
                        then you sure as hell do not deserve me at my best." ]'>
                                <span className="wrap"></span>
                            </p>
                        </h1>
                    </div>
                </div>
            </div>
        );
    }
}

export default Profile;