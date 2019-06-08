import detailApi from '../api/detailApi';
import * as types from './actionTypes';

export function loadDetail(post_id) {
    return function(dispatch) {
        return detailApi.getDetailPost(post_id).then(detail => {
            dispatch(loadDetailSuccess(detail));
        }).catch(error => {
            throw(error);
        });
    };
}

export function loadDetailSuccess(detail) {
    return {type: types.LOAD_DETAIL_SUCCESS, detail};
}
