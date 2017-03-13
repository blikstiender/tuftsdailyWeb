import React, { Component } from 'react';
import { Link } from 'react-router';
import Header from './header.jsx'
import ArticleView from './ArticleView.jsx'
import FeatureArtcile from './FeatureArticle.jsx'

export default class App extends Component {
    render() {
        return (
            <div>
                <Header/>

                {this.props.children}

            </div>
        );
    }
}