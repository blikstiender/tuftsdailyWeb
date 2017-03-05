import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx';

var POST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/163318"
var AUTHOR_URL = "https://tuftsdaily.com/wp-json/wp/v2/users/4447"
var MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/163357"

export default class ArticleView extends Component {
	constructor(props) {
	    super(props);
	    this.state = {title: "", content: "", author: "", date_gmt:"", hasimage: false, image: ""};
	}

	componentDidMount() {
	    this.fetchData();
	}

	fetchData() {
 		fetch(POST_URL)
 			.then((response) => response.json())
 			.then((responseData) => {
                this.setState({title: responseData.title.rendered, 
                               content: responseData.content.rendered, 
                               author_n: responseData.author
                });
                if(responseData.featured_media != 0){
                    MEDIA_URL = MEDIA_URL + responseData.featured_media
                    fetch(MEDIA_URL)
                        .then((response) => response.json())
                        .then((responseData) => {
                            this.setState({hasimage: true, image: responseData.media_details.sizes.medium.source_url})
                        })
                }
                AUTHOR_URL = AUTHOR_URL + this.state.author_n
	 		fetch(AUTHOR_URL)
	 			.then((response) => response.json())
	            .then((responseData) => {
	                this.setState({author: "By " + responseData.name,
	                				link: responseData.link})
	            })
	        })
  }

    render() {
        return (
        	<div className="main-article">
        	    <img className="pic-article" src={this.state.image} alt="article image"/>
            	<div className="lead-title-article"> {this.state.title} </div>
            	<div className="container-fluid">
	            	<div className="author"> {this.state.author} </div>
    	        	<div className="date-gmt"> {this.state.date_gmt} </div>
        	   		<div className="media-caption"> {this.state.caption}</div>
            		<div className="article-body"> {this.state.content} </div>
            		<hr className="aricle-divider"/>
           			<div className="related-articles"> related articles </div>
            		<div className="footer"> footer icons </div>
            	</div>
            </div>
        );
    }
}