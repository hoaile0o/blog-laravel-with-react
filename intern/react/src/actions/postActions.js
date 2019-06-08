import * as types from "./actionTypes";
import postApi from '../api/postApi';

export function loadPosts() {
    return function (dispatch) {
        return postApi.getAllPosts().then(posts => {
            dispatch(loadPostsSuccess(posts));
        }).catch(error => {
            throw(error);
        });
    };
}

export function loadPostsSuccess(posts) {
    return {type: types.LOAD_POSTS_SUCCESS, posts};
}


export function createPost(post) {
    return function (dispatch) {
        return postApi.createNewPost(post).then(
            responsePost => dispatch(createPostSuccess(responsePost) )
        ).catch(error => {
            throw(error);
        });
    };
}

export function createPostSuccess(post) {
    return {type: types.CREATE_POST_SUCCESS, post};
}