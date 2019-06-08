import React, {Component} from 'react';
import '../../../App.css';
//import PropTypes from 'prop-types';
import Detail from "../../Layouts/Post/Detail";
import {connect} from "react-redux";
import {loadDetail} from '../../../actions/detailActions';

class DetailPost extends Component {
    componentDidMount() {
        const { id } = this.props.params;
        if (id) {
            this.props.loadDetail(this.props.params.id);
        }
    }
    render() {
        const detail = this.props.detail
        return (
            <div>
                <Detail detail={detail} {...this.props}/>
                {this.props.children}
            </div>
        );
    }
}
const mapStateToProps = (state, ownProps) => {
    return {
        detail: state.detail
    };
};

const mapDispatchToProps = (dispatch) => {
    return {
        loadDetail: post_id => dispatch(loadDetail(post_id))
    };
};

export default connect(mapStateToProps,mapDispatchToProps)(DetailPost);
