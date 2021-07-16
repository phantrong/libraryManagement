@extends('admin.layouts.default')

@section('title', 'ManageBook')

@section('css')
    {{-- chèn thêm link css ở đây --}}
    <link rel="stylesheet" href="{{ asset('css/manage.list.book.css') }}" type="text/css">
@endsection

@section('content')
    <div class="listbook__content">
        <section class="listbook__content-header col-md-12 col-xl-12">
            <div class="listbook__content-header-box">
                <h1 class="listbook__content-header-box-ct">List Book</h1>
                <span>Home|listbook</span>
            </div>
        </section>

        <section class="listbook__content-content">
            <div class="listbook__content-content-header">
            </div>

            <div class="listbook__content-content-boxct col-md-12 col-xl-12 col-sm-12 col-12">
                
                <div class="content-shelf row">
        <div class="content-shelf-sidebar col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <ul class="sidebar-list">
                <li class="sidebar-item active">ALL BOOKS</li>
                <li class="sidebar-item">COMPUTER SCIENCE</li>
                <li class="sidebar-item">PHILOSOPHY & PSYCHOLOGY</li>
                <li class="sidebar-item">RELIGION</li>
                <li class="sidebar-item">SCIENCE</li>
                <li class="sidebar-item">TECHNOLOGY</li>
                <li class="sidebar-item">ARTS & RECREATION</li>
                <li class="sidebar-item">LITURATURE</li>
                <li class="sidebar-item">HISTORY & GEOGRAPHY</li>
                <li class="sidebar-item">BUSINESS</li>
            </ul>
        </div>
        <div class="content-shelf-main col-xl-9 col-lg-9 col-md-9 col-sm-12">
            <div class="book-filter row">
                <div class="book-filter-search col-xl-9 col-lg-9 col-md-8 col-sm-9">
                    <form action="" class="form-search">
                        <input type="text" class="book-search" placeholder="Tìm kiếm">
                    </form>
                </div>
                <div class="filter-sort-wrapper col-xl-3 col-lg-3 col-md-4 col-sm-3">
                    <div class="book-filter-sort">
                        <span class="book-sort-to">Sắp xếp</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="sort-icon bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <ul class="sort-by">
                            <li class="sort-by-name AtoZ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="sort-by-icon bi bi-sort-alpha-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z" />
                                    <path
                                        d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                </svg>
                                <span> Từ A tới Z </span>
                            </li>
                            <li class="sort-by-name ZtoA">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="sort-by-icon bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">>
                                    <path
                                        d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V7z" />
                                    >
                                    <path fill-rule="evenodd"
                                        d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371h-1.781zm1.57-.785L11 9.688h-.047l-.652 2.156h1.351z" />
                                    >
                                    <path
                                        d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z" />
                                </svg>
                                <span> Từ Z tới A</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="book-list row">
                
                <div class="book-wrapper col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="book-item">
                        <a href="/admin/book/edit" class="book-item-a">
                         <img src="https://img.icons8.com/bubbles/50/000000/edit.png"/>
                        </a>
                        <a href="" class="book-item-link">
                            <div class="book-img" style="background-image: url({{ asset('images/book1.jpg') }});"></div>
                            <h4 class="book-name">A short history of everything</h4>
                        </a>
                        <div class="book-item-author">
                            <span class="book-author-name">Author: Phan Đức Trung</span>

                        </div>
                        <div class="book-item-action">
                            <div class="book-rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </div>
                            <span class="book-sold">Còn hàng</span>
                        </div>
                    </div>
                </div>
                <div class="book-wrapper col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="book-item">
                        <a href="/admin/book/edit" class="book-item-a">
                         <img src="https://img.icons8.com/bubbles/50/000000/edit.png"/>
                        </a>
                        
                        <a href="" class="book-item-link">
                            <div class="book-img" style="background-image: url({{ asset('images/book1.jpg') }});"></div>
                            <h4 class="book-name">A short history of everything</h4>
                        </a>
                        <div class="book-item-author">
                            <span class="book-author-name">Author: Phan Đức Trung</span>

                        </div>
                        <div class="book-item-action">
                            <div class="book-rating">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon book-rating-icon-gold bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="book-rating-icon bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                            </div>
                            <span class="book-sold">Còn hàng</span>
                        </div>
                    </div>
                </div>
                
              
            </div>
            <button class="btn-read-more btn btn-primary">
                Xem thêm
            </button>
        </div>
    </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/manage_book.js') }}"></script>
@endsection
