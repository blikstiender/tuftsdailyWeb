import React, { Component } from 'react'
import HeadlineArticle from './HeadlineArticle.jsx'
import FirstArticleCard from './FirstArticleCard.jsx'


export default class OpinionsList extends Component {
    constructor(props) {
        super(props);
        this.state = {articles: [], isLoading: true}
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData() {
        fetch('https://tuftsdaily.com/wp-json/wp/v2/posts?categories=24&per_page=5')
          .then((response) => response.json())
          .then((responseData) => {
            // this.setState() will cause the new data to be applied to the UI that is created by the `render` function below
            this.setState({ articles: responseData, isLoading: false});
          })
    }

    render() {
        if (this.state.isLoading){
          return (
                  <div>
                  </div>
          );
        }else {
          return (
                  <div className="page_element">
                      <FirstArticleCard article={this.state.articles[0]}/>
                      <HeadlineArticle article={this.state.articles[1]}/>
                      <HeadlineArticle article={this.state.articles[2]} />
                      <HeadlineArticle article={this.state.articles[3]} />
                  </div>
          );
        }
    }
}
