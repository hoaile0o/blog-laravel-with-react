import '../../../App.css';
import React from 'react';

const Post3 = (props) => {
    const {src, description} = props;
    return (
        <div>
            <a href="/post">
                <div className="col-sm-4 text-center">
                    <h3>{description}</h3>
                    <img src={src} className="img-circle" alt="post3"/>
                </div>
            </a>
        </div>
    );
};
export default Post3;