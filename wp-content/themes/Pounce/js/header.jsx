import React, { Component } from 'react';
import { Link } from 'react-router';



/* presentational component to build the shuttle info section */
class ShuttleInfo extends Component {
    render() {
        return (
            <div className="shuttle-row">
                <hr className="bar-horizontal"/>
                <div className="shuttle-info">Davis X min CC Y min</div>
                <hr className="bar-horizontal"/>
            </div>
        );
    }
}


/* presentational component to hold the navbar */ 
class Nav extends Component {
    render() {
        return (
            <div className="nav-bar">
                <div className="nav-bar">
                    <Link className={"link", "nav-element"} to="/">Home</Link>
                    <Link className="nav-element" to="/news">News</Link>
                    <Link className="nav-element" to="/opinion">Opinion</Link>
                    <Link className="nav-element" to="/features">Features</Link>
                    <Link className="nav-element" to="/arts">Arts</Link>
                    <Link className="nav-element" to="/sports">Sports</Link>
                </div>

                <div className="nav-bar-right">
                    <Link className="nav-element-right" to="/advertise">Advertise</Link>
                    <Link className="nav-element-right" to="/contact">Contact</Link>
                    <Link className="nav-element-right" to="/donate">Donate</Link>
                </div>
            </div>
        );
    }
};


export default class Header extends Component {
    render() {
        return (
            <div>
                <div className="page-title"> The Tufts Daily </div>
                <div className="subpage-title"> The independent student newspaper of Tufts University EST, 1980</div>
                <ShuttleInfo />
                <Nav />
            </div>
        );
    }
};