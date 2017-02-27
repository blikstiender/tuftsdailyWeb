import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Router, Route, IndexRoute, browserHistory } from 'react-router';



import App from "./app";
import News from "./news";
import Opinion from "./opinion";
import Features from "./features";
import Arts from "./arts";
import Sports from "./sports";
import Advertise from "./advertise";
import Contact from "./contact";
import Donate from "./donate";

let rootElement = document.getElementById('root');


var routes = (
<Router history={browserHistory}>
    <Route path="/" component={App}>
        <Route path="news" component={News} />
        <Route path="opinion" component={Opinion} />
        <Route path="features" component={Features} />
        <Route path="arts" component={Arts} />
        <Route path="sports" component={Sports} />
        <Route path="advertise" component={Advertise} />
        <Route path="contact" component={Contact} />
        <Route path="donate" component={Donate} />
    </Route>
</Router>
);
ReactDOM.render(routes ,root);