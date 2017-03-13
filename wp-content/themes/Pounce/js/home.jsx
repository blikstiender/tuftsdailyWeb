import React, { Component } from 'react';
import ArticleView from './ArticleView.jsx'
import FeatureArtcile from './FeatureArticle.jsx'

export default class Home extends Component {
    constructor(props) {
        super(props);
        this.state = {articles: [], isLoading: true}
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData() {
        fetch("https://tuftsdaily.com/wp-json/wp/v2/posts")
          .then((response) => response.json())
          .then((responseData) => {
            // this.setState() will cause the new data to be applied to the UI that is created by the `render` function below
            this.setState({ articles: responseData, isLoading: false });
          })
          .catch((error) => {
            console.log(error);
          })
          .done();
    }

    render() {
                console.log(this.state.articles)
                return (
                        <div>
                            {this.state.articles.map(article => 
                                <div key={article.id} className="container-fluid">
                                        <div className="row">
                                                <div className="col col-md-3">
                                                        <div>stuff will be here at some point</div>
                                                </div>
                                                <div className="col col-md-6">
                                                        <ArticleView article={article}/>
                                                </div>
                                                <div className="col col-md-3">
                                                        <div>stuff will be here at some point</div>
                                                </div>
                                        </div>
                                </div>
                                )}
                                {/*<div className="container-fluid">
                                        <div className="row">
                                                <div className="col col-md-9">
                                                        <FeatureArtcile />
                                                </div>
                                                <div className="col col-md-3">
                                                        <div>stuff will be here at some point</div>
                                                </div>
                                        </div>
                                </div>*/}
                        </div>
                );
    }
}