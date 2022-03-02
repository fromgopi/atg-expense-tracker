import React from 'react';
import {NavLink} from "react-router-dom";


const Header = () => {
    return(
        <nav className="header-wrapper">
            <div className="logo">
                <NavLink to="/" className="brand">ATG-Field-Expense Tracker</NavLink>
            </div>
            <div className="nav-wrapper">
                <div className="navigation">
                    <NavLink to="/" >Dashboard</NavLink>
                    <NavLink to="/about" >About</NavLink>
                    <NavLink to="/category" >Category</NavLink>
                </div>
            </div>
        </nav>
    )
}

export default Header;



