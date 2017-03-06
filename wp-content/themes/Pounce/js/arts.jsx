import React, { Component } from 'react';
import ArticleView from './ArticleView.jsx'
import FeatureArtcile from './FeatureArticle.jsx'

export default class Arts extends Component {
    render() {
		return (
			<div>
				<div className="container-fluid">
				    	<div className="row">
						<div className="col col-md-3">
							<div>stuff will be here at some point</div>
						</div>
						<div className="col col-md-6">
							<ArticleView />
						</div>
						<div className="col col-md-3">
							<div>stuff will be here at some point</div>
						</div>
					</div>
			    	</div>
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
                	</div>
		);
    }
}