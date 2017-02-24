import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Router, Route, IndexRoute, browserHistory } from 'react-router';



import App from "./app";
import PageOne from "./pageOne";
import PageTwo from "./pageTwo";


let rootElement = document.getElementById('root');


var routes = (
<Router history={browserHistory}>
    <Route path="/" component={App}>
        <Route path="pageone" component={PageOne} />
        <Route path="pagetwo" component={PageTwo} />
    </Route>
</Router>
);
ReactDOM.render(routes ,root);