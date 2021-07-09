import React, { Component } from 'react'
import './slider.css'

class slider extends Component {
    constructor(props) {
        super(props);
        this.state = {
            curIndex : 0
        }
    }
    
    slides = [
        {
            src : '../img/slidebook1.jpg',
            text: 'Our Library is Digital'
        },
        {
            src : '../img/slidebook2.jpg',
            text: 'My Library'
        },
        {
            src : '../img/slidebook3.jpg',
            text: 'New World'
        },
    ]

    currentSlide = () => {
        return this.slides[this.curIndex];
    }
    nextSlides = () => {
        let newCurIndex;
        newCurIndex = this.state.curIndex + 1;
        if(this.state.curIndex >= this.slides.length-1) {
            newCurIndex = 0;
        }
        this.setState({curIndex:newCurIndex})
    }

    prevSlides = () => {
        let newCurIndex;
        newCurIndex = this.state.curIndex - 1;
        if(this.state.curIndex <= 0) {
            newCurIndex = this.slides.length-1;
        }
        this.setState({curIndex:newCurIndex})
    }

    render() {
        return (
            <div className="slider">
                {
                    this.slides.map((slide,index) => {
                        return ( <div key= {index} className={`mySlides fade ${this.state.curIndex===index ? 'active' : ''}`}>
                                    <img src= {slide.src} alt="book"></img>
                                    <div className="text">
                                        <p> {slide.text} </p>
                                    </div>
                                </div>
                        );
                    })
                }
                <a className="prev" onClick={ this.prevSlides }>&#10094;</a>
                <a className="next" onClick={ this.nextSlides }>&#10095;</a>
            </div>
        );
    }
}

export default slider;