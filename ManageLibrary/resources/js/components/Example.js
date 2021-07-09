import React from 'react';
import ReactDOM from 'react-dom';
import NavBar from './admin/layouts/navbar/navbar'
import Slider from './admin/layouts/slider/slider'
import './Example.css'


function Example() {
    return (
        <div>
            <NavBar></NavBar>
            <Slider></Slider>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
