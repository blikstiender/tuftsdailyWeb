import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx';

var POST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/"
var AUTHOR_URL = "https://tuftsdaily.com/wp-json/wp/v2/users/"
var MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/"

export default class fullArticle extends Component {
    constructor(props) {
        super(props);
        this.state = {title: "", content: "", author: "", date_gmt:"", hasimage: false, image: ""};
    }

    componentDidMount() {
        this.fetchData();
    }

    fetchData() {
        var url = POST_URL + this.props.params.articleID

        fetch(url)
            .then((response) => response.json())
            .then((responseData) => {
                this.setState({title: responseData.title.rendered, 
                               content: responseData.content.rendered, 
                               author_id: responseData.author
                });
                if(responseData.featured_media != 0){
                    MEDIA_URL = MEDIA_URL + responseData.featured_media
                    fetch(MEDIA_URL)
                        .then((response) => response.json())
                        .then((responseData) => {
                            this.setState({hasimage: true, image: responseData.media_details.sizes.medium.source_url})
                        })
                }
                AUTHOR_URL = AUTHOR_URL + this.state.author_id
            fetch(AUTHOR_URL)
                .then((response) => response.json())
                .then((responseData) => {
                    this.setState({author: responseData.name,
                                    link: responseData.link})
                })
            })
            AUTHOR_URL = "https://tuftsdaily.com/wp-json/wp/v2/users/"
            MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/"
  }

    render() {
        return (
            <div className="main-article">
                <div className="article-header"> 
                    <div className="row">
                        <div className="col col-sm-8">
                            <img className="pic-article" src={this.state.image} alt="article image" width="600" height="400"/>
                        </div>
                        <div className="col col-sm-4">
                            <div className="lead-title-article"> {this.state.title} </div>
                            <hr className="aricle-divider"/>
                            <div className="author"> {this.state.author} </div>
                            <div className="date-gmt"> {this.state.date_gmt} </div>
                            <hr className="aricle-divider"/>
                            <div className="media-caption"> {this.state.caption}</div>
                        </div>
                    </div>
                </div>

              <div className="container-fluid">
                    <div className="main_page_article" dangerouslySetInnerHTML={{__html: this.state.content}}></div>
                    <hr className="aricle-divider"/>
                    <div className="related-articles"> related articles </div>
                    <div className="footer"> footer icons </div>
                </div>
            </div>
        );
    }
}