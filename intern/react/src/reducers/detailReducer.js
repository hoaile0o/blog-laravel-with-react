import * as types from '../actions/actionTypes';
import initialState from './initialState';

export default function detailReducer(state = initialState.detail, action = null) {
    switch(action.type) {
        case types.LOAD_DETAIL_SUCCESS:
            return action.detail;
        default:
            return state;
    }
}