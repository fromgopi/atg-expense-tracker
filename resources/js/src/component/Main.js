import React from 'react';
import Header from "../layout/Header";
import {BrowserRouter as Router, Route, Routes} from "react-router-dom";
import Dashboard from "./Dashboard";
import Category from "./Category";
import About from "./About";
import NotFound from "./NotFound";


const Main = ( props ) => {
    console.log(props)
    return(
        <Router>
            <Header />
            <Routes>
                <Route path="*" element={<NotFound />}/>
                <Route path="/" element={<Dashboard/> } />
                <Route path="/category" element={<Category />}  />
                <Route path="/about" element={<About />} />
            </Routes>
        </Router>

    )
}
export default Main;




