import React, { Component } from 'react';
import { Link } from 'react-router';

export default class App extends Component {
    render() {
        return (
            <div>
                <Link to="/pageone">page 1</Link>
                <Link to="/pagetwo">page 2</Link>
                {this.props.children}
            </div>
        );
    }
}