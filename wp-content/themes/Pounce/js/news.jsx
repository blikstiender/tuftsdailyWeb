import React, { Component } from 'react';
import ArticleView from './ArticleView.jsx';

export default class News extends Component {
    constructor(props) {
        super(props);
        this.state = {articles: [], isLoading: true}
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData() {
        fetch("https://tuftsdaily.com/wp-json/wp/v2/posts?categories=36&per_page=20")
          .then((response) => response.json())
          .then((responseData) => {
            // this.setState() will cause the new data to be applied to the UI that is created by the `render` function below
            this.setState({ articles: responseData, isLoading: false});
          })
    }

    renderMain(article) {
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

    render() {
        return (
                <div>
                    {this.state.articles.map(this.renderMain)}
                </div>
        );
    }
}