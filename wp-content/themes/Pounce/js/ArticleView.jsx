import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx'

var REQUEST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/";
var REQUEST_URL_2 = "https://tuftsdaily.com/wp-json/wp/v2/users/";
var REQUEST_MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/";

export default class BasicArticleList extends Component {
    constructor(props){
        super(props);
        this.state = {title: "Loading", excerpt: "", hasimage: false, image: "", articleID: 0, author: ""};
    }

    componentDidMount () {
        this.fetchData();
        this.isCartoon();
    }

    fetchData () {
                this.setState({title: this.props.article.title.rendered, 
                               excerpt: this.props.article.excerpt.rendered, 
                               articleID: this.props.article.id
                });
                if(this.props.article.featured_media != 0){
                    REQUEST_MEDIA_URL = REQUEST_MEDIA_URL + this.props.article.featured_media
                    fetch(REQUEST_MEDIA_URL)
                        .then((response) => response.json())
                        .then((responseData) => {
                            this.setState({hasimage: true, image: responseData.media_details.sizes.medium.source_url})
                        })
                }
                REQUEST_URL_2 = REQUEST_URL_2 + this.props.article.author
            fetch(REQUEST_URL_2)
                .then((response) => response.json())
                .then((responseData) => {
                    this.setState({author: "By " + responseData.name})
                })

            REQUEST_URL_2 = "https://tuftsdaily.com/wp-json/wp/v2/users/";
            REQUEST_MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/";
    }

    isCartoon() {
      var codeLine = this.state.title
      var firstWord = codeLine.substr(0, codeLine.indexOf(" "));
      if (firstWord == 'Cartoon:') {
        var expression = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g;
        var expression2 =/........(?:png|jpg)/g;
        var url = this.props.article.content.rendered.match(expression)[1];
        var width = this.props.article.content.rendered.match(expression2)[0].slice(0,3);
        var height = this.props.article.content.rendered.match(expression2)[0].slice(4,7);
        this.setState({cartoonURL: url, isCartoon: true, cartoonWidth: width, cartoonHeight: height });
      }
    }

    render() {
        if (this.state.hasimage == true) {
            return (
                <div key={this.state.articleID} className="page_element">
                    <Link to={`/article/${this.props.article.id}`} className="main-article">
                        <img className="pic-article" src={this.state.image} alt="Test image"/>
                        <div className="lead-title-article" dangerouslySetInnerHTML={{__html: this.state.title}}></div>
                        <div className="author-main">{this.state.author}</div>
                        <div className="main_page_article" dangerouslySetInnerHTML={{__html: this.state.excerpt}}></div>
                    </Link>
                </div>
            );
        } else if (this.state.isCartoon) {
            return (
                <div key={this.state.articleID} className="page_element">
                    <Link to={`/article/${this.props.article.id}`} className="main-article">
                        <img className="pic-article-side" src={this.state.cartoonURL} alt="cartoon"/>
                        <div className="lead-title-article" dangerouslySetInnerHTML={{__html: this.state.title}}></div>
                        <div className="author-main">{this.state.author}</div>
                        <div className="main_page_article" dangerouslySetInnerHTML={{__html: this.state.excerpt}}></div>
                    </Link>
                </div>
            );
        } else {
             return (
                <div key={this.state.articleID} className="page_element">
                    <Link to={`/article/${this.props.article.id}`} className="main-article">
                        <div className="lead-title-article">{this.state.title}</div>
                        <div className="author-main">{this.state.author}</div>
                        <div className="main_page_article" dangerouslySetInnerHTML={{__html: this.state.excerpt}}></div>
                    </Link>
                </div>
            );
        }
    }
}