import '../../../App.css';
import React from 'react';
import PropTypes from 'prop-types';

const Post = ({posts}) => {
    var imgLink = "http://localhost:8000/images/upload/";
    return (
        <div>
            {posts.map(post =>
                <div className="col-md-6 container">
                    <a href={"/post/" + post.id}>
                        <img className="Img" src={imgLink + post.picture} alt="img-post-home"/>
                        <h1 className="overlay">{post.description}</h1>
                    </a>
                </div>
            )}
        </div>
    );
};
Post.propTypes = {
    posts: PropTypes.array.isRequired
};
export default Post;