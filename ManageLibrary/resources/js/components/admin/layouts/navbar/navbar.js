import React, { Component } from 'react';
import './navbar.css'

class navbar extends Component {
    render() {
        return (
            <div className="header">
                <nav className="nav">
                    <a href="#" className="logo"><img src="../img/logo.png"></img></a>
                    <ul className="nav_list">
                        <li><a className="nav_list_link active" href="#">HOME</a></li>
                        <li><a className="nav_list_link" href="#">BOOKS</a></li>
                        <li><a className="nav_list_link" href="#">LOGIN</a></li>
                        <li><a className="nav_list_link" href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        );
    }
}

export default navbar;