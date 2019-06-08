import * as types from '../actions/actionTypes';
import initialState from './initialState';
import {browserHistory} from 'react-router';

export default function postReducer(state = initialState.posts, action = null) {
    switch(action.type) {
        case types.LOAD_POSTS_SUCCESS:
            return action.posts;

        case types.CREATE_POST_SUCCESS:
            browserHistory.push(`/post/${action.post.id}`)
            return [
                ...state.filter(post => post.id !== action.post.id),
                Object.assign({}, action.post)
            ]
        default:
            return state;
    }
}