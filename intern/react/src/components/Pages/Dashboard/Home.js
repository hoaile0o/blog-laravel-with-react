import {connect} from 'react-redux';

import React, {Component} from 'react';
import PropTypes from 'prop-types';
import {loadPosts} from '../../../actions/postActions';
import it1 from '../../../images/it1.jpg';
import it2 from '../../../images/it2.png';
import it3 from '../../../images/it3.png';

import worlcup1 from '../../../images/worldcup1.jpeg';
import worlcup2 from '../../../images/worldcup2.jpeg';
import worlcup3 from '../../../images/worldcup3.jpg';
import worlcup4 from '../../../images/worldcup4.jpeg';
import girl from '../../../images/img_girl.jpg';
import qoute from '../../../images/quote.jpg';
import '../../../App.css';
import Post from "../../Layouts/Post/Post";
import Post2 from "../../Layouts/Post/Post2";
import Post2left from "../../Layouts/Post/Post2-left";
import Post3 from "../../Layouts/Post/Post3";

class Home extends Component {
    componentDidMount() {
        const { dispatch } = this.props
        dispatch(loadPosts())
    }
    render() {
        return (
            <div>
                <div className="row">
                    <div className="col-md-12 container">
                        <a href='/'>
                            <img className="ImgTop" src={girl} alt="img-top-home"/>
                            <h1 className="overlay">We don't talk anymore, we don't talk anymore
                                We don't talk anymore, like we used to do
                                We don't love anymore
                                What was all of it for?
                                Oh, we don't talk anymore, like we used to do</h1>
                        </a>
                    </div>
                </div>
                <div className="row">
                    <div className="row col-md-12 ">
                        <p role="separator" className="divider"/>
                        <div className="button">
                            <input type="submit" value="Music" className="wpcf7-form-control wpcf7-submit"/>
                        </div>
                        <p role="separator" className="divider"/>



                        <div className="row">
                            <Post posts={this.props.posts}/>
                        </div>
                        <hr/>


                        <div id="wc" className="row col-md-12">
                            <p role="separator" className="divider"/>
                            <div className="button">
                                <input type="submit" value="World Cup" className="wpcf7-form-control wpcf7-submit"/>
                            </div>
                            <p role="separator" className="divider"/>

                            <Post2left
                                src={worlcup1}
                                description="After a thrilling start to the match, with both sides scoring in the opening four minutes, Croatia needed penalties to see off a brave Denmark side that played their most adventurous football of the competition but without reward."
                            />

                            <Post2
                                src={worlcup2}
                                description="The Danes opened the scoring in the opening minute, as Mathias Jorgensen shot though a sea of legs and saw the ball squirm under Danijel Subasic’s body and over the line"
                            />
                            <Post2left
                                src={worlcup3}
                                description="The Scandinavians’ joy lasted just three minutes. Presented with Croatia’s first chance, Mario Mandzukic tucked home a loose ball to restore parity."
                            />
                            <Post2
                                src={worlcup4}
                                description="Croatia became more dominant as the half wore on, with Luka Modric directing traffic from a more withdrawn position than in other games"
                            />

                        </div>
                    </div>
                </div>

                <div>
                    <p role="separator" className="divider"/>
                    <div className="button">
                        <input type="submit" value="Information Technology" className="wpcf7-form-control wpcf7-submit"/>
                    </div>
                    <p role="separator" className="divider"/>
                    <div className="row">
                        <Post3 description="Java" src={it1}/>
                        <Post3 description="C++" src={it2}/>
                        <Post3 description="PHP" src={it3}/>
                    </div>
                </div>

                <div className="row">
                    <h1>Dr.Seuss's Quotes</h1>
                    <p>Everyone loves Oscar Wilde!! --- Lian Liu</p>
                    <div id="result">
                        <div className="thumbnail">
                            <img src={qoute} alt=""/>
                        </div>
                        <blockquote>
                            <p id="quote">“Don't cry because it's over, smile because it happened.” </p>
                        </blockquote>
                        <div className="attribution">
                            <p id="author">Dr. Seuss</p>
                            <p id="work"></p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

function mapStateToProps(state) {
    return {
        posts: state.posts
    };
}

Home.propTypes = {
    posts: PropTypes.array.isRequired
};

export default connect(mapStateToProps)(Home);
