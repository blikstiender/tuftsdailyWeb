import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx'

var REQUEST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/";
var REQUEST_URL_2 = "https://tuftsdaily.com/wp-json/wp/v2/users/";
var REQUEST_MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/";

export default class FeatureArticle extends Component {
    constructor(props){
        super(props);
        this.state = {title: "Loading", excerpt: "", hasimage: false, image: "", articleID: 0, author: ""};
    }    

    componentDidMount () {
        this.fetchData();
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

    render() {
        if (this.state.hasimage == true) {
            return (
                <div key={this.state.articleID} className="page_element">
                <Link to={`/article/${this.props.article.id}`} className="main-article">
                    <div className="feature-article page_element">
                        <div className="container-fluid">
                            <div className="row">
                                <div className="col col-md-4">
                                    <div className="lead-title-article">{this.state.title}</div>
                                    <div className="author">{this.state.author}</div>
                                    <div className="main_page_article">{this.state.excerpt}</div>
                                </div>
                                <div className="col col-md-8">
                                    <img className="pic-article" src={this.state.image} alt="Test image"/>
                                </div>
                            </div>
                        </div>        
                    </div>
                </Link>
                </div>
            );
        } else {
            return (
                <div key={this.state.articleID} className="page_element">
                <Link to={`/article/${this.props.article.id}`} className="main-article">
                <div className="feature-article page_element">
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col col-md-4">
                                <div className="lead-title-article">{this.state.title}</div>
                                <div className="author">{this.state.author}</div>
                            </div>
                            <div className="col col-md-8">
                                <div className="main_page_article">{this.state.excerpt}</div>
                            </div>
                        </div>
                    </div>        
                </div>
                </Link>
                </div>
            );
        }
    }
}