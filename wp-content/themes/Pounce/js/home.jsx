import React, { Component } from 'react';
import ArticleView from './ArticleView.jsx'
import FeatureArticle from './FeatureArticle.jsx'

export default class Home extends Component {
    constructor(props) {
        super(props);
        this.state = {articles: [], isLoading: true, articleType: 1}
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData() {
        fetch("https://tuftsdaily.com/wp-json/wp/v2/posts?per_page=10")
          .then((response) => response.json())
          .then((responseData) => {
            // this.setState() will cause the new data to be applied to the UI that is created by the `render` function below
            this.setState({ articles: responseData, isLoading: false});
          })
    }

    /*renderMain(article) {
        return (
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
        )
    }

    renderSide(article) {
        return (
            <div key={article.id} className="container-fluid">
                    <div className="row">
                            <div className="col col-md-9">
                                    <FeatureArticle article={article}/>
                            </div>
                            <div className="col col-md-3">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
            </div>
        )
    }*/


    render() {
        if (!this.state.isLoading){
            return (
                    <div className="container-fluid">
                    <div className="row">
                            <div className="col col-md-3 col-sm-2 col-xs-2">
                                    <div>stuff will be here at some point</div>
                            </div>
                            <div className="col col-md-6 col-sm-6 col-xs-2">
                                    <ArticleView article={this.state.articles[0]}/>
                            </div>
                            <div className="col col-md-3 col-sm-8">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                    <div className="row">
                            <div className="col col-md-9">
                                    <FeatureArticle article={this.state.articles[1]}/>
                            </div>
                            <div className="col col-md-3">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                    <div className="row">
                            <div className="col col-md-3 col-sm-2 col-xs-2">
                                    <div>stuff will be here at some point</div>
                            </div>
                            <div className="col col-md-6 col-sm-6 col-xs-2">
                                    <ArticleView article={this.state.articles[2]}/>
                            </div>
                            <div className="col col-md-3 col-sm-8">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                    <div className="row">
                            <div className="col col-md-9">
                                    <FeatureArticle article={this.state.articles[3]}/>
                            </div>
                            <div className="col col-md-3">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                     <div className="row">
                            <div className="col col-md-3 col-sm-2 col-xs-2">
                                    <div>stuff will be here at some point</div>
                            </div>
                            <div className="col col-md-6 col-sm-6 col-xs-2">
                                    <ArticleView article={this.state.articles[4]}/>
                            </div>
                            <div className="col col-md-3 col-sm-8">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                    <div className="row">
                            <div className="col col-md-9">
                                    <FeatureArticle article={this.state.articles[5]}/>
                            </div>
                            <div className="col col-md-3">
                                    <div>stuff will be here at some point</div>
                            </div>
                    </div>
                    </div>
            )
        }else {
            return(
                <div> Loading</div>
            )
        }
    }
}