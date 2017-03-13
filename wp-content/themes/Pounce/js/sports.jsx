import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx';
import Article from './article.jsx';

var POST_URL = "https://tuftsdaily.com/wp-json/wp/v2/posts/163318"
var AUTHOR_URL = "https://tuftsdaily.com/wp-json/wp/v2/users/"
var MEDIA_URL = "https://tuftsdaily.com/wp-json/wp/v2/media/"

export default class Sports extends Component {
    

    render() {
        return (
            <Article />
        );
    }
}