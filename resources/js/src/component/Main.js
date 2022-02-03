import React from 'react';
import Header from "../layout/Header";
import {BrowserRouter as Router, Route, Routes} from "react-router-dom";
import Dashboard from "./Dashboard";
import Category from "./Category";
import About from "./About";


const Main = ( props ) => {
    console.log(props)
    return(
        <Router>
            <Header />
            <Routes>
                <Route path="/" component={Dashboard} />
                <Route path="/category" component={Category}  />
                <Route path="/about" component={About} />
            </Routes>
        </Router>

    )
}
export default Main;
