import '../../../App.css';
import React from 'react';

const Post2 = (props) => {
    const {src, description} = props;
    return (
        <div>
            <div className="row col-md-10 col-md-offset-1">
                <div className="col-md-10"><p className="pull-left">{description} <a href="/post">Read more</a></p>
                </div>
                <div className="col-md-2"><a className="pull-right" target="_blank" href="/post">
                    <img className="form-2" src={src} alt="Forest"/>
                </a></div>
            </div>
        </div>
    );
};
export default Post2;