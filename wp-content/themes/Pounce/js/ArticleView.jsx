import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx'

var REQUEST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/162494";
var REQUEST_URL_2 = "https://tuftsdaily.com/wp-json/wp/v2/users/";
var REQUEST_MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/";

export default class BasicArticleList extends Component {
    constructor(props){
        super(props);
        this.state = {title: "Loading", excerpt: "", author: "", hasimage: false, image: ""};
    }

    componentDidMount () {
        this.fetchData();
    }

    fetchData () {
                this.setState({title: this.props.article.title.rendered, 
                               excerpt: this.props.article.excerpt.rendered, 
                               author_num: this.props.article.author
                });
                if(this.props.article.featured_media != 0){
                    REQUEST_MEDIA_URL = REQUEST_MEDIA_URL + this.props.article.featured_media
                    fetch(REQUEST_MEDIA_URL)
                        .then((response) => response.json())
                        .then((responseData) => {
                            this.setState({hasimage: true, image: responseData.media_details.sizes.medium.source_url})
                        })
                }
                REQUEST_URL_2 = REQUEST_URL_2 + this.state.author_num
            fetch(REQUEST_URL_2)
                .then((response) => response.json())
                .then((responseData) => {
                    this.setState({author: "By " + responseData.name})
                })
    }

    render() {
        if (this.state.hasimage == true) {
            return (
                <div className="main-article page_element">
                    <img className="pic-article" src={this.state.image} alt="Test image"/>
                    <div className="lead-title-article">{this.state.title}</div>
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col col-xs-5">
                                <hr className="article-divider"/>
                            </div>
                            <div className="col col-xs-2">
                                <div className="author">{this.state.author}</div>
                            </div>
                            <div className="col col-xs-5">
                                <hr className="article-divider"/>
                            </div>
                        </div>
                    </div>
                    <div className="main_page_article">{this.state.excerpt}</div>
                </div>
            );
        } else {
             return (
                <div className="main-article page_element">
                    <div className="lead-title-article">{this.state.title}</div>
                    <div className="container-fluid">
                        <div className="row">
                            <div className="col col-xs-5">
                                <hr className="article-divider"/>
                            </div>
                            <div className="col col-xs-2">
                                <div className="author">{this.state.author}</div>
                            </div>
                            <div className="col col-xs-5">
                                <hr className="article-divider"/>
                            </div>
                        </div>
                    </div>
                    <div className="main_page_article">{this.state.excerpt}</div>
                </div>
            );
        }
    }
}