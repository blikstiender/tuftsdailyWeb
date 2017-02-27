import React, { Component } from 'react';
import { Link } from 'react-router';

export default class App extends Component {
    render() {
        return (
            <div>
                <h1> The Tufts Daily </h1>
                <h3> The independent student newspaper of Tufts University EST, 1980</h3>
                <Link to="/">Home</Link>
                <Link to="/news">News</Link>
                <Link to="/opinion">Opinion</Link>
                <Link to="/features">Features</Link>
                <Link to="/arts">Arts</Link>
                <Link to="/sports">Sports</Link>

                <Link to="/advertise">Advertise</Link>
                <Link to="/contact">Contact</Link>
                <Link to="/donate">Donate</Link>

                {this.props.children}
            </div>
        );
    }
}