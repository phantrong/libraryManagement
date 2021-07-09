import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="grid grid2">
        
            {/* <div className="row1 addbook"> */}
                {/* <input id="ao" className="aoao" type="checkbox"></input> */}
                {/* <input id="ao1" className="aoao1" type="checkbox"></input> */}
                <div className="pew1">
                    
                    
                    <div className="toolbar">
                        <div className="toolbar-namelibrary">
                            <img src="https://library-management.com/uploads/satellite.png"/>
                            <span className="shadows">Lib Mng</span>
                        </div>

                        <div className="toolbar__profile">
                            <div className="toolbar__profile-box">
                                <img src="https://library-management.com/uploads/default.png"/>
                                <div className="shadows">
                                    <p >quan tri vien</p>
                                    <p >quan tri vien cap cap</p>
                                </div>
                            </div>
                        </div>

                        <div className="toolbar__catagory">
                            <ul className="toolbar__catagory-list">
                                <li className="toolbar__catagory-item">
                                    <a href="" className="toolbar__catagory-link">
                                        <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                            
                                        <p className="shadows">Dashboard</p>
                                    </a>
                                </li>
                                <li className="toolbar__catagory-item">
                                    <a href="" className="toolbar__catagory-link">
                                    <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                            
                                        <p className="shadows">Receipts</p>
                                    </a>
                                </li>
                                <li className="toolbar__catagory-item">
                                    <a href="" className="toolbar__catagory-link">
                                    <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                            
                                        <p className="shadows">Manage notes</p>
                                    </a>
                                </li>
                                <li className="toolbar__catagory-item">
                                    <a href="" className="toolbar__catagory-link">
                                    <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                           
                                        <p className="shadows">Manage setting</p>
                                    </a>
                                </li>
                                <li className="toolbar__catagory-item">
                                    <a href="" className="toolbar__catagory-link">
                                    <img src="https://img.icons8.com/dotty/80/000000/chess-clock.png"/>                                          
                                        <p className="shadows">Manage user</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                
                <div className="pew">
                    <div className="maincontainer">
                        <div className="grid maincontainer1">
                            <div className="row1">
                                <div className="col-12 maincontainer__thefirt">
                                    <label for="ao">
                                        <img src="https://img.icons8.com/dotty/50/000000/line-style.png"/>
                                    </label>
                                    
                                    
                                    <div className="maincontainer__profile">
                                        <img src="https://img.icons8.com/material-outlined/24/000000/circled-chevron-down.png"/>
                                        <div className="maincontainer__profile-box">
                                            <ul className="maincontainer__profile-box-list">
                                                <li className="maincontainer__profile-box-item"><img src="https://img.icons8.com/glyph-neue/25/000000/down-right.png"/>View Home</li>
                                                <li className="maincontainer__profile-box-item"><img src="https://img.icons8.com/doodle/25/000000/user.png"/>Profile</li>
                                                <li className="maincontainer__profile-box-item"><img src="https://img.icons8.com/doodle/25/000000/delete-sign.png"/>Logout</li>
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>

                                <div className="col-12 maincontainer__thesecond">
                                    <h1>Add boook</h1>
                                    <span>Home/Page</span>
                                </div>
                            </div>

                            <div className="maincontainer__thethird">
                                <div className="row1 maincontainer__thethird-picturebox">
                                    <div className="c-3 maincontainer__thethird-col3">
                                        <div className="maincontainer__thethird-choosepicture">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8uZmGLYC1EDdxJKt6RRft6haNwkcIFGIohw&usqp=CAU"/>
                                        </div>

                                        <div className="maincontainer__thethird-choosepicture-button">
                                            <div className="input-group input-group-lg maincontainer__thethird-choosepicture-button-box">
                                                <div >
                                                <span className="input-group-text" id="inputGroup-sizing-lg">Puslisher</span>
                                                </div>
                                                <input type="file"  aria-label="Large" aria-describedby="inputGroup-sizing-sm"> </input>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div className="c-8 maincontainer__thethird-col8">
                                        <div className="row1">
                                            <div className="c-6 maincontainer__thethird-ISBN">
                                                <div className="input-group mb-3 maincontainer__thethird-ISBN-input">
                                                    <div className="input-group-prepend">
                                                    <span className="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                    </div>
                                                    <input type="text" className="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"> </input>
                                                </div>
                                                <button type="button" className="btn btn-dark">Search</button>
                                            </div>
                                            <div className="c-6 maincontainer__thethird-category">
                                                <div className="input-group-prepend">
                                                    <span className="input-group-text" id="inputGroup-sizing-default">Default</span>
                                                </div>
                                                <select className="maincontainer__thethird-category-select">
                                                    <option selected>Select</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div className="row1">
                                            <div className="c-12">
                                                <div className="input-group input-group-lg">
                                                    <div className="input-group-prepend">
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Book Tiltle</span>
                                                    </div>
                                                    <input type="text" className="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"> </input>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div className="row1">
                                            <div className="c-6">
                                                <div className="input-group input-group-lg maincontainer__thethird-auther">
                                                    <div >
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Authers</span>
                                                    </div>
                                                    <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm"></input>
                                                </div>
                                            </div>
                                            <div className="c-6">
                                                <div className="input-group input-group-lg maincontainer__thethird-puslish">
                                                    <div >
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Puslisher</span>
                                                    </div>
                                                    <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row1">
                                            <div className="c-12">
                                                <div className="input-group input-group-lg">
                                                    <div className="input-group-prepend">
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Book Tiltle</span>
                                                    </div>
                                                    <input type="text" className="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row1">
                                            <div className="c-12">
                                                <div className="input-group input-group-lg">
                                                    <div className="input-group-prepend">
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Book Tiltle</span>
                                                    </div>
                                                    <input type="text" className="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"></input>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row1">
                                            <div className="c-12">
                                                <div className="form-group">
                                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                                    <textarea className="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row1">
                                            <div className="c-12">
                                                <div className="input-group input-group-lg maincontainer__thethird-puslish">
                                                    <div >
                                                    <span className="input-group-text" id="inputGroup-sizing-lg">Puslisher</span>
                                                    </div>
                                                    <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm"></input>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
            {/* </div> */}
        </div>

    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
