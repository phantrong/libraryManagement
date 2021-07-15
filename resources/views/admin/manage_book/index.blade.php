@extends('admin.layouts.default')

@section('title', 'ManageBook')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.book.css') }}" type="text/css">
@endsection

@section('content')
<div class="addbook__content">
            <section class="addbook__content-header col-md-12 col-xl-12">
                <div class="addbook__content-header-box">
                    <h1 class="addbook__content-header-box-ct">Add Book</h1>
                    <span>Home|addbook</span>
                </div>
            </section>
            
            <section class="addbook__content-content">
                <div class="addbook__content-content-header">

                </div>

                <div class="addbook__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
                    <div class="row">

                        <div class="col-md-3  col-xl-3 col-sm-12 col-12 maincontainer__thethird-col3">
                            <div class="maincontainer__thethird-col3-boxct">
                                <div class="maincontainer__thethird-choosepicture">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8uZmGLYC1EDdxJKt6RRft6haNwkcIFGIohw&usqp=CAU"/>
                                </div>
    
                                <div class="maincontainer__thethird-choosepicture-button">
                                    <div class="input-group input-group-lg maincontainer__thethird-choosepicture-button-box">
                                        <div >
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Puslisher</span>
                                        </div>
                                        <input type="file"  aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-12 col-12 col-md-9  col-xl-9  maincontainer__thethird-col8">
                            <div class="row no-gutters">
                                <div class="col-sm-12 col-12 col-md-6  col-xl-6  maincontainer__thethird-ISBN">
                                    <div class="input-group mb-3 maincontainer__thethird-ISBN-input">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        <button type="button" class="btn btn-dark">Search</button>
                                    </div>
                                      
                                </div>
                                <div class="col-sm-12 col-12 col-md-6  col-xl-6  maincontainer__thethird-category">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
                                      </div>
                                    <select class="maincontainer__thethird-category-select">
                                        <option selected>Select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-sm-12 col-12 col-md-12 col-xl-12 ">
                                    <div class="input-group input-group-lg aoaoao">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Book Tiltle *</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row no-gutters">
                                <div class="col-sm-12 col-12 col-md-6  col-xl-6 ">
                                    <div class="input-group input-group-lg maincontainer__thethird-auther">
                                        <div class="grid">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Authers</span>
                                        </div>
                                        <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                      </div>
                                </div>
                                <div class="col-sm-12 col-12 col-md-6  col-xl-6 ">
                                    <div class="input-group input-group-lg maincontainer__thethird-puslish">
                                        <div class="grid">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Puslisher</span>
                                        </div>
                                        <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class=" col-sm-12 col-12 col-md-12 col-xl-12">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Preview Url</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class=" col-sm-12 col-12 col-md-12 col-xl-12">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Upload Pdf</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class=" col-sm-12 col-12 col-md-12 col-xl-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class=" col-sm-12 col-12 col-md-12 col-xl-12">
                                    <div class="input-group input-group-lg maincontainer__thethird-puslish">
                                        <div class="grid">
                                          <span class="input-group-text" id="inputGroup-sizing-lg">Tag</span>
                                        </div>
                                        <input type="text"  aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

            </section>
        </div>
@endsection

@section('script')
    <script src="{{ asset('js/manage_book.js') }}"></script>
@endsection
