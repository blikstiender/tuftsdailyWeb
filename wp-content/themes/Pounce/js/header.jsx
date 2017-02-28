import React, { Component } from 'react';
import { Link } from 'react-router';

export default class Header extends Component {
    render() {
        return (
            <div>
                <div className="PageTitle"> The Tufts Daily </div>
                <div className="SubPageTitle"> The independent student newspaper of Tufts University EST, 1980</div>
                <div className="JoeyRow">
                    <hr className="HorizontalBar"/>
                    <div className="JoeyInfo">Davis X min CC Y min</div>
                    <hr className="HorizontalBar"/>
                </div>
                <div className="NavBar">
                    <div className="NavigationBar">
                        <Link className={"Link", "NavigationElement"} to="/">Home</Link>
                        <Link className="NavigationElement" to="/news">News</Link>
                        <Link className="NavigationElement" to="/opinion">Opinion</Link>
                        <Link className="NavigationElement" to="/features">Features</Link>
                        <Link className="NavigationElement" to="/arts">Arts</Link>
                        <Link className="NavigationElement" to="/sports">Sports</Link>
                    </div>

                    <div className="NavigationRightBar">
                        <Link className="NavigationRightElement" to="/advertise">Advertise</Link>
                        <Link className="NavigationRightElement" to="/contact">Contact</Link>
                        <Link className="NavigationRightElement" to="/donate">Donate</Link>
                    </div>
                </div>
            </div>
        );
    }
}
