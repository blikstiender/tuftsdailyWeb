import React, { Component } from 'react';
import FeatureArtcile from './FeatureArticle.jsx'

export default class Opinion extends Component {
    render() {
        return (
                <div className="container-fluid">
                        <div className="row">
                                <div className="col col-md-9">
                                        <FeatureArtcile />
                                </div>
                                <div className="col col-md-3">
                                        <div>stuff will be here at some point</div>
                                </div>
                        </div>
                </div>
        );
    }
}