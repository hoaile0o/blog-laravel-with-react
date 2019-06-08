import React, {Component} from 'react';
import News from '../../../../components/Layouts/Post/News';
import {connect} from 'react-redux';
import * as courseActions from '../../../../actions/postActions';
import {bindActionCreators} from 'redux';
import {PropTypes} from 'prop-types';
import {createPost} from '../../../../actions/postActions';
import {loadDetail} from '../../../../actions/detailActions';

class NewPost extends Component {
    constructor(props) {
        super(props);
        this.state = {
            post: {
                title: '',
                description: '',
                contents: '',
                picture: '',
                user_id: ''
            },
            saving: false
        };
        //this.redirect = this.redirect.bind(this);
        this.savePost = this.savePost.bind(this);
        this.updatePostState = this.updatePostState.bind(this);
    }

    updatePostState(event) {
        const field = event.target.name;
        const post = this.state.post;
        post[field] = event.target.value;
        return this.setState({post: post});
    }

    savePost(event) {
        event.preventDefault();


        this.props.actions.createPost(this.state.post);


        // const { createPost, post } = this.props.actions
        // createPost(post)
    }

    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-12">
                        <h1 className="linear-wipe">What do you think ?</h1>
                        <News post={this.state.post} onSave={this.savePost} onChange={this.updatePostState}/>
                    </div>
                </div>
            </div>
        );
    }
}

NewPost.propTypes = {
    actions: PropTypes.object.isRequired
};


function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(courseActions, dispatch)
    };
}


function mapStateToProps(state, ownProps) {
    let post = {title: '', contents: '', description: '', picture: '', user_id: ''};
    const post_id = ownProps.params.id;
    if (post_id > 0) {
        post = loadDetail(state.posts, ownProps.params.id);
    }
    return {post: post};
}

// const mapDispatchToProps = (dispatch) => {
//     return {
//         onTodoClick: (id) => {
//             dispatch(toggleTodo(id))
//         }
//     }
// }


export default connect(mapStateToProps, mapDispatchToProps)(NewPost);


