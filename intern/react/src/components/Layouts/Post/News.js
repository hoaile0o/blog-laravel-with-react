
import TextInput2 from '../../../components/Layouts/Common/TextInput2';
import React, {Component} from 'react';
import {PropTypes} from 'prop-types'

class News extends Component {

    render() {
        return (
            <div>
                <form>
                    <div className="row">
                        <div className="col-md-6">
                            <TextInput2
                            name="title"
                            label="Title:"
                            value={this.props.post.title}
                            onChange={this.props.onChange}/>

                            <TextInput2
                                name="description"
                                label="Description:"
                                value={this.props.post.description}
                                onChange={this.props.onChange}/>

                            <label>User_id: </label>
                            <textarea
                                name="user_id"
                                type="text"
                                value={this.props.post.user_id}
                                onChange={this.props.onChange}
                            />

                            <label>Picture: </label>
                            <input
                                name="picture"
                                type="file"
                                value={this.props.post.picture}
                                onChange={this.props.onChange}
                            />


                        </div>

                        <div className="col-md-6">
                            <TextInput2
                            name="contents"
                            label="Contents:"
                            value={this.props.post.contents}
                            onChange={this.props.onChange}/>
                        </div>

                        <input
                            type="submit"
                            disabled={this.props.saving}
                            className="btn btn-primary"
                            onClick={this.props.onSave}/>
                    </div>
                </form>
            </div>
        );
    }
}


News.propTypes = {
    post: PropTypes.object.isRequired,
    onSave: PropTypes.func.isRequired,
    onChange: PropTypes.func.isRequired
};

export default News;