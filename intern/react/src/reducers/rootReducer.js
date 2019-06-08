import {combineReducers} from 'redux';
import posts from './postReducer';
import detail from './detailReducer';

const rootReducer = combineReducers({
    posts, detail
})

export default rootReducer;