import React, { Component } from 'react';
import { Link } from 'react-router';

export default class ArticleView extends Component {
    render() {
        return (
            <div className="Header">
                <div className="Title"> Title </div>
                <div className="Author"> Author </Link>
                <div className="Date"> Date </div>
                <div className="Caption"> photo caption </div>

            <div className="body"> TEXT </div>
            
            <hr className="bar-horizontal"/>
            
            <div className="Related"> Related articles </div>

            <div className="Footer">

            </div>

        );
    }
}
