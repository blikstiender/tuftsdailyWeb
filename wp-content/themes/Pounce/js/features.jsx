import React, { Component } from 'react';
import ArticleView from './ArticleView.jsx'
import OpinionsList from './OpinionsList.jsx'

export default class Features extends Component {
    constructor(props) {
        super(props);
        this.state = {articles: [], isLoading: true}
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData() {
        fetch("https://tuftsdaily.com/wp-json/wp/v2/posts?categories=38&per_page=20")
          .then((response) => response.json())
          .then((responseData) => {
            // this.setState() will cause the new data to be applied to the UI that is created by the `render` function below
            this.setState({ articles: responseData, isLoading: false});
          })
    }

    renderMain(article) {
        return (
            <div key={article.id} className="row">
                    <div className="col-md-3 col-sm-4">
                            <OpinionsList/>
                    </div>
                    <div className="col-md-6 col-sm-8">
                            <ArticleView article={article}/>
                    </div>
                    <div className="col-md-3">
                            <OpinionsList/>
                    </div>
            </div>
        )
    }

    render() {
        return (
                <div className="container-fluid">
                    {this.state.articles.map(this.renderMain)}
                </div>
        );
    }
}