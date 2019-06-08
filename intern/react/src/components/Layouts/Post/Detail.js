import '../../../App.css';
import React from 'react';
import PropTypes from 'prop-types';
const Detail = ({detail}) => {
    var imgLink = "http://localhost:8000/images/upload/";
    return (
        <div>
            <div className="container">
                <div className="well">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="pull-left col-md-4 col-xs-12 thumb-contenido">
                                <img className="center-block img-responsive" alt="detailImg"
                                     src={imgLink + detail.picture}/>
                            </div>
                            <div className="">
                                <h1 className="hidden-xs hidden-sm">{detail.title}</h1>
                                <hr/>
                                <small>{detail.created_at}</small>
                                <br/>
                                <small><strong>-- Author Name --</strong></small>
                                <hr/>
                                <p className="text-justify" dangerouslySetInnerHTML={{__html: detail.contents}}></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    );
};

Detail.propTypes = {
    detail: PropTypes.object.isRequired
};


export default Detail;